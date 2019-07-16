<?php

namespace Mapbender\WmsBundle\Component;

use Doctrine\Common\Collections\Collection;
use FOM\UserBundle\Entity\Group;
use Mapbender\CoreBundle\Entity\SourceInstance;
use Mapbender\CoreBundle\Utils\EntityUtil;
use Mapbender\WmsBundle\Entity\WmsInstance;
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * VendorSpecificHandler class for handling of VendorSpecific.
 *
 * @author Paul Schmidt
 * @deprecated
 * @internal
 *
 * Only used by WmsInstanceEntityHandler
 */
class VendorSpecificHandler
{
    /**
     * Checks if a value is dynamic. A "dynamic value" begins and ends with a '$'. A value of a "dynamic value" is
     * a keyword for an method.
     * @param string $value a string value
     * @return boolean true if a value is dynamic.
     */
    public function isValueDynamic($value)
    {
        $length = strlen($value);
        return $length > 2 && strpos($value, '$', 0) === 0 && strpos($value, '$', $length - 2) === $length - 1;
    }

    /**
     * Checks if a value is dynamic. A "dynamic value" begins and ends with a '$'. A value of a "dynamic value" is
     * a keyword for an method.
     * @param string $value a string value
     * @return boolean true if a value is dynamic.
     */
    public function stripDynamic($value)
    {
        return str_replace('$', '', $value);
    }

    public function isValuePublic(VendorSpecific $vendorspec)
    {
        return $vendorspec->getVstype() === VendorSpecific::TYPE_VS_SIMPLE || !$vendorspec->getHidden();
    }

    /**
     * @param SourceInstance|WmsInstance $instance; NOTE: lax typing to avoid conflicts with WMTS
     * @param TokenInterface|null $userToken
     * @return string[]
     */
    public function getPublicParams(SourceInstance $instance, TokenInterface $userToken=null)
    {
        $user = $this->getUserFromToken($userToken);
        $params = array();
        foreach ($instance->getVendorspecifics() as $key => $vendorspec) {
            if ($this->isVendorSpecificValueValid($vendorspec) && $this->isValuePublic($vendorspec)) {
                $paramName = $vendorspec->getParameterName();
                $params[$paramName] = $this->getVendorSpecificValue($vendorspec, $user);
            }
        }
        return array_filter($params);
    }

    /**
     * @param SourceInstance|WmsInstance $instance; NOTE: lax typing to avoid conflicts with WMTS
     * @param TokenInterface|null $userToken
     * @return string[]
     */
    public function getHiddenParams(SourceInstance $instance, TokenInterface $userToken=null)
    {
        $user = $this->getUserFromToken($userToken);
        $params = array();
        foreach ($instance->getVendorspecifics() as $key => $vendorspec) {
            if ($this->isVendorSpecificValueValid($vendorspec) && !$this->isValuePublic($vendorspec)) {
                $paramName = $vendorspec->getParameterName();
                $params[$paramName] = $this->getVendorSpecificValue($vendorspec, $user);
            }
        }
        return array_filter($params);
    }

    /**
     * @param SourceInstance|WmsInstance $instance; NOTE: lax typing to avoid conflicts with WMTS
     * @param TokenInterface|null $userToken
     * @return string[]
     */
    public function getAllParams(SourceInstance $instance, TokenInterface $userToken=null)
    {
        $user = $this->getUserFromToken($userToken);
        $params = array();
        foreach ($instance->getVendorspecifics() as $key => $vendorspec) {
            if ($this->isVendorSpecificValueValid($vendorspec)) {
                $paramName = $vendorspec->getParameterName();
                $params[$paramName] = $this->getVendorSpecificValue($vendorspec, $user);
            }
        }
        return array_filter($params);
    }

    /**
     * Shortcut method equivalent to !!getHiddenParams($instance, <any token>), without requiring the token.
     * @param SourceInstance|WmsInstance $instance; NOTE: lax typing to avoid conflicts with WMTS
     * @return bool
     */
    public function hasHiddenParams(SourceInstance $instance)
    {
        foreach ($instance->getVendorspecifics() as $key => $vendorspec) {
            if ($this->isVendorSpecificValueValid($vendorspec) && !$this->isValuePublic($vendorspec)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param TokenInterface $userToken
     * @return UserInterface|null
     */
    protected function getUserFromToken(TokenInterface $userToken=null)
    {
        if (!$userToken || $userToken instanceof AnonymousToken) {
            return null;
        } else {
            $user = $userToken->getUser();
            if ($user && $user instanceof UserInterface) {
                return $user;
            } else {
                return null;
            }
        }
    }

    /**
     * Returns the constant parameter value, or resolves a dynamically referenced value from the given object.
     * Dynamic references occur in the form '$id$' or '$groups$' and operate on FOM User entities.
     * Only for '$groups$': Returns the concatenated group ids from rom User->getGroups(), separated by comma.
     * Dynamic references on an empty $object return null.
     *
     * @param VendorSpecific $vs
     * @param UserInterface|null $object
     * @return string|null
     */
    public function getVendorSpecificValue(VendorSpecific $vs, $object)
    {
        $value = $vs->getDefault();
        if ($this->isValueDynamic($value) && $vs->getVstype() !== VendorSpecific::TYPE_VS_SIMPLE) {
            return $this->extractDynamicReference($vs, $object, trim($value, '$'));
        } else {
            return $value ?: null;
        }
    }

    protected function extractDynamicReference(VendorSpecific $vs, $object, $attributeName)
    {
        if (!$object || !is_object($object)) {
            return null;
        }
        if ($vs->getVstype() === VendorSpecific::TYPE_VS_GROUP && !$object instanceof Group) {
            $values = array();
            if ($object instanceof \FOM\UserBundle\Entity\User) {
                $groups = $object->getGroups();
                foreach ($groups ?: array() as $fomGroup) {
                    $values[] = $this->extractDynamicReference($vs, $fomGroup, $attributeName);
                }
            }
            return implode(',', array_filter($values)) ?: null;
        }
        $attributeValue = EntityUtil::getValueFromGetter($object, $attributeName);
        // Special-case handling for getting the groups property from a User entity. We extract the ids and merge
        // them into a single string, comma-separated.
        // NOTE that this is different from a TYPE_VS_GROUP, where the property extracted from the group entities can be
        // configured freely.
        if (is_array($attributeValue) || $attributeValue instanceof Collection) {
            $groupIds = array();
            foreach ($attributeValue as $item) {
                if ($item instanceof Group) {
                    $groupIds[] = $item->getId();
                }
            }
            return implode(',', array_filter($groupIds)) ?: null;
        } else {
            return $attributeValue ?: null;
        }
    }

    public function isVendorSpecificValueValid(VendorSpecific $vs)
    {
        if ($vs->getDefault()) {
            return true;
        } else {
            return false;
        }
    }
}

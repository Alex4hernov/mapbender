<?php


namespace FOM\UserBundle\Component;


use FOM\UserBundle\Entity\User;
use FOM\UserBundle\Util\PasswordUtil;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Model\MutableAclProviderInterface;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserHelperService
{
    /** @var MutableAclProviderInterface */
    protected $aclProvider;
    /** @var EncoderFactoryInterface */
    protected $encoderFactory;
    /** @var mixed[] */
    protected $permissionsOnSelf;

    /**
     * UserHelperService constructor.
     * @param MutableAclProviderInterface $aclProvider
     * @param EncoderFactoryInterface $encoderFactory
     * @param mixed[] $permissionsOnSelf
     */
    public function __construct(MutableAclProviderInterface $aclProvider,
                                EncoderFactoryInterface $encoderFactory,
                                $permissionsOnSelf)
    {
        $this->aclProvider = $aclProvider;
        $this->encoderFactory = $encoderFactory;
        $this->permissionsOnSelf = $permissionsOnSelf;
    }

    /**
     * Set salt, encrypt password and set it on the user object
     *
     * @param User $user User object to manipulate
     * @param string $password Password to encrypt and store
     */
    public function setPassword(User $user, $password)
    {
        $encoder = $this->encoderFactory->getEncoder($user);

        $salt = PasswordUtil::generateSalt(15);

        $encryptedPassword = $encoder->encodePassword($password, $salt);

        $user
            ->setPassword($encryptedPassword)
            ->setSalt($salt)
        ;
    }

    /**
     * @param UserInterface $user
     * @param mixed[] $permissions
     */
    public function addPermissionsOnSelf(UserInterface $user, $permissions)
    {
        $maskBuilder = new MaskBuilder();

        $usid = UserSecurityIdentity::fromAccount($user);
        $uoid = ObjectIdentity::fromDomainObject($user);
        foreach ($permissions as $permission) {
            $maskBuilder->add($permission);
        }
        $umask = $maskBuilder->get();

        try {
            $acl = $this->aclProvider->findAcl($uoid);
        } catch(\Exception $e) {
            $acl = $this->aclProvider->createAcl($uoid);
        }
        $acl->insertObjectAce($usid, $umask);
        $this->aclProvider->updateAcl($acl);
    }

    /**
     * Gives a user the right to edit himself.
     * @param UserInterface $user
     */
    public function giveOwnRights(UserInterface $user)
    {
        $this->addPermissionsOnSelf($user, $this->permissionsOnSelf);
    }
}

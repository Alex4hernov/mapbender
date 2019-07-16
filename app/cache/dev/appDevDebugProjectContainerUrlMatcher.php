<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/css/9047f2f')) {
            // _assetic_9047f2f
            if ('/css/9047f2f.css' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9047f2f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9047f2f',);
            }

            if (0 === strpos($pathinfo, '/css/9047f2f_')) {
                // _assetic_9047f2f_0
                if ('/css/9047f2f_bootstrap.min_1.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9047f2f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9047f2f_0',);
                }

                // _assetic_9047f2f_1
                if ('/css/9047f2f_font-awesome.min_2.css' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9047f2f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_9047f2f_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // mapbender_start
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_mapbender_start;
            } else {
                return $this->redirect($rawPathinfo.'/', 'mapbender_start');
            }

            return array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\WelcomeController::listAction',  '_route' => 'mapbender_start',);
        }
        not_mapbender_start:

        if (0 === strpos($pathinfo, '/application')) {
            // mapbender_core_application_assets
            if (preg_match('#^/application/(?P<slug>[^/]++)/assets/(?P<type>js|css|trans)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_assets')), array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::assetsAction',));
            }

            // mapbender_core_application_element
            if (preg_match('#^/application/(?P<slug>[^/]++)/element(?:/(?P<id>[^/]++)(?:/(?P<action>.+))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_element')), array (  'id' => NULL,  'action' => NULL,  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::elementAction',));
            }

            // mapbender_core_application_application
            if (preg_match('#^/application/(?P<slug>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_application')), array (  '_format' => 'html',  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::applicationAction',));
            }

            // mapbender_core_application_configuration
            if (preg_match('#^/application/(?P<slug>[^/]++)/config$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_configuration')), array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::configurationAction',));
            }

            // mapbender_core_application_metadata
            if (preg_match('#^/application/(?P<slug>[^/]++)/metadata$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_metadata')), array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::metadataAction',));
            }

            // mapbender_core_application_instancetunnel
            if (preg_match('#^/application/(?P<slug>[^/]++)/instance/(?P<instanceId>[^/]++)/tunnel$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_instancetunnel')), array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::instanceTunnelAction',));
            }

            // mapbender_core_application_instancetunnellegend
            if (preg_match('#^/application/(?P<slug>[^/]++)/instance/(?P<instanceId>[^/]++)/tunnel/legend/(?P<layerId>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_instancetunnellegend')), array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::instanceTunnelLegendAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user/log')) {
            if (0 === strpos($pathinfo, '/user/login')) {
                // mapbender_core_login_login
                if ('/user/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_core_login_login;
                    }

                    return array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\LoginController::loginAction',  '_route' => 'mapbender_core_login_login',);
                }
                not_mapbender_core_login_login:

                // mapbender_core_login_logincheck
                if ('/user/login/check' === $pathinfo) {
                    return array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\LoginController::loginCheckAction',  '_route' => 'mapbender_core_login_logincheck',);
                }

            }

            // mapbender_core_login_logout
            if ('/user/logout' === $pathinfo) {
                return array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\LoginController::logoutAction',  '_route' => 'mapbender_core_login_logout',);
            }

        }

        // mapbender_core_welcome_list
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_mapbender_core_welcome_list;
            } else {
                return $this->redirect($rawPathinfo.'/', 'mapbender_core_welcome_list');
            }

            return array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\WelcomeController::listAction',  '_route' => 'mapbender_core_welcome_list',);
        }
        not_mapbender_core_welcome_list:

        if (0 === strpos($pathinfo, '/manager/application')) {
            // mapbender_manager_application_index
            if ('/manager/applications' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_index;
                }

                return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::indexAction',  '_route' => 'mapbender_manager_application_index',);
            }
            not_mapbender_manager_application_index:

            // mapbender_manager_application_new
            if ('/manager/application/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_new;
                }

                return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::newAction',  '_route' => 'mapbender_manager_application_new',);
            }
            not_mapbender_manager_application_new:

            // mapbender_manager_application_export
            if ('/manager/application/export' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_mapbender_manager_application_export;
                }

                return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::exportAction',  '_route' => 'mapbender_manager_application_export',);
            }
            not_mapbender_manager_application_export:

            // mapbender_manager_application_import
            if ('/manager/application/import' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_mapbender_manager_application_import;
                }

                return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::importAction',  '_route' => 'mapbender_manager_application_import',);
            }
            not_mapbender_manager_application_import:

            // mapbender_manager_application_copydirectly
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/copydirectly$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_copydirectly;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_copydirectly')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::copyDirectlyAction',));
            }
            not_mapbender_manager_application_copydirectly:

            // mapbender_manager_application_create
            if ('/manager/application' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_create;
                }

                return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::createAction',  '_route' => 'mapbender_manager_application_create',);
            }
            not_mapbender_manager_application_create:

            // mapbender_manager_application_edit
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_edit')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::editAction',));
            }
            not_mapbender_manager_application_edit:

            // mapbender_manager_application_update
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/update$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_update')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::updateAction',));
            }
            not_mapbender_manager_application_update:

            // mapbender_manager_application_togglestate
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/state$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_togglestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_togglestate')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::toggleStateAction',));
            }
            not_mapbender_manager_application_togglestate:

            // mapbender_manager_application_delete
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_delete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::deleteAction',));
            }
            not_mapbender_manager_application_delete:

            // mapbender_manager_application_newlayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/new$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_newlayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_newlayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::newLayersetAction',));
            }
            not_mapbender_manager_application_newlayerset:

            // mapbender_manager_application_editlayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_editlayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_editlayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::editLayersetAction',));
            }
            not_mapbender_manager_application_editlayerset:

            // mapbender_manager_application_savelayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/create$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_savelayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_savelayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::saveLayersetAction',));
            }
            not_mapbender_manager_application_savelayerset:

            // mapbender_manager_application_savelayerset_1
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/save$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_savelayerset_1;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_savelayerset_1')), array (  'layersetId' => NULL,  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::saveLayersetAction',));
            }
            not_mapbender_manager_application_savelayerset_1:

            // mapbender_manager_application_confirmdeletelayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_confirmdeletelayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_confirmdeletelayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::confirmDeleteLayersetAction',));
            }
            not_mapbender_manager_application_confirmdeletelayerset:

            // mapbender_manager_application_deletelayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_deletelayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_deletelayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::deleteLayersetAction',));
            }
            not_mapbender_manager_application_deletelayerset:

            // mapbender_manager_application_listsources
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/list$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_listsources;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_listsources')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::listSourcesAction',));
            }
            not_mapbender_manager_application_listsources:

            // mapbender_manager_application_addinstance
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/source/(?P<sourceId>[^/]++)/add$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_addinstance;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_addinstance')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::addInstanceAction',));
            }
            not_mapbender_manager_application_addinstance:

            // mapbender_manager_application_deleteinstance
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/instance/(?P<instanceId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_deleteinstance;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_deleteinstance')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::deleteInstanceAction',));
            }
            not_mapbender_manager_application_deleteinstance:

        }

        // mapbender_manager_application_list
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_mapbender_manager_application_list;
            } else {
                return $this->redirect($rawPathinfo.'/', 'mapbender_manager_application_list');
            }

            return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::listAction',  '_route' => 'mapbender_manager_application_list',);
        }
        not_mapbender_manager_application_list:

        if (0 === strpos($pathinfo, '/manager')) {
            if (0 === strpos($pathinfo, '/manager/application')) {
                // mapbender_manager_element_select
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/select$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mapbender_manager_element_select;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_select')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::selectAction',));
                }
                not_mapbender_manager_element_select:

                // mapbender_manager_element_new
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/new$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_element_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_new')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::newAction',));
                }
                not_mapbender_manager_element_new:

                // mapbender_manager_element_create
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/new$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_element_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_create')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::createAction',));
                }
                not_mapbender_manager_element_create:

                // mapbender_manager_element_edit
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_element_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_edit')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::editAction',));
                }
                not_mapbender_manager_element_edit:

                // mapbender_manager_element_update
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/(?P<id>\\d+)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_element_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_update')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::updateAction',));
                }
                not_mapbender_manager_element_update:

                // mapbender_manager_element_security
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/(?P<id>\\d+)/security$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mapbender_manager_element_security;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_security')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::securityAction',));
                }
                not_mapbender_manager_element_security:

                // mapbender_manager_element_delete
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_element_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_delete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::deleteAction',));
                }
                not_mapbender_manager_element_delete:

                if (0 === strpos($pathinfo, '/manager/application/element')) {
                    // mapbender_manager_element_weight
                    if (preg_match('#^/manager/application/element/(?P<id>[^/]++)/weight$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_element_weight;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_weight')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::weightAction',));
                    }
                    not_mapbender_manager_element_weight:

                    // mapbender_manager_element_enable
                    if (preg_match('#^/manager/application/element/(?P<id>[^/]++)/enable$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_element_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_enable')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::enableAction',));
                    }
                    not_mapbender_manager_element_enable:

                }

            }

            // mapbender_manager_index_index
            if ('/manager' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_mapbender_manager_index_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'mapbender_manager_index_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_index_index;
                }

                return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\IndexController::indexAction',  '_route' => 'mapbender_manager_index_index',);
            }
            not_mapbender_manager_index_index:

            if (0 === strpos($pathinfo, '/manager/repository')) {
                // mapbender_manager_repository_index
                if (preg_match('#^/manager/repository(?:/(?P<page>\\d+))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_repository_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_index')), array (  'page' => 1,  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::indexAction',));
                }
                not_mapbender_manager_repository_index:

                // mapbender_manager_repository_new
                if ('/manager/repository/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_repository_new;
                    }

                    return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::newAction',  '_route' => 'mapbender_manager_repository_new',);
                }
                not_mapbender_manager_repository_new:

                // mapbender_manager_repository_create
                if (0 === strpos($pathinfo, '/manager/repository/create') && preg_match('#^/manager/repository/create/(?P<managertype>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_repository_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_create')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::createAction',));
                }
                not_mapbender_manager_repository_create:

                if (0 === strpos($pathinfo, '/manager/repository/source')) {
                    // mapbender_manager_repository_view
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_manager_repository_view;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_view')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::viewAction',));
                    }
                    not_mapbender_manager_repository_view:

                    // mapbender_manager_repository_confirmdelete
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)/confirmdelete$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_manager_repository_confirmdelete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_confirmdelete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::confirmdeleteAction',));
                    }
                    not_mapbender_manager_repository_confirmdelete:

                    // mapbender_manager_repository_delete
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_repository_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_delete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::deleteAction',));
                    }
                    not_mapbender_manager_repository_delete:

                    // mapbender_manager_repository_updateform
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)/updateform$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_manager_repository_updateform;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_updateform')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::updateformAction',));
                    }
                    not_mapbender_manager_repository_updateform:

                    // mapbender_manager_repository_update
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)/update$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_repository_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_update')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::updateAction',));
                    }
                    not_mapbender_manager_repository_update:

                }

                if (0 === strpos($pathinfo, '/manager/repository/application')) {
                    // mapbender_manager_repository_instance
                    if (preg_match('#^/manager/repository/application/(?P<slug>[^/]++)/instance/(?P<instanceId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_instance')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::instanceAction',));
                    }

                    // mapbender_manager_repository_instanceweight
                    if (preg_match('#^/manager/repository/application/(?P<slug>[^/]++)/instance/(?P<layersetId>[^/]++)/weight/(?P<instanceId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_instanceweight')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::instanceWeightAction',));
                    }

                    // mapbender_manager_repository_instanceenabled
                    if (preg_match('#^/manager/repository/application/(?P<slug>[^/]++)/instance/(?P<layersetId>[^/]++)/enabled/(?P<instanceId>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_repository_instanceenabled;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_instanceenabled')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::instanceEnabledAction',));
                    }
                    not_mapbender_manager_repository_instanceenabled:

                    // mapbender_manager_repository_instancelayerweight
                    if (preg_match('#^/manager/repository/application/(?P<slug>[^/]++)/instanceLayer/(?P<instanceId>[^/]++)/weight/(?P<instLayerId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_instancelayerweight')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::instanceLayerWeightAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/manager/repository/wms')) {
                    // mapbender_wms_repository_new
                    if ('/manager/repository/wms/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_new;
                        }

                        return array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::newAction',  '_route' => 'mapbender_wms_repository_new',);
                    }
                    not_mapbender_wms_repository_new:

                    // mapbender_wms_repository_start
                    if ('/manager/repository/wms/start' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_start;
                        }

                        return array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::startAction',  '_route' => 'mapbender_wms_repository_start',);
                    }
                    not_mapbender_wms_repository_start:

                    // mapbender_wms_repository_view
                    if (preg_match('#^/manager/repository/wms(?P<wms>[^/]++)$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_view;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_view')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::viewAction',));
                    }
                    not_mapbender_wms_repository_view:

                    // mapbender_wms_repository_create
                    if ('/manager/repository/wms/create' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_wms_repository_create;
                        }

                        return array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::createAction',  '_route' => 'mapbender_wms_repository_create',);
                    }
                    not_mapbender_wms_repository_create:

                    // mapbender_wms_repository_updateform
                    if (preg_match('#^/manager/repository/wms/(?P<sourceId>[^/]++)/updateform$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_updateform')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::updateformAction',));
                    }

                    // mapbender_wms_repository_update
                    if (preg_match('#^/manager/repository/wms/(?P<sourceId>[^/]++)/update$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_update')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::updateAction',));
                    }

                    // mapbender_wms_repository_delete
                    if (preg_match('#^/manager/repository/wms/(?P<sourceId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_delete')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::deleteAction',));
                    }
                    not_mapbender_wms_repository_delete:

                    // mapbender_wms_repository_deleteinstance
                    if (preg_match('#^/manager/repository/wms/(?P<slug>[^/]++)/instance/(?P<instanceId>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_deleteinstance;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_deleteinstance')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::deleteInstanceAction',));
                    }
                    not_mapbender_wms_repository_deleteinstance:

                    // mapbender_wms_repository_instance
                    if (0 === strpos($pathinfo, '/manager/repository/wms/instance') && preg_match('#^/manager/repository/wms/instance/(?P<slug>[^/]++)/(?P<instanceId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_instance')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::instanceAction',));
                    }

                    // mapbender_wms_repository_instancelayerpriority
                    if (preg_match('#^/manager/repository/wms/(?P<slug>[^/]++)/instance/(?P<instanceId>[^/]++)/priority/(?P<instLayerId>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_instancelayerpriority')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::instanceLayerPriorityAction',));
                    }

                    // mapbender_wms_repository_instanceenabled
                    if (0 === strpos($pathinfo, '/manager/repository/wms/instance') && preg_match('#^/manager/repository/wms/instance/(?P<slug>[^/]++)/enabled/(?P<instanceId>[^/]++)$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_wms_repository_instanceenabled;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_instanceenabled')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::instanceEnabledAction',));
                    }
                    not_mapbender_wms_repository_instanceenabled:

                }

            }

        }

        // srs_autocomplete
        if ('/srs-autocomplete' === $pathinfo) {
            return array (  '_controller' => 'Mapbender\\CoordinatesUtilityBundle\\Controller\\CoordinatesUtilityController::srsAutocompleteAction',  '_route' => 'srs_autocomplete',);
        }

        if (0 === strpos($pathinfo, '/manager')) {
            if (0 === strpos($pathinfo, '/manager/acl')) {
                // fom_user_acl_index
                if ('/manager/acl' === $pathinfo) {
                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::indexAction',  '_route' => 'fom_user_acl_index',);
                }

                if (0 === strpos($pathinfo, '/manager/acl/edit')) {
                    // fom_user_acl_edit
                    if ('/manager/acl/edit' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_acl_edit;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::editAction',  '_route' => 'fom_user_acl_edit',);
                    }
                    not_fom_user_acl_edit:

                    // fom_user_acl_update
                    if ('/manager/acl/edit' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fom_user_acl_update;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::updateAction',  '_route' => 'fom_user_acl_update',);
                    }
                    not_fom_user_acl_update:

                }

                // fom_user_acl_overview
                if ('/manager/acl/overview' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_acl_overview;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::overviewAction',  '_route' => 'fom_user_acl_overview',);
                }
                not_fom_user_acl_overview:

                // fom_user_acl_aclsid
                if ('/manager/acl/sid' === $pathinfo) {
                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::aclsidAction',  '_route' => 'fom_user_acl_aclsid',);
                }

            }

            if (0 === strpos($pathinfo, '/manager/group')) {
                // fom_user_group_index
                if ('/manager/group' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_group_index;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::indexAction',  '_route' => 'fom_user_group_index',);
                }
                not_fom_user_group_index:

                // fom_user_group_new
                if ('/manager/group/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_group_new;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fom_user_group_new',);
                }
                not_fom_user_group_new:

                // fom_user_group_create
                if ('/manager/group' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_group_create;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'fom_user_group_create',);
                }
                not_fom_user_group_create:

                // fom_user_group_edit
                if (preg_match('#^/manager/group/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_group_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_group_edit')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::editAction',));
                }
                not_fom_user_group_edit:

                // fom_user_group_update
                if (preg_match('#^/manager/group/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_group_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_group_update')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::updateAction',));
                }
                not_fom_user_group_update:

                // fom_user_group_delete
                if (preg_match('#^/manager/group/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_group_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_group_delete')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::deleteAction',));
                }
                not_fom_user_group_delete:

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/password')) {
                // fom_user_password_send
                if ('/user/password/send' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_password_send;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::sendAction',  '_route' => 'fom_user_password_send',);
                }
                not_fom_user_password_send:

                // fom_user_password_form
                if ('/user/password' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_password_form;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::formAction',  '_route' => 'fom_user_password_form',);
                }
                not_fom_user_password_form:

                // fom_user_password_request
                if ('/user/password' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_password_request;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::requestAction',  '_route' => 'fom_user_password_request',);
                }
                not_fom_user_password_request:

            }

            if (0 === strpos($pathinfo, '/user/re')) {
                if (0 === strpos($pathinfo, '/user/reset')) {
                    // fom_user_password_tokenreset
                    if ('/user/reset/reset' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fom_user_password_tokenreset;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::tokenResetAction',  '_route' => 'fom_user_password_tokenreset',);
                    }
                    not_fom_user_password_tokenreset:

                    // fom_user_password_reset
                    if ('/user/reset' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_password_reset;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::resetAction',  '_route' => 'fom_user_password_reset',);
                    }
                    not_fom_user_password_reset:

                    // fom_user_password_password
                    if ('/user/reset' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fom_user_password_password;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::passwordAction',  '_route' => 'fom_user_password_password',);
                    }
                    not_fom_user_password_password:

                    // fom_user_password_done
                    if ('/user/reset/done' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_password_done;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::doneAction',  '_route' => 'fom_user_password_done',);
                    }
                    not_fom_user_password_done:

                }

                if (0 === strpos($pathinfo, '/user/registration')) {
                    // fom_user_registration_send
                    if ('/user/registration/send' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_registration_send;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::sendAction',  '_route' => 'fom_user_registration_send',);
                    }
                    not_fom_user_registration_send:

                    // fom_user_registration_form
                    if ('/user/registration' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_registration_form;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::formAction',  '_route' => 'fom_user_registration_form',);
                    }
                    not_fom_user_registration_form:

                    // fom_user_registration_register
                    if ('/user/registration' === $pathinfo) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fom_user_registration_register;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::register',  '_route' => 'fom_user_registration_register',);
                    }
                    not_fom_user_registration_register:

                }

            }

            // fom_user_registration_confirm
            if ('/user/activate' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fom_user_registration_confirm;
                }

                return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_route' => 'fom_user_registration_confirm',);
            }
            not_fom_user_registration_confirm:

            if (0 === strpos($pathinfo, '/user/registration')) {
                // fom_user_registration_reset
                if ('/user/registration/reset' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_registration_reset;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::reset',  '_route' => 'fom_user_registration_reset',);
                }
                not_fom_user_registration_reset:

                // fom_user_registration_done
                if ('/user/registration/done' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_registration_done;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::doneAction',  '_route' => 'fom_user_registration_done',);
                }
                not_fom_user_registration_done:

            }

        }

        if (0 === strpos($pathinfo, '/manager/user')) {
            // fom_user_user_index
            if ('/manager/user' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fom_user_user_index;
                }

                return array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'fom_user_user_index',);
            }
            not_fom_user_user_index:

            // fom_user_user_new
            if ('/manager/user/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fom_user_user_new;
                }

                return array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'fom_user_user_new',);
            }
            not_fom_user_user_new:

            // fom_user_user_create
            if ('/manager/user' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fom_user_user_create;
                }

                return array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'fom_user_user_create',);
            }
            not_fom_user_user_create:

            // fom_user_user_edit
            if (preg_match('#^/manager/user/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fom_user_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_user_edit')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::editAction',));
            }
            not_fom_user_user_edit:

            // fom_user_user_update
            if (preg_match('#^/manager/user/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fom_user_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_user_update')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_fom_user_user_update:

            // fom_user_user_delete
            if (preg_match('#^/manager/user/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fom_user_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_user_delete')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_fom_user_user_delete:

        }

        // owsproxy3_core_owsproxy_entrypoint
        if ('/owsproxy' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_owsproxy3_core_owsproxy_entrypoint;
            } else {
                return $this->redirect($rawPathinfo.'/', 'owsproxy3_core_owsproxy_entrypoint');
            }

            return array (  '_controller' => 'OwsProxy3\\CoreBundle\\Controller\\OwsProxyController::entryPointAction',  '_route' => 'owsproxy3_core_owsproxy_entrypoint',);
        }
        not_owsproxy3_core_owsproxy_entrypoint:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'app_layerset' => 'getAppLayersetService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter.sass' => 'getAssetic_Filter_SassService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data.source' => 'getData_SourceService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService',
            'doctrine.fixtures_load_command' => 'getDoctrine_FixturesLoadCommandService',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService',
            'doctrine_migrations.diff_command' => 'getDoctrineMigrations_DiffCommandService',
            'doctrine_migrations.execute_command' => 'getDoctrineMigrations_ExecuteCommandService',
            'doctrine_migrations.generate_command' => 'getDoctrineMigrations_GenerateCommandService',
            'doctrine_migrations.latest_command' => 'getDoctrineMigrations_LatestCommandService',
            'doctrine_migrations.migrate_command' => 'getDoctrineMigrations_MigrateCommandService',
            'doctrine_migrations.status_command' => 'getDoctrineMigrations_StatusCommandService',
            'doctrine_migrations.version_command' => 'getDoctrineMigrations_VersionCommandService',
            'event_dispatcher' => 'getEventDispatcherService',
            'features' => 'getFeaturesService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'fom.acl.manager' => 'getFom_Acl_ManagerService',
            'fom.identities.provider' => 'getFom_Identities_ProviderService',
            'fom.security.failed_login_listener' => 'getFom_Security_FailedLoginListenerService',
            'fom.security.user_profile_listener' => 'getFom_Security_UserProfileListenerService',
            'fom.user.subscriber' => 'getFom_User_SubscriberService',
            'fom.user_helper.service' => 'getFom_UserHelper_ServiceService',
            'fom_groups' => 'getFomGroupsService',
            'fom_roles' => 'getFomRolesService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.fom.ace' => 'getForm_Fom_AceService',
            'form.fom.acl' => 'getForm_Fom_AclService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.transformation_failure_handling' => 'getForm_TypeExtension_Form_TransformationFailureHandlingService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'get_set_method_normalizer' => 'getGetSetMethodNormalizerService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'layerset_instances' => 'getLayersetInstancesService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'mapbender' => 'getMapbenderService',
            'mapbender.application_asset.service' => 'getMapbender_ApplicationAsset_ServiceService',
            'mapbender.application_exporter.service' => 'getMapbender_ApplicationExporter_ServiceService',
            'mapbender.application_importer.service' => 'getMapbender_ApplicationImporter_ServiceService',
            'mapbender.asset_compiler.service' => 'getMapbender_AssetCompiler_ServiceService',
            'mapbender.assetic.filter.sass' => 'getMapbender_Assetic_Filter_SassService',
            'mapbender.command.migrations_install' => 'getMapbender_Command_MigrationsInstallService',
            'mapbender.constraint.html' => 'getMapbender_Constraint_HtmlService',
            'mapbender.constraint.twig' => 'getMapbender_Constraint_TwigService',
            'mapbender.element_factory.service' => 'getMapbender_ElementFactory_ServiceService',
            'mapbender.element_inventory.service' => 'getMapbender_ElementInventory_ServiceService',
            'mapbender.form_type.element.htmlelement' => 'getMapbender_FormType_Element_HtmlelementService',
            'mapbender.form_type.element.layertree.menuchoices' => 'getMapbender_FormType_Element_Layertree_MenuchoicesService',
            'mapbender.form_type.element.printclient' => 'getMapbender_FormType_Element_PrintclientService',
            'mapbender.form_type.html' => 'getMapbender_FormType_HtmlService',
            'mapbender.http_transport.service' => 'getMapbender_HttpTransport_ServiceService',
            'mapbender.imageexport.image_transport.service' => 'getMapbender_Imageexport_ImageTransport_ServiceService',
            'mapbender.imageexport.renderer.geojson' => 'getMapbender_Imageexport_Renderer_GeojsonService',
            'mapbender.imageexport.renderer.markers' => 'getMapbender_Imageexport_Renderer_MarkersService',
            'mapbender.imageexport.renderer.wms' => 'getMapbender_Imageexport_Renderer_WmsService',
            'mapbender.imageexport.service' => 'getMapbender_Imageexport_ServiceService',
            'mapbender.importer.source.wms.service' => 'getMapbender_Importer_Source_Wms_ServiceService',
            'mapbender.manager.element_form_factory.service' => 'getMapbender_Manager_ElementFormFactory_ServiceService',
            'mapbender.migration.configuration' => 'getMapbender_Migration_ConfigurationService',
            'mapbender.migration.finder' => 'getMapbender_Migration_FinderService',
            'mapbender.migration.output.writer' => 'getMapbender_Migration_Output_WriterService',
            'mapbender.presenter.application.cache' => 'getMapbender_Presenter_Application_CacheService',
            'mapbender.presenter.application.cache.backend' => 'getMapbender_Presenter_Application_Cache_BackendService',
            'mapbender.presenter.application.config.service' => 'getMapbender_Presenter_Application_Config_ServiceService',
            'mapbender.presenter.application.service' => 'getMapbender_Presenter_Application_ServiceService',
            'mapbender.print.legend_handler.service' => 'getMapbender_Print_LegendHandler_ServiceService',
            'mapbender.print.plugin.digitizer' => 'getMapbender_Print_Plugin_DigitizerService',
            'mapbender.print.plugin.queue' => 'getMapbender_Print_Plugin_QueueService',
            'mapbender.print.service' => 'getMapbender_Print_ServiceService',
            'mapbender.print.template_parser.service' => 'getMapbender_Print_TemplateParser_ServiceService',
            'mapbender.print_plugin_host.service' => 'getMapbender_PrintPluginHost_ServiceService',
            'mapbender.print_service_bridge.service' => 'getMapbender_PrintServiceBridge_ServiceService',
            'mapbender.source.instancetunnel.service' => 'getMapbender_Source_Instancetunnel_ServiceService',
            'mapbender.source.typedirectory.service' => 'getMapbender_Source_Typedirectory_ServiceService',
            'mapbender.source.url_processor.service' => 'getMapbender_Source_UrlProcessor_ServiceService',
            'mapbender.source.wms.service' => 'getMapbender_Source_Wms_ServiceService',
            'mapbender.sourceinstance.wms.form' => 'getMapbender_Sourceinstance_Wms_FormService',
            'mapbender.symlink_installer' => 'getMapbender_SymlinkInstallerService',
            'mapbender.twig.element_class' => 'getMapbender_Twig_ElementClassService',
            'mapbender.twig.manager.menu' => 'getMapbender_Twig_Manager_MenuService',
            'mapbender.twig.sitelinks' => 'getMapbender_Twig_SitelinksService',
            'mapbender.uploads_manager.service' => 'getMapbender_UploadsManager_ServiceService',
            'mapbender.validator.css' => 'getMapbender_Validator_CssService',
            'mapbender.validator.twig' => 'getMapbender_Validator_TwigService',
            'mapbender.yaml_application_importer.service' => 'getMapbender_YamlApplicationImporter_ServiceService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'owsproxy.logginglistener' => 'getOwsproxy_LogginglistenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access.rootaccount.voter' => 'getSecurity_Access_Rootaccount_VoterService',
            'security.acl.dbal.schema' => 'getSecurity_Acl_Dbal_SchemaService',
            'security.acl.dbal.schema_listener' => 'getSecurity_Acl_Dbal_SchemaListenerService',
            'security.acl.provider' => 'getSecurity_Acl_ProviderService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy.secured_area' => 'getSecurity_Authentication_SessionStrategy_SecuredAreaService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.login' => 'getSecurity_Firewall_Map_Context_LoginService',
            'security.firewall.map.context.secured_area' => 'getSecurity_Firewall_Map_Context_SecuredAreaService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user.provider.concrete.main' => 'getSecurity_User_Provider_Concrete_MainService',
            'security.user_checker.secured_area' => 'getSecurity_UserChecker_SecuredAreaService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'signer' => 'getSignerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'symfony.console.output' => 'getSymfony_Console_OutputService',
            'target_element' => 'getTargetElementService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.extension.stringloader' => 'getTwig_Extension_StringloaderService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
        );
        $this->aliases = array(
            'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
            'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
            'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
            'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.doctrine_bundle_fixturesbundle_command_loaddatafixturesdoctrinecommand' => 'doctrine.fixtures_load_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => 'doctrine_migrations.diff_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => 'doctrine_migrations.execute_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => 'doctrine_migrations.generate_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => 'doctrine_migrations.latest_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => 'doctrine_migrations.migrate_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => 'doctrine_migrations.status_command',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => 'doctrine_migrations.version_command',
            'console.command.mapbender_corebundle_command_migrationsinstallcommand' => 'mapbender.command.migrations_install',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
            'mapbender.source.default.service' => 'mapbender.source.wms.service',
            'security.acl.dbal.connection' => 'doctrine.dbal.default_connection',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        );
    }

    /*
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /*
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /*
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), false);
    }

    /*
     * Gets the public 'app_layerset' shared service.
     *
     * @return \Mapbender\CoreBundle\Element\Type\LayersetAdminType
     */
    protected function getAppLayersetService()
    {
        return $this->services['app_layerset'] = new \Mapbender\CoreBundle\Element\Type\LayersetAdminType($this);
    }

    /*
     * Gets the public 'assetic.asset_manager' shared service.
     *
     * @return \Assetic\Factory\LazyAssetManager
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config')), false)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[2].'/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[2].'/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[2].'/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[2].'/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[2].'/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[2].'/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[2].'/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineMigrationsBundle', ($this->targetDirs[2].'/Resources/DoctrineMigrationsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineMigrationsBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderCoreBundle', ($this->targetDirs[2].'/Resources/MapbenderCoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderCoreBundle', ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[2].'/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOMCoreBundle', ($this->targetDirs[2].'/Resources/FOMCoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOMCoreBundle', ($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOMManagerBundle', ($this->targetDirs[2].'/Resources/FOMManagerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOMManagerBundle', ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOMUserBundle', ($this->targetDirs[2].'/Resources/FOMUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOMUserBundle', ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderWmcBundle', ($this->targetDirs[2].'/Resources/MapbenderWmcBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderWmcBundle', ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderWmsBundle', ($this->targetDirs[2].'/Resources/MapbenderWmsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderWmsBundle', ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderManagerBundle', ($this->targetDirs[2].'/Resources/MapbenderManagerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderManagerBundle', ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderPrintBundle', ($this->targetDirs[2].'/Resources/MapbenderPrintBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderPrintBundle', ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderMobileBundle', ($this->targetDirs[2].'/Resources/MapbenderMobileBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderMobileBundle', ($this->targetDirs[3].'/mapbender/src/Mapbender/MobileBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'OwsProxy3CoreBundle', ($this->targetDirs[2].'/Resources/OwsProxy3CoreBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'OwsProxy3CoreBundle', ($this->targetDirs[3].'/owsproxy/src/OwsProxy3/CoreBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', ($this->targetDirs[2].'/Resources/DoctrineFixturesBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderDigitizerBundle', ($this->targetDirs[2].'/Resources/MapbenderDigitizerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderDigitizerBundle', ($this->targetDirs[3].'/vendor/mapbender/digitizer/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderDataSourceBundle', ($this->targetDirs[2].'/Resources/MapbenderDataSourceBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderDataSourceBundle', ($this->targetDirs[3].'/vendor/mapbender/data-source/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderCoordinatesUtilityBundle', ($this->targetDirs[2].'/Resources/MapbenderCoordinatesUtilityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MapbenderCoordinatesUtilityBundle', ($this->targetDirs[3].'/vendor/mapbender/coordinates-utility/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[2].'/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

        return $instance;
    }

    /*
     * Gets the public 'assetic.controller' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Controller\AsseticController
     */
    protected function getAssetic_ControllerService()
    {
        return $this->services['assetic.controller'] = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('assetic.asset_manager'), new \Assetic\Cache\FilesystemCache((__DIR__.'/assetic/assets')), false, NULL);
    }

    /*
     * Gets the public 'assetic.filter.cssrewrite' shared service.
     *
     * @return \Assetic\Filter\CssRewriteFilter
     */
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }

    /*
     * Gets the public 'assetic.filter.sass' shared service.
     *
     * @return \Assetic\Filter\Sass\SassFilter
     */
    protected function getAssetic_Filter_SassService()
    {
        $this->services['assetic.filter.sass'] = $instance = new \Assetic\Filter\Sass\SassFilter('/usr/bin/sass', '/usr/bin/ruby');

        $instance->setTimeout(NULL);
        $instance->setStyle(NULL);
        $instance->setCompass(NULL);
        $instance->setLoadPaths(array(0 => ($this->targetDirs[2].'/../web')));
        $instance->setCacheLocation(__DIR__);
        $instance->setSourceMap(NULL);
        $instance->setPrecision(NULL);

        return $instance;
    }

    /*
     * Gets the public 'assetic.filter_manager' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite', 'sass' => 'mapbender.assetic.filter.sass'));
    }

    /*
     * Gets the public 'assetic.request_listener' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /*
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /*
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /*
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /*
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => $this->get('kernel.class_cache.cache_warmer'), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form') => NULL)), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form') => NULL))), 7 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /*
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array());
    }

    /*
     * Gets the public 'data.source' shared service.
     *
     * @return \Mapbender\DataSourceBundle\Component\DataStoreService
     */
    protected function getData_SourceService()
    {
        return $this->services['data.source'] = new \Mapbender\DataSourceBundle\Component\DataStoreService($this, 'dataStores');
    }

    /*
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, NULL, NULL, NULL, true, NULL);
    }

    /*
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /*
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /*
     * Gets the public 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        return $this->services['doctrine.cache_clear_metadata_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        return $this->services['doctrine.cache_clear_query_cache_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        return $this->services['doctrine.cache_clear_result_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        return $this->services['doctrine.cache_collection_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        return $this->services['doctrine.clear_entity_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        return $this->services['doctrine.clear_query_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        return $this->services['doctrine.database_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand($this->get('doctrine'));
    }

    /*
     * Gets the public 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        return $this->services['doctrine.database_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand($this->get('doctrine'));
    }

    /*
     * Gets the public 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        return $this->services['doctrine.database_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /*
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventSubscriber($this->get('fom.security.user_profile_listener'));
        $a->addEventSubscriber($this->get('fom.user.subscriber'));
        $a->addEventListener(array(0 => 'postGenerateSchema'), 'security.acl.dbal.schema_listener');
        $a->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_pgsql', 'host' => 'localhost', 'port' => 5432, 'dbname' => 'mapbender', 'path' => NULL, 'user' => 'postgres', 'password' => 'postgres', 'persistent' => true, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), new \Doctrine\DBAL\Configuration(), $a, array());
    }

    /*
     * Gets the public 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        return $this->services['doctrine.ensure_production_settings_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.fixtures_load_command' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand
     */
    protected function getDoctrine_FixturesLoadCommandService()
    {
        return $this->services['doctrine.fixtures_load_command'] = new \Doctrine\Bundle\FixturesBundle\Command\LoadDataFixturesDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        return $this->services['doctrine.generate_entities_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand($this->get('doctrine'));
    }

    /*
     * Gets the public 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        return $this->services['doctrine.mapping_convert_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        return $this->services['doctrine.mapping_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand($this->get('doctrine'), array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'MapbenderCoreBundle' => 'Mapbender\\CoreBundle\\MapbenderCoreBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'FOMCoreBundle' => 'FOM\\CoreBundle\\FOMCoreBundle', 'FOMManagerBundle' => 'FOM\\ManagerBundle\\FOMManagerBundle', 'FOMUserBundle' => 'FOM\\UserBundle\\FOMUserBundle', 'MapbenderWmcBundle' => 'Mapbender\\WmcBundle\\MapbenderWmcBundle', 'MapbenderWmsBundle' => 'Mapbender\\WmsBundle\\MapbenderWmsBundle', 'MapbenderManagerBundle' => 'Mapbender\\ManagerBundle\\MapbenderManagerBundle', 'MapbenderPrintBundle' => 'Mapbender\\PrintBundle\\MapbenderPrintBundle', 'MapbenderMobileBundle' => 'Mapbender\\MobileBundle\\MapbenderMobileBundle', 'OwsProxy3CoreBundle' => 'OwsProxy3\\CoreBundle\\OwsProxy3CoreBundle', 'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle', 'MapbenderDigitizerBundle' => 'Mapbender\\DigitizerBundle\\MapbenderDigitizerBundle', 'MapbenderDataSourceBundle' => 'Mapbender\\DataSourceBundle\\MapbenderDataSourceBundle', 'MapbenderCoordinatesUtilityBundle' => 'Mapbender\\CoordinatesUtilityBundle\\MapbenderCoordinatesUtilityBundle'));
    }

    /*
     * Gets the public 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        return $this->services['doctrine.mapping_info_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            $container = $this;

            return $this->services['doctrine.orm.default_entity_manager'] = new DoctrineORMEntityManager_0000000016ec78880000000069683fdab0b72ca0a0701cd26e832430523a6d88(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = $container->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Entity'), 1 => ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Entity'), 2 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Entity'), 3 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Entity'), 4 => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Entity'), 5 => ($this->targetDirs[3].'/owsproxy/src/OwsProxy3/CoreBundle/Entity'), 6 => ($this->targetDirs[3].'/vendor/mapbender/digitizer/Entity'), 7 => ($this->targetDirs[3].'/vendor/mapbender/data-source/Entity')));

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'Mapbender\\CoreBundle\\Entity');
        $c->addDriver($b, 'FOM\\UserBundle\\Entity');
        $c->addDriver($b, 'Mapbender\\WmcBundle\\Entity');
        $c->addDriver($b, 'Mapbender\\WmsBundle\\Entity');
        $c->addDriver($b, 'Mapbender\\PrintBundle\\Entity');
        $c->addDriver($b, 'OwsProxy3\\CoreBundle\\Entity');
        $c->addDriver($b, 'Mapbender\\DigitizerBundle\\Entity');
        $c->addDriver($b, 'Mapbender\\DataSourceBundle\\Entity');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('MapbenderCoreBundle' => 'Mapbender\\CoreBundle\\Entity', 'FOMUserBundle' => 'FOM\\UserBundle\\Entity', 'MapbenderWmcBundle' => 'Mapbender\\WmcBundle\\Entity', 'MapbenderWmsBundle' => 'Mapbender\\WmsBundle\\Entity', 'MapbenderPrintBundle' => 'Mapbender\\PrintBundle\\Entity', 'OwsProxy3CoreBundle' => 'OwsProxy3\\CoreBundle\\Entity', 'MapbenderDigitizerBundle' => 'Mapbender\\DigitizerBundle\\Entity', 'MapbenderDataSourceBundle' => 'Mapbender\\DataSourceBundle\\Entity'));
        $d->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $d->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $d->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(false);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $d->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(NULL));

        $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /*
     * Gets the public 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /*
     * Gets the public 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /*
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /*
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /*
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /*
     * Gets the public 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        return $this->services['doctrine.query_dql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        return $this->services['doctrine.query_sql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        return $this->services['doctrine.schema_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        return $this->services['doctrine.schema_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        return $this->services['doctrine.schema_update_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        return $this->services['doctrine.schema_validate_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();
    }

    /*
     * Gets the public 'doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getDoctrineCache_ContainsCommandService()
    {
        return $this->services['doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /*
     * Gets the public 'doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getDoctrineCache_DeleteCommandService()
    {
        return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /*
     * Gets the public 'doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getDoctrineCache_FlushCommandService()
    {
        return $this->services['doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /*
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_ad2455caa6c53e1d31c23497fce3975ee0340689af494142badd2dc2fa00a2dd');

        return $instance;
    }

    /*
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_ad2455caa6c53e1d31c23497fce3975ee0340689af494142badd2dc2fa00a2dd');

        return $instance;
    }

    /*
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_ad2455caa6c53e1d31c23497fce3975ee0340689af494142badd2dc2fa00a2dd');

        return $instance;
    }

    /*
     * Gets the public 'doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getDoctrineCache_StatsCommandService()
    {
        return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /*
     * Gets the public 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        $this->services['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();

        $instance->setMigrationConfiguration($this->get('mapbender.migration.configuration'));

        return $instance;
    }

    /*
     * Gets the public 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        $this->services['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();

        $instance->setMigrationConfiguration($this->get('mapbender.migration.configuration'));

        return $instance;
    }

    /*
     * Gets the public 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        return $this->services['doctrine_migrations.generate_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        return $this->services['doctrine_migrations.latest_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();
    }

    /*
     * Gets the public 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        $this->services['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();

        $instance->setMigrationConfiguration($this->get('mapbender.migration.configuration'));

        return $instance;
    }

    /*
     * Gets the public 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        $this->services['doctrine_migrations.status_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();

        $instance->setMigrationConfiguration($this->get('mapbender.migration.configuration'));

        return $instance;
    }

    /*
     * Gets the public 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        return $this->services['doctrine_migrations.version_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('security.authentication.failure', array(0 => 'fom.security.failed_login_listener', 1 => 'onLoginFailure'), 0);
        $instance->addListenerService('security.authentication.success', array(0 => 'fom.security.failed_login_listener', 1 => 'onLoginSuccess'), 0);
        $instance->addListenerService('kernel.terminate', array(0 => 'owsproxy.logginglistener', 1 => 'onTerminate'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');

        return $instance;
    }

    /*
     * Gets the public 'features' shared service.
     *
     * @return \Mapbender\DataSourceBundle\Component\FeatureTypeService
     */
    protected function getFeaturesService()
    {
        return $this->services['features'] = new \Mapbender\DataSourceBundle\Component\FeatureTypeService($this, 'featureTypes');
    }

    /*
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /*
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /*
     * Gets the public 'fom.acl.manager' shared service.
     *
     * @return \FOM\UserBundle\Component\AclManager
     */
    protected function getFom_Acl_ManagerService()
    {
        return $this->services['fom.acl.manager'] = new \FOM\UserBundle\Component\AclManager($this->get('security.acl.provider'));
    }

    /*
     * Gets the public 'fom.identities.provider' shared service.
     *
     * @return \FOM\UserBundle\Component\FOMIdentitiesProvider
     */
    protected function getFom_Identities_ProviderService()
    {
        return $this->services['fom.identities.provider'] = new \FOM\UserBundle\Component\FOMIdentitiesProvider($this);
    }

    /*
     * Gets the public 'fom.security.failed_login_listener' shared service.
     *
     * @return \FOM\UserBundle\EventListener\FailedLoginListener
     */
    protected function getFom_Security_FailedLoginListenerService()
    {
        return $this->services['fom.security.failed_login_listener'] = new \FOM\UserBundle\EventListener\FailedLoginListener($this->get('doctrine.orm.default_entity_manager'), 3, 5, '-5 minutes');
    }

    /*
     * Gets the public 'fom.security.user_profile_listener' shared service.
     *
     * @return \FOM\UserBundle\EventListener\UserProfileListener
     */
    protected function getFom_Security_UserProfileListenerService()
    {
        return $this->services['fom.security.user_profile_listener'] = new \FOM\UserBundle\EventListener\UserProfileListener($this);
    }

    /*
     * Gets the public 'fom.user.subscriber' shared service.
     *
     * @return \FOM\UserBundle\EventListener\UserSubscriber
     */
    protected function getFom_User_SubscriberService()
    {
        return $this->services['fom.user.subscriber'] = new \FOM\UserBundle\EventListener\UserSubscriber();
    }

    /*
     * Gets the public 'fom.user_helper.service' shared service.
     *
     * @return \FOM\UserBundle\Component\UserHelperService
     */
    protected function getFom_UserHelper_ServiceService()
    {
        return $this->services['fom.user_helper.service'] = new \FOM\UserBundle\Component\UserHelperService($this->get('security.acl.provider'), $this->get('security.encoder_factory'), array(0 => 'VIEW', 1 => 'EDIT'));
    }

    /*
     * Gets the public 'fom_groups' shared service.
     *
     * @return \FOM\CoreBundle\Form\Type\FOMGroupsType
     */
    protected function getFomGroupsService()
    {
        return $this->services['fom_groups'] = new \FOM\CoreBundle\Form\Type\FOMGroupsType($this->get('security.token_storage'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the public 'fom_roles' shared service.
     *
     * @return \FOM\UserBundle\Component\RolesService
     */
    protected function getFomRolesService()
    {
        return $this->services['fom_roles'] = new \FOM\UserBundle\Component\RolesService($this->get('kernel'));
    }

    /*
     * Gets the public 'form.csrf_provider' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter
     *
     * @deprecated The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.
     */
    protected function getForm_CsrfProviderService()
    {
        @trigger_error('The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.', E_USER_DEPRECATED);

        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /*
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the public 'form.fom.ace' shared service.
     *
     * @return \FOM\UserBundle\Form\Type\ACEType
     */
    protected function getForm_Fom_AceService()
    {
        return $this->services['form.fom.ace'] = new \FOM\UserBundle\Form\Type\ACEType($this->get('security.acl.provider'), $this);
    }

    /*
     * Gets the public 'form.fom.acl' shared service.
     *
     * @return \FOM\UserBundle\Form\Type\ACLType
     */
    protected function getForm_Fom_AclService()
    {
        return $this->services['form.fom.acl'] = new \FOM\UserBundle\Form\Type\ACLType($this->get('security.authorization_checker'), $this->get('security.token_storage'), $this->get('security.acl.provider'), $this->get('router'));
    }

    /*
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'birthday' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'collection' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'country' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'date' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'datetime' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'email' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'file' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'hidden' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'integer' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'language' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'locale' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'money' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'number' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'password' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'percent' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'radio' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'range' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'repeated' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'search' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'textarea' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'text' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'time' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'timezone' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'url' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'button' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'submit' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'reset' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'currency' => 'form.type.currency', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'entity' => 'form.type.entity', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'target_element' => 'target_element', 'Mapbender\\CoreBundle\\Element\\Type\\TargetElementType' => 'target_element', 'app_layerset' => 'app_layerset', 'Mapbender\\CoreBundle\\Element\\Type\\LayersetAdminType' => 'app_layerset', 'layerset_instances' => 'layerset_instances', 'Mapbender\\CoreBundle\\Element\\Type\\LayersetInstancesAdminType' => 'layerset_instances', 'layertree_menu' => 'mapbender.form_type.element.layertree.menuchoices', 'Mapbender\\CoreBundle\\Element\\Type\\LayerTreeMenuType' => 'mapbender.form_type.element.layertree.menuchoices', 'htmlelement' => 'mapbender.form_type.element.htmlelement', 'Mapbender\\CoreBundle\\Element\\Type\\HTMLElementAdminType' => 'mapbender.form_type.element.htmlelement', 'html' => 'mapbender.form_type.html', 'Mapbender\\CoreBundle\\Form\\Type\\HtmlFormType' => 'mapbender.form_type.html', 'fom_groups' => 'fom_groups', 'FOM\\CoreBundle\\Form\\Type\\FOMGroupsType' => 'fom_groups', 'acl' => 'form.fom.acl', 'FOM\\UserBundle\\Form\\Type\\ACLType' => 'form.fom.acl', 'ace' => 'form.fom.ace', 'FOM\\UserBundle\\Form\\Type\\ACEType' => 'form.fom.ace', 'wmsinstanceinstancelayers' => 'mapbender.sourceinstance.wms.form', 'Mapbender\\WmsBundle\\Form\\Type\\WmsInstanceInstanceLayersType' => 'mapbender.sourceinstance.wms.form'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.transformation_failure_handling', 1 => 'form.type_extension.form.http_foundation', 2 => 'form.type_extension.form.validator', 3 => 'form.type_extension.upload.validator', 4 => 'form.type_extension.csrf'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /*
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /*
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /*
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /*
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /*
     * Gets the public 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /*
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /*
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /*
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /*
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /*
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /*
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /*
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /*
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /*
     * Gets the public 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /*
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /*
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /*
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /*
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /*
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /*
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /*
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /*
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /*
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /*
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /*
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /*
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /*
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /*
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /*
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /*
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /*
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /*
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /*
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /*
     * Gets the public 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /*
     * Gets the public 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /*
     * Gets the public 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        return $this->services['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension($this->get('translator.default', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the public 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /*
     * Gets the public 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /*
     * Gets the public 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /*
     * Gets the public 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator.default'), 'validators');
    }

    /*
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /*
     * Gets the public 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /*
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), false);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');

        return $instance;
    }

    /*
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /*
     * Gets the public 'get_set_method_normalizer' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer
     */
    protected function getGetSetMethodNormalizerService()
    {
        return $this->services['get_set_method_normalizer'] = new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer();
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('request_stack'), false);
    }

    /*
     * Gets the public 'kernel' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /*
     * Gets the public 'layerset_instances' shared service.
     *
     * @return \Mapbender\CoreBundle\Element\Type\LayersetInstancesAdminType
     */
    protected function getLayersetInstancesService()
    {
        return $this->services['layerset_instances'] = new \Mapbender\CoreBundle\Element\Type\LayersetInstancesAdminType($this);
    }

    /*
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the public 'mapbender' shared service.
     *
     * @return \Mapbender\CoreBundle\Mapbender
     */
    protected function getMapbenderService()
    {
        return $this->services['mapbender'] = new \Mapbender\CoreBundle\Mapbender($this);
    }

    /*
     * Gets the public 'mapbender.application_asset.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Asset\ApplicationAssetService
     */
    protected function getMapbender_ApplicationAsset_ServiceService()
    {
        return $this->services['mapbender.application_asset.service'] = new \Mapbender\CoreBundle\Asset\ApplicationAssetService($this->get('mapbender.asset_compiler.service'), $this->get('mapbender.presenter.application.service'), $this->get('mapbender.source.typedirectory.service'), $this->get('mapbender.element_factory.service'), $this->get('router'), $this->get('templating'), false, false);
    }

    /*
     * Gets the public 'mapbender.application_exporter.service' shared service.
     *
     * @return \Mapbender\ManagerBundle\Component\ExportHandler
     */
    protected function getMapbender_ApplicationExporter_ServiceService()
    {
        return $this->services['mapbender.application_exporter.service'] = new \Mapbender\ManagerBundle\Component\ExportHandler($this->get('doctrine.orm.default_entity_manager'), $this->get('security.authorization_checker'), $this->get('form.factory'));
    }

    /*
     * Gets the public 'mapbender.application_importer.service' shared service.
     *
     * @return \Mapbender\ManagerBundle\Component\ImportHandler
     */
    protected function getMapbender_ApplicationImporter_ServiceService()
    {
        return $this->services['mapbender.application_importer.service'] = new \Mapbender\ManagerBundle\Component\ImportHandler($this->get('doctrine.orm.default_entity_manager'), $this->get('mapbender.element_factory.service'), $this->get('security.acl.provider'), $this->get('fom.acl.manager'), $this->get('form.factory'));
    }

    /*
     * Gets the public 'mapbender.asset_compiler.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Asset\AssetFactory
     */
    protected function getMapbender_AssetCompiler_ServiceService()
    {
        return $this->services['mapbender.asset_compiler.service'] = new \Mapbender\CoreBundle\Asset\AssetFactory($this->get('file_locator'), ($this->targetDirs[2].'/../web'), $this->get('templating'), $this->get('mapbender.assetic.filter.sass'), $this->get('assetic.filter.cssrewrite'));
    }

    /*
     * Gets the public 'mapbender.assetic.filter.sass' shared service.
     *
     * @return \Eslider\Filter\ScssFilter
     */
    protected function getMapbender_Assetic_Filter_SassService()
    {
        $this->services['mapbender.assetic.filter.sass'] = $instance = new \Eslider\Filter\ScssFilter(NULL);

        $instance->setTimeout(NULL);
        $instance->setStyle(NULL);
        $instance->setCompass(NULL);
        $instance->setCacheLocation(false);
        $instance->setScss(false);
        $instance->addLoadPath(($this->targetDirs[2].'/../mapbender/src/Mapbender/CoreBundle/Resources/public/sass'));
        $instance->addLoadPath(($this->targetDirs[2].'/../vendor/igosuki/compass-mixins/lib'));
        $instance->addLoadPath(($this->targetDirs[2].'/../web'));

        return $instance;
    }

    /*
     * Gets the public 'mapbender.command.migrations_install' shared service.
     *
     * @return \Mapbender\CoreBundle\Command\MigrationsInstallCommand
     */
    protected function getMapbender_Command_MigrationsInstallService()
    {
        return $this->services['mapbender.command.migrations_install'] = new \Mapbender\CoreBundle\Command\MigrationsInstallCommand($this->get('mapbender.symlink_installer'));
    }

    /*
     * Gets the public 'mapbender.constraint.html' shared service.
     *
     * @return \Mapbender\CoreBundle\Validator\Constraints\HtmlConstraint
     */
    protected function getMapbender_Constraint_HtmlService()
    {
        return $this->services['mapbender.constraint.html'] = new \Mapbender\CoreBundle\Validator\Constraints\HtmlConstraint();
    }

    /*
     * Gets the public 'mapbender.constraint.twig' shared service.
     *
     * @return \Mapbender\CoreBundle\Validator\Constraints\TwigConstraint
     */
    protected function getMapbender_Constraint_TwigService()
    {
        return $this->services['mapbender.constraint.twig'] = new \Mapbender\CoreBundle\Validator\Constraints\TwigConstraint();
    }

    /*
     * Gets the public 'mapbender.element_factory.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\ElementFactory
     */
    protected function getMapbender_ElementFactory_ServiceService()
    {
        return $this->services['mapbender.element_factory.service'] = new \Mapbender\CoreBundle\Component\ElementFactory($this->get('translator.default'), $this);
    }

    /*
     * Gets the public 'mapbender.element_inventory.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\ElementInventoryService
     */
    protected function getMapbender_ElementInventory_ServiceService()
    {
        $this->services['mapbender.element_inventory.service'] = $instance = new \Mapbender\CoreBundle\Component\ElementInventoryService();

        $instance->setInventory(array(0 => 'Mapbender\\CoreBundle\\Element\\AboutDialog', 1 => 'Mapbender\\CoreBundle\\Element\\ActivityIndicator', 2 => 'Mapbender\\CoreBundle\\Element\\BaseSourceSwitcher', 3 => 'Mapbender\\CoreBundle\\Element\\Button', 4 => 'Mapbender\\CoreBundle\\Element\\CoordinatesDisplay', 5 => 'Mapbender\\CoreBundle\\Element\\Copyright', 6 => 'Mapbender\\CoreBundle\\Element\\FeatureInfo', 7 => 'Mapbender\\CoreBundle\\Element\\GpsPosition', 8 => 'Mapbender\\CoreBundle\\Element\\HTMLElement', 9 => 'Mapbender\\CoreBundle\\Element\\Layertree', 10 => 'Mapbender\\CoreBundle\\Element\\Legend', 11 => 'Mapbender\\CoreBundle\\Element\\Map', 12 => 'Mapbender\\CoreBundle\\Element\\Overview', 13 => 'Mapbender\\CoreBundle\\Element\\POI', 14 => 'Mapbender\\CoreBundle\\Element\\Ruler', 15 => 'Mapbender\\CoreBundle\\Element\\ScaleBar', 16 => 'Mapbender\\CoreBundle\\Element\\ScaleDisplay', 17 => 'Mapbender\\CoreBundle\\Element\\ScaleSelector', 18 => 'Mapbender\\CoreBundle\\Element\\SearchRouter', 19 => 'Mapbender\\CoreBundle\\Element\\SimpleSearch', 20 => 'Mapbender\\CoreBundle\\Element\\Sketch', 21 => 'Mapbender\\CoreBundle\\Element\\SrsSelector', 22 => 'Mapbender\\CoreBundle\\Element\\ZoomBar', 23 => 'Mapbender\\CoreBundle\\Element\\Redlining', 24 => 'Mapbender\\WmcBundle\\Element\\WmcLoader', 25 => 'Mapbender\\WmcBundle\\Element\\WmcList', 26 => 'Mapbender\\WmcBundle\\Element\\WmcEditor', 27 => 'Mapbender\\WmcBundle\\Element\\SuggestMap', 28 => 'Mapbender\\WmsBundle\\Element\\WmsLoader', 29 => 'Mapbender\\WmsBundle\\Element\\DimensionsHandler', 30 => 'Mapbender\\PrintBundle\\Element\\ImageExport', 31 => 'Mapbender\\PrintBundle\\Element\\PrintClient', 32 => 'Mapbender\\DigitizerBundle\\Element\\Digitizer', 33 => 'Mapbender\\CoordinatesUtilityBundle\\Element\\CoordinatesUtility'));

        return $instance;
    }

    /*
     * Gets the public 'mapbender.form_type.element.htmlelement' shared service.
     *
     * @return \Mapbender\CoreBundle\Element\Type\HTMLElementAdminType
     */
    protected function getMapbender_FormType_Element_HtmlelementService()
    {
        return $this->services['mapbender.form_type.element.htmlelement'] = new \Mapbender\CoreBundle\Element\Type\HTMLElementAdminType();
    }

    /*
     * Gets the public 'mapbender.form_type.element.layertree.menuchoices' shared service.
     *
     * @return \Mapbender\CoreBundle\Element\Type\LayerTreeMenuType
     */
    protected function getMapbender_FormType_Element_Layertree_MenuchoicesService()
    {
        return $this->services['mapbender.form_type.element.layertree.menuchoices'] = new \Mapbender\CoreBundle\Element\Type\LayerTreeMenuType(true);
    }

    /*
     * Gets the public 'mapbender.form_type.element.printclient' shared service.
     *
     * @return \Mapbender\PrintBundle\Element\Type\PrintClientAdminType
     */
    protected function getMapbender_FormType_Element_PrintclientService()
    {
        return $this->services['mapbender.form_type.element.printclient'] = new \Mapbender\PrintBundle\Element\Type\PrintClientAdminType(false);
    }

    /*
     * Gets the public 'mapbender.form_type.html' shared service.
     *
     * @return \Mapbender\CoreBundle\Form\Type\HtmlFormType
     */
    protected function getMapbender_FormType_HtmlService()
    {
        return $this->services['mapbender.form_type.html'] = new \Mapbender\CoreBundle\Form\Type\HtmlFormType($this->get('mapbender.constraint.html'), $this->get('mapbender.constraint.twig'));
    }

    /*
     * Gets the public 'mapbender.http_transport.service' shared service.
     *
     * @return \Mapbender\Component\Transport\OwsProxyTransport
     */
    protected function getMapbender_HttpTransport_ServiceService()
    {
        return $this->services['mapbender.http_transport.service'] = new \Mapbender\Component\Transport\OwsProxyTransport(array('host' => NULL, 'port' => NULL, 'connecttimeout' => 60, 'timeout' => 90, 'user' => NULL, 'password' => NULL, 'checkssl' => true, 'noproxy' => array()), $this->get('logger'));
    }

    /*
     * Gets the public 'mapbender.imageexport.image_transport.service' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\Transport\ImageTransport
     */
    protected function getMapbender_Imageexport_ImageTransport_ServiceService()
    {
        return $this->services['mapbender.imageexport.image_transport.service'] = new \Mapbender\PrintBundle\Component\Transport\ImageTransport($this->get('mapbender.http_transport.service'));
    }

    /*
     * Gets the public 'mapbender.imageexport.renderer.geojson' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\LayerRendererGeoJson
     */
    protected function getMapbender_Imageexport_Renderer_GeojsonService()
    {
        return $this->services['mapbender.imageexport.renderer.geojson'] = new \Mapbender\PrintBundle\Component\LayerRendererGeoJson(($this->targetDirs[2].'/Resources/MapbenderPrintBundle/fonts'), $this->get('mapbender.imageexport.renderer.markers'));
    }

    /*
     * Gets the public 'mapbender.imageexport.renderer.markers' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\LayerRendererMarkers
     */
    protected function getMapbender_Imageexport_Renderer_MarkersService()
    {
        return $this->services['mapbender.imageexport.renderer.markers'] = new \Mapbender\PrintBundle\Component\LayerRendererMarkers(($this->targetDirs[2].'/../web'));
    }

    /*
     * Gets the public 'mapbender.imageexport.renderer.wms' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\LayerRendererWms
     */
    protected function getMapbender_Imageexport_Renderer_WmsService()
    {
        return $this->services['mapbender.imageexport.renderer.wms'] = new \Mapbender\PrintBundle\Component\LayerRendererWms($this->get('mapbender.imageexport.image_transport.service'), $this->get('logger'), array(0 => 8192, 1 => 8192), array(0 => 512, 1 => 512));
    }

    /*
     * Gets the public 'mapbender.imageexport.service' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\ImageExportService
     */
    protected function getMapbender_Imageexport_ServiceService()
    {
        return $this->services['mapbender.imageexport.service'] = new \Mapbender\PrintBundle\Component\ImageExportService(array('wms' => $this->get('mapbender.imageexport.renderer.wms'), 'GeoJSON+Style' => $this->get('mapbender.imageexport.renderer.geojson'), 'markers' => $this->get('mapbender.imageexport.renderer.markers')), $this->get('logger'));
    }

    /*
     * Gets the public 'mapbender.importer.source.wms.service' shared service.
     *
     * @return \Mapbender\WmsBundle\Component\Wms\Importer
     */
    protected function getMapbender_Importer_Source_Wms_ServiceService()
    {
        return $this->services['mapbender.importer.source.wms.service'] = new \Mapbender\WmsBundle\Component\Wms\Importer($this->get('mapbender.http_transport.service'), $this);
    }

    /*
     * Gets the public 'mapbender.manager.element_form_factory.service' shared service.
     *
     * @return \Mapbender\ManagerBundle\Component\ElementFormFactory
     */
    protected function getMapbender_Manager_ElementFormFactory_ServiceService()
    {
        return $this->services['mapbender.manager.element_form_factory.service'] = new \Mapbender\ManagerBundle\Component\ElementFormFactory($this->get('form.factory'), $this->get('mapbender.element_inventory.service'), $this, false);
    }

    /*
     * Gets the public 'mapbender.migration.configuration' shared service.
     *
     * @return \Doctrine\DBAL\Migrations\Configuration\Configuration
     */
    protected function getMapbender_Migration_ConfigurationService()
    {
        $this->services['mapbender.migration.configuration'] = $instance = new \Doctrine\DBAL\Migrations\Configuration\Configuration($this->get('doctrine.dbal.default_connection'), $this->get('mapbender.migration.output.writer'));

        $instance->setMigrationsFinder($this->get('mapbender.migration.finder'));

        return $instance;
    }

    /*
     * Gets the public 'mapbender.migration.finder' shared service.
     *
     * @return \Mapbender\Component\DoctrineMigrationsHelper\MigrationFinder
     */
    protected function getMapbender_Migration_FinderService()
    {
        return $this->services['mapbender.migration.finder'] = new \Mapbender\Component\DoctrineMigrationsHelper\MigrationFinder();
    }

    /*
     * Gets the public 'mapbender.migration.output.writer' shared service.
     *
     * @return \Mapbender\Component\DoctrineMigrationsHelper\MigrationsOutputWriter
     */
    protected function getMapbender_Migration_Output_WriterService()
    {
        return $this->services['mapbender.migration.output.writer'] = new \Mapbender\Component\DoctrineMigrationsHelper\MigrationsOutputWriter($this->get('symfony.console.output'));
    }

    /*
     * Gets the public 'mapbender.presenter.application.cache' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\Cache\ApplicationDataService
     */
    protected function getMapbender_Presenter_Application_CacheService()
    {
        return $this->services['mapbender.presenter.application.cache'] = new \Mapbender\CoreBundle\Component\Cache\ApplicationDataService($this->get('logger'), $this->get('mapbender.presenter.application.cache.backend'), 1560855231.59683);
    }

    /*
     * Gets the public 'mapbender.presenter.application.cache.backend' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\Cache\Backend\File
     */
    protected function getMapbender_Presenter_Application_Cache_BackendService()
    {
        return $this->services['mapbender.presenter.application.cache.backend'] = new \Mapbender\CoreBundle\Component\Cache\Backend\File(__DIR__);
    }

    /*
     * Gets the public 'mapbender.presenter.application.config.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\Presenter\Application\ConfigService
     */
    protected function getMapbender_Presenter_Application_Config_ServiceService()
    {
        return $this->services['mapbender.presenter.application.config.service'] = new \Mapbender\CoreBundle\Component\Presenter\Application\ConfigService($this);
    }

    /*
     * Gets the public 'mapbender.presenter.application.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\Presenter\ApplicationService
     */
    protected function getMapbender_Presenter_Application_ServiceService()
    {
        return $this->services['mapbender.presenter.application.service'] = new \Mapbender\CoreBundle\Component\Presenter\ApplicationService($this->get('mapbender.element_factory.service'), $this->get('mapbender.uploads_manager.service'), $this->get('security.authorization_checker'), $this->get('fom.acl.manager'));
    }

    /*
     * Gets the public 'mapbender.print.legend_handler.service' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\LegendHandler
     */
    protected function getMapbender_Print_LegendHandler_ServiceService()
    {
        return $this->services['mapbender.print.legend_handler.service'] = new \Mapbender\PrintBundle\Component\LegendHandler($this->get('mapbender.imageexport.image_transport.service'), ($this->targetDirs[2].'/Resources/MapbenderPrintBundle'), NULL);
    }

    /*
     * Gets the public 'mapbender.print.plugin.digitizer' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\Plugin\DigitizerPrintPlugin
     */
    protected function getMapbender_Print_Plugin_DigitizerService()
    {
        return $this->services['mapbender.print.plugin.digitizer'] = new \Mapbender\PrintBundle\Component\Plugin\DigitizerPrintPlugin($this, 'featuretypes');
    }

    /*
     * Gets the public 'mapbender.print.plugin.queue' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\Plugin\PrintQueuePlugin
     */
    protected function getMapbender_Print_Plugin_QueueService()
    {
        return $this->services['mapbender.print.plugin.queue'] = new \Mapbender\PrintBundle\Component\Plugin\PrintQueuePlugin($this->get('doctrine.orm.default_entity_manager'), $this->get('security.token_storage'), $this->get('router'), $this->get('filesystem'), ($this->targetDirs[2].'/../web/prints'));
    }

    /*
     * Gets the public 'mapbender.print.service' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\PrintService
     */
    protected function getMapbender_Print_ServiceService()
    {
        return $this->services['mapbender.print.service'] = new \Mapbender\PrintBundle\Component\PrintService(array('wms' => $this->get('mapbender.imageexport.renderer.wms'), 'GeoJSON+Style' => $this->get('mapbender.imageexport.renderer.geojson'), 'markers' => $this->get('mapbender.imageexport.renderer.markers')), $this->get('mapbender.imageexport.image_transport.service'), $this->get('mapbender.print.legend_handler.service'), $this->get('mapbender.print.template_parser.service'), $this->get('mapbender.print_plugin_host.service'), $this->get('logger'), ($this->targetDirs[2].'/Resources/MapbenderPrintBundle'), NULL);
    }

    /*
     * Gets the public 'mapbender.print.template_parser.service' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\OdgParser
     */
    protected function getMapbender_Print_TemplateParser_ServiceService()
    {
        return $this->services['mapbender.print.template_parser.service'] = new \Mapbender\PrintBundle\Component\OdgParser(($this->targetDirs[2].'/Resources/MapbenderPrintBundle/templates'));
    }

    /*
     * Gets the public 'mapbender.print_plugin_host.service' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\Service\PrintPluginHost
     */
    protected function getMapbender_PrintPluginHost_ServiceService()
    {
        return $this->services['mapbender.print_plugin_host.service'] = new \Mapbender\PrintBundle\Component\Service\PrintPluginHost();
    }

    /*
     * Gets the public 'mapbender.print_service_bridge.service' shared service.
     *
     * @return \Mapbender\PrintBundle\Component\Service\PrintServiceBridge
     */
    protected function getMapbender_PrintServiceBridge_ServiceService()
    {
        return $this->services['mapbender.print_service_bridge.service'] = new \Mapbender\PrintBundle\Component\Service\PrintServiceBridge($this, $this->get('mapbender.print_plugin_host.service'));
    }

    /*
     * Gets the public 'mapbender.source.instancetunnel.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\Source\Tunnel\InstanceTunnelService
     */
    protected function getMapbender_Source_Instancetunnel_ServiceService()
    {
        return $this->services['mapbender.source.instancetunnel.service'] = new \Mapbender\CoreBundle\Component\Source\Tunnel\InstanceTunnelService($this->get('mapbender.http_transport.service'), $this->get('router'), $this->get('security.token_storage'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /*
     * Gets the public 'mapbender.source.typedirectory.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\Source\TypeDirectoryService
     */
    protected function getMapbender_Source_Typedirectory_ServiceService()
    {
        $this->services['mapbender.source.typedirectory.service'] = $instance = new \Mapbender\CoreBundle\Component\Source\TypeDirectoryService($this);

        $instance->setDefaultService('mapbender.source.default.service');
        $instance->registerSubtypeService('wms', $this->get('mapbender.source.wms.service'));

        return $instance;
    }

    /*
     * Gets the public 'mapbender.source.url_processor.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\Source\UrlProcessor
     */
    protected function getMapbender_Source_UrlProcessor_ServiceService()
    {
        return $this->services['mapbender.source.url_processor.service'] = new \Mapbender\CoreBundle\Component\Source\UrlProcessor($this->get('router'), $this->get('signer'), $this->get('mapbender.source.instancetunnel.service'), 'owsproxy3_core_owsproxy_entrypoint');
    }

    /*
     * Gets the public 'mapbender.source.wms.service' shared service.
     *
     * @return \Mapbender\WmsBundle\Component\Presenter\WmsSourceService
     */
    protected function getMapbender_Source_Wms_ServiceService()
    {
        return $this->services['mapbender.source.wms.service'] = new \Mapbender\WmsBundle\Component\Presenter\WmsSourceService($this);
    }

    /*
     * Gets the public 'mapbender.sourceinstance.wms.form' shared service.
     *
     * @return \Mapbender\WmsBundle\Form\Type\WmsInstanceInstanceLayersType
     */
    protected function getMapbender_Sourceinstance_Wms_FormService()
    {
        return $this->services['mapbender.sourceinstance.wms.form'] = new \Mapbender\WmsBundle\Form\Type\WmsInstanceInstanceLayersType(true);
    }

    /*
     * Gets the public 'mapbender.symlink_installer' shared service.
     *
     * @return \Mapbender\Component\SymlinkInstaller\SymlinkInstaller
     */
    protected function getMapbender_SymlinkInstallerService()
    {
        return $this->services['mapbender.symlink_installer'] = new \Mapbender\Component\SymlinkInstaller\SymlinkInstaller($this->get('filesystem'));
    }

    /*
     * Gets the public 'mapbender.twig.element_class' shared service.
     *
     * @return \Mapbender\CoreBundle\Extension\ElementExtension
     */
    protected function getMapbender_Twig_ElementClassService()
    {
        return $this->services['mapbender.twig.element_class'] = new \Mapbender\CoreBundle\Extension\ElementExtension($this->get('mapbender.element_inventory.service'));
    }

    /*
     * Gets the public 'mapbender.twig.manager.menu' shared service.
     *
     * @return \Mapbender\ManagerBundle\Extension\Twig\MenuExtension
     */
    protected function getMapbender_Twig_Manager_MenuService()
    {
        return $this->services['mapbender.twig.manager.menu'] = new \Mapbender\ManagerBundle\Extension\Twig\MenuExtension($this->get('kernel'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the public 'mapbender.twig.sitelinks' shared service.
     *
     * @return \Mapbender\CoreBundle\Extension\SitelinksExtension
     */
    protected function getMapbender_Twig_SitelinksService()
    {
        return $this->services['mapbender.twig.sitelinks'] = new \Mapbender\CoreBundle\Extension\SitelinksExtension(array());
    }

    /*
     * Gets the public 'mapbender.uploads_manager.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\UploadsManager
     */
    protected function getMapbender_UploadsManager_ServiceService()
    {
        return $this->services['mapbender.uploads_manager.service'] = new \Mapbender\CoreBundle\Component\UploadsManager($this->get('filesystem'), ($this->targetDirs[2].'/../web'), 'uploads');
    }

    /*
     * Gets the public 'mapbender.validator.css' shared service.
     *
     * @return \Mapbender\CoreBundle\Validator\Constraints\ScssValidator
     */
    protected function getMapbender_Validator_CssService()
    {
        return $this->services['mapbender.validator.css'] = new \Mapbender\CoreBundle\Validator\Constraints\ScssValidator($this);
    }

    /*
     * Gets the public 'mapbender.validator.twig' shared service.
     *
     * @return \Mapbender\CoreBundle\Validator\Constraints\TwigConstraintValidator
     */
    protected function getMapbender_Validator_TwigService()
    {
        return $this->services['mapbender.validator.twig'] = new \Mapbender\CoreBundle\Validator\Constraints\TwigConstraintValidator($this->get('translator.default'));
    }

    /*
     * Gets the public 'mapbender.yaml_application_importer.service' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\YamlApplicationImporter
     */
    protected function getMapbender_YamlApplicationImporter_ServiceService()
    {
        return $this->services['mapbender.yaml_application_importer.service'] = new \Mapbender\CoreBundle\Component\YamlApplicationImporter($this->get('security.acl.provider'));
    }

    /*
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /*
     * Gets the public 'monolog.handler.nested' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/prod.log'), 200, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /*
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /*
     * Gets the public 'monolog.logger.assetic' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the public 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /*
     * Gets the public 'owsproxy.logginglistener' shared service.
     *
     * @return \OwsProxy3\CoreBundle\EventListener\LoggingListener
     */
    protected function getOwsproxy_LogginglistenerService()
    {
        return $this->services['owsproxy.logginglistener'] = new \OwsProxy3\CoreBundle\EventListener\LoggingListener($this->get('security.token_storage'), $this->get('doctrine.orm.default_entity_manager'), false, true);
    }

    /*
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /*
     * Gets the public 'request' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     * @deprecated The "request" service is deprecated since Symfony 2.7 and will be removed in 3.0. Use the "request_stack" service instead.
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /*
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /*
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, (__DIR__.'/assetic/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdProjectContainerUrlMatcher', 'strict_requirements' => false, 'resource_type' => 'yaml'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /*
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \FOM\ManagerBundle\Routing\AnnotatedRouteControllerLoader($b, '/manager');

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager'), array()));
        $d->addLoader($c);
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }

    /*
     * Gets the public 'security.access.rootaccount.voter' shared service.
     *
     * @return \FOM\UserBundle\Security\Authorization\Voter\RootAccountVoter
     */
    protected function getSecurity_Access_Rootaccount_VoterService()
    {
        return $this->services['security.access.rootaccount.voter'] = new \FOM\UserBundle\Security\Authorization\Voter\RootAccountVoter($this);
    }

    /*
     * Gets the public 'security.acl.dbal.schema' shared service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\Schema
     */
    protected function getSecurity_Acl_Dbal_SchemaService()
    {
        return $this->services['security.acl.dbal.schema'] = new \Symfony\Component\Security\Acl\Dbal\Schema(array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), $this->get('doctrine.dbal.default_connection'));
    }

    /*
     * Gets the public 'security.acl.dbal.schema_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener
     */
    protected function getSecurity_Acl_Dbal_SchemaListenerService()
    {
        return $this->services['security.acl.dbal.schema_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\AclSchemaListener($this->get('security.acl.dbal.schema'));
    }

    /*
     * Gets the public 'security.acl.provider' shared service.
     *
     * @return \Symfony\Component\Security\Acl\Dbal\MutableAclProvider
     */
    protected function getSecurity_Acl_ProviderService()
    {
        return $this->services['security.acl.provider'] = new \Symfony\Component\Security\Acl\Dbal\MutableAclProvider($this->get('doctrine.dbal.default_connection'), new \Symfony\Component\Security\Acl\Domain\PermissionGrantingStrategy(), array('class_table_name' => 'acl_classes', 'entry_table_name' => 'acl_entries', 'oid_table_name' => 'acl_object_identities', 'oid_ancestors_table_name' => 'acl_object_identity_ancestors', 'sid_table_name' => 'acl_security_identities'), NULL);
    }

    /*
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        $this->services['security.authentication.guard_handler'] = $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), array());

        $instance->setSessionAuthenticationStrategy($this->get('security.authentication.session_strategy.secured_area'));

        return $instance;
    }

    /*
     * Gets the public 'security.authentication.session_strategy.secured_area' shared service.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy
     */
    protected function getSecurity_Authentication_SessionStrategy_SecuredAreaService()
    {
        return $this->services['security.authentication.session_strategy.secured_area'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /*
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /*
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /*
     * Gets the public 'security.context' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\SecurityContext
     */
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Mapbender\CoreBundle\Component\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /*
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), $this->get('security.csrf.token_storage'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOM\\UserBundle\\Entity\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /*
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.login' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/login$'), 'security.firewall.map.context.secured_area' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }

    /*
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, NULL);
    }

    /*
     * Gets the public 'security.firewall.map.context.login' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        return $this->services['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, NULL);
    }

    /*
     * Gets the public 'security.firewall.map.context.secured_area' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_SecuredAreaService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');

        $g = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/login');

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/manager');

        $i = new \Symfony\Component\Security\Http\AccessMap();
        $i->add($g, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $i->add($h, array(0 => 'ROLE_USER'), NULL);

        $j = new \Symfony\Component\Security\Http\HttpUtils($d, $d, '{^https?://%s$}i');

        $k = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($j, array());
        $k->setOptions(array('login_path' => '/user/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $k->setProviderKey('secured_area');

        $l = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $j, array(), $a);
        $l->setOptions(array('login_path' => '/user/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $m = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $j, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($j, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/user/logout'));
        $m->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler($this->get('security.csrf.token_storage')));
        $m->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        return $this->services['security.firewall.map.context.secured_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($i, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('security.user.provider.concrete.main')), 'secured_area', $a, $c), 2 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $f, $this->get('security.authentication.session_strategy.secured_area'), $j, 'secured_area', $k, $l, array('check_path' => '/user/login/check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $c, NULL), 3 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '5d08c2bec6f8c8.94741886', $a, $f), 4 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $i, $f)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $j, 'secured_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $j, '/user/login', false), NULL, NULL, $a, false), $m);
    }

    /*
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /*
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /*
     * Gets the public 'security.secure_random' shared service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom
     *
     * @deprecated The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.
     */
    protected function getSecurity_SecureRandomService()
    {
        @trigger_error('The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.', E_USER_DEPRECATED);

        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /*
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /*
     * Gets the public 'security.user_checker.secured_area' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserChecker_SecuredAreaService()
    {
        return $this->services['security.user_checker.secured_area'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /*
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /*
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /*
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /*
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /*
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /*
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /*
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /*
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /*
     * Gets the public 'service_container' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /*
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /*
     * Gets the public 'session.handler' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler((__DIR__.'/sessions'));
    }

    /*
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /*
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_lifetime' => 3600, 'cookie_secure' => false, 'cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }

    /*
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }

    /*
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /*
     * Gets the public 'signer' shared service.
     *
     * @return \Mapbender\CoreBundle\Component\Signer
     */
    protected function getSignerService()
    {
        return $this->services['signer'] = new \Mapbender\CoreBundle\Component\Signer('ThisTokenIsNotSoSecretChangeIt');
    }

    /*
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /*
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /*
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));
    }

    /*
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('localhost');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);

        return $instance;
    }

    /*
     * Gets the public 'symfony.console.output' shared service.
     *
     * @return \Symfony\Component\Console\Output\ConsoleOutput
     */
    protected function getSymfony_Console_OutputService()
    {
        return $this->services['symfony.console.output'] = new \Symfony\Component\Console\Output\ConsoleOutput();
    }

    /*
     * Gets the public 'target_element' shared service.
     *
     * @return \Mapbender\CoreBundle\Element\Type\TargetElementType
     */
    protected function getTargetElementService()
    {
        return $this->services['target_element'] = new \Mapbender\CoreBundle\Element\Type\TargetElementType($this);
    }

    /*
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /*
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /*
     * Gets the public 'templating.helper.assets' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /*
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /*
     * Gets the public 'templating.helper.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /*
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /*
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /*
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /*
     * Gets the public 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /*
     * Gets the public 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /*
     * Gets the public 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /*
     * Gets the public 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /*
     * Gets the public 'translation.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /*
     * Gets the public 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /*
     * Gets the public 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /*
     * Gets the public 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /*
     * Gets the public 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /*
     * Gets the public 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /*
     * Gets the public 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /*
     * Gets the public 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /*
     * Gets the public 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /*
     * Gets the public 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /*
     * Gets the public 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /*
     * Gets the public 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /*
     * Gets the public 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /*
     * Gets the public 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false, 'resource_files' => array('tl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tl.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/validators.en.yml'), 4 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/messages.en.yml'), 5 => ($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/translations/messages.en.yml'), 6 => ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/translations/messages.en.yml'), 7 => ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/translations/messages.en.yml'), 8 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/translations/messages.en.yml'), 9 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/translations/messages.en.yml'), 10 => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/translations/messages.en.yml'), 11 => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/translations/messages.en.yml'), 12 => ($this->targetDirs[3].'/vendor/mapbender/digitizer/Resources/translations/messages.en.yml'), 13 => ($this->targetDirs[3].'/vendor/mapbender/data-source/Resources/translations/messages.en.yml'), 14 => ($this->targetDirs[3].'/vendor/mapbender/coordinates-utility/Resources/translations/messages.en.yml')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/messages.de.yml'), 4 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/validators.de.yml'), 5 => ($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/translations/messages.de.yml'), 6 => ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/translations/messages.de.yml'), 7 => ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/translations/messages.de.yml'), 8 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/translations/messages.de.yml'), 9 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/translations/messages.de.yml'), 10 => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/translations/messages.de.yml'), 11 => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/translations/messages.de.yml'), 12 => ($this->targetDirs[3].'/vendor/mapbender/digitizer/Resources/translations/messages.de.yml'), 13 => ($this->targetDirs[3].'/vendor/mapbender/data-source/Resources/translations/messages.de.yml'), 14 => ($this->targetDirs[3].'/vendor/mapbender/coordinates-utility/Resources/translations/messages.de.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nn.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/messages.fr.yml'), 4 => ($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/translations/messages.fr.yml'), 5 => ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/translations/messages.fr.yml'), 6 => ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/translations/messages.fr.yml'), 7 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/translations/messages.fr.yml'), 8 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/translations/messages.fr.yml'), 9 => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/translations/messages.fr.yml'), 10 => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/translations/messages.fr.yml')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/messages.it.yml'), 4 => ($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/translations/messages.it.yml'), 5 => ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/translations/messages.it.yml'), 6 => ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/translations/messages.it.yml'), 7 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/translations/messages.it.yml'), 8 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/translations/messages.it.yml'), 9 => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/translations/messages.it.yml'), 10 => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/translations/messages.it.yml'), 11 => ($this->targetDirs[3].'/vendor/mapbender/digitizer/Resources/translations/messages.it.yml'), 12 => ($this->targetDirs[3].'/vendor/mapbender/data-source/Resources/translations/messages.it.yml'), 13 => ($this->targetDirs[3].'/vendor/mapbender/coordinates-utility/Resources/translations/messages.it.yml')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/messages.pt.yml'), 3 => ($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/translations/messages.pt.yml'), 4 => ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/translations/messages.pt.yml'), 5 => ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/translations/messages.pt.yml'), 6 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/translations/messages.pt.yml'), 7 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/translations/messages.pt.yml'), 8 => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/translations/messages.pt.yml'), 9 => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/translations/messages.pt.yml')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/messages.ru.yml'), 4 => ($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/translations/messages.ru.yml'), 5 => ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/translations/messages.ru.yml'), 6 => ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/translations/messages.ru.yml'), 7 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/translations/messages.ru.yml'), 8 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/translations/messages.ru.yml'), 9 => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/translations/messages.ru.yml'), 10 => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/translations/messages.ru.yml'), 11 => ($this->targetDirs[3].'/vendor/mapbender/digitizer/Resources/translations/messages.ru.yml'), 12 => ($this->targetDirs[3].'/vendor/mapbender/data-source/Resources/translations/messages.ru.yml'), 13 => ($this->targetDirs[3].'/vendor/mapbender/coordinates-utility/Resources/translations/messages.ru.yml')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/messages.es.yml'), 4 => ($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/translations/messages.es.yml'), 5 => ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/translations/messages.es.yml'), 6 => ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/translations/messages.es.yml'), 7 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/translations/messages.es.yml'), 8 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/translations/messages.es.yml'), 9 => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/translations/messages.es.yml'), 10 => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/translations/messages.es.yml')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/messages.nl.yml'), 4 => ($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/translations/messages.nl.yml'), 5 => ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/translations/messages.nl.yml'), 6 => ($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/translations/messages.nl.yml'), 7 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/translations/messages.nl.yml'), 8 => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/translations/messages.nl.yml'), 9 => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/translations/messages.nl.yml'), 10 => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/translations/messages.nl.yml')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/translations/messages.tr.yml'), 3 => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/translations/messages.tr.yml')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nb.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'en'));

        return $instance;
    }

    /*
     * Gets the public 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator.default'), $this->get('request_stack'));
    }

    /*
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = $this->get('request_stack');
        $b = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('fragment.handler');

        $d = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a, $b);

        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('prod');
        $e->setDebug(false);
        if ($this->has('security.token_storage')) {
            $e->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $e->setRequestStack($a);
        }
        $e->setContainer($this);

        $this->services['twig'] = $instance = new \Twig\Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'MapbenderCoreBundle:form:fields.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $d));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($c));
        $instance->addExtension($d);
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'MapbenderCoreBundle:form:fields.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'MonologBundle', 4 => 'AsseticBundle', 5 => 'DoctrineBundle', 6 => 'SensioFrameworkExtraBundle', 7 => 'DoctrineMigrationsBundle', 8 => 'MapbenderCoreBundle', 9 => 'SwiftmailerBundle', 10 => 'FOMCoreBundle', 11 => 'FOMManagerBundle', 12 => 'FOMUserBundle', 13 => 'MapbenderWmcBundle', 14 => 'MapbenderWmsBundle', 15 => 'MapbenderManagerBundle', 16 => 'MapbenderPrintBundle', 17 => 'MapbenderMobileBundle', 18 => 'OwsProxy3CoreBundle', 19 => 'DoctrineFixturesBundle', 20 => 'MapbenderDigitizerBundle', 21 => 'MapbenderDataSourceBundle', 22 => 'MapbenderCoordinatesUtilityBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('mapbender.twig.element_class'));
        $instance->addExtension($this->get('mapbender.twig.sitelinks'));
        $instance->addExtension($this->get('twig.extension.stringloader'));
        $instance->addExtension($this->get('mapbender.twig.manager.menu'));
        $instance->addGlobal('app', $e);
        $instance->addGlobal('fom', array('server_name' => 'Mapbender', 'server_version' => '3.0.8.1', 'server_logo' => 'bundles/mapbendercore/image/logo_mb3.png'));
        $instance->addGlobal('cookieconsent', false);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /*
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }

    /*
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /*
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), false);
    }

    /*
     * Gets the public 'twig.extension.stringloader' shared service.
     *
     * @return \Twig_Extension_StringLoader
     */
    protected function getTwig_Extension_StringloaderService()
    {
        return $this->services['twig.extension.stringloader'] = new \Twig_Extension_StringLoader();
    }

    /*
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle/Resources/views'), 'MapbenderCore');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/fom/src/FOM/CoreBundle/Resources/views'), 'FOMCore');
        $instance->addPath(($this->targetDirs[3].'/fom/src/FOM/ManagerBundle/Resources/views'), 'FOMManager');
        $instance->addPath(($this->targetDirs[3].'/fom/src/FOM/UserBundle/Resources/views'), 'FOMUser');
        $instance->addPath(($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle/Resources/views'), 'MapbenderWmc');
        $instance->addPath(($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle/Resources/views'), 'MapbenderWms');
        $instance->addPath(($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle/Resources/views'), 'MapbenderManager');
        $instance->addPath(($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle/Resources/views'), 'MapbenderPrint');
        $instance->addPath(($this->targetDirs[3].'/mapbender/src/Mapbender/MobileBundle/Resources/views'), 'MapbenderMobile');
        $instance->addPath(($this->targetDirs[3].'/owsproxy/src/OwsProxy3/CoreBundle/Resources/views'), 'OwsProxy3Core');
        $instance->addPath(($this->targetDirs[3].'/vendor/mapbender/digitizer/Resources/views'), 'MapbenderDigitizer');
        $instance->addPath(($this->targetDirs[3].'/vendor/mapbender/data-source/Resources/views'), 'MapbenderDataSource');
        $instance->addPath(($this->targetDirs[3].'/vendor/mapbender/coordinates-utility/Resources/views'), 'MapbenderCoordinatesUtility');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /*
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /*
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /*
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /*
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /*
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /*
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique', 'mapbender.validator.css' => 'mapbender.validator.css', 'Mapbender\\CoreBundle\\Validator\\Constraints\\ScssValidator' => 'mapbender.validator.css', 'Mapbender\\CoreBundle\\Validator\\Constraints\\TwigConstraintValidator' => 'mapbender.validator.twig')));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /*
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /*
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /*
     * Gets the private 'assetic.asset_factory' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[2].'/../web'), false);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /*
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /*
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /*
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /*
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /*
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.role_hierarchy');
        $b = $this->get('security.authentication.trust_resolver');

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Acl\Voter\AclVoter($this->get('security.acl.provider'), new \Symfony\Component\Security\Acl\Domain\ObjectIdentityRetrievalStrategy(), new \Symfony\Component\Security\Acl\Domain\SecurityIdentityRetrievalStrategy($a, $b), new \Symfony\Component\Security\Acl\Permission\BasicPermissionMap(), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE), true), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter(), 3 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 4 => $this->get('security.access.rootaccount.voter')));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.main'), $this->get('security.user_checker.secured_area'), 'secured_area', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5d08c2bec6f8c8.94741886')), true);

        $instance->setEventDispatcher($this->get('event_dispatcher'));

        return $instance;
    }

    /*
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /*
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->services['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session'));
    }

    /*
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('secured_area', '/user/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /*
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /*
     * Gets the private 'security.user.provider.concrete.main' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_MainService()
    {
        return $this->services['security.user.provider.concrete.main'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider($this->get('doctrine'), 'FOM\\UserBundle\\Entity\\User', 'username', NULL);
    }

    /*
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /*
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /*
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /*
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /*
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /*
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /*
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'MapbenderCoreBundle' => 'Mapbender\\CoreBundle\\MapbenderCoreBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'FOMCoreBundle' => 'FOM\\CoreBundle\\FOMCoreBundle',
                'FOMManagerBundle' => 'FOM\\ManagerBundle\\FOMManagerBundle',
                'FOMUserBundle' => 'FOM\\UserBundle\\FOMUserBundle',
                'MapbenderWmcBundle' => 'Mapbender\\WmcBundle\\MapbenderWmcBundle',
                'MapbenderWmsBundle' => 'Mapbender\\WmsBundle\\MapbenderWmsBundle',
                'MapbenderManagerBundle' => 'Mapbender\\ManagerBundle\\MapbenderManagerBundle',
                'MapbenderPrintBundle' => 'Mapbender\\PrintBundle\\MapbenderPrintBundle',
                'MapbenderMobileBundle' => 'Mapbender\\MobileBundle\\MapbenderMobileBundle',
                'OwsProxy3CoreBundle' => 'OwsProxy3\\CoreBundle\\OwsProxy3CoreBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'MapbenderDigitizerBundle' => 'Mapbender\\DigitizerBundle\\MapbenderDigitizerBundle',
                'MapbenderDataSourceBundle' => 'Mapbender\\DataSourceBundle\\MapbenderDataSourceBundle',
                'MapbenderCoordinatesUtilityBundle' => 'Mapbender\\CoordinatesUtilityBundle\\MapbenderCoordinatesUtilityBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'AsseticBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/assetic-bundle'),
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'MapbenderCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/mapbender/src/Mapbender/CoreBundle'),
                    'namespace' => 'Mapbender\\CoreBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'FOMCoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/fom/src/FOM/CoreBundle'),
                    'namespace' => 'FOM\\CoreBundle',
                ),
                'FOMManagerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/fom/src/FOM/ManagerBundle'),
                    'namespace' => 'FOM\\ManagerBundle',
                ),
                'FOMUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/fom/src/FOM/UserBundle'),
                    'namespace' => 'FOM\\UserBundle',
                ),
                'MapbenderWmcBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmcBundle'),
                    'namespace' => 'Mapbender\\WmcBundle',
                ),
                'MapbenderWmsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/mapbender/src/Mapbender/WmsBundle'),
                    'namespace' => 'Mapbender\\WmsBundle',
                ),
                'MapbenderManagerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/mapbender/src/Mapbender/ManagerBundle'),
                    'namespace' => 'Mapbender\\ManagerBundle',
                ),
                'MapbenderPrintBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/mapbender/src/Mapbender/PrintBundle'),
                    'namespace' => 'Mapbender\\PrintBundle',
                ),
                'MapbenderMobileBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/mapbender/src/Mapbender/MobileBundle'),
                    'namespace' => 'Mapbender\\MobileBundle',
                ),
                'OwsProxy3CoreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/owsproxy/src/OwsProxy3/CoreBundle'),
                    'namespace' => 'OwsProxy3\\CoreBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'MapbenderDigitizerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/mapbender/digitizer'),
                    'namespace' => 'Mapbender\\DigitizerBundle',
                ),
                'MapbenderDataSourceBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/mapbender/data-source'),
                    'namespace' => 'Mapbender\\DataSourceBundle',
                ),
                'MapbenderCoordinatesUtilityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/mapbender/coordinates-utility'),
                    'namespace' => 'Mapbender\\CoordinatesUtilityBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_driver' => 'pdo_pgsql',
            'database_host' => 'localhost',
            'database_port' => 5432,
            'database_name' => 'mapbender',
            'database_path' => NULL,
            'database_user' => 'postgres',
            'database_password' => 'postgres',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'localhost',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'fallback_locale' => 'en',
            'locale' => 'en',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'fom' => array(
                'server_name' => 'Mapbender',
                'server_version' => '3.0.8.1',
                'server_logo' => 'bundles/mapbendercore/image/logo_mb3.png',
            ),
            'cookie_secure' => false,
            'cookie_lifetime' => 3600,
            'ows_proxy3_logging' => false,
            'ows_proxy3_obfuscate_client_ip' => true,
            'ows_proxy3_host' => NULL,
            'ows_proxy3_port' => NULL,
            'ows_proxy3_connecttimeout' => 60,
            'ows_proxy3_timeout' => 90,
            'ows_proxy3_user' => NULL,
            'ows_proxy3_password' => NULL,
            'ows_proxy3_noproxy' => NULL,
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'cookie_lifetime' => 3600,
                'cookie_secure' => false,
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'translator.logging' => false,
            'data_collector.templates' => array(

            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdProjectContainerUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (__DIR__.'/assetic/routing.yml'),
            'router.cache_class_prefix' => 'appProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => 0,
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.role_hierarchy.roles' => array(

            ),
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.acl.permission_granting_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\PermissionGrantingStrategy',
            'security.acl.voter.class' => 'Symfony\\Component\\Security\\Acl\\Voter\\AclVoter',
            'security.acl.permission.map.class' => 'Symfony\\Component\\Security\\Acl\\Permission\\BasicPermissionMap',
            'security.acl.object_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\ObjectIdentityRetrievalStrategy',
            'security.acl.security_identity_retrieval_strategy.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\SecurityIdentityRetrievalStrategy',
            'security.acl.collection_cache.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\AclCollectionCache',
            'security.acl.cache.doctrine.class' => 'Symfony\\Component\\Security\\Acl\\Domain\\DoctrineAclCache',
            'security.acl.dbal.provider.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\MutableAclProvider',
            'security.acl.dbal.schema.class' => 'Symfony\\Component\\Security\\Acl\\Dbal\\Schema',
            'security.acl.dbal.schema_listener.class' => 'Symfony\\Bundle\\SecurityBundle\\EventListener\\AclSchemaListener',
            'security.acl.dbal.class_table_name' => 'acl_classes',
            'security.acl.dbal.entry_table_name' => 'acl_entries',
            'security.acl.dbal.oid_table_name' => 'acl_object_identities',
            'security.acl.dbal.oid_ancestors_table_name' => 'acl_object_identity_ancestors',
            'security.acl.dbal.sid_table_name' => 'acl_security_identities',
            'twig.class' => 'Twig\\Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig\\Loader\\ChainLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'MapbenderCoreBundle:form:fields.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.main' => NULL,
            ),
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'AsseticBundle',
                5 => 'DoctrineBundle',
                6 => 'SensioFrameworkExtraBundle',
                7 => 'DoctrineMigrationsBundle',
                8 => 'MapbenderCoreBundle',
                9 => 'SwiftmailerBundle',
                10 => 'FOMCoreBundle',
                11 => 'FOMManagerBundle',
                12 => 'FOMUserBundle',
                13 => 'MapbenderWmcBundle',
                14 => 'MapbenderWmsBundle',
                15 => 'MapbenderManagerBundle',
                16 => 'MapbenderPrintBundle',
                17 => 'MapbenderMobileBundle',
                18 => 'OwsProxy3CoreBundle',
                19 => 'DoctrineFixturesBundle',
                20 => 'MapbenderDigitizerBundle',
                21 => 'MapbenderDataSourceBundle',
                22 => 'MapbenderCoordinatesUtilityBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => ($this->targetDirs[2].'/../web'),
            'assetic.write_to' => ($this->targetDirs[2].'/../web'),
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.filter.sass.class' => 'Assetic\\Filter\\Sass\\SassFilter',
            'assetic.filter.sass.bin' => '/usr/bin/sass',
            'assetic.filter.sass.timeout' => NULL,
            'assetic.filter.sass.style' => NULL,
            'assetic.filter.sass.compass' => NULL,
            'assetic.filter.sass.precision' => NULL,
            'assetic.filter.sass.load_paths' => array(
                0 => ($this->targetDirs[2].'/../web'),
            ),
            'assetic.filter.sass.cache_location' => __DIR__,
            'assetic.filter.sass.enable_sourcemaps' => NULL,
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'doctrine_migrations.dir_name' => ($this->targetDirs[2].'/DoctrineMigrations'),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'mapbender.uploads_dir' => 'uploads',
            'mapbender.screenshot_path' => ($this->targetDirs[2].'/../web/app_screenshots'),
            'mapbender.selfregister' => false,
            'mapbender.max_registration_time' => 24,
            'mapbender.max_reset_time' => 24,
            'mapbender.cache_creation' => '2019-06-18T10:53:51+00:00',
            0 => '3.0.2',
            'signer.class' => 'Mapbender\\CoreBundle\\Component\\Signer',
            'assetic.filter.scss.class' => 'Eslider\\Filter\\ScssFilter',
            'mapbender.http_transport.service.class' => 'Mapbender\\Component\\Transport\\OwsProxyTransport',
            'mapbender.source.instancetunnel.service.class' => 'Mapbender\\CoreBundle\\Component\\Source\\Tunnel\\InstanceTunnelService',
            'mapbender.form_type.element.layertree.menu.class' => 'Mapbender\\CoreBundle\\Element\\Type\\LayerTreeMenuType',
            'mapbender.presenter.application.service.class' => 'Mapbender\\CoreBundle\\Component\\Presenter\\ApplicationService',
            'mapbender.presenter.application.config.service.class' => 'Mapbender\\CoreBundle\\Component\\Presenter\\Application\\ConfigService',
            'mapbender.presenter.application.cache.class' => 'Mapbender\\CoreBundle\\Component\\Cache\\ApplicationDataService',
            'mapbender.presenter.application.cache.backend.class' => 'Mapbender\\CoreBundle\\Component\\Cache\\Backend\\File',
            'cachable.mapbender.application.config' => false,
            'mapbender.source.typedirectory.service.class' => 'Mapbender\\CoreBundle\\Component\\Source\\TypeDirectoryService',
            'mapbender.element_factory.service.class' => 'Mapbender\\CoreBundle\\Component\\ElementFactory',
            'mapbender.uploads_manager.service.class' => 'Mapbender\\CoreBundle\\Component\\UploadsManager',
            'mapbender.yaml_application_importer.service.class' => 'Mapbender\\CoreBundle\\Component\\YamlApplicationImporter',
            'mapbender.source.url_processor.service.class' => 'Mapbender\\CoreBundle\\Component\\Source\\UrlProcessor',
            'mapbender.strict' => false,
            'mapbender.strict.element_api' => false,
            'mapbender.strict.asset.bundle_scopes' => false,
            'owsproxy.baseroute' => 'owsproxy3_core_owsproxy_entrypoint',
            'mapbender.asset_compiler.service.class' => 'Mapbender\\CoreBundle\\Asset\\AssetFactory',
            'mapbender.application_asset.service.class' => 'Mapbender\\CoreBundle\\Asset\\ApplicationAssetService',
            'mapbender.element_inventory.service.class' => 'Mapbender\\CoreBundle\\Component\\ElementInventoryService',
            'mapbender.cookieconsent' => false,
            'applications' => array(
                'manager' => array(
                    'title' => 'Mapbender Administration',
                    'template' => 'Mapbender\\ManagerBundle\\Template\\ManagerTemplate',
                    'excludeFromList' => true,
                    'published' => true,
                    'roles' => array(
                        0 => 'IS_AUTHENTICATED_ANONYMOUSLY',
                    ),
                ),
                'mb3-login' => array(
                    'title' => 'Mapbender Login',
                    'template' => 'Mapbender\\ManagerBundle\\Template\\LoginTemplate',
                    'excludeFromList' => true,
                    'published' => true,
                    'anonymous' => true,
                    'roles' => array(
                        0 => 'IS_AUTHENTICATED_ANONYMOUSLY',
                    ),
                ),
                'mapbender_user' => array(
                    'title' => 'Mapbender Demo Map',
                    'screenshot' => 'mapbender_user.png',
                    'description' => 'Fullscreen style, Simple map showing WMS use.',
                    'published' => true,
                    'template' => 'Mapbender\\CoreBundle\\Template\\Fullscreen',
                    'regionProperties' => array(
                        0 => array(
                            'name' => 'sidepane',
                            'properties' => array(
                                'name' => 'accordion',
                                'label' => 'mb.manager.template.region.accordion.label',
                            ),
                        ),
                    ),
                    'layersets' => array(
                        'main' => array(
                            'mapbender_users' => array(
                                'class' => 'Mapbender\\WmsBundle\\Entity\\WmsInstance',
                                'title' => 'Mapbender Users',
                                'url' => 'https://wms.wheregroup.com/cgi-bin/mapbender_user.xml',
                                'version' => '1.3.0',
                                'layers' => array(
                                    10 => array(
                                        'name' => 'Mapbender_User',
                                        'title' => 'User',
                                        'visible' => true,
                                        'legendurl' => 'https://wms.wheregroup.com/cgi-bin/mapbender_user.xml?version=1.3.0&service=WMS&request=GetLegendGraphic&sld_version=1.1.0&layer=Mapbender_User&format=image/png&STYLE=default',
                                    ),
                                    22 => array(
                                        'name' => 'Mapbender_Names',
                                        'title' => 'Name',
                                        'visible' => true,
                                        'queryable' => true,
                                    ),
                                ),
                                'info_format' => 'text/html',
                                'visible' => true,
                                'format' => 'image/png',
                                'transparent' => true,
                                'tiled' => false,
                                'opacity' => 85,
                            ),
                            'osm' => array(
                                'class' => 'Mapbender\\WmsBundle\\Entity\\WmsInstance',
                                'title' => 'OSM Demo',
                                'url' => 'https://osm-demo.wheregroup.com/service',
                                'version' => '1.3.0',
                                'layers' => array(
                                    30 => array(
                                        'name' => 'osm',
                                        'title' => 'Germany OSM Demo WhereGroup',
                                        'visible' => true,
                                    ),
                                ),
                                'info_format' => 'text/html',
                                'visible' => true,
                                'format' => 'image/png',
                                'transparent' => true,
                                'tiled' => true,
                                'opacity' => 100,
                            ),
                        ),
                        'overview' => array(
                            'osm_overview' => array(
                                'class' => 'Mapbender\\WmsBundle\\Entity\\WmsInstance',
                                'title' => 'OSM Demo',
                                'url' => 'https://osm-demo.wheregroup.com/service',
                                'version' => '1.3.0',
                                'layers' => array(
                                    40 => array(
                                        'name' => 'osm',
                                        'title' => 'Germany OSM Demo WhereGroup',
                                        'visible' => true,
                                    ),
                                ),
                                'tiled' => false,
                                'format' => 'image/png',
                                'transparent' => true,
                                'visible' => true,
                                'opacity' => 100,
                            ),
                        ),
                    ),
                    'elements' => array(
                        'toolbar' => array(
                            'layertree-button' => array(
                                'title' => 'mb.core.layertree.class.title',
                                'tooltip' => 'mb.core.layertree.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => true,
                                'icon' => 'iconLayertree',
                                'target' => 'layertreedialog',
                                'action' => 'open',
                            ),
                            'fi-button' => array(
                                'title' => 'mb.core.featureinfo.class.title',
                                'tooltip' => 'mb.core.featureinfo.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'icon' => 'iconInfoActive',
                                'label' => true,
                                'target' => 'featureinfo',
                                'deactivate' => 'deactivate',
                                'group' => 'featureinfo',
                            ),
                            'print-button' => array(
                                'title' => 'mb.core.printclient.class.title',
                                'tooltip' => 'mb.core.printclient.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => true,
                                'icon' => 'iconPrint',
                                'target' => 'printclient',
                                'action' => 'open',
                            ),
                            'imageexport-button' => array(
                                'title' => 'Image Export',
                                'tooltip' => 'Image Export',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => true,
                                'icon' => 'iconImageExport',
                                'target' => 'imageexport',
                                'action' => 'open',
                            ),
                            'legend-button' => array(
                                'title' => 'mb.core.legend.class.title',
                                'tooltip' => 'mb.core.legend.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => true,
                                'target' => 'legend',
                                'icon' => 'iconLegend',
                                'action' => 'open',
                            ),
                            'wmsloader-button' => array(
                                'title' => 'mb.wms.wmsloader.class.title',
                                'tooltip' => 'mb.wms.wmsloader.class.description',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => true,
                                'target' => 'wmsloader',
                                'icon' => 'iconWms',
                                'action' => 'open',
                            ),
                            'gps-button' => array(
                                'title' => 'mb.core.gpsposition.class.title',
                                'tooltip' => 'mb.core.gpsposition.class.description',
                                'class' => 'Mapbender\\CoreBundle\\Element\\GpsPosition',
                                'label' => true,
                                'target' => 'map',
                                'action' => 'open',
                            ),
                            'linerulerButton' => array(
                                'title' => 'mb.core.ruler.tag.measure',
                                'tooltip' => 'mb.core.ruler.tag.line',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'icon' => 'icon-line-ruler',
                                'label' => true,
                                'target' => 'lineruler',
                                'deactivate' => 'deactivate',
                                'group' => 'rulers',
                            ),
                            'arearulerButton' => array(
                                'title' => 'mb.core.ruler.tag.measure',
                                'tooltip' => 'mb.core.ruler.tag.area',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'icon' => 'icon-area-ruler',
                                'label' => true,
                                'target' => 'arearuler',
                                'deactivate' => 'deactivate',
                                'group' => 'rulers',
                            ),
                            'about' => array(
                                'title' => 'mb.core.aboutdialog.tag.about',
                                'tooltip' => 'mb.core.aboutdialog.tag.about',
                                'icon' => 'icon-about',
                                'label' => true,
                                'class' => 'Mapbender\\CoreBundle\\Element\\AboutDialog',
                            ),
                            'poiButton' => array(
                                'title' => 'mb.core.poi.class.title',
                                'tooltip' => 'mb.core.poi.class.description',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'icon' => 'iconPoi',
                                'label' => true,
                                'target' => 'poi',
                            ),
                        ),
                        'content' => array(
                            'map' => array(
                                'title' => 'mb.core.map.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Map',
                                'layersets' => array(
                                    0 => 'main',
                                ),
                                'srs' => 'EPSG:25832',
                                'units' => 'm',
                                'extents' => array(
                                    'start' => array(
                                        0 => 361000,
                                        1 => 5619000,
                                        2 => 371150,
                                        3 => 5625000,
                                    ),
                                    'max' => array(
                                        0 => -500000,
                                        1 => 4350000,
                                        2 => 1600000,
                                        3 => 6850000,
                                    ),
                                ),
                                'scales' => array(
                                    0 => 5000000,
                                    1 => 1000000,
                                    2 => 500000,
                                    3 => 100000,
                                    4 => 50000,
                                    5 => 25000,
                                    6 => 10000,
                                    7 => 7500,
                                    8 => 5000,
                                    9 => 2500,
                                    10 => 1000,
                                    11 => 500,
                                ),
                                'otherSrs' => array(
                                    0 => 'EPSG:25833',
                                    1 => 'EPSG:31466',
                                    2 => 'EPSG:31467',
                                    3 => 'EPSG:3857',
                                    4 => 'EPSG:4326',
                                ),
                            ),
                            'zoombar' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\ZoomBar',
                                'target' => 'map',
                                'components' => array(
                                    0 => 'pan',
                                    1 => 'history',
                                    2 => 'zoom_box',
                                    3 => 'zoom_max',
                                    4 => 'zoom_slider',
                                ),
                                'stepsize' => 50,
                                'stepbypixel' => true,
                                'anchor' => 'right-top',
                                'draggable' => false,
                            ),
                            'legend' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\Legend',
                                'target' => 'map',
                                'title' => 'mb.core.legend.class.title',
                                'elementType' => 'dialog',
                                'autoOpen' => false,
                                'displayType' => 'list',
                                'hideEmptyLayers' => true,
                                'noLegend' => 'No legend available',
                                'showWmsTitle' => true,
                                'showLayerTitle' => true,
                                'showGroupedLayerTitle' => true,
                            ),
                            'featureinfo' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\FeatureInfo',
                                'title' => 'mb.core.featureinfo.class.title',
                                'target' => 'map',
                                'deactivateOnClose' => false,
                                'onlyValid' => true,
                                'type' => 'dialog',
                                'displayType' => 'tabs',
                                'autoActivate' => false,
                                'printResult' => true,
                                'showOriginal' => true,
                                'width' => 500,
                                'height' => 500,
                            ),
                            'wmsloader' => array(
                                'title' => 'mb.wms.wmsloader.class.title',
                                'class' => 'Mapbender\\WmsBundle\\Element\\WmsLoader',
                                'target' => 'map',
                                'autoOpen' => false,
                                'defaultFormat' => 'image/png',
                                'defaultInfoFormat' => 'text/html',
                                'splitLayers' => false,
                            ),
                            'imageexport' => array(
                                'class' => 'Mapbender\\PrintBundle\\Element\\ImageExport',
                                'target' => 'map',
                                'title' => 'Image export',
                            ),
                            'printclient' => array(
                                'title' => 'mb.core.printclient.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\PrintClient',
                                'target' => 'map',
                                'file_prefix' => 'mapbender',
                                'templates' => array(
                                    0 => array(
                                        'template' => 'a4portrait',
                                        'label' => 'A4 Portrait',
                                    ),
                                    1 => array(
                                        'template' => 'a4landscape',
                                        'label' => 'A4 Landscape',
                                    ),
                                    2 => array(
                                        'template' => 'a3portrait',
                                        'label' => 'A3 Portrait',
                                    ),
                                    3 => array(
                                        'template' => 'a3landscape',
                                        'label' => 'A3 Landscape',
                                    ),
                                ),
                                'scales' => array(
                                    0 => 500,
                                    1 => 1000,
                                    2 => 5000,
                                    3 => 10000,
                                    4 => 25000,
                                    5 => 50000,
                                ),
                                'quality_levels' => array(
                                    0 => array(
                                        'dpi' => 72,
                                        'label' => 'Draft (72dpi)',
                                    ),
                                    1 => array(
                                        'dpi' => 288,
                                        'label' => 'Document (288dpi)',
                                    ),
                                ),
                                'rotatable' => true,
                                'legend' => true,
                                'legend_default_behaviour' => false,
                                'optional_fields' => array(
                                    'title' => array(
                                        'label' => 'Title',
                                        'options' => array(
                                            'required' => true,
                                        ),
                                    ),
                                ),
                            ),
                            'lineruler' => array(
                                'title' => 'mb.core.ruler.tag.line',
                                'tooltip' => 'ruler',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Ruler',
                                'target' => 'map',
                                'type' => 'line',
                            ),
                            'arearuler' => array(
                                'title' => 'mb.core.ruler.tag.area',
                                'tooltip' => 'area',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Ruler',
                                'target' => 'map',
                                'type' => 'area',
                            ),
                            'scalebar' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\ScaleBar',
                                'target' => 'map',
                                'anchor' => 'left-bottom',
                                'position' => array(
                                    0 => '10px',
                                    1 => '10px',
                                ),
                                'maxWidth' => 200,
                                'units' => array(
                                    0 => 'km',
                                ),
                            ),
                            'layertreedialog' => array(
                                'title' => 'mb.core.layertree.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Layertree',
                                'target' => 'map',
                                'type' => 'dialog',
                                'autoOpen' => false,
                                'showBaseSource' => true,
                                'layerRemove' => false,
                                'menu' => array(

                                ),
                            ),
                            'overview' => array(
                                'title' => 'mb.core.overview.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Overview',
                                'tooltip' => 'Overview',
                                'target' => 'map',
                                'layerset' => 'overview',
                                'width' => 200,
                                'height' => 100,
                                'anchor' => 'right-bottom',
                                'position' => array(
                                    0 => '0px',
                                    1 => '0px',
                                ),
                                'maximized' => true,
                                'fixed' => false,
                            ),
                            'scaledisplay' => array(
                                'title' => 'mb.core.scaledisplay.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\ScaleDisplay',
                                'tooltip' => 'Scale',
                                'target' => 'map',
                                'anchor' => 'left-top',
                                'scalePrefix' => 'Scale',
                                'unitPrefix' => true,
                            ),
                            'poi' => array(
                                'title' => 'mb.core.poi.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\POI',
                                'target' => 'map',
                                'body' => 'Please take a look at this POI',
                                'useMailto' => false,
                            ),
                        ),
                        'sidepane' => array(
                            'layertree' => array(
                                'title' => 'mb.core.layertree.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Layertree',
                                'target' => 'map',
                                'type' => 'element',
                                'autoOpen' => false,
                                'showBaseSource' => true,
                                'layerRemove' => true,
                                'menu' => array(
                                    0 => 'opacity',
                                    1 => 'zoomtolayer',
                                    2 => 'metadata',
                                ),
                            ),
                            'redlining' => array(
                                'title' => 'mb.core.redlining.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Redlining',
                                'target' => 'map',
                                'geometrytypes' => array(
                                    0 => 'point',
                                    1 => 'line',
                                    2 => 'polygon',
                                    3 => 'text',
                                    4 => 'rectangle',
                                ),
                                'display_type' => 'element',
                                'auto_activate' => false,
                                'deactivate_on_close' => false,
                            ),
                            'coordinatesutility' => array(
                                'title' => 'mb.coordinatesutility.class.title',
                                'class' => 'Mapbender\\CoordinatesUtilityBundle\\Element\\CoordinatesUtility',
                                'type' => 'element',
                                'target' => 'map',
                                'srsList' => array(

                                ),
                                'addMapSrsList' => true,
                                'zoomlevel' => 6,
                            ),
                            'html-about-mapbender' => array(
                                'title' => 'About Mapbender',
                                'class' => 'Mapbender\\CoreBundle\\Element\\HTMLElement',
                                'classes' => 'html-element-inline',
                                'content' => '<p>'."\n".'Mapbender is an '."\n".'</p></br>'."\n".'<p>'."\n".'<a href="https://www.osgeo.org/projects/mapbender/" target="_blank"><img src="https://mapbender.org/sites/default/files/osgeo-project-cmyk.png" alt="OSGeo Project"  title="OSGeo Project" width="100px" /></a>'."\n".'</p></br>'."\n".'<p>'."\n".'Find out more about OSGeo at '."\n".'</br>'."\n".'<a href="https://osgeo.org" target="_blank">https://www.osgeo.org</a>'."\n".'</br>'."\n".'<a href="https://osgeo.org/projects/mapbender/" target="_blank">https://www.osgeo.org/projects/mapbender/</a>',
                            ),
                        ),
                        'footer' => array(
                            'activityindicator' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\ActivityIndicator',
                                'title' => 'mb.core.activityindicator.class.title',
                                'activityClass' => 'mb-activity',
                                'ajaxActivityClass' => 'mb-activity-ajax',
                                'tileActivityClass' => 'mb-activity-tile',
                            ),
                            'coordinates' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\CoordinatesDisplay',
                                'title' => 'mb.core.coordinates.class.title',
                                'tooltip' => 'mb.core.coordinates.class.description',
                                'target' => 'map',
                                'label' => false,
                                'empty' => 'x: - y: -',
                                'prefix' => 'x: ',
                                'separator' => ' y: ',
                            ),
                            'srs' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\SrsSelector',
                                'title' => 'mb.core.srsselector.class.title',
                                'tooltip' => 'mb.core.srsselector.class.description',
                                'label' => false,
                                'target' => 'map',
                            ),
                            'scaleselector' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\ScaleSelector',
                                'title' => 'mb.core.scaleselector.class.title',
                                'tooltip' => 'mb.core.scaleselector.class.description',
                                'label' => false,
                                'target' => 'map',
                            ),
                            'copyrightButton' => array(
                                'title' => '© OpenStreetMap contributors',
                                'tooltip' => '© OpenStreetMap contributors',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => true,
                                'click' => 'https://www.openstreetmap.org/copyright',
                            ),
                            'HTML' => array(
                                'title' => 'HTML-powered by Mapbender',
                                'class' => 'Mapbender\\CoreBundle\\Element\\HTMLElement',
                                'content' => '<span style="color: #6FB536; font-weight:bold">powered by Mapbender</span>',
                                'classes' => 'html-element-inline',
                            ),
                        ),
                    ),
                ),
                'mapbender_user_basic' => array(
                    'title' => 'Mapbender Demo Map basic',
                    'screenshot' => 'mapbender_user_basic.png',
                    'description' => 'Fullscreen style, simple buttons, simple map showing WMS use.',
                    'published' => true,
                    'template' => 'Mapbender\\CoreBundle\\Template\\Fullscreen',
                    'custom_css' => '.toolBar {'."\n".'  background-color: rgba(0, 29, 122,0.9);'."\n".'  border-bottom: solid 2px rgb(197,43,69)'."\n".'}'."\n".''."\n".'.mb-element-zoombar .pan {'."\n".'  background-color: rgba(0, 29, 122, 0.9);'."\n".'  border: solid 1px #c0c0c0;'."\n".'  color: #fff;'."\n".'}'."\n".'.mb-element-zoombar .toolPane {'."\n".'  background-color: rgba(0, 29, 122, 0.9);'."\n".'}'."\n".''."\n".'.popup {'."\n".'  background-color: #FFFFFF;'."\n".'  background-image: none;'."\n".'}'."\n".'',
                    'layersets' => array(
                        'main' => array(
                            'mapbender_users' => array(
                                'class' => 'Mapbender\\WmsBundle\\Entity\\WmsInstance',
                                'title' => 'Mapbender Users',
                                'url' => 'https://wms.wheregroup.com/cgi-bin/mapbender_user.xml',
                                'version' => '1.3.0',
                                'layers' => array(
                                    10 => array(
                                        'name' => 'Mapbender_User',
                                        'title' => 'User',
                                        'visible' => true,
                                        'legendurl' => 'https://wms.wheregroup.com/cgi-bin/mapbender_user.xml?version=1.3.0&service=WMS&request=GetLegendGraphic&sld_version=1.1.0&layer=Mapbender_User&format=image/png&STYLE=default',
                                    ),
                                    22 => array(
                                        'name' => 'Mapbender_Names',
                                        'title' => 'Name',
                                        'visible' => true,
                                        'queryable' => true,
                                    ),
                                ),
                                'info_format' => 'text/html',
                                'visible' => true,
                                'format' => 'image/png',
                                'transparent' => true,
                                'tiled' => false,
                                'opacity' => 85,
                            ),
                            'osm' => array(
                                'class' => 'Mapbender\\WmsBundle\\Entity\\WmsInstance',
                                'title' => 'OSM Demo',
                                'url' => 'https://osm-demo.wheregroup.com/service',
                                'version' => '1.3.0',
                                'layers' => array(
                                    30 => array(
                                        'name' => 'osm',
                                        'title' => 'Germany OSM Demo WhereGroup',
                                        'visible' => true,
                                    ),
                                ),
                                'info_format' => 'text/html',
                                'visible' => true,
                                'format' => 'image/png',
                                'transparent' => true,
                                'tiled' => true,
                                'opacity' => 100,
                            ),
                        ),
                        'overview' => array(
                            'osm_overview' => array(
                                'class' => 'Mapbender\\WmsBundle\\Entity\\WmsInstance',
                                'title' => 'OSM Demo',
                                'url' => 'https://osm-demo.wheregroup.com/service',
                                'version' => '1.3.0',
                                'layers' => array(
                                    40 => array(
                                        'name' => 'osm',
                                        'title' => 'Germany OSM Demo WhereGroup',
                                        'visible' => true,
                                    ),
                                ),
                                'tiled' => false,
                                'format' => 'image/png',
                                'transparent' => true,
                                'visible' => true,
                                'opacity' => 100,
                            ),
                        ),
                    ),
                    'elements' => array(
                        'toolbar' => array(
                            'layertree-button' => array(
                                'title' => 'mb.core.layertree.class.title',
                                'tooltip' => 'mb.core.layertree.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => false,
                                'icon' => 'icon-layer-tree',
                                'target' => 'layertreedialog',
                                'action' => 'open',
                            ),
                            'fi-button' => array(
                                'title' => 'mb.core.featureinfo.class.title',
                                'tooltip' => 'mb.core.featureinfo.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'icon' => 'icon-feature-info',
                                'label' => false,
                                'target' => 'featureinfo',
                                'deactivate' => 'deactivate',
                                'group' => 'featureinfo',
                            ),
                            'print-button' => array(
                                'title' => 'mb.core.printclient.class.title',
                                'tooltip' => 'mb.core.printclient.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => false,
                                'icon' => 'iconPrint',
                                'target' => 'printclient',
                                'action' => 'open',
                            ),
                            'imageexport-button' => array(
                                'title' => 'Image Export',
                                'tooltip' => 'Image Export',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => false,
                                'icon' => 'icon-image-export',
                                'target' => 'imageexport',
                                'action' => 'open',
                            ),
                            'legend-button' => array(
                                'title' => 'mb.core.legend.class.title',
                                'tooltip' => 'mb.core.legend.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => false,
                                'target' => 'legend',
                                'icon' => 'icon-legend',
                                'action' => 'open',
                            ),
                            'wmsloader-button' => array(
                                'title' => 'mb.wms.wmsloader.class.title',
                                'tooltip' => 'mb.wms.wmsloader.class.description',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => false,
                                'target' => 'wmsloader',
                                'icon' => 'iconWms',
                                'action' => 'open',
                            ),
                            'gps-button' => array(
                                'title' => 'mb.core.gpsposition.class.title',
                                'tooltip' => 'mb.core.gpsposition.class.description',
                                'class' => 'Mapbender\\CoreBundle\\Element\\GpsPosition',
                                'label' => false,
                                'target' => 'map',
                                'action' => 'open',
                            ),
                            'linerulerButton' => array(
                                'title' => 'mb.core.ruler.tag.measure',
                                'tooltip' => 'mb.core.ruler.tag.line',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'icon' => 'icon-line-ruler',
                                'label' => false,
                                'target' => 'lineruler',
                                'deactivate' => 'deactivate',
                                'group' => 'rulers',
                            ),
                            'arearulerButton' => array(
                                'title' => 'mb.core.ruler.tag.measure',
                                'tooltip' => 'mb.core.ruler.tag.area',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'icon' => 'icon-area-ruler',
                                'label' => false,
                                'target' => 'arearuler',
                                'deactivate' => 'deactivate',
                                'group' => 'rulers',
                            ),
                            'about' => array(
                                'title' => 'mb.core.aboutdialog.tag.about',
                                'tooltip' => 'mb.core.aboutdialog.tag.about',
                                'icon' => 'icon-about',
                                'label' => false,
                                'class' => 'Mapbender\\CoreBundle\\Element\\AboutDialog',
                            ),
                            'coordinatesutility-button' => array(
                                'title' => 'mb.coordinatesutility.class.title',
                                'tooltip' => 'mb.coordinatesutility.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'icon' => 'iconGpsTarget',
                                'label' => false,
                                'target' => 'coordinatesutility',
                            ),
                        ),
                        'content' => array(
                            'map' => array(
                                'title' => 'Main Map',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Map',
                                'layersets' => array(
                                    0 => 'main',
                                ),
                                'srs' => 'EPSG:25832',
                                'units' => 'm',
                                'extents' => array(
                                    'start' => array(
                                        0 => 361000,
                                        1 => 5619000,
                                        2 => 371150,
                                        3 => 5625000,
                                    ),
                                    'max' => array(
                                        0 => 251000,
                                        1 => 5400000,
                                        2 => 475000,
                                        3 => 5850000,
                                    ),
                                ),
                                'scales' => array(
                                    0 => 500000,
                                    1 => 250000,
                                    2 => 125000,
                                    3 => 75000,
                                    4 => 50000,
                                    5 => 25000,
                                    6 => 10000,
                                    7 => 7500,
                                    8 => 5000,
                                    9 => 2500,
                                    10 => 1000,
                                    11 => 500,
                                ),
                                'otherSrs' => array(
                                    0 => 'EPSG:25833',
                                    1 => 'EPSG:31466',
                                    2 => 'EPSG:31467',
                                    3 => 'EPSG:3857',
                                    4 => 'EPSG:4326',
                                ),
                            ),
                            'zoombar' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\ZoomBar',
                                'target' => 'map',
                                'components' => array(
                                    0 => 'pan',
                                    1 => 'history',
                                    2 => 'zoom_box',
                                    3 => 'zoom_max',
                                    4 => 'zoom_slider',
                                ),
                                'stepsize' => 50,
                                'stepbypixel' => true,
                                'anchor' => 'right-top',
                                'draggable' => false,
                            ),
                            'legend' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\Legend',
                                'target' => 'map',
                                'title' => 'mb.core.legend.class.title',
                                'elementType' => 'dialog',
                                'autoOpen' => false,
                                'displayType' => 'list',
                                'hideEmptyLayers' => true,
                                'noLegend' => 'No legend available',
                                'showWmsTitle' => true,
                                'showLayerTitle' => true,
                                'showGroupedLayerTitle' => true,
                            ),
                            'featureinfo' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\FeatureInfo',
                                'title' => 'mb.core.featureinfo.class.title',
                                'target' => 'map',
                                'deactivateOnClose' => true,
                                'onlyValid' => true,
                                'type' => 'dialog',
                                'displayType' => 'tabs',
                                'autoActivate' => false,
                                'printResult' => false,
                                'showOriginal' => false,
                                'width' => 500,
                                'height' => 500,
                            ),
                            'wmsloader' => array(
                                'title' => 'mb.wms.wmsloader.class.title',
                                'class' => 'Mapbender\\WmsBundle\\Element\\WmsLoader',
                                'target' => 'map',
                                'autoOpen' => false,
                                'defaultFormat' => 'image/png',
                                'defaultInfoFormat' => 'text/html',
                                'splitLayers' => false,
                            ),
                            'imageexport' => array(
                                'class' => 'Mapbender\\PrintBundle\\Element\\ImageExport',
                                'target' => 'map',
                                'title' => 'Image export',
                            ),
                            'printclient' => array(
                                'title' => 'mb.core.printclient.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\PrintClient',
                                'target' => 'map',
                                'file_prefix' => 'mapbender',
                                'templates' => array(
                                    0 => array(
                                        'template' => 'a4portrait',
                                        'label' => 'A4 Portrait',
                                    ),
                                    1 => array(
                                        'template' => 'a4landscape',
                                        'label' => 'A4 Landscape',
                                    ),
                                    2 => array(
                                        'template' => 'a3portrait',
                                        'label' => 'A3 Portrait',
                                    ),
                                    3 => array(
                                        'template' => 'a3landscape',
                                        'label' => 'A3 Landscape',
                                    ),
                                ),
                                'scales' => array(
                                    0 => 500,
                                    1 => 1000,
                                    2 => 5000,
                                    3 => 10000,
                                    4 => 25000,
                                    5 => 50000,
                                ),
                                'quality_levels' => array(
                                    0 => array(
                                        'dpi' => 72,
                                        'label' => 'Draft (72dpi)',
                                    ),
                                    1 => array(
                                        'dpi' => 288,
                                        'label' => 'Document (288dpi)',
                                    ),
                                ),
                                'rotatable' => true,
                                'legend' => true,
                                'legend_default_behaviour' => false,
                                'optional_fields' => NULL,
                            ),
                            'lineruler' => array(
                                'title' => 'mb.core.ruler.tag.line',
                                'tooltip' => 'ruler',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Ruler',
                                'target' => 'map',
                                'type' => 'line',
                            ),
                            'arearuler' => array(
                                'title' => 'mb.core.ruler.tag.area',
                                'tooltip' => 'area',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Ruler',
                                'target' => 'map',
                                'type' => 'area',
                            ),
                            'scalebar' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\ScaleBar',
                                'target' => 'map',
                                'anchor' => 'left-bottom',
                                'position' => array(
                                    0 => '10px',
                                    1 => '10px',
                                ),
                                'maxWidth' => 200,
                                'units' => array(
                                    0 => 'km',
                                ),
                            ),
                            'layertreedialog' => array(
                                'title' => 'mb.core.layertree.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Layertree',
                                'target' => 'map',
                                'type' => 'dialog',
                                'autoOpen' => false,
                                'showBaseSource' => true,
                                'showHeader' => false,
                                'layerMenu' => false,
                                'layerRemove' => false,
                                'menu' => array(

                                ),
                            ),
                            'overview' => array(
                                'title' => 'mb.core.overview.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Overview',
                                'tooltip' => 'Overview',
                                'target' => 'map',
                                'layerset' => 'overview',
                                'width' => 200,
                                'height' => 100,
                                'anchor' => 'right-bottom',
                                'position' => array(
                                    0 => '0px',
                                    1 => '0px',
                                ),
                                'maximized' => true,
                                'fixed' => false,
                            ),
                            'coordinatesutility' => array(
                                'title' => 'mb.coordinatesutility.class.title',
                                'class' => 'Mapbender\\CoordinatesUtilityBundle\\Element\\CoordinatesUtility',
                                'type' => 'dialog',
                                'target' => 'map',
                                'srsList' => array(
                                    0 => array(
                                        'name' => 'EPSG:31466',
                                        'title' => '31466',
                                    ),
                                    1 => array(
                                        'name' => 'EPSG:31468',
                                        'title' => '31468',
                                    ),
                                    2 => array(
                                        'name' => 'EPSG:25832',
                                        'title' => '25832',
                                    ),
                                    3 => array(
                                        'name' => 'EPSG:25833',
                                        'title' => '25833',
                                    ),
                                    4 => array(
                                        'name' => 'EPSG:4326',
                                        'title' => '4326',
                                    ),
                                ),
                                'addMapSrsList' => true,
                                'zoomlevel' => 6,
                            ),
                        ),
                        'footer' => array(
                            'activityindicator' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\ActivityIndicator',
                                'title' => 'mb.core.activityindicator.class.title',
                                'activityClass' => 'mb-activity',
                                'ajaxActivityClass' => 'mb-activity-ajax',
                                'tileActivityClass' => 'mb-activity-tile',
                            ),
                            'coordinates' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\CoordinatesDisplay',
                                'title' => 'mb.core.coordinates.class.title',
                                'tooltip' => 'mb.core.coordinates.class.description',
                                'target' => 'map',
                                'label' => false,
                                'empty' => 'x: - y: -',
                                'prefix' => 'x: ',
                                'separator' => ' y: ',
                            ),
                            'srs' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\SrsSelector',
                                'title' => 'mb.core.srsselector.class.title',
                                'tooltip' => 'mb.core.srsselector.class.description',
                                'label' => false,
                                'target' => 'map',
                            ),
                            'scaleselector' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\ScaleSelector',
                                'title' => 'mb.core.scaleselector.class.title',
                                'tooltip' => 'mb.core.scaleselector.class.description',
                                'label' => false,
                                'target' => 'map',
                            ),
                            'copyrightButton' => array(
                                'title' => '© OpenStreetMap contributors',
                                'tooltip' => '© OpenStreetMap contributors',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => true,
                                'click' => 'https://www.openstreetmap.org/copyright',
                            ),
                            'HTML' => array(
                                'title' => 'HTML',
                                'class' => 'Mapbender\\CoreBundle\\Element\\HTMLElement',
                                'content' => '<span style="color: #6FB536; font-weight:bold" >powered by Mapbender</span>',
                                'classes' => 'html-element-inline',
                            ),
                        ),
                    ),
                ),
                'mapbender_mobile' => array(
                    'title' => 'Mapbender mobile',
                    'screenshot' => 'mapbender_mobile.png',
                    'description' => 'Mapbender mobile Application',
                    'published' => true,
                    'template' => 'Mapbender\\MobileBundle\\Template\\Mobile',
                    'layersets' => array(
                        'main' => array(
                            'mapbender_users' => array(
                                'class' => 'Mapbender\\WmsBundle\\Entity\\WmsInstance',
                                'title' => 'Mapbender Users',
                                'url' => 'https://wms.wheregroup.com/cgi-bin/mapbender_user.xml',
                                'version' => '1.3.0',
                                'layers' => array(
                                    10 => array(
                                        'name' => 'Mapbender_User',
                                        'title' => 'User',
                                        'visible' => true,
                                        'legendurl' => 'https://wms.wheregroup.com/cgi-bin/mapbender_user.xml?version=1.3.0&service=WMS&request=GetLegendGraphic&sld_version=1.1.0&layer=Mapbender_User&format=image/png&STYLE=default',
                                    ),
                                    22 => array(
                                        'name' => 'Mapbender_Names',
                                        'title' => 'Name',
                                        'visible' => true,
                                        'queryable' => true,
                                    ),
                                ),
                                'info_format' => 'text/html',
                                'visible' => true,
                                'format' => 'image/png',
                                'transparent' => true,
                                'tiled' => false,
                                'opacity' => 100,
                                'isBaseSource' => false,
                            ),
                            'osm' => array(
                                'class' => 'Mapbender\\WmsBundle\\Entity\\WmsInstance',
                                'title' => 'OSM Demo',
                                'url' => 'https://osm-demo.wheregroup.com/service',
                                'version' => '1.3.0',
                                'layers' => array(
                                    30 => array(
                                        'name' => 'osm',
                                        'title' => 'Germany OSM Demo WhereGroup',
                                        'visible' => true,
                                    ),
                                ),
                                'info_format' => 'text/html',
                                'visible' => true,
                                'format' => 'image/png',
                                'transparent' => true,
                                'tiled' => true,
                                'opacity' => 100,
                                'isBaseSource' => true,
                            ),
                            'osm_2' => array(
                                'class' => 'Mapbender\\WmsBundle\\Entity\\WmsInstance',
                                'title' => 'OSM Demo (with Opacity)',
                                'url' => 'https://osm-demo.wheregroup.com/service',
                                'version' => '1.3.0',
                                'layers' => array(
                                    30 => array(
                                        'name' => 'osm',
                                        'title' => 'Germany OSM Demo WhereGroup',
                                        'visible' => true,
                                    ),
                                ),
                                'info_format' => 'text/html',
                                'visible' => true,
                                'format' => 'image/png',
                                'transparent' => true,
                                'tiled' => false,
                                'opacity' => 30,
                                'isBaseSource' => true,
                            ),
                        ),
                    ),
                    'elements' => array(
                        'footer' => array(
                            'layertree-button' => array(
                                'title' => 'Themes',
                                'tooltip' => 'Themes',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => false,
                                'icon' => 'iconLayertree',
                                'target' => 'layertree',
                            ),
                            'bss-button' => array(
                                'title' => 'mb.core.basesourceswitcher.class.title',
                                'tooltip' => 'mb.core.basesourceswitcher.class.Description',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'icon' => 'iconLegend',
                                'label' => false,
                                'target' => 'basesourceswitcher',
                            ),
                            'gps-button' => array(
                                'title' => 'mb.core.gpsposition.class.title',
                                'tooltip' => 'mb.core.gpsposition.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\GpsPosition',
                                'label' => false,
                                'target' => 'map',
                                'action' => 'open',
                                'icon' => 'iconGps',
                                'refreshinterval' => '5000',
                                'average' => '1',
                                'follow' => false,
                                'centerOnFirstPosition' => true,
                                'zoomToAccuracy' => false,
                                'zoomToAccuracyOnFirstPosition' => true,
                            ),
                            'imprint-button' => array(
                                'title' => 'Imprint',
                                'tooltip' => 'Imprint',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => false,
                                'icon' => 'iconInfoActive',
                                'target' => 'imprint',
                            ),
                            'help-button' => array(
                                'title' => 'mb.core.aboutdialog.tag.help',
                                'tooltip' => 'mb.core.aboutdialog.tag.help',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => false,
                                'icon' => 'iconHelp',
                                'target' => 'help',
                            ),
                            'about-mapbender-button' => array(
                                'title' => 'mb.core.aboutdialog.tag.about',
                                'tooltip' => 'mb.core.aboutdialog.tag.about',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Button',
                                'label' => false,
                                'icon' => 'iconAbout',
                                'target' => 'html-about-mapbender',
                            ),
                        ),
                        'content' => array(
                            'map' => array(
                                'title' => 'mb.core.map.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Map',
                                'layersets' => array(
                                    0 => 'main',
                                ),
                                'srs' => 'EPSG:25832',
                                'units' => 'm',
                                'extents' => array(
                                    'start' => array(
                                        0 => 361000,
                                        1 => 5619000,
                                        2 => 371150,
                                        3 => 5625000,
                                    ),
                                    'max' => array(
                                        0 => -500000,
                                        1 => 4350000,
                                        2 => 1600000,
                                        3 => 6850000,
                                    ),
                                ),
                                'scales' => array(
                                    0 => 5000000,
                                    1 => 1000000,
                                    2 => 500000,
                                    3 => 100000,
                                    4 => 50000,
                                    5 => 25000,
                                    6 => 10000,
                                    7 => 7500,
                                    8 => 5000,
                                    9 => 2500,
                                    10 => 1000,
                                    11 => 500,
                                ),
                                'otherSrs' => array(
                                    0 => 'EPSG:25833',
                                    1 => 'EPSG:31466',
                                    2 => 'EPSG:31467',
                                    3 => 'EPSG:3857',
                                    4 => 'EPSG:4326',
                                ),
                            ),
                            'zoombar' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\ZoomBar',
                                'target' => 'map',
                                'components' => array(
                                    0 => 'zoom_in_out',
                                    1 => 'zoom_max',
                                ),
                                'stepsize' => 50,
                                'stepbypixel' => true,
                                'anchor' => 'left-top',
                                'draggable' => false,
                            ),
                        ),
                        'mobilePane' => array(
                            'layertree' => array(
                                'title' => 'Themes',
                                'class' => 'Mapbender\\CoreBundle\\Element\\Layertree',
                                'target' => 'map',
                                'type' => 'element',
                                'autoOpen' => false,
                                'showBaseSource' => false,
                                'layerRemove' => false,
                                'menu' => array(

                                ),
                            ),
                            'featureinfo' => array(
                                'class' => 'Mapbender\\CoreBundle\\Element\\FeatureInfo',
                                'title' => 'mb.core.featureinfo.class.title',
                                'target' => 'map',
                                'type' => 'element',
                                'deactivateOnClose' => false,
                                'autoActivate' => true,
                                'printResult' => false,
                                'displayType' => 'tabs',
                                'onlyValid' => true,
                            ),
                            'imprint' => array(
                                'title' => 'Imprint',
                                'class' => 'Mapbender\\CoreBundle\\Element\\HTMLElement',
                                'content' => '<div style="color: #6FB536; font-weight:bold" >powered by Mapbender. Read more about Mapbender at the <a href="https://www.mapbender.org" target="_blank">Mapbender Project Page</a>.</div>',
                                'classes' => 'html-element-inline',
                            ),
                            'help' => array(
                                'title' => 'mb.core.aboutdialog.tag.help',
                                'class' => 'Mapbender\\CoreBundle\\Element\\HTMLElement',
                                'content' => 'Enjoy the new Mapbender mobile Template. Please note that not all elements can be used in the mobile application. <div style="color: #6FB536; font-weight:bold">Find out more about the Mapbender mobile in the <a href="https://doc.mapbender.org/en/customization/mapbender_templates.html" target="_blank">Template Documentation</a>.</div>',
                                'classes' => 'html-element-inline',
                            ),
                            'basesourceswitcher' => array(
                                'title' => 'mb.core.basesourceswitcher.class.title',
                                'tooltip' => 'mb.core.basesourceswitcher.class.title',
                                'class' => 'Mapbender\\CoreBundle\\Element\\BaseSourceSwitcher',
                                'target' => 'map',
                                'display' => 'mobile',
                                'instancesets' => array(
                                    'is1' => array(
                                        'title' => 'OSM Demo (with opacity)',
                                        'cprTitle' => NULL,
                                        'cprUrl' => NULL,
                                        'group' => NULL,
                                        'instances' => array(
                                            0 => 'osm_2',
                                        ),
                                    ),
                                    'is2' => array(
                                        'title' => 'OSM Demo',
                                        'cprTitle' => NULL,
                                        'cprUrl' => NULL,
                                        'group' => NULL,
                                        'instances' => array(
                                            0 => 'osm',
                                        ),
                                    ),
                                ),
                            ),
                            'html-about-mapbender' => array(
                                'title' => 'mb.core.aboutdialog.tag.about',
                                'class' => 'Mapbender\\CoreBundle\\Element\\HTMLElement',
                                'classes' => 'html-element-inline',
                                'content' => '<p>'."\n".'Mapbender is an '."\n".'</p></br>'."\n".'<p>'."\n".'<a href="https://www.osgeo.org/projects/mapbender/" target="_blank"><img src="https://mapbender.org/sites/default/files/osgeo-project-cmyk.png" alt="OSGeo Project"  title="OSGeo Project" width="100px" /></a>'."\n".'</p></br>'."\n".'<p>'."\n".'Find out more about OSGeo at '."\n".'</br>'."\n".'<a href="https://osgeo.org" target="_blank">https://www.osgeo.org</a>'."\n".'</br>'."\n".'<a href="https://osgeo.org/projects/mapbender/" target="_blank">https://www.osgeo.org/projects/mapbender/</a>',
                            ),
                        ),
                    ),
                ),
            ),
            'mapbender.branding.name' => 'Mapbender',
            'mapbender.version' => '3.0.8.1',
            'mapbender.branding.logo' => 'bundles/mapbendercore/image/logo_mb3.png',
            'branding.project_name' => 'Mapbender',
            'branding.project_version' => '3.0.8.1',
            'branding.logo' => 'bundles/mapbendercore/image/logo_mb3.png',
            'mapbender.sitelinks' => array(

            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'localhost',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'fom_manager.route_prefix' => '/manager',
            'fom_user.selfregister' => false,
            'fom_user.reset_password' => true,
            'fom_user.max_registration_time' => 1,
            'fom_user.max_reset_time' => 1,
            'fom_user.mail_from_name' => 'Wizard of Oz',
            'fom_user.mail_from_address' => 'wizard@oz.net',
            'fom_user.profile_entity' => 'FOM\\UserBundle\\Entity\\BasicProfile',
            'fom_user.profile_formtype' => 'FOM\\UserBundle\\Form\\Type\\BasicProfileType',
            'fom_user.profile_template' => 'FOMUserBundle:User:basic_profile.html.twig',
            'fom_user.profile_assets' => array(
                'css' => array(

                ),
                'js' => array(

                ),
            ),
            'fom_user.self_registration_groups' => array(
                0 => 'Self Registered',
                1 => 'Demo Group',
            ),
            'fom_user.user_own_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
            ),
            'fom_user.use_sspi' => false,
            'fom_user.trust_sspi' => false,
            'fom_user.auto_create_log_table' => false,
            'fom_user.login_check_log_time' => '-5 minutes',
            'fom_user.login_attempts_before_delay' => 3,
            'fom_user.login_delay_after_fail' => 5,
            'fom_user.security.access.rootaccount.voter.class' => 'FOM\\UserBundle\\Security\\Authorization\\Voter\\RootAccountVoter',
            'fom_user.failed_login_listener.class' => 'FOM\\UserBundle\\EventListener\\FailedLoginListener',
            'fom_user.user_profile_listener.class' => 'FOM\\UserBundle\\EventListener\\UserProfileListener',
            'fom.identities.provider.class' => 'FOM\\UserBundle\\Component\\FOMIdentitiesProvider',
            'fom.user_helper.service.class' => 'FOM\\UserBundle\\Component\\UserHelperService',
            'mapbender.source.wms.service.class' => 'Mapbender\\WmsBundle\\Component\\Presenter\\WmsSourceService',
            'mapbender.importer.source.wms.service.class' => 'Mapbender\\WmsBundle\\Component\\Wms\\Importer',
            'wmsloader.example_url' => 'https://wms.wheregroup.com/cgi-bin/mapbender_user.xml?VERSION=1.3.0&REQUEST=GetCapabilities&SERVICE=WMS',
            'mapbender.preview.element.dimensionshandler' => true,
            'mapbender.preview.layer_order.wms' => true,
            'mapbender.manager.element_form_factory.service.class' => 'Mapbender\\ManagerBundle\\Component\\ElementFormFactory',
            'mapbender.application_importer.service.class' => 'Mapbender\\ManagerBundle\\Component\\ImportHandler',
            'mapbender.application_exporter.service.class' => 'Mapbender\\ManagerBundle\\Component\\ExportHandler',
            'mapbender.strict.element_api.form_type' => false,
            'mapbender.imageexport.service.class' => 'Mapbender\\PrintBundle\\Component\\ImageExportService',
            'mapbender.imageexport.resource_dir' => ($this->targetDirs[2].'/Resources/MapbenderPrintBundle'),
            'mapbender.imageexport.temp_dir' => NULL,
            'mapbender.imageexport.image_transport.service.class' => 'Mapbender\\PrintBundle\\Component\\Transport\\ImageTransport',
            'mapbender.imageexport.renderer.wms.class' => 'Mapbender\\PrintBundle\\Component\\LayerRendererWms',
            'mapbender.imaageexport.renderer.wms.max_getmap_size' => 8192,
            'mapbender.imaageexport.renderer.wms.max_getmap_size.x' => 8192,
            'mapbender.imaageexport.renderer.wms.max_getmap_size.y' => 8192,
            'mapbender.imaageexport.renderer.wms.tile_buffer' => 512,
            'mapbender.imaageexport.renderer.wms.tile_buffer.x' => 512,
            'mapbender.imaageexport.renderer.wms.tile_buffer.y' => 512,
            'mapbender.imageexport.renderer.geojson.class' => 'Mapbender\\PrintBundle\\Component\\LayerRendererGeoJson',
            'mapbender.imageexport.renderer.markers.class' => 'Mapbender\\PrintBundle\\Component\\LayerRendererMarkers',
            'mapbender.print.service.class' => 'Mapbender\\PrintBundle\\Component\\PrintService',
            'mapbender.print.resource_dir' => ($this->targetDirs[2].'/Resources/MapbenderPrintBundle'),
            'mapbender.print.temp_dir' => NULL,
            'mapbender.print.template_dir' => ($this->targetDirs[2].'/Resources/MapbenderPrintBundle/templates'),
            'mapbender.print.legend_handler.service.class' => 'Mapbender\\PrintBundle\\Component\\LegendHandler',
            'mapbender.print.template_parser.service.class' => 'Mapbender\\PrintBundle\\Component\\OdgParser',
            'mapbender.print_service_bridge.service.class' => 'Mapbender\\PrintBundle\\Component\\Service\\PrintServiceBridge',
            'mapbender.print_plugin_host.service.class' => 'Mapbender\\PrintBundle\\Component\\Service\\PrintPluginHost',
            'mapbender.print.plugin.digitizer.class' => 'Mapbender\\PrintBundle\\Component\\Plugin\\DigitizerPrintPlugin',
            'mapbender.print.plugin.digitizer.paramkey.featuretypes' => 'featuretypes',
            'mapbender.print.plugin.queue.class' => 'Mapbender\\PrintBundle\\Component\\Plugin\\PrintQueuePlugin',
            'mapbender.print.queueable' => false,
            'mapbender.print.queue.storage_dir' => ($this->targetDirs[2].'/../web/prints'),
            'mapbender.print.queue.memory_limit' => '1G',
            'mapbender.form_type.element.printclient.class' => 'Mapbender\\PrintBundle\\Element\\Type\\PrintClientAdminType',
            'owsproxy.logging' => false,
            'owsproxy.obfuscate_client_ip' => true,
            'owsproxy.proxy' => array(
                'host' => NULL,
                'port' => NULL,
                'connecttimeout' => 60,
                'timeout' => 90,
                'user' => NULL,
                'password' => NULL,
                'checkssl' => true,
                'noproxy' => array(

                ),
            ),
            'owsproxy.logginglistener.class' => 'OwsProxy3\\CoreBundle\\EventListener\\LoggingListener',
            'console.command.ids' => array(
                0 => 'doctrine_cache.contains_command',
                1 => 'doctrine_cache.delete_command',
                2 => 'doctrine_cache.flush_command',
                3 => 'doctrine_cache.stats_command',
                4 => 'doctrine.database_create_command',
                5 => 'doctrine.database_drop_command',
                6 => 'doctrine.generate_entities_command',
                7 => 'doctrine.query_sql_command',
                8 => 'doctrine.cache_clear_metadata_command',
                9 => 'doctrine.cache_clear_query_cache_command',
                10 => 'doctrine.cache_clear_result_command',
                11 => 'doctrine.cache_collection_region_command',
                12 => 'doctrine.mapping_convert_command',
                13 => 'doctrine.schema_create_command',
                14 => 'doctrine.schema_drop_command',
                15 => 'doctrine.ensure_production_settings_command',
                16 => 'doctrine.clear_entity_region_command',
                17 => 'doctrine.database_import_command',
                18 => 'doctrine.mapping_info_command',
                19 => 'doctrine.clear_query_region_command',
                20 => 'doctrine.query_dql_command',
                21 => 'doctrine.schema_update_command',
                22 => 'doctrine.schema_validate_command',
                23 => 'doctrine.mapping_import_command',
                24 => 'doctrine_migrations.diff_command',
                25 => 'doctrine_migrations.execute_command',
                26 => 'doctrine_migrations.generate_command',
                27 => 'doctrine_migrations.latest_command',
                28 => 'doctrine_migrations.migrate_command',
                29 => 'doctrine_migrations.status_command',
                30 => 'doctrine_migrations.version_command',
                31 => 'mapbender.command.migrations_install',
                32 => 'doctrine.fixtures_load_command',
            ),
            'container.compilation_timestamp_float' => 1560855231.59683,
        );
    }
}

class DoctrineORMEntityManager_0000000016ec78880000000069683fdab0b72ca0a0701cd26e832430523a6d88 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5d08c2bfe8806779793687 = null;
    private $initializer5d08c2bfe8813656775717 = null;
    private static $publicProperties5d08c2bfe87e5478511178 = array(
        
    );
    public function getConnection()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getConnection', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getMetadataFactory', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getExpressionBuilder', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'beginTransaction', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getCache', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'transactional', array('func' => $func), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->transactional($func);
    }
    public function commit()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'commit', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->commit();
    }
    public function rollback()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'rollback', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getClassMetadata', array('className' => $className), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'createQuery', array('dql' => $dql), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'createNamedQuery', array('name' => $name), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'createQueryBuilder', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'flush', array('entity' => $entity), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'clear', array('entityName' => $entityName), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->clear($entityName);
    }
    public function close()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'close', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->close();
    }
    public function persist($entity)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'persist', array('entity' => $entity), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'remove', array('entity' => $entity), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'refresh', array('entity' => $entity), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'detach', array('entity' => $entity), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'merge', array('entity' => $entity), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'contains', array('entity' => $entity), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getEventManager', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getConfiguration', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'isOpen', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getUnitOfWork', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getProxyFactory', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'initializeObject', array('obj' => $obj), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'getFilters', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'isFiltersStateClean', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'hasFilters', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return $this->valueHolder5d08c2bfe8806779793687->hasFilters();
    }
    public function __construct($initializer)
    {
        $this->initializer5d08c2bfe8813656775717 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, '__get', array('name' => $name), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        if (isset(self::$publicProperties5d08c2bfe87e5478511178[$name])) {
            return $this->valueHolder5d08c2bfe8806779793687->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d08c2bfe8806779793687;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder5d08c2bfe8806779793687;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d08c2bfe8806779793687;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder5d08c2bfe8806779793687;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, '__isset', array('name' => $name), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d08c2bfe8806779793687;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder5d08c2bfe8806779793687;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, '__unset', array('name' => $name), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d08c2bfe8806779793687;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder5d08c2bfe8806779793687;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, '__clone', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        $this->valueHolder5d08c2bfe8806779793687 = clone $this->valueHolder5d08c2bfe8806779793687;
    }
    public function __sleep()
    {
        $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, '__sleep', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
        return array('valueHolder5d08c2bfe8806779793687');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5d08c2bfe8813656775717 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5d08c2bfe8813656775717;
    }
    public function initializeProxy()
    {
        return $this->initializer5d08c2bfe8813656775717 && ($this->initializer5d08c2bfe8813656775717->__invoke($valueHolder5d08c2bfe8806779793687, $this, 'initializeProxy', array(), $this->initializer5d08c2bfe8813656775717) || 1) && $this->valueHolder5d08c2bfe8806779793687 = $valueHolder5d08c2bfe8806779793687;
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder5d08c2bfe8806779793687;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5d08c2bfe8806779793687;
    }
}

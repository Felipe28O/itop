<?php

namespace ContainerWgidm6h;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/*
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcProdProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters = [];
    private $targetDirs = [];

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'combodo\\itop\\portal\\controller\\browsebrickcontroller' => 'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController',
            'combodo\\itop\\portal\\controller\\createbrickcontroller' => 'Combodo\\iTop\\Portal\\Controller\\CreateBrickController',
            'combodo\\itop\\portal\\controller\\defaultcontroller' => 'Combodo\\iTop\\Portal\\Controller\\DefaultController',
            'combodo\\itop\\portal\\controller\\managebrickcontroller' => 'Combodo\\iTop\\Portal\\Controller\\ManageBrickController',
            'combodo\\itop\\portal\\controller\\objectcontroller' => 'Combodo\\iTop\\Portal\\Controller\\ObjectController',
            'combodo\\itop\\portal\\controller\\sessionmessagecontroller' => 'Combodo\\iTop\\Portal\\Controller\\SessionMessageController',
            'combodo\\itop\\portal\\controller\\userprofilebrickcontroller' => 'Combodo\\iTop\\Portal\\Controller\\UserProfileBrickController',
            'combodo\\itop\\portal\\eventlistener\\applicationcontextsetpluginpropertyclass' => 'Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetPluginPropertyClass',
            'combodo\\itop\\portal\\eventlistener\\applicationcontextseturlmakerclass' => 'Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetUrlMakerClass',
            'combodo\\itop\\portal\\eventlistener\\cssfromsasscompiler' => 'Combodo\\iTop\\Portal\\EventListener\\CssFromSassCompiler',
            'combodo\\itop\\portal\\eventlistener\\exceptionlistener' => 'Combodo\\iTop\\Portal\\EventListener\\ExceptionListener',
            'combodo\\itop\\portal\\eventlistener\\userprovider' => 'Combodo\\iTop\\Portal\\EventListener\\UserProvider',
            'combodo\\itop\\portal\\twig\\appextension' => 'Combodo\\iTop\\Portal\\Twig\\AppExtension',
            'moduledesign' => 'ModuleDesign',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        ];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetPluginPropertyClass' => 'getApplicationContextSetPluginPropertyClassService',
            'Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetUrlMakerClass' => 'getApplicationContextSetUrlMakerClassService',
            'Combodo\\iTop\\Portal\\EventListener\\CssFromSassCompiler' => 'getCssFromSassCompilerService',
            'Combodo\\iTop\\Portal\\EventListener\\UserProvider' => 'getUserProviderService',
            'ModuleDesign' => 'getModuleDesignService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'url_generator' => 'getUrlGeneratorService',
            'validate_request_listener' => 'getValidateRequestListenerService',
        ];
        $this->fileMap = [
            'Combodo\\iTop\\Portal\\Controller\\BrowseBrickController' => 'getBrowseBrickControllerService.php',
            'Combodo\\iTop\\Portal\\Controller\\CreateBrickController' => 'getCreateBrickControllerService.php',
            'Combodo\\iTop\\Portal\\Controller\\DefaultController' => 'getDefaultControllerService.php',
            'Combodo\\iTop\\Portal\\Controller\\ManageBrickController' => 'getManageBrickControllerService.php',
            'Combodo\\iTop\\Portal\\Controller\\ObjectController' => 'getObjectControllerService.php',
            'Combodo\\iTop\\Portal\\Controller\\SessionMessageController' => 'getSessionMessageControllerService.php',
            'Combodo\\iTop\\Portal\\Controller\\UserProfileBrickController' => 'getUserProfileBrickControllerService.php',
            'Combodo\\iTop\\Portal\\EventListener\\ExceptionListener' => 'getExceptionListenerService.php',
            'Combodo\\iTop\\Portal\\Twig\\AppExtension' => 'getAppExtensionService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'brick_collection' => 'getBrickCollectionService.php',
            'brick_controller_helper' => 'getBrickControllerHelperService.php',
            'browse_brick' => 'getBrowseBrickService.php',
            'cache.app' => 'getCache_AppService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system' => 'getCache_SystemService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'combodo.current_contact.photo_url' => 'getCombodo_CurrentContact_PhotoUrlService.php',
            'combodo.current_user' => 'getCombodo_CurrentUserService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'context_manipulator' => 'getContextManipulatorService.php',
            'debug.stopwatch' => 'getDebug_StopwatchService.php',
            'file_locator' => 'getFileLocatorService.php',
            'filesystem' => 'getFilesystemService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'lifecycle_validator' => 'getLifecycleValidatorService.php',
            'navigation_rule_helper' => 'getNavigationRuleHelperService.php',
            'object_form_handler' => 'getObjectFormHandlerService.php',
            'request_manipulator' => 'getRequestManipulatorService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'scope_validator' => 'getScopeValidatorService.php',
            'security_helper' => 'getSecurityHelperService.php',
            'service_locator.gjlkir6' => 'getServiceLocator_Gjlkir6Service.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'session.handler' => 'getSession_HandlerService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService.php',
            'session.storage.native' => 'getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'session_message_helper' => 'getSessionMessageHelperService.php',
            'twig' => 'getTwigService.php',
            'twig.cache_warmer' => 'getTwig_CacheWarmerService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService.php',
            'twig.loader' => 'getTwig_LoaderService.php',
            'twig.profile' => 'getTwig_ProfileService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => 'getTwig_TemplateCacheWarmerService.php',
            'ui_extensions_helper' => 'getUiExtensionsHelperService.php',
            'uri_signer' => 'getUriSignerService.php',
        ];
        $this->privates = [
            'session.storage' => true,
            'Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetPluginPropertyClass' => true,
            'Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetUrlMakerClass' => true,
            'Combodo\\iTop\\Portal\\EventListener\\CssFromSassCompiler' => true,
            'Combodo\\iTop\\Portal\\EventListener\\ExceptionListener' => true,
            'Combodo\\iTop\\Portal\\EventListener\\UserProvider' => true,
            'Combodo\\iTop\\Portal\\Twig\\AppExtension' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'cache.default_clearer' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.debug_handlers_listener' => true,
            'debug.file_link_formatter' => true,
            'debug.stopwatch' => true,
            'file_locator' => true,
            'fragment.handler' => true,
            'fragment.renderer.inline' => true,
            'kernel.class_cache.cache_warmer' => true,
            'locale_listener' => true,
            'logger' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'service_locator.gjlkir6' => true,
            'session.handler' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
        ];
        $this->aliases = [
            'cache.app_clearer' => 'cache.default_clearer',
            'router' => 'url_generator',
            'session.storage' => 'session.storage.native',
        ];

        $this->privates['service_container'] = function () {
            include_once $this->targetDirs[4].'/env-production/itop-portal-base/portal/src/EventListener/ApplicationContextSetPluginPropertyClass.php';
            include_once $this->targetDirs[4].'/env-production/itop-portal-base/portal/src/EventListener/ApplicationContextSetUrlMakerClass.php';
            include_once $this->targetDirs[4].'/env-production/itop-portal-base/portal/src/EventListener/CssFromSassCompiler.php';
            include_once $this->targetDirs[4].'/lib/symfony/dependency-injection/ContainerAwareInterface.php';
            include_once $this->targetDirs[4].'/env-production/itop-portal-base/portal/src/EventListener/UserProvider.php';
            include_once $this->targetDirs[4].'/core/designdocument.class.inc.php';
            include_once $this->targetDirs[4].'/core/moduledesign.class.inc.php';
            include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once $this->targetDirs[4].'/lib/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once $this->targetDirs[4].'/lib/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/event-dispatcher/EventDispatcher.php';
            include_once $this->targetDirs[4].'/lib/symfony/event-dispatcher/ContainerAwareEventDispatcher.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/HttpKernelInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/TerminableInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/HttpKernel.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-foundation/RequestStack.php';
            include_once $this->targetDirs[4].'/lib/symfony/config/ConfigCacheFactoryInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/EventListener/SessionListener.php';
            include_once $this->targetDirs[4].'/lib/symfony/dependency-injection/ServiceLocator.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/EventListener/SaveSessionListener.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once $this->targetDirs[4].'/lib/symfony/routing/RequestContext.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/EventListener/RouterListener.php';
            include_once $this->targetDirs[4].'/lib/psr/log/Psr/Log/LoggerInterface.php';
            include_once $this->targetDirs[4].'/lib/psr/log/Psr/Log/AbstractLogger.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/Log/Logger.php';
            include_once $this->targetDirs[4].'/lib/symfony/routing/RequestContextAwareInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/routing/RouterInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/routing/Router.php';
            include_once $this->targetDirs[4].'/lib/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once $this->targetDirs[4].'/lib/symfony/framework-bundle/Routing/Router.php';
        };
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /*
     * Gets the public 'ModuleDesign' shared autowired service.
     *
     * @return \ModuleDesign
     */
    protected function getModuleDesignService()
    {
        return $this->services['ModuleDesign'] = new \ModuleDesign($this->getEnv('string:PORTAL_ID'));
    }

    /*
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetPluginPropertyClass']) ? $this->services['Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetPluginPropertyClass'] : ($this->services['Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetPluginPropertyClass'] = new \Combodo\iTop\Portal\EventListener\ApplicationContextSetPluginPropertyClass())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 300);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetUrlMakerClass']) ? $this->services['Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetUrlMakerClass'] : $this->getApplicationContextSetUrlMakerClassService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 400);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['Combodo\\iTop\\Portal\\EventListener\\CssFromSassCompiler']) ? $this->services['Combodo\\iTop\\Portal\\EventListener\\CssFromSassCompiler'] : $this->getCssFromSassCompilerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 200);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['Combodo\\iTop\\Portal\\EventListener\\ExceptionListener']) ? $this->services['Combodo\\iTop\\Portal\\EventListener\\ExceptionListener'] : $this->load('getExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'], 500);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['Combodo\\iTop\\Portal\\EventListener\\UserProvider']) ? $this->services['Combodo\\iTop\\Portal\\EventListener\\UserProvider'] : $this->getUserProviderService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 500);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : ($this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : ($this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : ($this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : ($this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load('getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'], -128);

        return $instance;
    }

    /*
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : ($this->services['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())) && false ?: '_'}), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : ($this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver())) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : ($this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver())) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : ($this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver())) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : ($this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver())) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : ($this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())) && false ?: '_'};
        }, 6)));
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
     * Gets the public 'url_generator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getUrlGeneratorService()
    {
        $this->services['url_generator'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'kernel:loadRoutes', ['cache_dir' => $this->targetDirs[0], 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Combodo\\iTop\\Portal\\Routing\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcProdProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcProdProjectContainerUrlMatcher', 'strict_requirements' => NULL, 'resource_type' => 'service'], ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : ($this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())) && false ?: '_'});

        return $instance;
    }

    /*
     * Gets the private 'Combodo\iTop\Portal\EventListener\ApplicationContextSetPluginPropertyClass' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\EventListener\ApplicationContextSetPluginPropertyClass
     */
    protected function getApplicationContextSetPluginPropertyClassService()
    {
        return $this->services['Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetPluginPropertyClass'] = new \Combodo\iTop\Portal\EventListener\ApplicationContextSetPluginPropertyClass();
    }

    /*
     * Gets the private 'Combodo\iTop\Portal\EventListener\ApplicationContextSetUrlMakerClass' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\EventListener\ApplicationContextSetUrlMakerClass
     */
    protected function getApplicationContextSetUrlMakerClassService()
    {
        return $this->services['Combodo\\iTop\\Portal\\EventListener\\ApplicationContextSetUrlMakerClass'] = new \Combodo\iTop\Portal\EventListener\ApplicationContextSetUrlMakerClass($this->parameters['combodo.portal.instance.conf']);
    }

    /*
     * Gets the private 'Combodo\iTop\Portal\EventListener\CssFromSassCompiler' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\EventListener\CssFromSassCompiler
     */
    protected function getCssFromSassCompilerService()
    {
        return $this->services['Combodo\\iTop\\Portal\\EventListener\\CssFromSassCompiler'] = new \Combodo\iTop\Portal\EventListener\CssFromSassCompiler($this->parameters['combodo.portal.instance.conf']);
    }

    /*
     * Gets the private 'Combodo\iTop\Portal\EventListener\UserProvider' shared autowired service.
     *
     * @return \Combodo\iTop\Portal\EventListener\UserProvider
     */
    protected function getUserProviderService()
    {
        $this->services['Combodo\\iTop\\Portal\\EventListener\\UserProvider'] = $instance = new \Combodo\iTop\Portal\EventListener\UserProvider(${($_ = isset($this->services['ModuleDesign']) ? $this->services['ModuleDesign'] : ($this->services['ModuleDesign'] = new \ModuleDesign($this->getEnv('string:PORTAL_ID')))) && false ?: '_'}, $this->getEnv('string:PORTAL_ID'));

        $instance->setContainer($this);

        return $instance;
    }

    /*
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory();
    }

    /*
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /*
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : ($this->services['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())) && false ?: '_'}, -1, 0, false, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : ($this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))) && false ?: '_'}, false);
    }

    /*
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL);
    }

    /*
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, 'en', ${($_ = isset($this->services['url_generator']) ? $this->services['url_generator'] : $this->getUrlGeneratorService()) && false ?: '_'});
    }

    /*
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Log\Logger
     */
    protected function getLoggerService()
    {
        return $this->services['logger'] = new \Symfony\Component\HttpKernel\Log\Logger();
    }

    /*
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});
    }

    /*
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
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
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['url_generator']) ? $this->services['url_generator'] : $this->getUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : ($this->services['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())) && false ?: '_'}, ($this->targetDirs[4].'/env-production/itop-portal-base/portal'), false);
    }

    /*
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /*
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(['session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
        }]));
    }

    /*
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /*
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'combodo.current_environment' => false,
        'combodo.absolute_url' => false,
        'combodo.modules.absolute_url' => false,
        'combodo.modules.absolute_path' => false,
        'combodo.portal.base.absolute_url' => false,
        'combodo.portal.base.absolute_path' => false,
        'combodo.portal.instance.absolute_url' => false,
        'combodo.portal.instance.id' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'twig.default_path' => false,
    ];
    private $dynamicParameters = [];

    /*
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[4].'/env-production/itop-portal-base/portal/src'); break;
            case 'kernel.project_dir': $value = ($this->targetDirs[4].'/env-production/itop-portal-base/portal'); break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[4].'/log/portals/itop-portal-prod'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/lib/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/lib/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
            ]; break;
            case 'combodo.current_environment': $value = $this->getEnv('string:COMBODO_CURRENT_ENVIRONMENT'); break;
            case 'combodo.absolute_url': $value = $this->getEnv('string:COMBODO_ABSOLUTE_URL'); break;
            case 'combodo.modules.absolute_url': $value = $this->getEnv('string:COMBODO_MODULES_ABSOLUTE_URL'); break;
            case 'combodo.modules.absolute_path': $value = ($this->targetDirs[4].'/env-production/'); break;
            case 'combodo.portal.base.absolute_url': $value = $this->getEnv('string:COMBODO_PORTAL_BASE_ABSOLUTE_URL'); break;
            case 'combodo.portal.base.absolute_path': $value = $this->getEnv('string:COMBODO_PORTAL_BASE_ABSOLUTE_PATH'); break;
            case 'combodo.portal.instance.absolute_url': $value = $this->getEnv('string:COMBODO_PORTAL_INSTANCE_ABSOLUTE_URL'); break;
            case 'combodo.portal.instance.id': $value = $this->getEnv('string:PORTAL_ID'); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'twig.default_path': $value = ($this->targetDirs[4].'/env-production/'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /*
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'src',
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcProdProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'combodo.portal.instance.conf' => [
                'properties' => [
                    'id' => 'itop-portal',
                    'name' => 'portal:itop-portal',
                    'logo' => 'https://app.q-vision.co/itop/images/logo-itop-dark-bg.svg?t=1664899400.0808',
                    'themes' => [
                        'bootstrap' => 'https://app.q-vision.co/itop/env-production/itop-portal-base/portal/public/css/bootstrap-theme-combodo.css',
                        'portal' => 'https://app.q-vision.co/itop/env-production/itop-portal-base/portal/public/css/portal.css',
                        'others' => [

                        ],
                    ],
                    'templates' => [
                        'layout' => 'itop-portal-base/portal/templates/layout.html.twig',
                        'home' => 'itop-portal-base/portal/templates/home/layout.html.twig',
                    ],
                    'urlmaker_class' => 'iTopPortalViewUrlMaker',
                    'triggers_query' => 'SELECT TriggerOnPortalUpdate AS t WHERE t.target_class IN (:parent_classes)',
                    'attachments' => [
                        'allow_delete' => true,
                    ],
                    'allowed_portals' => [
                        'opening_mode' => 'tab',
                    ],
                ],
                'forms' => [
                    'Service' => [
                        'view' => [
                            '_brought_by' => 'Service',
                            'id' => 'service-view',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'xhtml',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-6">'."\n".'      <div class="form_field" data-field-id="name">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="description">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-6">'."\n".'      <div class="form_field" data-field-id="org_id">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="servicefamily_id">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="status">'."\n".'								</div>'."\n".'    </div>'."\n".'  </div>',
                            ],
                        ],
                    ],
                    'ServiceSubcategory' => [
                        'view' => [
                            '_brought_by' => 'ServiceSubcategory',
                            'id' => 'servicesubcategory',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'xhtml',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-6">'."\n".'      <!-- data-field-id attribute must be an attribute code of the class -->'."\n".'      <div class="form_field" data-field-id="service_id">'."\n".'								</div>'."\n".'      <!-- data-field-flags attribute contains flags among read_only/hidden/mandatory/must_prompt/must_change -->'."\n".'      <div class="form_field" data-field-id="name" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="status" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-6">'."\n".'      <div class="form_field" data-field-id="service_org_id">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="request_type">'."\n".'								</div>'."\n".'    </div>'."\n".'  </div>'."\n".'  <div>'."\n".'    <div class="form_field" data-field-id="description">'."\n".'							</div>'."\n".'  </div>',
                            ],
                        ],
                        'edit' => [
                            '_brought_by' => 'ServiceSubcategory',
                            'id' => 'servicesubcategory',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'xhtml',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-6">'."\n".'      <!-- data-field-id attribute must be an attribute code of the class -->'."\n".'      <div class="form_field" data-field-id="service_id">'."\n".'								</div>'."\n".'      <!-- data-field-flags attribute contains flags among read_only/hidden/mandatory/must_prompt/must_change -->'."\n".'      <div class="form_field" data-field-id="name" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="status" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-6">'."\n".'      <div class="form_field" data-field-id="service_org_id">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="request_type">'."\n".'								</div>'."\n".'    </div>'."\n".'  </div>'."\n".'  <div>'."\n".'    <div class="form_field" data-field-id="description">'."\n".'							</div>'."\n".'  </div>',
                            ],
                        ],
                        'create' => [
                            '_brought_by' => 'ServiceSubcategory',
                            'id' => 'servicesubcategory',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'xhtml',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-6">'."\n".'      <!-- data-field-id attribute must be an attribute code of the class -->'."\n".'      <div class="form_field" data-field-id="service_id">'."\n".'								</div>'."\n".'      <!-- data-field-flags attribute contains flags among read_only/hidden/mandatory/must_prompt/must_change -->'."\n".'      <div class="form_field" data-field-id="name" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="status" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-6">'."\n".'      <div class="form_field" data-field-id="service_org_id">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="request_type">'."\n".'								</div>'."\n".'    </div>'."\n".'  </div>'."\n".'  <div>'."\n".'    <div class="form_field" data-field-id="description">'."\n".'							</div>'."\n".'  </div>',
                            ],
                        ],
                    ],
                    'Ticket' => [
                        'create' => [
                            '_brought_by' => 'Ticket',
                            'id' => 'ticket-create',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => 'go-to-open-requests',
                                        'modal' => 'go-to-open-requests',
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'xhtml',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-6">'."\n".'      <div class="form_field" data-field-id="service_id" data-field-flags="mandatory">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-6">'."\n".'      <div class="form_field" data-field-id="servicesubcategory_id" data-field-flags="mandatory">'."\n".'								</div>'."\n".'    </div>'."\n".'  </div>'."\n".'  <div id="service_details_placeholder">'."\n".'						</div>'."\n".'  <div class="row">'."\n".'    <div class="col-sm-6">'."\n".'      <div class="form_field" data-field-id="impact">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-6">'."\n".'      <div class="form_field" data-field-id="urgency">'."\n".'								</div>'."\n".'    </div>'."\n".'  </div>'."\n".'  <div>'."\n".'    <div class="form_field" data-field-id="title">'."\n".'							</div>'."\n".'    <div class="form_field" data-field-id="description">'."\n".'							</div>'."\n".'    <div class="form_field" data-field-id="contacts_list">'."\n".'							</div>'."\n".'  </div>',
                            ],
                        ],
                        'edit' => [
                            '_brought_by' => 'Ticket',
                            'id' => 'ticket-edit',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => 'go-to-open-requests',
                                        'modal' => 'go-to-open-requests',
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'twig',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-7">'."\n".'      <fieldset>'."\n".'        <legend>{{\'Ticket:baseinfo\'|dict_s}}</legend>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="title" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="service_id" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="caller_id" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="servicesubcategory_id" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-12">'."\n".'          <div class="form_field" data-field-id="description" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="solution" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="user_satisfaction" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="user_comment" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'      </fieldset>'."\n".'    </div>'."\n".'    <div class="col-sm-5">'."\n".'      <fieldset>'."\n".'        <legend>{{\'Ticket:Type\'|dict_s}} &amp; {{\'Ticket:date\'|dict_s}}</legend>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="status" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="impact" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="urgency" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="priority" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="start_date" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="last_update" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="resolution_date" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="agent_id" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'      </fieldset>'."\n".'    </div>'."\n".'  </div>'."\n".'  <div>'."\n".'    <div class="form_field" data-field-id="contacts_list"/>'."\n".'    <div class="form_field" data-field-id="public_log"/>'."\n".'  </div>',
                            ],
                        ],
                        'view' => [
                            '_brought_by' => 'Ticket',
                            'id' => 'ticket-edit',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => 'go-to-open-requests',
                                        'modal' => 'go-to-open-requests',
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'twig',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-7">'."\n".'      <fieldset>'."\n".'        <legend>{{\'Ticket:baseinfo\'|dict_s}}</legend>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="title" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="service_id" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="caller_id" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="servicesubcategory_id" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-12">'."\n".'          <div class="form_field" data-field-id="description" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="solution" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="user_satisfaction" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="user_comment" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'      </fieldset>'."\n".'    </div>'."\n".'    <div class="col-sm-5">'."\n".'      <fieldset>'."\n".'        <legend>{{\'Ticket:Type\'|dict_s}} &amp; {{\'Ticket:date\'|dict_s}}</legend>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="status" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="impact" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="urgency" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="priority" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'        <div class="col-sm-6">'."\n".'          <div class="form_field" data-field-id="start_date" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="last_update" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="resolution_date" data-field-flags="read_only"/>'."\n".'          <div class="form_field" data-field-id="agent_id" data-field-flags="read_only"/>'."\n".'        </div>'."\n".'      </fieldset>'."\n".'    </div>'."\n".'  </div>'."\n".'  <div>'."\n".'    <div class="form_field" data-field-id="contacts_list"/>'."\n".'    <div class="form_field" data-field-id="public_log"/>'."\n".'  </div>',
                            ],
                        ],
                        'apply_stimulus' => [
                            'ev_reopen' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Ticket-ev_reopen',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '  <div>'."\n".'    <div class="form_field" data-field-id="public_log" data-field-flags="must_change"/>'."\n".'    <div class="form_field" data-field-id="team_id" data-field-flags="hidden"/>'."\n".'    <div class="form_field" data-field-id="agent_id" data-field-flags="hidden"/>'."\n".'  </div>',
                                ],
                            ],
                        ],
                    ],
                    'Incident' => [
                        'apply_stimulus' => [
                            'ev_reopen' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Incident-ev_reopen',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '  <div>'."\n".'    <div class="form_field" data-field-id="public_log" data-field-flags="must_change"/>'."\n".'    <div class="form_field" data-field-id="team_id" data-field-flags="hidden"/>'."\n".'    <div class="form_field" data-field-id="agent_id" data-field-flags="hidden"/>'."\n".'  </div>',
                                ],
                            ],
                            'ev_assign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Incident-ev_assign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_reassign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Incident-ev_reassign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_pending' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Incident-ev_pending',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_timeout' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Incident-ev_timeout',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_autoresolve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Incident-ev_autoresolve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_autoclose' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Incident-ev_autoclose',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_resolve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Incident-ev_resolve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_close' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Incident-ev_close',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                        ],
                    ],
                    'Problem' => [
                        'apply_stimulus' => [
                            'ev_reopen' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Problem-ev_reopen',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '  <div>'."\n".'    <div class="form_field" data-field-id="public_log" data-field-flags="must_change"/>'."\n".'    <div class="form_field" data-field-id="team_id" data-field-flags="hidden"/>'."\n".'    <div class="form_field" data-field-id="agent_id" data-field-flags="hidden"/>'."\n".'  </div>',
                                ],
                            ],
                            'ev_assign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Problem-ev_assign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_reassign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Problem-ev_reassign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_resolve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Problem-ev_resolve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_close' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Problem-ev_close',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                        ],
                    ],
                    'UserRequest' => [
                        'apply_stimulus' => [
                            'ev_reopen' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_reopen',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '  <div>'."\n".'    <div class="form_field" data-field-id="public_log" data-field-flags="must_change"/>'."\n".'    <div class="form_field" data-field-id="team_id" data-field-flags="hidden"/>'."\n".'    <div class="form_field" data-field-id="agent_id" data-field-flags="hidden"/>'."\n".'  </div>',
                                ],
                            ],
                            'ev_assign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_assign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_reassign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_reassign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_approve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_approve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_reject' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_reject',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_pending' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_pending',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_timeout' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_timeout',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_autoresolve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_autoresolve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_autoclose' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_autoclose',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_resolve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_resolve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_close' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_close',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_wait_for_approval' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-UserRequest-ev_wait_for_approval',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                        ],
                    ],
                    'Change' => [
                        'apply_stimulus' => [
                            'ev_reopen' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_reopen',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '  <div>'."\n".'    <div class="form_field" data-field-id="public_log" data-field-flags="must_change"/>'."\n".'    <div class="form_field" data-field-id="team_id" data-field-flags="hidden"/>'."\n".'    <div class="form_field" data-field-id="agent_id" data-field-flags="hidden"/>'."\n".'  </div>',
                                ],
                            ],
                            'ev_validate' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_validate',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_reject' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_reject',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_assign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_assign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_plan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_plan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_approve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_approve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_replan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_replan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_notapprove' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_notapprove',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_implement' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_implement',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_monitor' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_monitor',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_finish' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-Change-ev_finish',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                        ],
                    ],
                    'RoutineChange' => [
                        'apply_stimulus' => [
                            'ev_reopen' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-RoutineChange-ev_reopen',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '  <div>'."\n".'    <div class="form_field" data-field-id="public_log" data-field-flags="must_change"/>'."\n".'    <div class="form_field" data-field-id="team_id" data-field-flags="hidden"/>'."\n".'    <div class="form_field" data-field-id="agent_id" data-field-flags="hidden"/>'."\n".'  </div>',
                                ],
                            ],
                            'ev_assign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-RoutineChange-ev_assign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_plan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-RoutineChange-ev_plan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_approve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-RoutineChange-ev_approve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_replan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-RoutineChange-ev_replan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_notapprove' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-RoutineChange-ev_notapprove',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_implement' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-RoutineChange-ev_implement',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_monitor' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-RoutineChange-ev_monitor',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_finish' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-RoutineChange-ev_finish',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                        ],
                    ],
                    'ApprovedChange' => [
                        'apply_stimulus' => [
                            'ev_reopen' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_reopen',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '  <div>'."\n".'    <div class="form_field" data-field-id="public_log" data-field-flags="must_change"/>'."\n".'    <div class="form_field" data-field-id="team_id" data-field-flags="hidden"/>'."\n".'    <div class="form_field" data-field-id="agent_id" data-field-flags="hidden"/>'."\n".'  </div>',
                                ],
                            ],
                            'ev_validate' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_validate',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_reject' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_reject',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_assign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_assign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_plan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_plan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_approve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_approve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_replan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_replan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_notapprove' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_notapprove',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_implement' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_implement',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_monitor' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_monitor',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_finish' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-ApprovedChange-ev_finish',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                        ],
                    ],
                    'NormalChange' => [
                        'apply_stimulus' => [
                            'ev_reopen' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_reopen',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '  <div>'."\n".'    <div class="form_field" data-field-id="public_log" data-field-flags="must_change"/>'."\n".'    <div class="form_field" data-field-id="team_id" data-field-flags="hidden"/>'."\n".'    <div class="form_field" data-field-id="agent_id" data-field-flags="hidden"/>'."\n".'  </div>',
                                ],
                            ],
                            'ev_validate' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_validate',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_reject' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_reject',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_assign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_assign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_plan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_plan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_approve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_approve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_replan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_replan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_notapprove' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_notapprove',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_implement' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_implement',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_monitor' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_monitor',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_finish' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-NormalChange-ev_finish',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                        ],
                    ],
                    'EmergencyChange' => [
                        'apply_stimulus' => [
                            'ev_reopen' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-EmergencyChange-ev_reopen',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '  <div>'."\n".'    <div class="form_field" data-field-id="public_log" data-field-flags="must_change"/>'."\n".'    <div class="form_field" data-field-id="team_id" data-field-flags="hidden"/>'."\n".'    <div class="form_field" data-field-id="agent_id" data-field-flags="hidden"/>'."\n".'  </div>',
                                ],
                            ],
                            'ev_assign' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-EmergencyChange-ev_assign',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_plan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-EmergencyChange-ev_plan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_approve' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-EmergencyChange-ev_approve',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_replan' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-EmergencyChange-ev_replan',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_notapprove' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-EmergencyChange-ev_notapprove',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_implement' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-EmergencyChange-ev_implement',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_monitor' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-EmergencyChange-ev_monitor',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                            'ev_finish' => [
                                '_brought_by' => 'Ticket',
                                'id' => 'apply_stimulus-EmergencyChange-ev_finish',
                                'type' => 'custom_list',
                                'properties' => [
                                    'display_mode' => 'cosy',
                                    'always_show_submit' => false,
                                    'navigation_rules' => [
                                        'submit' => [
                                            'default' => 'go-to-open-requests',
                                            'modal' => 'go-to-open-requests',
                                        ],
                                        'cancel' => [
                                            'default' => NULL,
                                            'modal' => NULL,
                                        ],
                                    ],
                                ],
                                'fields' => [

                                ],
                                'layout' => [
                                    'type' => 'xhtml',
                                    'content' => '<twig/>',
                                ],
                            ],
                        ],
                    ],
                    'Person' => [
                        'view' => [
                            '_brought_by' => 'Person',
                            'id' => 'person-view',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'xhtml',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="picture" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="name" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="first_name" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="status" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="org_id" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="function" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="manager_id" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'  </div>',
                            ],
                        ],
                        'edit' => [
                            '_brought_by' => 'Person',
                            'id' => 'person-view',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'xhtml',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="picture" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="name" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="first_name" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="status" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="org_id" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="function" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="manager_id" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'  </div>',
                            ],
                        ],
                        'create' => [
                            '_brought_by' => 'Person',
                            'id' => 'person-view',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [

                            ],
                            'layout' => [
                                'type' => 'xhtml',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="picture" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="name" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="first_name" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="status" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="org_id" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="function" data-field-flags="read_only">'."\n".'								</div>'."\n".'      <div class="form_field" data-field-id="manager_id" data-field-flags="read_only">'."\n".'								</div>'."\n".'    </div>'."\n".'  </div>',
                            ],
                        ],
                    ],
                    'FAQ' => [
                        'view' => [
                            '_brought_by' => 'FAQ',
                            'id' => 'faq',
                            'type' => 'custom_list',
                            'properties' => [
                                'display_mode' => 'cosy',
                                'always_show_submit' => false,
                                'navigation_rules' => [
                                    'submit' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                    'cancel' => [
                                        'default' => NULL,
                                        'modal' => NULL,
                                    ],
                                ],
                            ],
                            'fields' => [
                                'category_name' => [

                                ],
                                'title' => [

                                ],
                                'error_code' => [

                                ],
                                'key_words' => [

                                ],
                                'domains' => [

                                ],
                                'summary' => [

                                ],
                                'description' => [

                                ],
                            ],
                            'layout' => [
                                'type' => 'xhtml',
                                'content' => '  <div class="row">'."\n".'    <div class="col-sm-4">'."\n".'      <div class="form_field" data-field-id="category_name"/>'."\n".'      <div class="form_field" data-field-id="title"/>'."\n".'      <div class="form_field" data-field-id="error_code"/>'."\n".'      <div class="form_field" data-field-id="key_words"/>'."\n".'      <div class="form_field" data-field-id="domains"/>'."\n".'      <div class="form_field" data-field-id="summary"/>'."\n".'    </div>'."\n".'    <div class="col-sm-8">'."\n".'      <div class="form_field" data-field-id="description"/>'."\n".'    </div>'."\n".'  </div>',
                            ],
                        ],
                    ],
                ],
                'bricks' => [

                ],
                'bricks_total_width' => 0,
                'lists' => [
                    'Contact' => [
                        'default' => [
                            0 => [
                                'att_code' => 'status',
                                'rank' => '10',
                            ],
                            1 => [
                                'att_code' => 'org_id',
                                'rank' => '20',
                            ],
                            2 => [
                                'att_code' => 'function',
                                'rank' => '50',
                            ],
                        ],
                    ],
                ],
            ],
            'router.options.generator_base_class' => 'Combodo\\iTop\\Portal\\Routing\\UrlGenerator',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => '0',
            'data_collector.templates' => [

            ],
            'debug.error_handler.throw_at' => 0,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'srcProdProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'srcProdProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel:loadRoutes',
            'router.cache_class_prefix' => 'srcProdProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'console.command.ids' => [
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
            ],
            'console.lazy_command.ids' => [
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.yaml_lint' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
            ],
        ];
    }
}

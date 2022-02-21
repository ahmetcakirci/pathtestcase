<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevContainer.php')->set(\ContainerN6bCz8H\App_KernelDevContainer::class, null);
require __DIR__.'/ContainerN6bCz8H/EntityManager_9a5be93.php';
require __DIR__.'/ContainerN6bCz8H/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerN6bCz8H/getValidator_ExpressionService.php';
require __DIR__.'/ContainerN6bCz8H/getValidator_EmailService.php';
require __DIR__.'/ContainerN6bCz8H/getValidator_BuilderService.php';
require __DIR__.'/ContainerN6bCz8H/getSession_FactoryService.php';
require __DIR__.'/ContainerN6bCz8H/getServicesResetterService.php';
require __DIR__.'/ContainerN6bCz8H/getSerializer_Mapping_CacheClassMetadataFactoryService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_UserChecker_LoginService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_UserChecker_DevService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_UserChecker_ApiService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_Session_DevService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Listener_Api_UserProviderService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Firewall_Authenticator_LoginService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Firewall_Authenticator_DevService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Firewall_Authenticator_ApiService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_EventDispatcher_LoginService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_EventDispatcher_ApiService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Authenticator_Jwt_ApiService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Authenticator_JsonLogin_LoginService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Access_DecisionManagerService.php';
require __DIR__.'/ContainerN6bCz8H/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerN6bCz8H/getSecrets_VaultService.php';
require __DIR__.'/ContainerN6bCz8H/getRouting_LoaderService.php';
require __DIR__.'/ContainerN6bCz8H/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerN6bCz8H/getPropertyInfo_CacheService.php';
require __DIR__.'/ContainerN6bCz8H/getPropertyAccessorService.php';
require __DIR__.'/ContainerN6bCz8H/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerN6bCz8H/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerN6bCz8H/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerN6bCz8H/getErrorControllerService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_Orm_Listeners_PdoCacheAdapterDoctrineSchemaSubscriberService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_Orm_DefaultAnnotationMetadataDriverService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/ContainerN6bCz8H/getDoctrineService.php';
require __DIR__.'/ContainerN6bCz8H/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerN6bCz8H/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_ValidatorService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_SystemClearerService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_SystemService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_SerializerService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_PropertyInfoService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_PropertyAccessService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_AppClearerService.php';
require __DIR__.'/ContainerN6bCz8H/getCache_AppService.php';
require __DIR__.'/ContainerN6bCz8H/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerN6bCz8H/getAnnotations_ReaderService.php';
require __DIR__.'/ContainerN6bCz8H/getAnnotations_CachedReaderService.php';
require __DIR__.'/ContainerN6bCz8H/getTemplateControllerService.php';
require __DIR__.'/ContainerN6bCz8H/getRedirectControllerService.php';
require __DIR__.'/ContainerN6bCz8H/getUserRepositoryService.php';
require __DIR__.'/ContainerN6bCz8H/getOrderRepositoryService.php';
require __DIR__.'/ContainerN6bCz8H/getOrderControllerService.php';
require __DIR__.'/ContainerN6bCz8H/getAuthControllerService.php';
require __DIR__.'/ContainerN6bCz8H/get_Session_DeprecatedService.php';
require __DIR__.'/ContainerN6bCz8H/get_ServiceLocator_O2WXrHYService.php';
require __DIR__.'/ContainerN6bCz8H/get_ServiceLocator_GPh6XLService.php';
require __DIR__.'/ContainerN6bCz8H/get_ServiceLocator_KfwZsneService.php';
require __DIR__.'/ContainerN6bCz8H/get_ServiceLocator_KfbR3DYService.php';
require __DIR__.'/ContainerN6bCz8H/get_ServiceLocator_GNc8e5BService.php';
require __DIR__.'/ContainerN6bCz8H/get_ServiceLocator_9wplPMAService.php';
require __DIR__.'/ContainerN6bCz8H/get_Container_Private_ValidatorService.php';
require __DIR__.'/ContainerN6bCz8H/get_Container_Private_SessionService.php';
require __DIR__.'/ContainerN6bCz8H/get_Container_Private_SerializerService.php';
require __DIR__.'/ContainerN6bCz8H/get_Container_Private_Security_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerN6bCz8H/get_Container_Private_Security_AuthorizationCheckerService.php';
require __DIR__.'/ContainerN6bCz8H/get_Container_Private_FilesystemService.php';
require __DIR__.'/ContainerN6bCz8H/get_Container_Private_CacheClearerService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionInterface';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Session\DeprecatedSessionFactory';
$classes[] = 'App\Controller\AuthController';
$classes[] = 'App\Controller\OrderController';
$classes[] = 'App\Repository\OrderRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Common\Cache\CacheProvider';
$classes[] = 'Doctrine\Common\Cache\Psr6\DoctrineProvider';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Component\Uid\Factory\UlidFactory';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\Uid\Factory\UuidFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Psr\Cache\CacheItemPoolInterface';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';

$preloaded = Preloader::preload($classes);

$classes = [];
$classes[] = 'Doctrine\\ORM\\Mapping\\ClassMetadata';
$classes[] = 'Doctrine\\ORM\\Id\\IdentityGenerator';
$preloaded = Preloader::preload($classes, $preloaded);

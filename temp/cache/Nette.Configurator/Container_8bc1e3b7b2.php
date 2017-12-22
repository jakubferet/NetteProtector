<?php
// source: C:\xampp\htdocs\protector\protector\app/config/config.neon 
// source: C:\xampp\htdocs\protector\protector\app/config/config.local.neon 

class Container_8bc1e3b7b2 extends Nette\DI\Container
{
	protected $meta = [
		'types' => [
			'Nette\Application\Application' => [1 => ['application.application']],
			'Nette\Application\IPresenterFactory' => [1 => ['application.presenterFactory']],
			'Nette\Application\LinkGenerator' => [1 => ['application.linkGenerator']],
			'Nette\Caching\Storages\IJournal' => [1 => ['cache.journal']],
			'Nette\Caching\IStorage' => [1 => ['cache.storage']],
			'Nette\Database\Connection' => [1 => ['database.default.connection']],
			'Nette\Database\IStructure' => [1 => ['database.default.structure']],
			'Nette\Database\Structure' => [1 => ['database.default.structure']],
			'Nette\Database\IConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Conventions\DiscoveredConventions' => [1 => ['database.default.conventions']],
			'Nette\Database\Context' => [1 => ['database.default.context']],
			'Nette\Http\RequestFactory' => [1 => ['http.requestFactory']],
			'Nette\Http\IRequest' => [1 => ['http.request']],
			'Nette\Http\Request' => [1 => ['http.request']],
			'Nette\Http\IResponse' => [1 => ['http.response']],
			'Nette\Http\Response' => [1 => ['http.response']],
			'Nette\Http\Context' => [1 => ['http.context']],
			'Nette\Bridges\ApplicationLatte\ILatteFactory' => [1 => ['latte.latteFactory']],
			'Nette\Application\UI\ITemplateFactory' => [1 => ['latte.templateFactory']],
			'Nette\Mail\IMailer' => [1 => ['mail.mailer']],
			'Nette\Application\IRouter' => [1 => ['routing.router']],
			'Nette\Security\IUserStorage' => [1 => ['security.userStorage']],
			'Nette\Security\User' => [1 => ['security.user']],
			'Nette\Http\Session' => [1 => ['session.session']],
			'Tracy\ILogger' => [1 => ['tracy.logger']],
			'Tracy\BlueScreen' => [1 => ['tracy.blueScreen']],
			'Tracy\Bar' => [1 => ['tracy.bar']],
			'Nette\Object' => [
				1 => [
					'restful.responseFactory',
					'restful.resourceFactory',
					'restful.methodOptions',
					'restful.xmlMapper',
					'restful.jsonMapper',
					'restful.queryMapper',
					'restful.dataUrlMapper',
					'restful.nullMapper',
					'restful.mapperContext',
					'restful.inputFactory',
					'restful.httpResponseFactory',
					'restful.requestFilter',
					'restful.methodHandler',
					'restful.validator',
					'restful.validationScopeFactory',
					'restful.validationScope',
					'restful.objectConverter',
					'restful.dateTimeConverter',
					'restful.camelCaseConverter',
					'restful.pascalCaseConverter',
					'restful.snakeCaseConverter',
					'restful.resourceConverter',
					'restful.security.hashCalculator',
					'restful.security.hashAuthenticator',
					'restful.security.timeoutAuthenticator',
					'restful.security.nullAuthentication',
					'restful.security.securedAuthentication',
					'restful.security.basicAuthentication',
					'restful.security.authentication',
					'restful.routeAnnotation',
					'restful.routeListFactory',
					'restful.cachedRouteListFactory',
					'restful.panel',
				],
			],
			'Drahak\Restful\Application\IResponseFactory' => [1 => ['restful.responseFactory']],
			'Drahak\Restful\Application\ResponseFactory' => [1 => ['restful.responseFactory']],
			'Drahak\Restful\IResourceFactory' => [1 => ['restful.resourceFactory']],
			'Drahak\Restful\ResourceFactory' => [1 => ['restful.resourceFactory']],
			'Drahak\Restful\IResource' => [1 => ['restful.resource']],
			'Drahak\Restful\Application\MethodOptions' => [1 => ['restful.methodOptions']],
			'Drahak\Restful\Mapping\IMapper' => [
				1 => [
					'restful.xmlMapper',
					'restful.jsonMapper',
					'restful.queryMapper',
					'restful.dataUrlMapper',
					'restful.nullMapper',
				],
			],
			'Drahak\Restful\Mapping\XmlMapper' => [1 => ['restful.xmlMapper']],
			'Drahak\Restful\Mapping\JsonMapper' => [1 => ['restful.jsonMapper']],
			'Drahak\Restful\Mapping\QueryMapper' => [1 => ['restful.queryMapper']],
			'Drahak\Restful\Mapping\DataUrlMapper' => [1 => ['restful.dataUrlMapper']],
			'Drahak\Restful\Mapping\NullMapper' => [1 => ['restful.nullMapper']],
			'Drahak\Restful\Mapping\MapperContext' => [1 => ['restful.mapperContext']],
			'Drahak\Restful\Http\InputFactory' => [1 => ['restful.inputFactory']],
			'Drahak\Restful\Http\ResponseFactory' => [1 => ['restful.httpResponseFactory']],
			'Drahak\Restful\Http\ApiRequestFactory' => [1 => ['restful.httpRequestFactory']],
			'Drahak\Restful\Utils\RequestFilter' => [1 => ['restful.requestFilter']],
			'Drahak\Restful\Application\Events\MethodHandler' => [1 => ['restful.methodHandler']],
			'Drahak\Restful\Validation\IValidator' => [1 => ['restful.validator']],
			'Drahak\Restful\Validation\Validator' => [1 => ['restful.validator']],
			'Drahak\Restful\Validation\IValidationScopeFactory' => [1 => ['restful.validationScopeFactory']],
			'Drahak\Restful\Validation\ValidationScopeFactory' => [1 => ['restful.validationScopeFactory']],
			'Drahak\Restful\Validation\IValidationScope' => [1 => ['restful.validationScope']],
			'Drahak\Restful\Validation\ValidationScope' => [1 => ['restful.validationScope']],
			'Drahak\Restful\Converters\IConverter' => [
				1 => [
					'restful.objectConverter',
					'restful.dateTimeConverter',
					'restful.camelCaseConverter',
					'restful.pascalCaseConverter',
					'restful.snakeCaseConverter',
				],
			],
			'Drahak\Restful\Converters\ObjectConverter' => [1 => ['restful.objectConverter']],
			'Drahak\Restful\Converters\DateTimeConverter' => [1 => ['restful.dateTimeConverter']],
			'Drahak\Restful\Converters\CamelCaseConverter' => [1 => ['restful.camelCaseConverter']],
			'Drahak\Restful\Converters\PascalCaseConverter' => [1 => ['restful.pascalCaseConverter']],
			'Drahak\Restful\Converters\SnakeCaseConverter' => [1 => ['restful.snakeCaseConverter']],
			'Drahak\Restful\Converters\ResourceConverter' => [1 => ['restful.resourceConverter']],
			'Drahak\Restful\Security\IAuthTokenCalculator' => [1 => ['restful.security.hashCalculator']],
			'Drahak\Restful\Security\HashCalculator' => [1 => ['restful.security.hashCalculator']],
			'Drahak\Restful\Security\Authentication\IRequestAuthenticator' => [
				1 => [
					'restful.security.hashAuthenticator',
					'restful.security.timeoutAuthenticator',
				],
			],
			'Drahak\Restful\Security\Authentication\HashAuthenticator' => [1 => ['restful.security.hashAuthenticator']],
			'Drahak\Restful\Security\Authentication\TimeoutAuthenticator' => [1 => ['restful.security.timeoutAuthenticator']],
			'Drahak\Restful\Security\Process\AuthenticationProcess' => [
				1 => [
					'restful.security.nullAuthentication',
					'restful.security.securedAuthentication',
					'restful.security.basicAuthentication',
				],
			],
			'Drahak\Restful\Security\Process\NullAuthentication' => [1 => ['restful.security.nullAuthentication']],
			'Drahak\Restful\Security\Process\SecuredAuthentication' => [1 => ['restful.security.securedAuthentication']],
			'Drahak\Restful\Security\Process\BasicAuthentication' => [1 => ['restful.security.basicAuthentication']],
			'Drahak\Restful\Security\AuthenticationContext' => [1 => ['restful.security.authentication']],
			'Drahak\Restful\Application\IAnnotationParser' => [1 => ['restful.routeAnnotation']],
			'Drahak\Restful\Application\RouteAnnotation' => [1 => ['restful.routeAnnotation']],
			'Drahak\Restful\Application\IRouteListFactory' => [1 => ['restful.routeListFactory', 'restful.cachedRouteListFactory']],
			'Drahak\Restful\Application\RouteListFactory' => [1 => ['restful.routeListFactory']],
			'Drahak\Restful\Application\CachedRouteListFactory' => [1 => ['restful.cachedRouteListFactory']],
			'Tracy\IBarPanel' => [1 => ['restful.panel']],
			'Drahak\Restful\Diagnostics\ResourceRouterPanel' => [1 => ['restful.panel']],
			'Nette\Security\Permission' => [1 => ['59_App_Acl_Acl']],
			'Nette\Security\IAuthorizator' => [1 => ['59_App_Acl_Acl']],
			'App\Acl\Acl' => [1 => ['59_App_Acl_Acl']],
			'App\Forms\FormFactory' => [1 => ['60_App_Forms_FormFactory']],
			'App\Forms\SignInFormFactory' => [1 => ['61_App_Forms_SignInFormFactory']],
			'App\Forms\SignUpFormFactory' => [1 => ['62_App_Forms_SignUpFormFactory']],
			'App\Model\SettingsManager' => [1 => ['63_App_Model_SettingsManager']],
			'Nette\Security\IAuthenticator' => [1 => ['64_App_Model_UserManager']],
			'App\Model\UserManager' => [1 => ['64_App_Model_UserManager']],
			'App\Presenters\BasePresenter' => [1 => ['application.1', 'application.3', 'application.6']],
			'Nette\Application\UI\Presenter' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\Control' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\Component' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\ComponentModel\Container' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\ComponentModel\Component' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\IRenderable' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\ComponentModel\IContainer' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\ComponentModel\IComponent' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\ISignalReceiver' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\UI\IStatePersistent' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'ArrayAccess' => [
				[
					'application.1',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
				],
			],
			'Nette\Application\IPresenter' => [
				[
					'application.1',
					'application.2',
					'application.3',
					'application.4',
					'application.5',
					'application.6',
					'application.7',
					'application.8',
					'application.9',
					'application.10',
				],
			],
			'App\Presenters\Error4xxPresenter' => [1 => ['application.1']],
			'App\Presenters\ErrorPresenter' => [1 => ['application.2']],
			'App\Presenters\HomepagePresenter' => [1 => ['application.3']],
			'Drahak\Restful\Application\UI\ResourcePresenter' => [1 => ['application.4', 'application.8']],
			'Drahak\Restful\Application\IResourcePresenter' => [1 => ['application.4', 'application.8']],
			'App\Presenters\JsonPresenter' => [1 => ['application.4']],
			'App\Presenters\SettingsPresenter' => [1 => ['application.5']],
			'App\Presenters\SignPresenter' => [1 => ['application.6']],
			'App\Presenters\UserPresenter' => [1 => ['application.7']],
			'App\Presenters\ValuesPresenter' => [1 => ['application.8']],
			'NetteModule\ErrorPresenter' => [1 => ['application.9']],
			'NetteModule\MicroPresenter' => [1 => ['application.10']],
			'Nette\DI\Container' => [1 => ['container']],
		],
		'services' => [
			'59_App_Acl_Acl' => 'App\Acl\Acl',
			'60_App_Forms_FormFactory' => 'App\Forms\FormFactory',
			'61_App_Forms_SignInFormFactory' => 'App\Forms\SignInFormFactory',
			'62_App_Forms_SignUpFormFactory' => 'App\Forms\SignUpFormFactory',
			'63_App_Model_SettingsManager' => 'App\Model\SettingsManager',
			'64_App_Model_UserManager' => 'App\Model\UserManager',
			'application.1' => 'App\Presenters\Error4xxPresenter',
			'application.10' => 'NetteModule\MicroPresenter',
			'application.2' => 'App\Presenters\ErrorPresenter',
			'application.3' => 'App\Presenters\HomepagePresenter',
			'application.4' => 'App\Presenters\JsonPresenter',
			'application.5' => 'App\Presenters\SettingsPresenter',
			'application.6' => 'App\Presenters\SignPresenter',
			'application.7' => 'App\Presenters\UserPresenter',
			'application.8' => 'App\Presenters\ValuesPresenter',
			'application.9' => 'NetteModule\ErrorPresenter',
			'application.application' => 'Nette\Application\Application',
			'application.linkGenerator' => 'Nette\Application\LinkGenerator',
			'application.presenterFactory' => 'Nette\Application\IPresenterFactory',
			'cache.journal' => 'Nette\Caching\Storages\IJournal',
			'cache.storage' => 'Nette\Caching\IStorage',
			'container' => 'Nette\DI\Container',
			'database.default.connection' => 'Nette\Database\Connection',
			'database.default.context' => 'Nette\Database\Context',
			'database.default.conventions' => 'Nette\Database\Conventions\DiscoveredConventions',
			'database.default.structure' => 'Nette\Database\Structure',
			'http.context' => 'Nette\Http\Context',
			'http.request' => 'Nette\Http\Request',
			'http.requestFactory' => 'Nette\Http\RequestFactory',
			'http.response' => 'Nette\Http\Response',
			'latte.latteFactory' => 'Latte\Engine',
			'latte.templateFactory' => 'Nette\Application\UI\ITemplateFactory',
			'mail.mailer' => 'Nette\Mail\IMailer',
			'restful.cachedRouteListFactory' => 'Drahak\Restful\Application\CachedRouteListFactory',
			'restful.camelCaseConverter' => 'Drahak\Restful\Converters\CamelCaseConverter',
			'restful.dataUrlMapper' => 'Drahak\Restful\Mapping\DataUrlMapper',
			'restful.dateTimeConverter' => 'Drahak\Restful\Converters\DateTimeConverter',
			'restful.httpRequestFactory' => 'Drahak\Restful\Http\ApiRequestFactory',
			'restful.httpResponseFactory' => 'Drahak\Restful\Http\ResponseFactory',
			'restful.inputFactory' => 'Drahak\Restful\Http\InputFactory',
			'restful.jsonMapper' => 'Drahak\Restful\Mapping\JsonMapper',
			'restful.mapperContext' => 'Drahak\Restful\Mapping\MapperContext',
			'restful.methodHandler' => 'Drahak\Restful\Application\Events\MethodHandler',
			'restful.methodOptions' => 'Drahak\Restful\Application\MethodOptions',
			'restful.nullMapper' => 'Drahak\Restful\Mapping\NullMapper',
			'restful.objectConverter' => 'Drahak\Restful\Converters\ObjectConverter',
			'restful.panel' => 'Drahak\Restful\Diagnostics\ResourceRouterPanel',
			'restful.pascalCaseConverter' => 'Drahak\Restful\Converters\PascalCaseConverter',
			'restful.queryMapper' => 'Drahak\Restful\Mapping\QueryMapper',
			'restful.requestFilter' => 'Drahak\Restful\Utils\RequestFilter',
			'restful.resource' => 'Drahak\Restful\IResource',
			'restful.resourceConverter' => 'Drahak\Restful\Converters\ResourceConverter',
			'restful.resourceFactory' => 'Drahak\Restful\ResourceFactory',
			'restful.responseFactory' => 'Drahak\Restful\Application\ResponseFactory',
			'restful.routeAnnotation' => 'Drahak\Restful\Application\RouteAnnotation',
			'restful.routeListFactory' => 'Drahak\Restful\Application\RouteListFactory',
			'restful.security.authentication' => 'Drahak\Restful\Security\AuthenticationContext',
			'restful.security.basicAuthentication' => 'Drahak\Restful\Security\Process\BasicAuthentication',
			'restful.security.hashAuthenticator' => 'Drahak\Restful\Security\Authentication\HashAuthenticator',
			'restful.security.hashCalculator' => 'Drahak\Restful\Security\HashCalculator',
			'restful.security.nullAuthentication' => 'Drahak\Restful\Security\Process\NullAuthentication',
			'restful.security.securedAuthentication' => 'Drahak\Restful\Security\Process\SecuredAuthentication',
			'restful.security.timeoutAuthenticator' => 'Drahak\Restful\Security\Authentication\TimeoutAuthenticator',
			'restful.snakeCaseConverter' => 'Drahak\Restful\Converters\SnakeCaseConverter',
			'restful.validationScope' => 'Drahak\Restful\Validation\ValidationScope',
			'restful.validationScopeFactory' => 'Drahak\Restful\Validation\ValidationScopeFactory',
			'restful.validator' => 'Drahak\Restful\Validation\Validator',
			'restful.xmlMapper' => 'Drahak\Restful\Mapping\XmlMapper',
			'routing.router' => 'Nette\Application\IRouter',
			'security.user' => 'Nette\Security\User',
			'security.userStorage' => 'Nette\Security\IUserStorage',
			'session.session' => 'Nette\Http\Session',
			'tracy.bar' => 'Tracy\Bar',
			'tracy.blueScreen' => 'Tracy\BlueScreen',
			'tracy.logger' => 'Tracy\ILogger',
		],
		'tags' => [
			'inject' => [
				'application.1' => TRUE,
				'application.10' => TRUE,
				'application.2' => TRUE,
				'application.3' => TRUE,
				'application.4' => TRUE,
				'application.5' => TRUE,
				'application.6' => TRUE,
				'application.7' => TRUE,
				'application.8' => TRUE,
				'application.9' => TRUE,
			],
			'nette.presenter' => [
				'application.1' => 'App\Presenters\Error4xxPresenter',
				'application.10' => 'NetteModule\MicroPresenter',
				'application.2' => 'App\Presenters\ErrorPresenter',
				'application.3' => 'App\Presenters\HomepagePresenter',
				'application.4' => 'App\Presenters\JsonPresenter',
				'application.5' => 'App\Presenters\SettingsPresenter',
				'application.6' => 'App\Presenters\SignPresenter',
				'application.7' => 'App\Presenters\UserPresenter',
				'application.8' => 'App\Presenters\ValuesPresenter',
				'application.9' => 'NetteModule\ErrorPresenter',
			],
			'restful.converter' => [
				'restful.dateTimeConverter' => TRUE,
				'restful.objectConverter' => TRUE,
			],
		],
		'aliases' => [
			'application' => 'application.application',
			'cacheStorage' => 'cache.storage',
			'database.default' => 'database.default.connection',
			'httpRequest' => 'http.request',
			'httpResponse' => 'http.response',
			'nette.cacheJournal' => 'cache.journal',
			'nette.database.default' => 'database.default',
			'nette.database.default.context' => 'database.default.context',
			'nette.httpContext' => 'http.context',
			'nette.httpRequestFactory' => 'http.requestFactory',
			'nette.latteFactory' => 'latte.latteFactory',
			'nette.mailer' => 'mail.mailer',
			'nette.presenterFactory' => 'application.presenterFactory',
			'nette.templateFactory' => 'latte.templateFactory',
			'nette.userStorage' => 'security.userStorage',
			'router' => 'routing.router',
			'session' => 'session.session',
			'user' => 'security.user',
		],
	];


	public function __construct(array $params = [])
	{
		$this->parameters = $params;
		$this->parameters += [
			'appDir' => 'C:\xampp\htdocs\protector\protector\app',
			'wwwDir' => 'C:\xampp\htdocs\protector\protector\www',
			'debugMode' => TRUE,
			'productionMode' => FALSE,
			'consoleMode' => FALSE,
			'tempDir' => 'C:\xampp\htdocs\protector\protector\app/../temp',
		];
	}


	/**
	 * @return App\Acl\Acl
	 */
	public function createService__59_App_Acl_Acl()
	{
		$service = new App\Acl\Acl;
		return $service;
	}


	/**
	 * @return App\Forms\FormFactory
	 */
	public function createService__60_App_Forms_FormFactory()
	{
		$service = new App\Forms\FormFactory;
		return $service;
	}


	/**
	 * @return App\Forms\SignInFormFactory
	 */
	public function createService__61_App_Forms_SignInFormFactory()
	{
		$service = new App\Forms\SignInFormFactory($this->getService('60_App_Forms_FormFactory'),
			$this->getService('security.user'));
		return $service;
	}


	/**
	 * @return App\Forms\SignUpFormFactory
	 */
	public function createService__62_App_Forms_SignUpFormFactory()
	{
		$service = new App\Forms\SignUpFormFactory($this->getService('60_App_Forms_FormFactory'),
			$this->getService('64_App_Model_UserManager'));
		return $service;
	}


	/**
	 * @return App\Model\SettingsManager
	 */
	public function createService__63_App_Model_SettingsManager()
	{
		$service = new App\Model\SettingsManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Model\UserManager
	 */
	public function createService__64_App_Model_UserManager()
	{
		$service = new App\Model\UserManager($this->getService('database.default.context'));
		return $service;
	}


	/**
	 * @return App\Presenters\Error4xxPresenter
	 */
	public function createServiceApplication__1()
	{
		$service = new App\Presenters\Error4xxPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\MicroPresenter
	 */
	public function createServiceApplication__10()
	{
		$service = new NetteModule\MicroPresenter($this, $this->getService('http.request'),
			$this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return App\Presenters\ErrorPresenter
	 */
	public function createServiceApplication__2()
	{
		$service = new App\Presenters\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return App\Presenters\HomepagePresenter
	 */
	public function createServiceApplication__3()
	{
		$service = new App\Presenters\HomepagePresenter($this->getService('63_App_Model_SettingsManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\JsonPresenter
	 */
	public function createServiceApplication__4()
	{
		$service = new App\Presenters\JsonPresenter($this->getService('63_App_Model_SettingsManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectDrahakRestful($this->getService('restful.responseFactory'),
			$this->getService('restful.resourceFactory'), $this->getService('restful.security.authentication'),
			$this->getService('restful.inputFactory'), $this->getService('restful.requestFilter'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\SettingsPresenter
	 */
	public function createServiceApplication__5()
	{
		$service = new App\Presenters\SettingsPresenter($this->getService('63_App_Model_SettingsManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\SignPresenter
	 */
	public function createServiceApplication__6()
	{
		$service = new App\Presenters\SignPresenter;
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->signUpFactory = $this->getService('62_App_Forms_SignUpFormFactory');
		$service->signInFactory = $this->getService('61_App_Forms_SignInFormFactory');
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\UserPresenter
	 */
	public function createServiceApplication__7()
	{
		$service = new App\Presenters\UserPresenter($this->getService('64_App_Model_UserManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return App\Presenters\ValuesPresenter
	 */
	public function createServiceApplication__8()
	{
		$service = new App\Presenters\ValuesPresenter($this->getService('63_App_Model_SettingsManager'));
		$service->injectPrimary($this, $this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'), $this->getService('session.session'),
			$this->getService('security.user'), $this->getService('latte.templateFactory'));
		$service->injectDrahakRestful($this->getService('restful.responseFactory'),
			$this->getService('restful.resourceFactory'), $this->getService('restful.security.authentication'),
			$this->getService('restful.inputFactory'), $this->getService('restful.requestFilter'));
		$service->invalidLinkMode = 5;
		return $service;
	}


	/**
	 * @return NetteModule\ErrorPresenter
	 */
	public function createServiceApplication__9()
	{
		$service = new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
		return $service;
	}


	/**
	 * @return Nette\Application\Application
	 */
	public function createServiceApplication__application()
	{
		$service = new Nette\Application\Application($this->getService('application.presenterFactory'),
			$this->getService('routing.router'), $this->getService('http.request'),
			$this->getService('http.response'));
		$service->catchExceptions = FALSE;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationTracy\RoutingPanel::initializePanel($service);
		$service->onStartup[] = [$this->getService('restful.methodHandler'), 'run'];
		$service->onError[] = [$this->getService('restful.methodHandler'), 'error'];
		$service->onStartup[] = [$this->getService('restful.panel'), 'getTab'];
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel($this->getService('routing.router'),
			$this->getService('http.request'), $this->getService('application.presenterFactory')));
		return $service;
	}


	/**
	 * @return Nette\Application\LinkGenerator
	 */
	public function createServiceApplication__linkGenerator()
	{
		$service = new Nette\Application\LinkGenerator($this->getService('routing.router'),
			$this->getService('http.request')->getUrl(), $this->getService('application.presenterFactory'));
		return $service;
	}


	/**
	 * @return Nette\Application\IPresenterFactory
	 */
	public function createServiceApplication__presenterFactory()
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 5, 'C:\xampp\htdocs\protector\protector\app/../temp/cache/Nette%5CBridges%5CApplicationDI%5CApplicationExtension'));
		$service->setMapping(['*' => 'App\*Module\Presenters\*Presenter']);
		return $service;
	}


	/**
	 * @return Nette\Caching\Storages\IJournal
	 */
	public function createServiceCache__journal()
	{
		$service = new Nette\Caching\Storages\SQLiteJournal('C:\xampp\htdocs\protector\protector\app/../temp/cache/journal.s3db');
		return $service;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function createServiceCache__storage()
	{
		$service = new Nette\Caching\Storages\FileStorage('C:\xampp\htdocs\protector\protector\app/../temp/cache',
			$this->getService('cache.journal'));
		return $service;
	}


	/**
	 * @return Nette\DI\Container
	 */
	public function createServiceContainer()
	{
		return $this;
	}


	/**
	 * @return Nette\Database\Connection
	 */
	public function createServiceDatabase__default__connection()
	{
		$service = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=protector', 'root',
			'', ['lazy' => TRUE]);
		$this->getService('tracy.blueScreen')->addPanel('Nette\Bridges\DatabaseTracy\ConnectionPanel::renderException');
		Nette\Database\Helpers::createDebugPanel($service, TRUE, 'default');
		return $service;
	}


	/**
	 * @return Nette\Database\Context
	 */
	public function createServiceDatabase__default__context()
	{
		$service = new Nette\Database\Context($this->getService('database.default.connection'),
			$this->getService('database.default.structure'), $this->getService('database.default.conventions'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Database\Conventions\DiscoveredConventions
	 */
	public function createServiceDatabase__default__conventions()
	{
		$service = new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
		return $service;
	}


	/**
	 * @return Nette\Database\Structure
	 */
	public function createServiceDatabase__default__structure()
	{
		$service = new Nette\Database\Structure($this->getService('database.default.connection'),
			$this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Nette\Http\Context
	 */
	public function createServiceHttp__context()
	{
		$service = new Nette\Http\Context($this->getService('http.request'), $this->getService('http.response'));
		trigger_error('Service http.context is deprecated.', 16384);
		return $service;
	}


	/**
	 * @return Nette\Http\Request
	 */
	public function createServiceHttp__request()
	{
		$service = $this->getService('restful.httpRequestFactory')->createHttpRequest();
		if (!$service instanceof Nette\Http\Request) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.request\', value returned by factory is not Nette\Http\Request type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Http\RequestFactory
	 */
	public function createServiceHttp__requestFactory()
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	/**
	 * @return Nette\Http\Response
	 */
	public function createServiceHttp__response()
	{
		$service = $this->getService('restful.httpResponseFactory')->createHttpResponse();
		if (!$service instanceof Nette\Http\Response) {
			throw new Nette\UnexpectedValueException('Unable to create service \'http.response\', value returned by factory is not Nette\Http\Response type.');
		}
		return $service;
	}


	/**
	 * @return Nette\Bridges\ApplicationLatte\ILatteFactory
	 */
	public function createServiceLatte__latteFactory()
	{
		return new Container_8bc1e3b7b2_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory($this);
	}


	/**
	 * @return Nette\Application\UI\ITemplateFactory
	 */
	public function createServiceLatte__templateFactory()
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory($this->getService('latte.latteFactory'),
			$this->getService('http.request'), $this->getService('security.user'),
			$this->getService('cache.storage'), NULL);
		return $service;
	}


	/**
	 * @return Nette\Mail\IMailer
	 */
	public function createServiceMail__mailer()
	{
		$service = new Nette\Mail\SendmailMailer;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Application\CachedRouteListFactory
	 */
	public function createServiceRestful__cachedRouteListFactory()
	{
		$service = new Drahak\Restful\Application\CachedRouteListFactory('C:\xampp\htdocs\protector\protector\app',
			$this->getService('restful.routeListFactory'), $this->getService('cache.storage'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Converters\CamelCaseConverter
	 */
	public function createServiceRestful__camelCaseConverter()
	{
		$service = new Drahak\Restful\Converters\CamelCaseConverter;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Mapping\DataUrlMapper
	 */
	public function createServiceRestful__dataUrlMapper()
	{
		$service = new Drahak\Restful\Mapping\DataUrlMapper;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Converters\DateTimeConverter
	 */
	public function createServiceRestful__dateTimeConverter()
	{
		$service = new Drahak\Restful\Converters\DateTimeConverter('c');
		return $service;
	}


	/**
	 * @return Drahak\Restful\Http\ApiRequestFactory
	 */
	public function createServiceRestful__httpRequestFactory()
	{
		$service = new Drahak\Restful\Http\ApiRequestFactory($this->getService('http.requestFactory'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Http\ResponseFactory
	 */
	public function createServiceRestful__httpResponseFactory()
	{
		$service = new Drahak\Restful\Http\ResponseFactory($this->getService('http.request'),
			$this->getService('restful.requestFilter'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Http\InputFactory
	 */
	public function createServiceRestful__inputFactory()
	{
		$service = new Drahak\Restful\Http\InputFactory($this->getService('http.request'), $this->getService('restful.mapperContext'),
			$this->getService('restful.validationScopeFactory'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Mapping\JsonMapper
	 */
	public function createServiceRestful__jsonMapper()
	{
		$service = new Drahak\Restful\Mapping\JsonMapper;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Mapping\MapperContext
	 */
	public function createServiceRestful__mapperContext()
	{
		$service = new Drahak\Restful\Mapping\MapperContext;
		$service->addMapper('application/xml', $this->getService('restful.xmlMapper'));
		$service->addMapper('application/json', $this->getService('restful.jsonMapper'));
		$service->addMapper('application/javascript', $this->getService('restful.jsonMapper'));
		$service->addMapper('application/x-www-form-urlencoded', $this->getService('restful.queryMapper'));
		$service->addMapper('application/x-data-url', $this->getService('restful.dataUrlMapper'));
		$service->addMapper('application/octet-stream', $this->getService('restful.nullMapper'));
		$service->addMapper(NULL, $this->getService('restful.nullMapper'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Application\Events\MethodHandler
	 */
	public function createServiceRestful__methodHandler()
	{
		$service = new Drahak\Restful\Application\Events\MethodHandler($this->getService('http.request'),
			$this->getService('http.response'), $this->getService('restful.methodOptions'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Application\MethodOptions
	 */
	public function createServiceRestful__methodOptions()
	{
		$service = new Drahak\Restful\Application\MethodOptions($this->getService('routing.router'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Mapping\NullMapper
	 */
	public function createServiceRestful__nullMapper()
	{
		$service = new Drahak\Restful\Mapping\NullMapper;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Converters\ObjectConverter
	 */
	public function createServiceRestful__objectConverter()
	{
		$service = new Drahak\Restful\Converters\ObjectConverter;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Diagnostics\ResourceRouterPanel
	 */
	public function createServiceRestful__panel()
	{
		$service = new Drahak\Restful\Diagnostics\ResourceRouterPanel(NULL, 'timestamp', $this->getService('routing.router'));
		Nette\Diagnostics\Debugger::getBar()->addPanel($service);
		return $service;
	}


	/**
	 * @return Drahak\Restful\Converters\PascalCaseConverter
	 */
	public function createServiceRestful__pascalCaseConverter()
	{
		$service = new Drahak\Restful\Converters\PascalCaseConverter;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Mapping\QueryMapper
	 */
	public function createServiceRestful__queryMapper()
	{
		$service = new Drahak\Restful\Mapping\QueryMapper;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Utils\RequestFilter
	 */
	public function createServiceRestful__requestFilter()
	{
		$service = new Drahak\Restful\Utils\RequestFilter($this->getService('http.request'),
			['jsonp', 'pretty']);
		return $service;
	}


	/**
	 * @return Drahak\Restful\IResource
	 */
	public function createServiceRestful__resource()
	{
		$service = $this->getService('restful.resourceFactory')->create();
		if (!$service instanceof Drahak\Restful\IResource) {
			throw new Nette\UnexpectedValueException('Unable to create service \'restful.resource\', value returned by factory is not Drahak\Restful\IResource type.');
		}
		return $service;
	}


	/**
	 * @return Drahak\Restful\Converters\ResourceConverter
	 */
	public function createServiceRestful__resourceConverter()
	{
		$service = new Drahak\Restful\Converters\ResourceConverter;
		$service->addConverter($this->getService('restful.objectConverter'));
		$service->addConverter($this->getService('restful.dateTimeConverter'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\ResourceFactory
	 */
	public function createServiceRestful__resourceFactory()
	{
		$service = new Drahak\Restful\ResourceFactory($this->getService('http.request'), $this->getService('restful.resourceConverter'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Application\ResponseFactory
	 */
	public function createServiceRestful__responseFactory()
	{
		$service = new Drahak\Restful\Application\ResponseFactory($this->getService('http.response'),
			$this->getService('http.request'), $this->getService('restful.mapperContext'));
		$service->setJsonp('jsonp');
		$service->setPrettyPrintKey('pretty');
		$service->setPrettyPrint(TRUE);
		return $service;
	}


	/**
	 * @return Drahak\Restful\Application\RouteAnnotation
	 */
	public function createServiceRestful__routeAnnotation()
	{
		$service = new Drahak\Restful\Application\RouteAnnotation;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Application\RouteListFactory
	 */
	public function createServiceRestful__routeListFactory()
	{
		$service = new Drahak\Restful\Application\RouteListFactory('C:\xampp\htdocs\protector\protector\app',
			TRUE, $this->getService('cache.storage'), $this->getService('restful.routeAnnotation'));
		$service->setModule('');
		$service->setPrefix('');
		return $service;
	}


	/**
	 * @return Drahak\Restful\Security\AuthenticationContext
	 */
	public function createServiceRestful__security__authentication()
	{
		$service = new Drahak\Restful\Security\AuthenticationContext;
		$service->setAuthProcess($this->getService('restful.security.nullAuthentication'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Security\Process\BasicAuthentication
	 */
	public function createServiceRestful__security__basicAuthentication()
	{
		$service = new Drahak\Restful\Security\Process\BasicAuthentication($this->getService('security.user'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Security\Authentication\HashAuthenticator
	 */
	public function createServiceRestful__security__hashAuthenticator()
	{
		$service = new Drahak\Restful\Security\Authentication\HashAuthenticator(NULL, $this->getService('http.request'),
			$this->getService('restful.security.hashCalculator'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Security\HashCalculator
	 */
	public function createServiceRestful__security__hashCalculator()
	{
		$service = new Drahak\Restful\Security\HashCalculator($this->getService('restful.mapperContext'),
			$this->getService('http.request'));
		$service->setPrivateKey(NULL);
		return $service;
	}


	/**
	 * @return Drahak\Restful\Security\Process\NullAuthentication
	 */
	public function createServiceRestful__security__nullAuthentication()
	{
		$service = new Drahak\Restful\Security\Process\NullAuthentication;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Security\Process\SecuredAuthentication
	 */
	public function createServiceRestful__security__securedAuthentication()
	{
		$service = new Drahak\Restful\Security\Process\SecuredAuthentication($this->getService('restful.security.hashAuthenticator'),
			$this->getService('restful.security.timeoutAuthenticator'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Security\Authentication\TimeoutAuthenticator
	 */
	public function createServiceRestful__security__timeoutAuthenticator()
	{
		$service = new Drahak\Restful\Security\Authentication\TimeoutAuthenticator('timestamp',
			300);
		return $service;
	}


	/**
	 * @return Drahak\Restful\Converters\SnakeCaseConverter
	 */
	public function createServiceRestful__snakeCaseConverter()
	{
		$service = new Drahak\Restful\Converters\SnakeCaseConverter;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Validation\ValidationScope
	 */
	public function createServiceRestful__validationScope()
	{
		$service = $this->getService('restful.validationScopeFactory')->create();
		if (!$service instanceof Drahak\Restful\Validation\ValidationScope) {
			throw new Nette\UnexpectedValueException('Unable to create service \'restful.validationScope\', value returned by factory is not Drahak\Restful\Validation\ValidationScope type.');
		}
		return $service;
	}


	/**
	 * @return Drahak\Restful\Validation\ValidationScopeFactory
	 */
	public function createServiceRestful__validationScopeFactory()
	{
		$service = new Drahak\Restful\Validation\ValidationScopeFactory($this->getService('restful.validator'));
		return $service;
	}


	/**
	 * @return Drahak\Restful\Validation\Validator
	 */
	public function createServiceRestful__validator()
	{
		$service = new Drahak\Restful\Validation\Validator;
		return $service;
	}


	/**
	 * @return Drahak\Restful\Mapping\XmlMapper
	 */
	public function createServiceRestful__xmlMapper()
	{
		$service = new Drahak\Restful\Mapping\XmlMapper;
		return $service;
	}


	/**
	 * @return Nette\Application\IRouter
	 */
	public function createServiceRouting__router()
	{
		$service = App\RouterFactory::createRouter();
		if (!$service instanceof Nette\Application\IRouter) {
			throw new Nette\UnexpectedValueException('Unable to create service \'routing.router\', value returned by factory is not Nette\Application\IRouter type.');
		}
		$service->offsetSet(NULL, $this->getService('restful.cachedRouteListFactory')->create());
		return $service;
	}


	/**
	 * @return Nette\Security\User
	 */
	public function createServiceSecurity__user()
	{
		$service = new Nette\Security\User($this->getService('security.userStorage'), $this->getService('64_App_Model_UserManager'),
			$this->getService('59_App_Acl_Acl'));
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	/**
	 * @return Nette\Security\IUserStorage
	 */
	public function createServiceSecurity__userStorage()
	{
		$service = new Nette\Http\UserStorage($this->getService('session.session'));
		return $service;
	}


	/**
	 * @return Nette\Http\Session
	 */
	public function createServiceSession__session()
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('14 days');
		return $service;
	}


	/**
	 * @return Tracy\Bar
	 */
	public function createServiceTracy__bar()
	{
		$service = Tracy\Debugger::getBar();
		if (!$service instanceof Tracy\Bar) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.bar\', value returned by factory is not Tracy\Bar type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\BlueScreen
	 */
	public function createServiceTracy__blueScreen()
	{
		$service = Tracy\Debugger::getBlueScreen();
		if (!$service instanceof Tracy\BlueScreen) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.blueScreen\', value returned by factory is not Tracy\BlueScreen type.');
		}
		return $service;
	}


	/**
	 * @return Tracy\ILogger
	 */
	public function createServiceTracy__logger()
	{
		$service = Tracy\Debugger::getLogger();
		if (!$service instanceof Tracy\ILogger) {
			throw new Nette\UnexpectedValueException('Unable to create service \'tracy.logger\', value returned by factory is not Tracy\ILogger type.');
		}
		return $service;
	}


	public function initialize()
	{
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		$this->getService('http.response')->setHeader('X-Powered-By', 'Nette Framework');
		$this->getService('http.response')->setHeader('Content-Type', 'text/html; charset=utf-8');
		$this->getService('http.response')->setHeader('X-Frame-Options', 'SAMEORIGIN');
		$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		Tracy\Debugger::$editorMapping = [];
		Tracy\Debugger::setLogger($this->getService('tracy.logger'));
		if ($tmp = $this->getByType("Nette\Http\Session", FALSE)) { $tmp->start(); Tracy\Debugger::dispatch(); };
	}

}



class Container_8bc1e3b7b2_Nette_Bridges_ApplicationLatte_ILatteFactoryImpl_latte_latteFactory implements Nette\Bridges\ApplicationLatte\ILatteFactory
{
	private $container;


	public function __construct(Container_8bc1e3b7b2 $container)
	{
		$this->container = $container;
	}


	public function create()
	{
		$service = new Latte\Engine;
		$service->setTempDirectory('C:\xampp\htdocs\protector\protector\app/../temp/cache/latte');
		$service->setAutoRefresh(TRUE);
		$service->setContentType('html');
		Nette\Utils\Html::$xhtml = FALSE;
		return $service;
	}

}

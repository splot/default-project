<?php
use Splot\Framework\Application\AbstractApplication;
use Splot\Framework\Framework;

class Application extends AbstractApplication
{

    protected $name = 'SplotApplicationChangeMe';
    protected $version = '0.0.0-dev';

    /**
     * Bootstrap the application.
     *
     * This method is called right at the beginning of the process lifecycle.
     * It's purpose is to register required services in the container. You can overwrite
     * this method if you want to register your custom services, but you need to
     * register specific services under specific names.
     *
     * If you overwrite it, it is recommended that you call the parent at one point.
     *
     * See documentation for more.
     */
    public function bootstrap() {
        parent::bootstrap();
    }

    /**
     * Load specific modules into the application.
     *
     * Should return an array of instantiated module classes.
     * 
     * @return aray
     */
    public function loadModules() {
        $modules = array(
            new Splot\FrameworkExtraModule\SplotFrameworkExtraModule(),
            new Splot\KnitModule\SplotKnitModule(),
            new Splot\TwigModule\SplotTwigModule(),
            new Splot\AssetsModule\SplotAssetsModule(),

            new Acme\Modules\Demo\AcmeDemoModule()
        );

        if ($this->container->getParameter('debug') || $this->container->getParameter('mode') === Framework::MODE_CONSOLE) {
            $modules = array_merge($modules, array(
                new Splot\DevToolsModule\SplotDevToolsModule(),
                new Splot\WebLogModule\SplotWebLogModule()
            ));
        }

        return $modules;
    }

    /**
     * This method is called by Splot Framework during the configuration phase.
     *
     * At this point all modules have been added to the module list and all parameters and configs have
     * been loaded. Therefore it is a good place to configure some behavior based on that
     * information.
     *
     * The purpose of it is to perform any additional configuration on the application's part
     * and register any application wide services. This is a better place to register
     * your services than ::bootstrap() method as generally, bootstrap() method should not be
     * overwritten unless you know what you're doing.
     */
    public function configure() {
        parent::configure();
    }

    /**
     * This method is called by Splot Framework during the run phase, so right before it will
     * handle a request or a CLI command.
     *
     * This is a place where all services from all modules have been registered and the whole app
     * is fully bootstrapped and fully configured so you can add some global application-wide
     * logic or behavior here.
     */
    public function run() {
        parent::run();
    }

}
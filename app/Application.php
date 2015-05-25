<?php
use Splot\Framework\Application\AbstractApplication;

class Application extends AbstractApplication
{

    protected $name = 'SplotApplicationChangeMe';
    protected $version = '0.0.0-dev';

    /**
     * Load specific modules into the application.
     *
     * Should return an array of instantiated module classes.
     * 
     * @return aray
     */
    public function loadModules($env, $debug) {
        $modules = array(
            new Splot\FrameworkExtraModule\SplotFrameworkExtraModule(),
            new Splot\KnitModule\SplotKnitModule(),
            new Splot\TwigModule\SplotTwigModule(),
            new Splot\AssetsModule\SplotAssetsModule(),

            new Acme\Modules\Demo\AcmeDemoModule()
        );

        if ($debug) {
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
<?php
use Splot\Framework\Application\AbstractApplication;
use Splot\Framework\Framework;
use Splot\Framework\Config;

class Application extends AbstractApplication
{

    public function boot(array $option = array()) {

    }

    public function loadModules() {
        $modules = array(
            new Splot\KnitModule\SplotKnitModule(),
            new Splot\TwigModule\SplotTwigModule(),
            new Splot\AssetsModule\SplotAssetsModule(),

            new Acme\Modules\Demo\AcmeDemoModule()
        );

        if ($this->getEnv() === Framework::ENV_DEV) {
            $modules[] = new Splot\WebLogModule\SplotWebLogModule();
        }

        return $modules;
    }

}
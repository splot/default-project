<?php
namespace Acme\Modules\Demo;

use Splot\Framework\Modules\AbstractModule;

class AcmeDemoModule extends AbstractModule
{

    /**
     * This method is called on the module during configuration phase so you can register any services,
     * listeners etc here.
     *
     * It should not contain any logic, just wiring things together.
     *
     * If the module contains any routes they should be registered here.
     */
    public function configure() {
        parent::configure();
    }

    /**
     * This method is called on the module during the run phase. If you need you can include any logic
     * here.
     */
    public function run() {
        parent::run();
    }

}

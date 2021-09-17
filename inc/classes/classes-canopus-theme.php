<?php
/**
 * Bootstraps the theme
 * @package Canopus
 */

 namespace CANOPUS_THEME\Inc;

use CANOPUS_THEME\Inc\Traits\Singleton;

class CANOPUS_THEME {
    use Singleton;

    protected function __construct()
    {
        //load other classes
        $this->setHooks();
    }

    function setHooks() {

    }
 }

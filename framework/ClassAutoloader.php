<?php

class ClassAutoloader
{
    protected $paths = array(
        '../app/forms/',
        '../app/models/',
        '../app/modules/',
        '../app/modules/Contacts/',
        '../app/modules/Fields/',
        '../app/modules/Index/',
        '../framework/',
        '../libs/',
        '../libs/Base/',
        '../libs/Fields/',
        '../libs/Validators/',
    );

    public function __construct()
    {
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($className)
    {
        foreach ($this->paths as $path) {
            $potentialPath = $path . $className . '.php';
            if (is_readable($potentialPath)) {
                require_once $potentialPath;
                return;
            }
        }
        throw new Exception("ClassAutoloader cannot find class $className");
    }
}

new ClassAutoloader();
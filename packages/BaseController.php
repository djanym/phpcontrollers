<?php

namespace Ricubai\PHPControllers;

use eftec\bladeone\BladeOne;
use Ricubai\PHPHelpers\BladeExt;

class BaseController
{
    /**
     * @param string $tpl View name. For index.blade.php you should use $tpl = 'index'. Referrer to blade templating syntax.
     * @param array $vars
     * @throws \Exception
     */
    public static function display($tpl, $vars = []): void
    {
        $views = TPLPATH;
        $cache = TPLPATH . '/cache';
//        $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
        $blade = new BladeExt($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
        $blade->pipeEnable = true;
        echo $blade->run($tpl, $vars); // it calls /views/hello.blade.php
    }
}

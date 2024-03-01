<?php

namespace Nguyenvandoan\Dethithu\Commons;

use eftec\bladeone\BladeOne;

class Controller
{
    public function renderView($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views';
        $compilesPath = __DIR__ . '/../Views/cache';
        $blade = new BladeOne($templatePath, $compilesPath);
        echo $blade->run($view, $data);

    }
}
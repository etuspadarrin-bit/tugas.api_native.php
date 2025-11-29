<?php

namespace Src\Controllers;

use Src\Controllers\BaseController;

class VersionController extends BaseController
{
    public function show()
    {
        $this->ok([
            'version' => 'v1.0.0',
            'environment' => $this->cfg['app']['env'] ?? 'production',
            'php' => PHP_VERSION,
            'time' => date('c')
        ]);
    }
}

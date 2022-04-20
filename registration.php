<?php
/**
 * @package     Plumrocket_AmpProject
 * @copyright   Copyright (c) 2022 Plumrocket Inc. (https://www.plumrocket.com)
 * @license     https://www.plumrocket.com/license/  End-user License Agreement
 */

spl_autoload_register(function ($class) {
    if (preg_match('/\bAmpProject\b/', $class) && ! preg_match('/\bErrorCollectionFactory\b/', $class)) {
        $class = str_replace(["AmpProject\\", "\\"], ['', "/"], $class);

        require __DIR__ . '/amp-toolbox-php/src/' . $class . '.php';
    }
});

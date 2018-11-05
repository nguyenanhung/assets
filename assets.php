<?php
/**
 * Project assets.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 11/4/18
 * Time: 01:17
 */
define('WEBROOT', __DIR__);
define('MUNEE_CACHE', __DIR__ . '/storage/tmp');
require_once __DIR__ . '/vendor/autoload.php';

// Echo out the response
echo \Munee\Dispatcher::run(
    new \Munee\Request(
        array(
            'image' => array(
                'checkReferrer' => FALSE
            )
        )
    )
);

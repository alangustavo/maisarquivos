<?php

use App\Action\HomeAction;
use App\Action\LoginAction;
use Slim\App;

return function (App $app) {
    $app->get('/login', LoginAction::class);
    $app->get('/', HomeAction::class);
};

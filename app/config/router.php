<?php

use \Phalcon\Mvc\Router;

$router = new Router(false); //отключаем маршруты по-умолчанию
$router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI);

/* мы можем добавлять их так
$router->add('/', [
    'controller' => 'Index',
    'action' => 'index'
]);
*/

//либо зарегистрировать универсальный маршрут (рекомендую первый вариант)
$router->add('/:controller/:action', [
    'controller' => 1,
    'action' => 1
]);
$router->notFound([
    'controller' => 'Index',
    'action' => 'index' //задаем 404 страницу как IndexController:indexAction
]);

return $router;

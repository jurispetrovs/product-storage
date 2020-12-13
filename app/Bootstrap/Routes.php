<?php

return FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $namespace = '\App\Controllers\\';

    $r->addRoute('GET', '/', $namespace . 'WelcomeController@redirect');

    $r->addRoute('GET', '/product/list', $namespace . 'ProductsController@index');
    $r->addRoute('GET', '/product/add', $namespace . 'ProductsController@show');
    $r->addRoute('POST', '/product/add', $namespace . 'ProductsController@create');
    $r->addRoute('DELETE', '/product/list/delete', $namespace . 'ProductsController@delete');

    $r->addRoute('POST', '/sku', $namespace . 'ProductsController@skuValidation');

});
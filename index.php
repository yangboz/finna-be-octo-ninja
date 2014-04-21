<?php

require("handlers/HomeHandler.php");
require("handlers/ArticleHandler.php");
require("libs/Toro.php");

Toro::serve(array(
    "/" => "HomeHandler",
    '/article/:alpha' => 'ArticleHandler'
));

ToroHook::add('404', function() {
    // header('HTTP/1.0 404 Not Found');
    // include('templates/404.tpl.php');
    // exit;
	echo "404 Not Found!";
});

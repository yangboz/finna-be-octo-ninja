<?php

require("handlers/DashBoardHandler.php");
require("libs/Toro.php");


ToroHook::add("404", function() {
    echo "Not found!".$this;
});

Toro::serve(array(
    "/" => "DashboardHandler"
));

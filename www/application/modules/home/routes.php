<?php


    $r = Router::getInstance();

    $r->get("/log", function() {
        print('Welcome to the home page');
    });
    $r->get("/room", function() {
        print('Welcome to the room page');
    });
    $r->get("/services", function() {
        print('Welcome to the home page');
    });


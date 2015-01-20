<?php

    $r = Router::getInstance();


    $r->get('/room',function (){
        print('Welcome to the Room page');
    });

    $r->get('/Client/:memberName',function ($memberName) {
        print( 'I\'m viewing ' . $memberName . '\'s profile.' );
        });

    $r->get('/client/', function () {
        print( 'This action will be fired only if a GET request will occure');
    });
    $r->get('/signin', function () {
        print( 'signin');
    });
    $r->get('/signup', function () {
        print( 'signup');
    });






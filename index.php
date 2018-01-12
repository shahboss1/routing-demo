<?php
    //Require the autoload file
    require_once('vendor/autoload.php');

    //Create an instance of the Base class
    $f3 = Base::instance();

    //Define a default route
   // $f3->route('GET /', function() {
     //   echo '<h1>Hello, world!</h1>';
   // }
    //);

    $f3->route('GET /', function(){

        echo '<h1>Routing Demo</h1>';
    });

    $f3->route('GET /page1', function(){

    echo '<h1>Page 1</h1>';
    });

    $f3->route('GET /page2', function(){

    echo '<h1>page 2</h1>';
    });

    $f3->route('GET /page1/subpage-a', function(){

    echo '<h1>pssttttt i got this</h1>';
});



//Run fat free
    $f3->run();

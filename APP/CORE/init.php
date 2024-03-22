<?php

require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';

spl_autoload_register(function ($clas_name){

    require '../app/models/' .$clas_name . '.php';
});
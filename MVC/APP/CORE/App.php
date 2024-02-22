<?php
class App
{
  public function __construct()
  {
    print_r(explode('/', trim($_GET['url'], '/')));
    echo '</pre';
  }
}
<?php
namespace app\controller;

use app\view\AddCarView;

class AddCarController extends Controller
{
  public function __construct()
  {
    $addCarPageView = new AddCarView();
  }
}
?>

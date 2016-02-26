<?php
namespace app\view\page;

use app\view\html\Paragraph;
use app\view\html\Heading;
use app\view\html\Table;

class HomePage extends Page
{
  public function __construct($array = '')
  {
    //$array = '';
    echo Heading::newHeading('h1', 'Midterm Project - IS 218-002');
    echo Heading::newHeading('h2', 'Tomasz Goralczyk');
    echo '<hr>';

    if (!empty($array))
    {
      echo Heading::newHeading('h3', 'Cars Stored in Session');
      echo Table::generateTable($array);
    }
    else
    {
      echo Heading::newHeading('h3', 'No cars stored in session to be
        displayed.');
      echo Heading::newHeading('h3', 'Add a new car by clicking the
        "Add New Car" link above.');
    }
  }
}
?>

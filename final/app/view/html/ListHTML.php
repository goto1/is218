<?php
namespace app\view\html;

class ListHTML extends HTML
{
  public static function databaseList($data)
  {
    $listHTML = '<ul class="list-group">';

    foreach ($data as $key => $attempts)
    {
      foreach ($attempts as $attempt)
      {
        $listHTML .= '<li class="list-group-item">' . $attempt . '</li>';
      }
    }

    $listHTML .= '</ul>';

    return $listHTML;
  }

  // Show details about a specific car
  public static function carDetailsList($data)
  {
    $listHTML = '<ul class="list-group">';

    foreach ($data as $key => $car)
    {
      foreach ($car as $key => $attribute)
      {
        if ($key == 'UserID') {
          $user_id = $attribute;
        } else if ($key == 'Salesperson') {
          $listHTML .= '<li class="list-group-item"><b>' . $key .
            ':</b> <a href="index.php?page=profile&id=' . $user_id . '">' .
            $attribute . '</a></li>';
        } else {
          $listHTML .= '<li class="list-group-item"><b>' . $key . ':</b> ' .
            $attribute . '</li>';
        }
      }
    }
    $listHTML .= '</ul>';

    return $listHTML;
  }

  // Show more detailed information about a specific car
  public static function carDetailedList($data)
  {
    $listHTML = '<ul class="list-group">';
    $listHTML .= '<li class="list-group-item"><b>Make:</b> ' . $data->make->name .'</li>';
    $listHTML .= '<li class="list-group-item"><b>Model:</b> ' . $data->model->name .'</li>';
    $listHTML .= '<li class="list-group-item"><b>Cylinder:</b> ' . $data->engine->cylinder .'</li>';
    $listHTML .= '<li class="list-group-item"><b>Size:</b> ' . $data->engine->size .'</li>';
    $listHTML .= '<li class="list-group-item"><b>Hoursepower:</b> ' . $data->engine->horsepower .'</li>';
    $listHTML .= '<li class="list-group-item"><b>Driven wheels:</b> ' . $data->drivenWheels .'</li>';
    $listHTML .= '<li class="list-group-item"><b>Number of doors:</b> ' . $data->numOfDoors .'</li>';
    $listHTML .= '<li class="list-group-item"><b>Vehicle size:</b> ' . $data->categories->vehicleSize .'</li>';
    $listHTML .= '<li class="list-group-item"><b>Vin:</b> ' . $data->vin .'</li>';
    $listHTML .= '<li class="list-group-item"><b>MPG highway:</b> ' . $data->MPG->highway .'</li>';
    $listHTML .= '<li class="list-group-item"><b>MPG city:</b> ' . $data->MPG->city .'</li>';
    $listHTML .= '</ul>';

    return $listHTML;
  }
}
?>

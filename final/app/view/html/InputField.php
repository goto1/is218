<?php
namespace app\view\html;

class InputField extends HTML
{
  public static function newInputField($type, $name, $placeholder = '',
    $value = '')
  {
    $input = '<input type="' . $type . '" name="' . $name . '"
      class="form-control" placeholder="' . $placeholder . '" >';

    return $input;
  }

  public static function hiddenInputField($type, $name)
  {
    $input = '<input type="' . $type . '" name="' . $name . '" class="hp" >';

    return $input;
  }
}


?>

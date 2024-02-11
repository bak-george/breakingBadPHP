<?php 

namespace Core;

class Validator
{
  public static function string($value, $min = 1, $max = INF)
  {
    $value = trim($value);
    
    return strlen($value) > $min && strlen($value) <= $max;
  }

  public static function email($value)
  {
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }

  public static function imagePath($img)
  {
      if (strpos($img, 'http') === 0) {
          $imageSrc = $img;
      } else {
          $imageSrc = 'images/'. $img;
      }

      return $imageSrc;
  }
}
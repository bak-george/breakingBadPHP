<?php

namespace Core;

class Quote 
{
  public static function getRandomQuote($db)
  {
    $sqlQuote = "SELECT * FROM quotes ORDER BY RAND() LIMIT 1";
  
    $randomQuote = $db->query($sqlQuote)->get();
 
    if ($randomQuote) {
      return $randomQuote;
    }
  
    return false;
  }
}


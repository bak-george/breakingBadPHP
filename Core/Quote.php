<?php

namespace Core;

class Quote 
{
  public static function getRandomQuote($db)
  {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    if (!isset($_SESSION['seen_quotes'])) {
      $_SESSION['seen_quotes'] = [];
      array_unshift($_SESSION['seen_quotes'], 1);
    }

    $totalQuotes = $db->query("SELECT COUNT(*) as total FROM quotes")->get();
    echo "seen quote count:\n";
    var_dump($_SESSION['seen_quotes']);
    if(count($_SESSION['seen_quotes']) >= $totalQuotes) {
      
    }

    $seenQuotesCondition = "";

    if (!empty($_SESSION['seen_quotes'])) {
      $seenQuotes = implode(',', $_SESSION['seen_quotes']);
      $seenQuotesCondition = "WHERE id NOT IN ($seenQuotes)";
    }
    
    $sqlQuote = "SELECT * FROM quotes {$seenQuotesCondition} ORDER BY RAND() LIMIT 1";
  
    $randomQuote = $db->query($sqlQuote)->get();
 
    if ($randomQuote) {
      array_unshift($_SESSION['seen_quotes'], $randomQuote[0]['id']);

      return $randomQuote;
    } else {
      $_SESSION['seen_quotes'] = [];
      header('location: /quote');
      exit();
    }
  
    return false;
  }
}


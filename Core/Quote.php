<?php

namespace Core;

class Quote
{
    private array $charactersAndQuotes;

    public function __construct(array $charactersAndQuotes)
    {
        $this->charactersAndQuotes = $charactersAndQuotes;
    }
    public function generateRandomQuote(): array
    {
        $quotesMap = isset($_COOKIE['quotesMap']) ? json_decode($_COOKIE['quotesMap'], true) : [];

        $quote = $this->getRandomSingleQuote($this->charactersAndQuotes);

        $charId = $this->getIdBasedOnQuote($quote, $this->charactersAndQuotes);

        while (in_array($quote, $quotesMap)) {
            $quote = $this->getRandomSingleQuote($this->charactersAndQuotes);
            $charId = $this->getIdBasedOnQuote($quote, $this->charactersAndQuotes);
        }

        if (!in_array($quote, $quotesMap)) {
            $quotesMap[] = $quote;
        }

        setcookie('quotesMap', json_encode($quotesMap), time() + 3600, '/');

        if (count($quotesMap) == $this->countQuotes($this->charactersAndQuotes)) {
            setcookie('quotesMap', '', time() - 3600, '/');
        }

        $characterAndQuote = self::getCharacterData($charId, $this->charactersAndQuotes);
        $characterAndQuote['quote'] = $quote;

        return $characterAndQuote;
    }

    private function getIdBasedOnQuote($quote, $characters)
    {
        foreach ($characters as $character) {
            if (in_array($quote, $character['quotes'])) {
                return $character['id'];
            }
        }

        return null;
    }

    private function getRandomSingleQuote(array $data)
    {
        $randomKey = array_rand($data);
        $quotes = $data[$randomKey]['quotes'];
        $randomQuoteKey = array_rand($quotes);

        return $quotes[$randomQuoteKey];
    }

    private function getCharacterData(int $id, $characters)
    {
        $characterData = [];

        foreach ($characters as $character) {
            if ($character['id'] == $id) {
                $characterData['full_name']  = $character['full_name'];
                $characterData['nickname']  = $character['nickname'];
                $characterData['occupation']  = $character['occupation'];
                $characterData['status'] = $character['status'];
                $characterData['image'] = $character['image'];
            }
        }

        return $characterData;
    }

   private function countQuotes(array $characters): int
   {
       $totalQuotes = 0;

       foreach ($characters as $character) {
           if (isset($character['quotes']) && ($character['quotes'])) {
               $totalQuotes += count($character['quotes']);
           }
       }

      return $totalQuotes;
   }
}


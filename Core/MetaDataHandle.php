<?php

namespace Core;
class MetaDataHandle
{
    public static function displayMetadata(string $heading, string $quote = ''): string
    {
        switch ($heading) {
            case 'about':
                $msg = 'Breaking Bad quote generator by George Bakoulis';
                break;
            case 'quote':
                $msg = 'Breaking bad quote: ';
                break;
            default:
                $msg = "Find quotes from the universe of Breaking Bad on the Breaking Bad quote generator. Most of the quotes are from Walter White, Jessy Pinkman, and Saul Goodman.";
        }

        return $msg;
    }
}
<?php

class Data
{
    private static $wordsArray;
    private static $frenchTranslation;
    private static $englishTranslation;
    
    
    public static function initializeArrays($wordsArray, $frenchTranslation, $englishTranslation)
    {
        self::$wordsArray = self::words();
        self::$frenchTranslation = array_keys(self::$wordsArray);
        self::$englishTranslation = array_values(self::$wordsArray);
    }


    private static function words(): array
    {

        return [
            'pain' => 'bread',
            'nain de jardin' => 'garden gnome',
            'oeuf' => 'egg',
            'buisson' => 'bush',
            'chapeau' => 'hat',
            'porte' => 'door',
            'musique' => 'music',
            'biscuit' => 'cookie',
        ];
    }

    public static function getOriginalArray() {
        return self::$wordsArray;
    }

    public static function getKeysArray() {
        return self::$frenchTranslation;
    }

    public static function getValuesArray() {
        return self::$englishTranslation;
    }
}

echo Data::getKeysArray();




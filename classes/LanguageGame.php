<?php


class LanguageGame {

    

    public function __construct($wordsArray, $frenchTranslation,  )
    {
        foreach (Data::$wordsArray() as $frenchTranslation=>$englishTranslation) {
            $this->wordsArray[$frenchTranslation] = $englishTranslation;

            
            // TO DO: create instances of the Word class to be added to the words array
        }
    }

    /* public function run(): void
    {
        // TO DO: check for option A or B

        // Option A: user visits site first time (or wants a new word)
        // TO DO: select a random word for the user to translate

        // Option B: user has just submitted an answer
        // TO DO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TO DO: generate a message for the user that can be shown

    } */

}

    


    

    




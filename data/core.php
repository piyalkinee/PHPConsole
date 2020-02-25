<?php

class Console
{

    var $currentRowNumber;
    var $currentReadPosition;

    function Console()
    {
        $this->$currentRowNumber = 0;
        $this->$currentReadPosition = 0;
    }

    function WriteLine($rowContent)
    {
        $this->$currentRowNumber++;
        echo '<div class="row"><p class="row-number">' . $this->$currentRowNumber . '</p><p class="row-content">' . $rowContent . '</p></div>';
    }

    function WriteError($rowContent)
    {
        $this->$currentRowNumber++;
        echo '<div class="row"><p class="row-number">' . $this->$currentRowNumber . '</p><p class="row-content-error">' . $rowContent . '</p></div>';
    }

    function WriteBorder()
    {
        $this->$currentRowNumber++;
        echo '<div class="row"><p class="row-number">' . $this->$currentRowNumber . '</p><p class="row-content-error">______________________________________________________________________</p></div>';
    }
    
}

$Console = new Console;
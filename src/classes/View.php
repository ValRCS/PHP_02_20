<?php
class View
{

    public function render()
    {
        //TODO print all of the page!
    }

    public function printSongs($songs)
    {
        echo "<hr>Printing songs</br>";
        foreach ($songs as $song) {
            echo "<br>";
            print_r($song);
        }
    }

}

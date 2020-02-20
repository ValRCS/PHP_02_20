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
        // foreach ($songs as $song) {
        //     echo "<br>";
        //     print_r($song);
        // }
        echo "<hr>";
        $areColumnsSet = false;

        foreach ($songs as $index => $row) {
            if (!$areColumnsSet) {
                echo "<div class='tracks-header-cont'>";
                foreach ($row as $colname => $cell) {
                    echo "<span class='col-fields'>$colname</span>";
                }
                echo "</div>";
                $areColumnsSet = true;
            }

            echo "<div class='tracks-cont'>";
            // echo "Row: $index";
            // print_r($row);
            foreach ($row as $colname => $cell) {
                echo "<span class='track-cell'>$cell</span>";
            }
            echo "</div>";
        }
    }

}

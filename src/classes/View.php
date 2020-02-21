<?php
class View
{

    public function render()
    {
        //TODO print all of the page!
    }

    public function printSongs($songs)
    {
        require_once "../src/template/head.php";
        echo "<h1>My Music</h1><hr>";
        echo "<hr>Printing songs</br>";
        // foreach ($songs as $song) {
        //     echo "<br>";
        //     print_r($song);
        // }
        include "../src/template/song_filter_form.php";
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
        require_once "../src/template/footer.php";
    }

}

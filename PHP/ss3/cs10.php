<?php
    class Colr
    {
        function Color()
        {
            $color_name = "Green";
            echo "color is: " . $color_name;
        }

        function ChangsColor()
        {
            $color_name = "Red";
            echo "<br>updated color is :" . $color_name;
        }
    }
    $objColor = new Color();
?>
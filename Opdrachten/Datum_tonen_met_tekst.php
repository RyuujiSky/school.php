<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datum Tonen</title>
    </head>
    <body>
        <h3>Datum en voorwaardelijke tekst</h3>
        <?php
            $tijd = date("H:i");
            if($tijd>"00:00" && $tijd <"06:00")
            {
                echo "goedenacht";
            }
            if($tijd>"06:00" && $tijd <"12:00")
            {
                echo "goedemorgen";
            }
            if($tijd>"12:00" && $tijd <"18:00")
            {
                echo "goedemiddag";
            }
            if($tijd>"18:00" && $tijd <"00:00")
            {
                echo "goedenavond";
            }
        ?>
    </body>
</html>

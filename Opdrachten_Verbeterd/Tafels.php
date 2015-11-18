<?php
     $getal = filter_input(INPUT_POST, "getal", FILTER_VALIDATE_INT);
    function calculate($getal,$i)
    {
            $antwoord = $getal*$i;
            return $antwoord;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Tafels</h3>
        <form method="POST">
            <?php
                for($i=1;$i<=20;$i++)
                {
                    if(is_int($getal) && $getal==$i)
                    {
                        echo "<input type=\"radio\" name=\"getal\" value=\"$i\" checked><label>$i</label>";
                    }
                    else
                    {
                        echo "<input type=\"radio\" name=\"getal\" value=\"$i\"><label>$i</label>";
                    }
                }
            ?>
            <input type="submit" name="verstuur" value="Versturen">
        </form>
        <table style="border:1px solid black">
            <?php
                if($getal !== null)
                {
                    if($getal !== false)
                    {
                        for($i=1;$i<=10;$i++)
                        {
                            $tekst = $i." maal ".$getal." = ";
                            $antwoord = calculate($getal,$i);
                            echo "<tr style='border:1px solid black'><td style='border:1px solid black'>$tekst</td><td style='border:1px solid black'>$antwoord</td>";
                        }
                    }
                    else
                    {
                        echo "Onjuiste invoer";
                    }
                }
            ?>
        </table>
    </body>
</html>


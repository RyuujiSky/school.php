<?php
    $getal1 = filter_input(INPUT_POST, 'getal1', FILTER_VALIDATE_FLOAT);
    $getal2 = filter_input(INPUT_POST, 'getal2', FILTER_VALIDATE_FLOAT);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Twee getallen optellen</title>
    </head>
    <body>
        <h3>Twee getallen optellen</h3>
        <!-- gebriuk de value eigenschap voor de ingevulde waarde /-->
        <form method="POST" autocomplete="off">
            <p>Type eerste getal in: <input type="number" required step="any" placeholder="vul getal in" name="getal1" value="<?= !empty($getal1)? $getal1 : ""; ?>" ></p> 
            <p>Type tweede getal in: <input type="number" required step="any" placeholder="vul getal in" name="getal2" value="<?= !empty($getal2)? $getal2 : ""; ?>" ></p>
            
            <p><input type="submit" value="Versturen"</p>
        </form>
        
        <?php
            // getal1 en getal2 nog niet verzonden.
            if ($getal1===null || $getal2===null)
            {
                echo "Vul de getallen in";
            }
            else
            {
                //getal1 en getal2 erl verzonden.
                if ($getal1!==false && $getal2!== false)
                {
                    //goed ingevuld
                    $totaal=$getal1+$getal2;
                    echo "$getal1 + $getal2 = $totaal";
                }
                else
                {
                    echo "Geen juiste invoer";
                }
            }
        ?>
    </body>
</html>

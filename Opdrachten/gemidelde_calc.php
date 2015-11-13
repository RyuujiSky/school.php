<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator</title>
    </head>
    <body>
        <h3>gemidelde Calculator</h3>
        <?php
            function calculator($getal1, $getal2, $getal3)
            {
                $antwoord = ($getal1+$getal2+$getal3)/3;
                $ant = number_format($antwoord, 2);
                return($ant);
            }
        ?>
        <form method="POST">
            <p>Typ getal 1: <input type="number" step="0.01" name="getal1"></p>
            <p>Typ getal 2: <input type="number" step="0.01" name="getal2"></p>
            <p>Typ getal 3: <input type="number" step="0.01" name="getal3"></p>
            <p><input type="submit" name="uitrekenen" value="Uitrekenen"></p>
            <p>----------------------------------------------------------</p>
        </form>
        <?php
            $g1 = filter_input(INPUT_POST, "getal1", FILTER_VALIDATE_FLOAT);
            $g2 = filter_input(INPUT_POST, "getal2", FILTER_VALIDATE_FLOAT);
            $g3 = filter_input(INPUT_POST, "getal3", FILTER_VALIDATE_FLOAT);
            if($g1 !== NULL && $g2 !== NULL && $g3 !== NULL)
            {
                if($g1 !== false && $g2 !== false && $g3 !== false)
                {
                    echo calculator($g1, $g2, $g3);
                }
                else
                {
                    echo "just stop trying";
                }
            }
            else
            {
                echo "";
            }
        ?>
    </body>
</html>
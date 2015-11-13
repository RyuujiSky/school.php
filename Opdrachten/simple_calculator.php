<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator</title>
    </head>
    <body>
        <h3>Simple Calculator</h3>
        <?php
            function calculator($getal1, $getal2)
            {
                $antwoord = $getal1+$getal2;
                return($antwoord);
            }
        ?>
        <form method="POST">
            <p>Typ getal 1: <input type="number" step="0.01" name="getal1"></p>
            <p>Typ getal 2: <input type="number" step="0.01" name="getal2"></p>
        <p><input type="submit" name="uitrekenen" value="Uitrekenen"></p>
        <p>
        <p>----------------------------------------------------------</p>
        </form>
        <?php
            $g1 = filter_input(INPUT_POST, "getal1", FILTER_VALIDATE_FLOAT);
            $g2 = filter_input(INPUT_POST, "getal2", FILTER_VALIDATE_FLOAT);
            if($g1 !== null && $g2 !== null)
            {
                if($g1 === false || $g2 === false)
                {
                    echo "Hey stop daarmee :(";
                }
                else
                {
                    echo calculator($g1, $g2);
                }
            }
            else
            {
                echo "Welkom vul twee getallen in.";
            }
        ?>
    </body>
</html>
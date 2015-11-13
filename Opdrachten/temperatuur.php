<html>
    <head>
        <title>Temperatuur</title>
    </head>
    <body>
        <h3>Temperatuur</h3>
        <p>Kies de temperatuur van vandaag</p>
        <?php
            function checkTemp($temp)
            {
                if($temp < 28)
                {
                    return"Laten we maar gaan scrabbelen."; 
                }
                else
                {
                    return"Pak de koelbox maar in, we gaan naar het strand.";
                }
            }
        ?>
        <form method="POST">
            <select name="temp">
                <?php
                    for($i=15;$i<=30;$i++)
                    {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <p><input type="submit" name="versturen" value="Versturen"></p>
        </form>
        <?php
            $t = filter_input(INPUT_POST, "temp", FILTER_VALIDATE_INT);
            if($t !== null)
            {
                if($t !== false)
                {
                    echo checkTemp($t);
                }
                else
                {
                    echo "Hey niet doen";
                }
            }
            else
            {
                echo "";
            }
        ?>
    </body>
</html>
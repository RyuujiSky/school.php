<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ouderbijdrage</title>
    </head>
    <body>
        <?php
            function bijdrage($kinderen1, $kinderen2, $ouders = false)
            {
                $totaalKinderen = $kinderen1+$kinderen2;
                $basisbedrag = 50;
                $kind1 = $kinderen1*25;
                $kind2 = $kinderen2*37;
                $bijdrage = $basisbedrag+$kind1+$kind2;
                if($ouders===true)
                {
                    if($totaalKinderen!==0)
                    {
                        if($bijdrage >= 150)
                        {
                            return $bijdrage = 150;
                        }
                        return $bijdrage = $bijdrage*0.75;
                    }
                    else
                    {
                        return $bijdrage = 0;
                    }
                }
                else
                {
                    if($bijdrage>= 150)
                    {
                        return $bijdrage = 150;
                    }
                    if($totaalKinderen===0)
                    {
                        return $bijdrage = 0;
                    }
                    else
                    {
                        return $bijdrage;
                    } 
                }
            }
        ?>
        <form method="POST">
            <p>Kinderen jonger dan 10 jaar.</p>
            <select name="kinderen<10">
                <?php
                    for($i=0;$i<=20;$i++)
                    {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <p>Kinderen 10 jaar en ouder.</p>
            <select name="kinderen10+">
                <?php
                    for($i=0;$i<=20;$i++)
                    {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <br />
            <br />
            <input type="checkbox" name="ouders" value="true">Een ouder gezin
            <p><input type="submit" name="bevestigen" value="Bevestigen"></p>
            <p>-----------------------------------------------------------------</p>
        </form>
        <?php
            $k1 = filter_input(INPUT_POST, 'kinderen<10', FILTER_VALIDATE_INT);
            $k2 = filter_input(INPUT_POST, 'kinderen10+', FILTER_VALIDATE_INT);
            $ouders = filter_input(INPUT_POST, "ouders", FILTER_VALIDATE_BOOLEAN);
            
            if($k1 !== null && $k2 !== null && $ouders !== null)
            {
                if($k1 !== false && $k2 !== false)
                {
                    if($ouders !== true)
                    {
                        echo "De totale ouderbijdrage is ".bijdrage($k1,$k2,$ouders)." euro";
                    }
                    else
                    {
                        echo "De totale ouderbijdrage is ".bijdrage($k1,$k2,$ouders)." euro";
                    }
                }
                else
                {
                    echo 'could you not';
                }
            }
            else
            {
                echo "";
            }        
        ?>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            function bedrag($persoon,$dagen,$hond = false,$auto = false)
            {
                $plaatshuur = 30;
                $persoon = $persoon*5;
                $bedrag = $plaatshuur+$persoon; 
                if($hond == true && $auto == false)
                {
                    $bedrag = $bedrag+4;
                }
                elseif($auto == true && $hond == false)
                {
                    $bedrag = $bedrag+6;
                }
                elseif($hond == true && $auto == true)
                {
                    $bedrag = $bedrag+10;
                }
                $bedrag = $bedrag*$dagen;
                return $bedrag;
            }
        ?>
        <form method="POST">
            <p>Aantal personen</p>
            <select name="personen">
                <?php
                    for($i=0;$i<=40;$i++)
                    {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <p>Aantal dagen</p>
            <select name="dagen">
                <?php
                    for($i=0;$i<=35;$i++)
                    {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
                <p><input type="checkbox" name="hond" value="true">Hond</p>
                <p><input type="checkbox" name="auto" value="true">Auto</p>
                <input type="submit" name="bevestigen" value="bevestigen">
                <p>-----------------------------------------------------------------</p>
                <?php
                    $personen = filter_input(INPUT_POST, "personen", FILTER_VALIDATE_INT);
                    $dagen = filter_input(INPUT_POST, "dagen", FILTER_VALIDATE_INT);
                    $hond = filter_input(INPUT_POST, "hond", FILTER_VALIDATE_BOOLEAN);
                    $auto = filter_input(INPUT_POST, "auto", FILTER_VALIDATE_BOOLEAN);
                    
                    if(isset($personen) && isset($dagen) && isset($hond) && isset($auto))
                    {
                        echo bedrag($_POST['personen'],$_POST['dagen'],isset($_POST['hond']),isset($_POST['auto']));
                    }
                    elseif(isset($personen) && isset($dagen) && !isset($hond) && !isset($auto))
                    {
                        echo bedrag($_POST['personen'],$_POST['dagen']),isset($_POST['hond']),isset($_POST['auto']);
                    }
                    elseif(isset($personen) && isset($dagen) && !isset($hond) && isset($auto))
                    {
                        echo bedrag($_POST['personen'],$_POST['dagen'],isset($_POST['hond']),isset($_POST['auto']));
                    }
                    elseif(isset($personen) && isset($dagen) && isset($hond) && !isset($auto))
                    {
                        echo bedrag($_POST['personen'],$_POST['dagen'],isset($_POST['hond']),isset($_POST['auto']));
                    }
                ?>
            </select>
        </form>
    </body>
</html>

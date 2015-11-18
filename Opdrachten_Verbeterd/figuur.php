<?php
     $g1 = filter_input(INPUT_POST, "getal1", FILTER_VALIDATE_INT);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>figuur tonen</title>
    </head>
    <body>
        <h3>Figuur tonen</h3>
        <form method="POST">
            <p>Typ een getal: <input type="number" step="1" min="0" name="getal1" value="<?= !empty($g1)? $g1 : ""; ?>" required></p>
        <p><input type="submit" name="figuur_tonen" value="figuur tonen"></p>
        </form>
        <center>
            <?php
                if($g1 !== null)
                {
                    if($g1 !== false)
                    {
                        for($i=0;$i<$g1;$i++)
                        {
                            $string = "";
                            for($j=0;$j<=$i;$j++)
                            {
                                $string = $string . "*";
                            }
                            echo $string."<br />";
                        }
                    }
                    else
                    {
                        echo "Onjuiste invoer";
                    }
                }
                else
                {
                    echo "Vul een getal in";
                }
            ?>
        </center>
    </body>
</html>

<?php
    $bedrag = filter_input(INPUT_POST,'bedrag',FILTER_VALIDATE_FLOAT);
    $btw = filter_input(INPUT_POST, 'btw');
    function metBtw($bedrag, $btw)
    {
        if($btw == "hoog")
        {
            $btw = 1.21;
        }
        else
        {
            $btw = 1.06;
        }
        return $bedrag *= $btw;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BTW Calculator</title>
    </head>
    <body>
        <h3>BTW Calculator</h3>
        
        <form method="POST">
            <label>bedrag:</label>
            <input type="number" step="0.01" name="bedrag" value="<?= !empty($bedrag)? $bedrag : ""; ?>" required="">
            <fieldset>
                <legend>BTW</legend>
                    <?php
                        if(!empty($btw) && $btw === "laag")
                        {
                            echo '<input type="radio" name="btw" value="laag" checked /> <label>6%</label><br/>';
                            echo '<input type="radio" name="btw" value="hoog" /> <label>21%</label><br/>';
                        }
                        else
                        {
                            echo '<input type="radio" name="btw" value="laag" /> <label>6%</label><br/>';
                            echo '<input type="radio" name="btw" value="hoog" checked /> <label>21%</label><br/>';
                        }
                    ?>
            </fieldset>
            <input type="submit" value="bereken">
        </form>
        
        <?php
            if($bedrag===null || $btw===null)
            {
                echo "vul een bedrag en btw tarief in";
            }
            else
            {
                //getal en btw verzonden
                if($bedrag!==false && ($btw==="hoog" || $btw==="laag"))
                {
                    //goed ingevuld
                    $teBetalen=  metBtw($bedrag, $btw);
                    echo "Het btw tarief is $btw over ".$bedrag." euro";
                    echo "<br> Te betalen bedrag is ".$teBetalen." euro";
                }
                else
                {
                    //niet goed ingevuld
                    echo "Geen juiste invoer";
                }
            }
        ?>
    </body>
</html>

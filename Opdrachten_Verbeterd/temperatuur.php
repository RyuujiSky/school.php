<?php
    $temperatuur = filter_input(INPUT_POST,'temperatuur',FILTER_VALIDATE_INT);
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Temperatuur</title>
    </head>
    <body>
        <form method="POST">
            <p>Selecteer een temperatuur:</p>
            <select name="temperatuur" required>
                <option hidden value="">kies</option>
                <?php 
                for ($i=15; $i<31; $i++)
                {
                    if(is_int($temperatuur) && $temperatuur==$i)
                    {
                        echo '<option value="'.$i.'" selected>'.$i.'</option>';
                    }
                    else
                    {
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                }            
                ?>
            </select>
            <input type="submit" value="submit">
        </form>
        <?php
            if ($temperatuur===null)
            {   //geen invoer
                echo "Selecteer een temperatuur";
            }
            else
            {
                if($temperatuur!==false)
                {
                    //juiste invoer
                    if($temperatuur>=28)
                    {
                        echo "Pak de koelbox maar in, we gaan naar get strand.";
                    }
                    else
                    {
                        echo "Laten we maar gaan scrabbelen.";
                    }
                }
                else
                {
                    echo "Geen juiste invoer";
                }
            }
        ?>
    </body>
</html>

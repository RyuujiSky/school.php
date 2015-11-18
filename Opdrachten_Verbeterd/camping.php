<?php
    $dagen = filter_input(INPUT_GET, 'dagen',FILTER_VALIDATE_INT);
    $personen = filter_input(INPUT_GET, 'pers',FILTER_VALIDATE_INT);
    $hond = filter_input(INPUT_GET, 'hond',FILTER_VALIDATE_BOOLEAN);
    $auto = filter_input(INPUT_GET, 'auto',FILTER_VALIDATE_BOOLEAN);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gevorderd Opdracht 3</title>
    </head>
    <body>
        <form method="GET">
            aantal dagen:
            <select name="dagen">
                <option hidden value="">kies</option>
                <?php
                for($i=1;$i<=35;$i++)
                {
                    echo "<option value='$i'>$i</option>";
                }                           
                ?>
            </select>
            <p>aantal personen: <input type="number" name="pers" min="0" value="<?= !empty($personen)? $personen : ""; ?>" required=""></p>
            <p>hond <input type="checkbox" name="hond" value="true"/></p>
            <p>auto bij tent <input type="checkbox" name="auto" value="true"/></p>       
            <p><input type="submit" value="Versturen"></p>            
        </form>         
        <?php            
            if($personen===null)
            {
               echo "vul aantal personen in en maak keuzes";
            }
            else 
            {
               if($personen!==false)
               {
                   $plaatshuur = 30;
                    $aantal = $personen*5;                                                                
                    if($hond=="true")
                    {
                        $hond = 4;                    
                    }                               
                    if($auto=="true")
                    {
                        $auto = 6;
                    }                                
                    $totaal = $plaatshuur+$aantal+$hond+$auto;
                    $campinggeld = $totaal*$dagen;
                    echo "Het campinggeld bedraagt $campinggeld euro";
               }
               else
               {
                   echo "Geen juiste invoer";
               }
            }           
        ?>              
    </body>
</html>
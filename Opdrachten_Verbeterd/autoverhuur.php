<?php
    $kilometer = filter_input(INPUT_GET, 'km',FILTER_VALIDATE_INT);
    $dagen = filter_input(INPUT_GET, 'dag',FILTER_VALIDATE_INT);    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gevorderd Opdracht 2</title>
    </head>
    <body>
        <form method="GET">
            <select name="verhuur">
                <option value="">Select voertuig</option>
                <option value="auto">personenauto</option>
                <option value="busje">personenbusje</option>
            </select>
            <p>gereden kilometers:<input type="number" name="km" placeholder="vul aantal kilometers in" min="0" value="<?= !empty($kilometer)? $kilometer : ""; ?>" required=""></p>
            <p>dagen gebruikt:<input type="number" name="dag" placeholder="vul aantal dagen in" min="0" value="<?= !empty($dagen)? $dagen : ""; ?>" required=""></p>     
            <input type="submit" value="Versturen">        
        </form>        
        <?php           
            if($kilometer===null || $dagen===null)
            {
                echo "vul de getallen in";
            }
            else 
            {
                if($kilometer!==false && $dagen!==false)
                {
                    switch($_GET['verhuur'])
                    {
                        case 'auto':
                            $totaalKm = $kilometer*0.2;
                            $totaalDag = $dagen*50;       
                            $totaalBedrag = $totaalKm+$totaalDag;
                            echo "Het bedrag is $totaalBedrag euro";
                        break;
                        case 'busje':
                            $totaalKm = $kilometer*0.3;
                            $totaalDag = $dagen*95;       
                            $totaalBedrag = $totaalKm+$totaalDag;
                            echo "Het bedrag is $totaalBedrag euro";
                        break;                    
                        default:
                            echo 'maak een keuze';
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
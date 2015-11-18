<?php
    $verbruik = filter_input(INPUT_GET, 'verbruik',FILTER_VALIDATE_INT);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gevorderd Opdracht 4</title>
    </head>
    <body>
        <form method="GET">
            <select name="tariefen">
                <option value="">Select tarief</option>
                <option value="tarief0">tarief 0</option>
                <option value="tarief1">tarief 1</option>
                <option value="tarief2">tarief 2</option>                
            </select>
            <p>verbruikskosten: <input type="number" name="verbruik" min="0" value="<?= !empty($verbruik)? $verbruik : ""; ?>" required=""></p>
            <input type="submit" value="Versturen">            
        </form>        
        <?php                        
            if($verbruik===null)
            {
               echo "KIes een tarief en vul het verbruik in";                       
            }
            else 
            {
                if($verbruik!==false)
                {
                    switch($_GET['tariefen'])
                    {
                        case 'tarief1':
                            $vastrecht = 100;
                            $verbruikskosten = $verbruik*0.25;       
                            $totaalBedrag = $vastrecht+$verbruikskosten;
                            echo "Het bedrag is $totaalBedrag euro";
                        break;
                        case 'tarief2':
                            $vastrecht = 75;
                            $verbruikskosten = $verbruik*0.38;       
                            $totaalBedrag = $vastrecht+$verbruikskosten;
                            echo "Het bedrag is $totaalBedrag euro";
                        break; 
                        case 'tarief0':
                            $totaalBedrag1 = 100+($verbruik*0.25);
                            $totaalBedrag2 = 75+($verbruik*0.38);
                            if($totaalBedrag1<$totaalBedrag2)
                            {
                                echo "Het bedrag is $totaalBedrag1 euro";
                            }
                            else
                            {
                                echo "Het bedrag is $totaalBedrag2 euro";
                            }
                        break;
                        default:
                            echo "maak een keuze";
                    }
                }
                else
                {
                    echo "geen juiste invoer";
                }
            }      
        ?>               
    </body>
</html>
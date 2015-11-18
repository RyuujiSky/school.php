<?php
    $kinderen1 = filter_input(INPUT_GET, 'kind1',FILTER_VALIDATE_INT);
    $kinderen2 = filter_input(INPUT_GET, 'kind2',FILTER_VALIDATE_INT);   
    $ouders = filter_input(INPUT_GET, 'eenoudergezin', FILTER_VALIDATE_BOOLEAN);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gevorderd Opdracht 1</title>
    </head>
    <body>
        <form method="GET">
            <p>Kinderen jonger dan 10 jaar:<input type="number" name="kind1" value="<?= !empty($kinderen1)? $kinderen1 : ""; ?>" required=""></p>
            <p>Kinderen van 10 jaar of ouder:<input type="number" name="kind2" value="<?= !empty($kinderen2)? $kinderen2 : ""; ?>" required=""> </p>           
            <p>Éénoudergezin<input type="checkbox" name="eenoudergezin" value="true"/></p>
            <p><input type="submit" value="Versturen"></p>         
        </form>
        <?php             
            if($kinderen1===null&&$kinderen2===null)
            {
                echo "vul getallen in en kies";
            }
            else 
            {
                if($kinderen1!==false||$kinderen2!==false)
                {
                    $totaalKinderen = $kinderen1+$kinderen2;
                    $basisbedrag = 50;
                    $kind1 = $kinderen1*25;
                    $kind2 = $kinderen2*37;
                    $ouderbijdrage = $basisbedrag+$kind1+$kind2;                
                    if($ouders=="true")
                    {
                        if($totaalKinderen != 0)
                        {
                            if($ouderbijdrage >=150)
                            {
                                echo $ouderbijdrage = 150;
                            }
                            echo $ouderbijdrage*0.75;
                        }
                        else
                        {
                            echo $ouderbijdrage = 0;
                        }                    
                    }
                    else
                    {
                       if($ouderbijdrage >=150)
                       {
                            echo $ouderbijdrage = 150;
                       }
                       if($totaalKinderen==0)
                       {
                            echo $ouderbijdrage = 0;
                       }
                       else
                       {
                            echo $ouderbijdrage;
                       } 
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autoverhuur</title>
    </head>
    <body>
        <?php
            function tarief($auto,$kilometer,$dagen)
            {
                if($auto === "personenauto") 
                {
                    $kilometer = $kilometer*0.20;
                    $dagen = $dagen*50;
                    $bedrag = $kilometer+$dagen;
                    return $bedrag;
                }
                elseif ($auto === "personenbusje") 
                {
                    $kilometer = $kilometer*0.30;
                    $dagen = $dagen*95;
                    $bedrag = $kilometer+$dagen;
                    return $bedrag;
                }
            }
        ?>
        <form method="POST">
            <select name="auto">
                <option value="personenauto">personenauto</option>
                <option value="personenbusje">personenbusje</option>
            </select>
            <br />
            <br />
            <input type="number" name="kilometers" step="0.01" placeholder="Aantal gereden kilometers" id="kilometers">
            <br />
            <br />
            <input type="number" name="dagen" step="1" placeholder="Aantal dagen" id="dagen">
            <br />
            <br />
            <input type="submit" name="bevestigen" value="bevestigen">
        </form>
        <p>-----------------------------------------------------------------</p>
        <?php
            $auto = filter_input(INPUT_POST, "auto");
            $k = filter_input(INPUT_POST, "kilometers", FILTER_VALIDATE_FLOAT);
            $d = filter_input(INPUT_POST, "dagen", FILTER_VALIDATE_INT);
                    
            if(isset($_POST['auto'])&&isset($_POST['kilometers'])&&isset($_POST['dagen']))
            {
                echo "Het totaal te betalen bedrag is : ".tarief($_POST['auto'],$_POST['kilometers'],$_POST['dagen'])." euro";
            }
        ?>
    </body>
</html>

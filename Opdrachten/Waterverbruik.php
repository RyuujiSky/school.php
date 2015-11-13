<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Waterverbruik</title>
    </head>
    <body>
        <?php
            function kosten($tarief,$water)
            {
                switch($tarief)
                {
                    case $tarief === "t1":
                        $vastrecht = 100;
                        $verbruikskosten = $water*0.25;
                        $totaal = $vastrecht+$verbruikskosten;
                        return $totaal;
                        
                    case $tarief === "t2":
                        $vastrecht = 75;
                        $verbruikskosten = 0.38;
                        $totaal = $vastrecht+$verbruikskosten;
                        return $totaal;
                                
                    case $tarief === "t0":
                        $totaal1 = 100+($water*0.25);
                        $totaal2 = 75+($water*0.38);
                        $totaal = $totaal1 < $totaal2 ? $totaal1 : $totaal2;
                        return $totaal;
                }
            }
        ?>
        <form method="POST">
            <p><input type="radio" value="t1" name="tarief">Tarief 1</p>
            <p><input type="radio" value="t2" name="tarief">Tarief 2</p>
            <p><input type="radio" value="t0" name="tarief">Tarief 0</p>
            <p>Verbruikt water in m3</p>
            <p><input type="number" name="waterVerbruik" step="0.01" min="0" placeholder="Water verbruik in m3"</p>
            <p><input type="submit" name="bevestigen" value="bevestigen"></p>
        </form>
        <p>--------------------------------------------------------------</p>
        <?php
            $tarief = filter_input(INPUT_POST, "tarief");
            $waterverbruik = filter_input(INPUT_GET, "waterVerbruik", FILTER_VALIDATE_FLOAT);

            echo kosten($tarief,$waterverbruik); 
            
        ?>
    </body>
</html>

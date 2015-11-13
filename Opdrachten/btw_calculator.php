<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Btw Calculator</title>
    </head>
    <body>
        <h3>Btw Calculator</h3>
        <?php
            function btw($getal,$b)
            {
                $btw = $b == "hoog" ? 1.21 : 1.06;
                $antwoord = $getal*$btw;
                return $antwoord;
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="getal">
            <input type="radio" name="btw" value="hoog"><label>21%</label>
            <input type="radio" name="btw" value="laag"><label>6%</label>
            <input type="submit" name="verstuur" value="Versturen">
        </form>
        <?php
            if(isset($_POST['getal'])&& isset($_POST['btw']))
            {
                echo btw($_POST['getal'], $_POST['btw']);
            }
        ?>
    </body>
</html>

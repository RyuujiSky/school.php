<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Tafels</h3>
        <?php
            function calculate($getal,$i)
            {
                    $antwoord = $getal*$i;
                    return $antwoord;
            }
        ?>
        <form method="POST">
            <?php
                for($i=1;$i<=20;$i++)
                {
                    echo "<input type=\"radio\" name=\"getal\" value=\"$i\"><label>$i</label>";
                }
            ?>
            <input type="submit" name="verstuur" value="Versturen">
        </form>
        <?php
            $getal = filter_input(INPUT_POST, "getal", FILTER_VALIDATE_INT);
            if($getal !== null)
            {
                if($getal !== false)
                {
                    for($i=1;$i<=10;$i++)
                    {
                      echo $i," x ",$getal," = ",calculate($getal,$i);  
                      echo"<br />";
                    }
                }
                else
                {
                    echo "Just dial 911 and report yourself";
                }
            }
        ?>
    </body>
</html>

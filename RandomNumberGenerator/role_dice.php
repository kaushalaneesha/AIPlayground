<html>
    <body>
    <?php
        function roleDice($dice_count, $sides) {
            echo "Total Dices: ".$dice_count."<br>";
            echo "Dice Type: d".$sides."<br>";
            echo "Results: <br>";
            for ($x = 1; $x <= $dice_count; $x++) {                
                echo "$x:" .rand(1, $sides)."<br>";
            }
        }
        roleDice($_POST["dice_count"], $_POST["sides"]);
    ?>
    </body>
</html>


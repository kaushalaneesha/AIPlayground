<html>
    <body>
    <?php
    $dice_count = 0;
    $sides = 6;

    if (isset($_POST['submit'])) {
        $dice_count = $_POST["dice_count"];
        $sides = $_POST["sides"];
        $rolled_dices = [];
    }
    ?>

    <?php
    function roleDice($no_dice_count, $no_sides) {
        $rolled_dices = [];
        for ($x = 1; $x <= $no_dice_count; $x++) {                
            array_push($rolled_dices, rand(1, $no_sides)); 
        }
        return $rolled_dices;
    }

    echo "You asked for $dice_count dices, with $sides sides each, from 1 to $sides.<br>";
    if ($dice_count > 0) {
        echo "The result is: <br>";
        $rolled_dices = roleDice($dice_count, $sides);
        $sum_value = 0;
        foreach($rolled_dices as $dice) {
            echo "Value of the rolled dice: $dice <br>";
            $sum_value += $dice;
        }
        echo "Total count of dice rolled: $sum_value";
    } else {
        echo "No dice was rolled!";
    }
    ?>
    </body>
</html>


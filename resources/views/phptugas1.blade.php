<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting</title>
</head>
<body>
    <div class="container">
        <h1>PHP Excercise</h1>

        <?php
            function sorting($array) {
                echo "Unsorted array: ";
                for ($i = 0; $i < count($array); $i++) {
                    if ($i == count($array)) {
                        echo $array[$i];
                    }
                    else {
                        echo $array[$i] . ", ";
                    }
                }

                echo "<br><br>";

                //minimum, swap;
                for ($i = 0; $i < count($array) - 1; $i++) {
                    $minimum = $i;
                    for ($j = $i + 1; $j < count($array); $j++) {
                        if ($array[$j] < $array[$minimum]) {
                            $minimum = $j;
                        }
                    }
                    $swap = $array[$minimum];
                    $array[$minimum] = $array[$i];
                    $array[$i] = $swap;
                }

                echo "Sorted array: ";
                for ($i = 0; $i < count($array); $i++) {
                    if ($i == count($array)-1) {
                        echo $array[$i];
                    }
                    else {
                        echo $array[$i] . ", ";
                    }
                }
                return $array;
            }

            $a = array(3,6,5,1,0,9,21,100,-6,4,-1,77);
            sorting($a);
        ?>

    </div>
</body>
</html>
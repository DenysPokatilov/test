<?php
$day=6;
switch ($day) {
            case '1':
            case '2':
            case '3':
            case '4':
            case '5': {
                echo "Это рабочий день";
            }
            case '6' :
            case '7' :
                {
                    echo '<pre>' . $day . "  этот день выходной";
                }

                break;
            default: {
                echo "  вы не ввели число !";
            }


}
?>
<?php
    class DivideByZeroException extends Exception {};
    class DivideByNegativeException extends Exception {};
    function process($denominator) {
        try {
            if ($denominator == 0) {
                throw new DivideByZeroException();
            }
            else if ($denominator < 0) {
                throw new DivideByNegativeException();
            }
            else {
                echo 25 / $denominator;
            }
        }
        catch (DivideByZeroException $ex) {
            echo "DIVIDE BY ZERO EXCEPTION!";
        }
        catch (DivideByNegativeException $ex) {
            echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION!";
        }
        catch (Exception $x) {
            echo "UNKNOWN EXCEPTION!";
        }
    }
    process(3);
?>

<!-- <?php
function my_error_handler($error_no, $error_msg, $errfile, $errline) {
        echo "Opps, something went wrong:";
        echo "Error number: [$error_no]";
        echo "Error Description: [$error_msg]";
}

set_error_handler("my_error_handler");

echo (5 / 0);

?> -->

<?php declare(strict_types=1);

    echo "<h2>1. Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument.</h2>";
        function factorial(int $num) {
            if ($num < 0) {
                return "No Factorial for Negative Numbers.";
            }
            else if ($num == 0) { 
                return "Factorial for 0 is 1.";
            }
            else {
                $ans = 1;
                for ($i = 1; $i <= $num; $i++) {
                    $ans *= $i;
                }
                return $ans;
            }
        }

        echo factorial(3);
    //

    
    echo "<h2>2. Write a function to check a number is prime or not. Note: A prime number is a natural number greater than 1 that has no positive divisors other than 1 and itself.</h2>";
        function isPrime(int $num): bool { //Time-Complixity: O(sqrt(N))
            if ($num <= 1): //1 or lower
                return false;
            
            elseif ($num == 2)://2 only onoly even-prime
                return true;
            
            elseif ($num%2 == 0)://is even?
                return false;  
            
            else: //from 2 to sqrt(input) Time-Complixity: O(sqrt(N))
                foreach (range(2, (int) sqrt($num)) as $i) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }

                return true;
                
            endif;

        }

        try {
            $ans = isPrime(15.1);
            echo $ans? "it's a prime": 'Not a prime';
        }
        catch(TypeError $e){
            echo '<b style="color:red">TypeError:</b> must be an int!';
        }
        catch (Exception $e) {
            echo 'Caught Exception: ', $e->getMessage(), '\n';
        }

    //


    echo "<h2>3. Write a function to reverse a string.</h2>";
        function revString (string $rev) {//Time-Complexity: O(N) Linear Space-Complexity O(1)
            $chars = str_split($rev);
            $ans = "";

            for ($i = strlen($rev)-1; $i>=0 ; $i--) {
                $ans .= $chars[$i];
            }

            return $ans;
        }

        try {
            echo revString("Attila");
        }
        catch(TypeError $e){
            echo '<b style="color:red">TypeError:</b> must be an string!';
        }
        catch (Exception $e) {
            echo 'Caught Exception: ', $e->getMessage(), '\n';
        }

    //
    

    echo "<h2>4. Write a function to sort an array.</h2>";
    /*
        function sortArray(array $sortArr): array {


            return ;
        }

        try {
            $arr;
            print_r(sortArray($arr));
        }
        catch(TypeError $e){
            echo '<b style="color:red">TypeError:</b> must be an Array!';
        }
        catch (Exception $e) {
            echo 'Caught Exception: ', $e->getMessage(), '\n';
        }
    */

    //

    echo "<h2>5. Write a PHP function that checks if a string is all lowercase.</h2>";

        function isLowerCase(string $str): bool {//Time-Complixity: O(N)
            $ans = true;
            $chars = str_split($str);

            foreach ($chars as $c) {//ASCII: A->65, Z->90
                if (ord($c) >= 65 && ord($c) <=90) {
                    $ans = false;
                }
            }

            return $ans;
        }

        try {
            echo isLowerCase("homer simpsons")? "Yes all lower-cased": "Not lower Case";
        }
        catch(TypeError $e){
            echo '<b style="color:red">TypeError:</b> must be a string!';
        }
        catch (Exception $e) {
            echo 'Caught Exception: ', $e->getMessage(), '\n';
        }
    //

    
    echo "<h2>6. Write a PHP function that checks whether a passed string is a palindrome or not?</h2>";
        function isPalindrome(string $str): bool{
            
            
            return false;
        }


        try {
            echo isLowerCase("Mom")? "Yes Palindrome": "Not Palindrome";
        }
        catch(TypeError $e){
            echo '<b style="color:red">TypeError:</b> must be a string!';
        }
        catch (Exception $e) {
            echo 'Caught Exception: ', $e->getMessage(), '\n';
        }
    //

?>

<style>
        h1 {
            color: blue;
        }
        h2 {
            color: blueviolet;
        }
        p {
            color: red;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
</style>

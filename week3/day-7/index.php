<?php
class Solution {

    /**
     * @param String $num
     * @param Integer $k
     * @return String
     */
    function removeKdigits($num, $k) {
        $stack = [];
        for ($i = 0; $i < strlen($num); $i++) {
            $digit = $num[$i];
            while ($k > 0 && !empty($stack) && $stack[count($stack) - 1] > $digit) {
                array_pop($stack);
                $k--;
            }
            array_push($stack, $digit);
        }

        // Handle remaining removals and leading zeros
        while ($k-- > 0) {
            array_pop($stack);
        }
        $result = implode('', $stack);
        return ltrim($result, '0') ?: '0';
    }
}
$solution = new Solution();
echo "input: num = \"1432219\", k = 3 <br>";
echo "expected output: \"1219\" <br>";
echo "output: \"" . $solution->removeKdigits("1432219", 3) . "\" <br>";

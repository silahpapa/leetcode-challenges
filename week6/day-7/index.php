<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function truncateSentence($s, $k) {
        $array = explode(' ',$s);
        $truncate = array_slice($array, 0, $k);
        $explode = implode(' ',$truncate);
        return $explode;
    }
}
$solution = new Solution();
echo "input: s = 'Hello how are you Contestant', k = 4 <br>";
echo "expected output: 'Hello how are you' <br>";
echo "output: " . $solution->truncateSentence('Hello how are you Contestant', 4) . "<br>";
echo "<br>";

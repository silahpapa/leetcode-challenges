<?php
class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $result = '';
        while ($columnNumber > 0) {
            $remainder = ($columnNumber - 1) % 26;
            $result = chr(65 + $remainder) . $result;
            $columnNumber = floor(($columnNumber - 1) / 26);
        }
        return $result;
    }
}
$solution = new Solution();
echo "input: 1 <br>";
echo "expected output: 'A' <br>";
echo "output: " . $solution->convertToTitle(1) . "<br>";
echo "<br>";

<?php
class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function multiply($num1, $num2) {
        $len1 = strlen($num1);
        $len2 = strlen($num2);

        $result = array_fill(0, $len1 + $len2, 0);

        for ($i = $len1 - 1; $i >= 0; $i--) {
            for ($j = $len2 - 1; $j >= 0; $j--) {
                $product = intval($num1[$i]) * intval($num2[$j]);
                $result[$i + $j + 1] += $product;
                if ($result[$i + $j + 1] >= 10) {
                    $result[$i + $j] += (int)($result[$i + $j + 1] / 10);
                    $result[$i + $j + 1] %= 10;
                }
            }
        }

        $resultStr = implode("", $result);
        $resultStr = ltrim($resultStr, '0');

        return $resultStr === '' ? '0' : $resultStr;
    }

}
$solution = new Solution();
echo "input: \"2\", \"3\" <br>";
echo "expected output: \"6\" <br>";
echo "output: \"" . $solution->multiply("2", "3") . "\" <br>";
echo "<br>";

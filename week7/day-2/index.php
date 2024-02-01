<?php
class Solution {

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        $result = [];

        for ($i = 0; $i <= $rowIndex; $i++) {
            $currentRow = [];

            for ($j = 0; $j <= $i; $j++) {
                if ($j == 0 || $j == $i) {
                    $currentRow[] = 1;
                } else {
                    $currentRow[] = $result[$i - 1][$j - 1] + $result[$i - 1][$j];
                }
            }

            $result[] = $currentRow;
        }

        return $result[$rowIndex];
    }
}
$solution = new Solution();
echo "input: 3 <br>";
echo "expected output: [1,3,3,1] <br>";
echo "output: " . $solution->getRow(3) . "<br>";

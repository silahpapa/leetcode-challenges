<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function luckyNumbers ($matrix) {
        $luckyNumbers = [];

        $rows = count($matrix);
        $cols = count($matrix[0]);

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $currentNumber = $matrix[$i][$j];

                // Check if $currentNumber is the minimum in its row
                $isMinInRow = true;
                for ($k = 0; $k < $cols; $k++) {
                    if ($matrix[$i][$k] < $currentNumber) {
                        $isMinInRow = false;
                        break;
                    }
                }

                // Check if $currentNumber is the maximum in its column
                $isMaxInCol = true;
                for ($k = 0; $k < $rows; $k++) {
                    if ($matrix[$k][$j] > $currentNumber) {
                        $isMaxInCol = false;
                        break;
                    }
                }

                // If both conditions are met, $currentNumber is a lucky number
                if ($isMinInRow && $isMaxInCol) {
                    $luckyNumbers[] = $currentNumber;
                }
            }
        }

        return $luckyNumbers;
    }
}
$solution = new Solution();
echo "input: [[3,7,8],[9,11,13],[15,16,17]] <br>";
echo "expected output: [15] <br>";
echo "output: " . $solution->luckyNumbers([[3,7,8],[9,11,13],[15,16,17]]) . "<br>";
echo "<br>";

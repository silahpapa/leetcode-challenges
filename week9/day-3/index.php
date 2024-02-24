<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function setZeroes(&$matrix) {
        $rows = count($matrix);
        $cols = count($matrix[0]);
        $zeroFirstRow = false;
        $zeroFirstCol = false;

        // Check if first row needs to be zeroed
        for ($j = 0; $j < $cols; $j++) {
            if ($matrix[0][$j] == 0) {
                $zeroFirstRow = true;
                break;
            }
        }

        // Check if first column needs to be zeroed
        for ($i = 0; $i < $rows; $i++) {
            if ($matrix[$i][0] == 0) {
                $zeroFirstCol = true;
                break;
            }
        }

        // Use first row and first column as markers
        for ($i = 1; $i < $rows; $i++) {
            for ($j = 1; $j < $cols; $j++) {
                if ($matrix[$i][$j] == 0) {
                    $matrix[$i][0] = 0;
                    $matrix[0][$j] = 0;
                }
            }
        }

        // Set entire rows to zero based on markers in first column
        for ($i = 1; $i < $rows; $i++) {
            if ($matrix[$i][0] == 0) {
                for ($j = 1; $j < $cols; $j++) {
                    $matrix[$i][$j] = 0;
                }
            }
        }

        // Set entire columns to zero based on markers in first row
        for ($j = 1; $j < $cols; $j++) {
            if ($matrix[0][$j] == 0) {
                for ($i = 1; $i < $rows; $i++) {
                    $matrix[$i][$j] = 0;
                }
            }
        }

        // Zero out first row if needed
        if ($zeroFirstRow) {
            for ($j = 0; $j < $cols; $j++) {
                $matrix[0][$j] = 0;
            }
        }

        // Zero out first column if needed
        if ($zeroFirstCol) {
            for ($i = 0; $i < $rows; $i++) {
                $matrix[$i][0] = 0;
            }
        }
    }
}
$solution = new Solution();
echo "input: [[1,1,1],[1,0,1],[1,1,1]] <br>";
echo "expected output: [[1,0,1],[0,0,0],[1,0,1]] <br>";
$matrix = [[1, 1, 1], [1, 0, 1], [1, 1, 1]];
echo "output: " . $solution->setZeroes($matrix) . "<br>";
echo "<br>";

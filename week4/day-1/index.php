<?php
class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $triangle = [];

        // Handle the base cases:
        if ($numRows == 0) {
            return $triangle;  // Empty triangle for 0 rows
        }

        $triangle[0] = [1];  // First row always has a single 1

        for ($row = 1; $row < $numRows; $row++) {
            $currentRow = array_fill(0, $row + 1, 1);  // Initialize with 1s

            // Calculate the inner elements using the previous row:
            for ($col = 1; $col < $row; $col++) {
                $currentRow[$col] = $triangle[$row - 1][$col - 1] + $triangle[$row - 1][$col];
            }

            $triangle[$row] = $currentRow;
        }

        return $triangle;
    }
}
$solution = new Solution();
echo "input: 5 <br>";
echo "expected output: [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]] <br>";
echo "output: <br>";
print_r($solution->generate(5));
echo "<br>";

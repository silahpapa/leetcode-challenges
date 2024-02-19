<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $nonZeroIndex = 0; // Initialize a pointer for non-zero elements

        // Iterate through the array
        for ($i = 0; $i < count($nums); $i++) {
            // If the current element is non-zero, move it to the front
            if ($nums[$i] != 0) {
                $nums[$nonZeroIndex++] = $nums[$i];
            }
        }

        // Fill the remaining positions with zeros
        while ($nonZeroIndex < count($nums)) {
            $nums[$nonZeroIndex++] = 0;
        }
    }
}
$solution = new Solution();
echo "input: [0,1,0,3,12] <br>";
echo "expected output: [1,3,12,0,0] <br>";
echo "output: ";

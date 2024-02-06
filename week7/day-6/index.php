<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $n = count($nums);
        $result = array();

        // Mark numbers that appear
        for ($i = 0; $i < $n; $i++) {
            $index = abs($nums[$i]) - 1;
            if ($nums[$index] > 0) {
                $nums[$index] = -$nums[$index];
            }
        }

        // Add missing numbers to result
        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] > 0) {
                $result[] = $i + 1;
            }
        }

        return $result;
    }
}
$solution = new Solution();
echo "input: [4,3,2,7,8,2,3,1] <br>";
echo "expected output: [5,6] <br>";
echo "output: " . $solution->findDisappearedNumbers([4,3,2,7,8,2,3,1]) . "<br>";

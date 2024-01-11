<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        for($i=0;$i<count($nums);$i++) {
            if($nums[$i] <= $target) {
                if($target == $nums[$i]) {
                    return $i;
                }
            } else {
                return $i;
            }

        }
        return count($nums);

    }
}
$solution = new Solution();
echo "input: [1,3,5,6], 5 <br>";
echo "expected output: 2 <br>";
echo "output: " . $solution->searchInsert([1,3,5,6], 5) . "<br>";

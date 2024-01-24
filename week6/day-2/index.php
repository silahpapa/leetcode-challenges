<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        sort($nums);
        $n = count($nums);
        if($n<2) {
            return false;
        }
        for($i=0; $i< $n; $i++) {
            if($nums[$i] == $nums[$i+1]) {
                return true;
            }
        } return false;
    }
}
$solution = new Solution();
echo "input: [1,2,3,1] <br>";
echo "expected output: true <br>";
echo "output: " . $solution->containsDuplicate([1,2,3,1]) . "<br>";

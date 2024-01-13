<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $result = 0;
        foreach($nums as $num){
            $result ^=$num;
        }
        return $result;
    }
}
$solution = new Solution();
echo "input: [2,2,1] <br>";
echo "expected output: 1 <br>";
echo "output: " . $solution->singleNumber([2,2,1]) . "<br>";

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums) {
        $ans = [];
        $n = count($nums);
        for($i=0;$i<$n;$i++) {
            $ans[] = $nums[$i];
        }
        for($i=0;$i<$n;$i++) {
            $ans[] = $nums[$i];
        }
        return $ans;
    }
}
$solution = new Solution();
echo "input: [1,2,1] <br>";
echo "expected output: [1,2,1,1,2,1] <br>";
echo "output: " . $solution->getConcatenation([1,2,1]) . "<br>";

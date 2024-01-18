<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $result = [];

        for($i=0;$i<$n;$i++) {
            $result[] = $nums[$i];
            $result[] = $nums[$i + $n];
        }
        return $result;

    }
}
$solution = new Solution();
echo "input: [2,5,1,3,4,7], 3 <br>";
echo "expected output: [2,3,5,4,1,7] <br>";
echo "output: " . $solution->shuffle([2,5,1,3,4,7], 3) . "<br>";

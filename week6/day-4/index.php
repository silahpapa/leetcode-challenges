<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function firstMissingPositive($nums) {
        $nums = array_unique($nums);
        sort($nums);
        $last = 1;
        for($i=0;$i<count($nums);$i++) {
            $curr = $nums[$i];
            if($curr > 0) {
                if($curr != $last) {
                    $miss = $last;
                    break;
                }
                $last = $curr+1;
            }
        }
        $miss=$last;
        return $miss;
    }
}
$solution = new Solution();
echo "input: [1,2,0] <br>";
echo "expected output: 3 <br>";
echo "output: " . $solution->firstMissingPositive([1,2,0]) . "<br>";
echo "<br>";

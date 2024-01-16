<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $current = null;
        $count = 0;
        foreach($nums as $num) {
            if($count==0) {
                $current = $num;
            }
            $count +=($num == $current) ? 1 : -1;
        }

        return $current;

    }
}
$solution = new Solution();
echo "input: [3,2,3] <br>";
echo "expected output: 3 <br>";
echo "output: " . $solution->majorityElement([3,2,3]) . "<br>";

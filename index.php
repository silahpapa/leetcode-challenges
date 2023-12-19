<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $seen = [];
        for($i=0; $i < count($nums); $i++) {
            $compliment = $target - $nums[$i];
            if(array_key_exists($compliment, $seen)) {
                return [$seen[$compliment],$i];
            }
            $seen[$nums[$i]] = $i;
        }
        return [];
    }
}

$solution = new Solution();
print_r($solution->twoSum([2,7,11,15], 9));
print_r($solution->twoSum([3,2,4], 6));
print_r($solution->twoSum([3,3], 6));
?>

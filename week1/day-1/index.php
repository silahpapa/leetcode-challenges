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
echo "Input nums = [2,7,11,15] <br> ";
echo "target = 9  <br>";
echo "Expected Output: [0,1] <br>";
echo "Output: " . json_encode($solution->twoSum([2,7,11,15], 9)) . "<br>";
echo "Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].<br>";

?>

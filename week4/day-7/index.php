<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        sort($nums);

        $closeSum = $nums[0] + $nums[1] + $nums[2];

        for($i=0; $i<count($nums) - 2; $i ++) {
            $left = $i + 1;
            $right = count($nums) -1;

            while($left < $right) {
                $currentSum = $nums[$i] + $nums[$left] + $nums[$right];
                if(abs($currentSum - $target) < abs($closeSum - $target)) {
                    $closeSum = $currentSum;
                }
                if($currentSum < $target) {
                    $left++;
                } else {
                    $right--;
                }
            }
        }
        return $closeSum;

    }
}
$solution = new Solution();
echo "input: [-1,2,1,-4], 1 <br>";
echo "expected output: 2 <br>";
echo "output: " . $solution->threeSumClosest([-1,2,1,-4], 1) . "<br>";
echo "explanation: The sum that is closest to the target is 2. (-1 + 2 + 1 = 2). <br>";

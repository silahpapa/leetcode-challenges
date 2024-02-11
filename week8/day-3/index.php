<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $count = 0;
        $length = count($nums);

        for ($i = 0; $i < $length; $i++) {
            if ($nums[$i] != $val) {
                $nums[$count++] = $nums[$i];
            }
        }

        return $count;
    }
}
$solution = new Solution();
echo "input: [3,2,2,3], 3 <br>";
echo "expected output: 2 <br>";
echo "output: " . $solution->removeElement([3,2,2,3], 3) . "<br>";

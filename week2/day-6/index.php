<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $result = [-1, -1];
        $leftIndex = $this->findIndex($nums, $target, true);
        $rightIndex = $this->findIndex($nums, $target, false);

        if ($leftIndex <= $rightIndex) {
            $result[0] = $leftIndex;
            $result[1] = $rightIndex;
        }

        return $result;
    }

    function findIndex($nums, $target, $isLeft) {
        $left = 0;
        $right = count($nums) - 1;
        $index = -1;

        while ($left <= $right) {
            $mid = $left + intdiv($right - $left, 2);

            if ($nums[$mid] == $target) {
                $index = $mid;
                if ($isLeft) {
                    $right = $mid - 1;
                } else {
                    $left = $mid + 1;
                }
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        return $index;
    }

}

<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function sumCounts($nums) {
        $n = count($nums);
        $result = 0;

        for ($start = 0; $start < $n; $start++) {
            $distinctValues = array();

            for ($end = $start; $end < $n; $end++) {
                // Add each element to the set to get distinct values
                $distinctValues[$nums[$end]] = true;

                // Calculate the distinct count and add its square to the result
                $distinctCount = count($distinctValues);
                $result += $distinctCount * $distinctCount;
            }
        }

        return $result;
    }
}

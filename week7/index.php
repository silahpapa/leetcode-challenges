<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $maxConsecutiveOnes = 0;
        $currentConsecutiveOnes = 0;
        foreach ($nums as $num) {
            if ($num == 1) {
                $currentConsecutiveOnes++;
                $maxConsecutiveOnes = max($maxConsecutiveOnes, $currentConsecutiveOnes);
            } else {
                $currentConsecutiveOnes = 0;
            }
        }

        return $maxConsecutiveOnes;
    }
}

<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if($n ==0 || $n ==1) {
            return 1;
        }
        $prev = 1;
        $current = 1;
        for($i=2;$i<=$n;$i++) {
            $tmp = $current;
            $current = $prev + $current;
            $prev = $tmp;
        }
        return $current;
    }
}

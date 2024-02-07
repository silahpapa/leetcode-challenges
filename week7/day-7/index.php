<?php
class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $n = count($accounts);
        $richest = 0;
        for($i=0;$i<$n;$i++) {
            $sum = array_sum($accounts[$i]);
            if ($richest < $sum) {
                $richest = $sum;
            }

        }
        return $richest;

    }
}
$solution = new Solution();
echo "input: [[1,2,3],[3,2,1]] <br>";
echo "expected output: 6 <br>";
echo "output: " . $solution->maximumWealth([[1,2,3],[3,2,1]]) . "<br>";
echo "<br>";

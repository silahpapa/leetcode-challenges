<?php
class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        $result = [];
        $current = [];

        $backtrack = function($start, $current, $target) use (&$candidates, &$result, &$backtrack) {
            if ($target < 0) {
                return;
            }
            if ($target === 0) {
                $result[] = $current;
                return;
            }
            for ($i = $start; $i < count($candidates); $i++) {
                $current[] = $candidates[$i];
                $backtrack($i, $current, $target - $candidates[$i]);
                array_pop($current);
            }
        };

        $backtrack(0, $current, $target);

        return $result;
    }
}
$solution = new Solution();
echo "input: [2,3,6,7], 7 <br>";
echo "expected output: [[2,2,3],[7]] <br>";
echo "output: " . json_encode($solution->combinationSum([2,3,6,7], 7)) . "<br>";

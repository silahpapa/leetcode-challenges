<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        $m = count($grid);
        $n = count($grid[0]);
        $dp = array_fill(0, $m, array_fill(0, $n, 0));
        $dp[0][0] = $grid[0][0];
        for ($i = 1; $i < $m; $i++) {
            $dp[$i][0] = $dp[$i - 1][0] + $grid[$i][0];
        }
        for ($j = 1; $j < $n; $j++) {
            $dp[0][$j] = $dp[0][$j - 1] + $grid[0][$j];
        }
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                $dp[$i][$j] = $grid[$i][$j] + min($dp[$i - 1][$j], $dp[$i][$j - 1]);
            }
        }

        return $dp[$m - 1][$n - 1];

    }
}
$solution = new Solution();
echo "input: [[1,3,1],[1,5,1],[4,2,1]] <br>";
echo "expected output: 7 <br>";
echo "output: " . $solution->minPathSum([[1,3,1],[1,5,1],[4,2,1]]) . "<br>";

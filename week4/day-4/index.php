<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maxProfit = 0;
        $buyPrice = INF;
        foreach ($prices as $price) {
            $buyPrice = min($buyPrice, $price);
            $maxProfit = max($maxProfit, $price - $buyPrice);
        }
        return $maxProfit;
    }
}
$solution = new Solution();
echo "input: [7,1,5,3,6,4] <br>";
echo "expected output: 5 <br>";
echo "output: " . $solution->maxProfit([7,1,5,3,6,4]) . "<br>";

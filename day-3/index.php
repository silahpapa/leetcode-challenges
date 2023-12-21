<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @param Integer $money
     * @return Integer
     */
    function buyChoco($prices, $money) {
        sort($prices);
        $amount = $money - array_sum(array_slice($prices,0,2));
        return $amount >= 0 ? $amount : $money;
    }
}
$solution = new Solution();
echo "Input: prices = [1,2,2] <br>";
echo "money = 3 <br>";
echo "Expected Output: 0 <br>";
echo "output:". $solution->buyChoco([98, 54, 6, 34, 66, 63, 52, 39]
,62) ."<br>";
echo "Explanation: Purchase the chocolates priced at 1 and 2 units respectively. You will have 3 - 3 = 0 units of money afterwards. Thus, we return 0.";

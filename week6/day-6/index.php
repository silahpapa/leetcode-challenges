<?php
class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $n = count($candies);
        $max = max($candies);
        $output=[];
        for($i=0;$i<$n;$i++){
            $output[$i] = ($candies[$i]+$extraCandies >= $max) ? true : false;
        }
        return $output;
    }
}
$solution = new Solution();
echo "input: [2,3,5,1,3], 3 <br>";
echo "expected output: [true,true,true,false,true] <br>";
echo "output: " . $solution->kidsWithCandies([2,3,5,1,3], 3) . "<br>";

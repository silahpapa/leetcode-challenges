<?php
class Solution {

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */
    function findWordsContaining($words, $x) {
        $output =[];
        for($n=0;$n<=count($words);$n++) {
            if (str_contains($words[$n], $x)) {
                array_push($output,$n);
            }
        }
        return $output;
    }
}
$solution = new Solution();
$words = ["apple","banana","orange","pear"];
$x = "a";
print_r($solution->findWordsContaining($words,$x));

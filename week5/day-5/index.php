<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[] $index
     * @return Integer[]
     */
    function createTargetArray($nums, $index) {
        $target = [];
        foreach($nums as $key => $num) {
            array_splice($target, $index[$key],0, $num);
        }
        return $target;
    }
}
$solution = new Solution();
echo "<pre>"; var_dump($solution->createTargetArray([0,1,2,3,4],[0,1,2,2,1])); echo "</pre>";

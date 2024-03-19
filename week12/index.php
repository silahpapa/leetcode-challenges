<?php
class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $x = 0;
        foreach($operations as $operation) {
            if($operation == "--X" || $operation == "X--") {
                $x-=1;
            }
            else {
                $x+=1;
            }
        }
        return $x;
    }
}
$solution = new Solution();
echo "input: [\"--X\",\"X++\",\"X++\"] <br>";
echo "expected output: 1 <br>";
echo "output: " . $solution->finalValueAfterOperations(["--X","X++","X++"]) . "<br>";

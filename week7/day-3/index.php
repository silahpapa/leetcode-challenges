<?php
class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        sort($g);
        sort($s);

        $i = 0; // Index for greed factors
        $j = 0; // Index for sizes of cookies
        $count = 0; // Counter for content children

        while ($i < count($g) && $j < count($s)) {
            // If the size of the current cookie is sufficient for the current child's greed factor
            if ($s[$j] >= $g[$i]) {
                $count++; // Increment the count of content children
                $i++; // Move to the next child
            }
            $j++; // Move to the next cookie
        }

        return $count;
    }
}
$solution = new Solution();
echo "input: [1,2], [1,2,3] <br>";
echo "expected output: 2 <br>";
echo "output: " . $solution->findContentChildren([1,2], [1,2,3]) . "<br>";
echo "<br>";

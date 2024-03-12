<?php
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $left = 0;
        $right = count($s) - 1;

        while ($left < $right) {
            // Swap characters at positions $left and $right
            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;

            // Move pointers towards each other
            $left++;
            $right--;
        }
    }
}
$solution = new Solution();
$input = ["h","e","l","l","o"];
$solution->reverseString($input);
echo "input: ['h','e','l','l','o'] <br>";
echo "expected output: ['o','l','l','e','h'] <br>";

<?php
class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $result = str_split(str_repeat(' ', count($indices)));

        foreach ($indices as $i => $index) {
            $result[$index] = $s[$i];
        }

        return implode('', $result);

    }
}
$solution = new Solution();
echo "input: s = 'codeleet', indices = [4,5,6,7,0,2,1,3] <br>";
echo "expected output: 'leetcode' <br>";
echo "output: " . $solution->restoreString('codeleet', [4,5,6,7,0,2,1,3]) . "<br>";
echo "<br>";

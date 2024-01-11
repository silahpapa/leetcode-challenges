<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $n = strlen($s);
        $maxLength = 0;
        $start = 0;
        $charIndexMap = [];
        for ($end = 0; $end < $n; $end++) {
            $currentChar = $s[$end];
            if (array_key_exists($currentChar, $charIndexMap)) {
                $start = max($charIndexMap[$currentChar] + 1, $start);
            }
            $charIndexMap[$currentChar] = $end;
            $maxLength = max($maxLength, $end - $start + 1);
        }
        return $maxLength;
    }
}
$solution = new Solution();
echo "Input: s = 'abcabcbb' <br>";
echo "Expected Output: 3 <br>";
echo "Output: " . json_encode($solution->lengthOfLongestSubstring("abcabcbb")) . "<br>";
echo "Explanation: The answer is 'abc', with the length of 3.<br>";
?>

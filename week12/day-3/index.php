<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $anagrams = [];
        foreach ($strs as $str) {
            // Sort characters of the string
            $sortedStr = str_split($str);
            sort($sortedStr);
            $key = implode("", $sortedStr);

            // Group words with the same sorted character key
            $anagrams[$key][] = $str;
        }

        // Return the grouped anagrams
        return array_values($anagrams);
    }
}

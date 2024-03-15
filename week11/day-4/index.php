<?php
class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $columnNumber = 0;
        $n = strlen($columnTitle);

        for ($i = 0; $i < $n; $i++) {
            $digit = ord($columnTitle[$i]) - ord('A') + 1;
            $columnNumber = $columnNumber * 26 + $digit;
        }

        return $columnNumber;
    }
}

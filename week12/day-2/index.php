<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function minimumMoves($s) {
        $moves = 0;
        $n = strlen($s);

        $i = 0;
        while ($i < $n) {
            if ($s[$i] === 'X') {
                // Found 'X', so increment moves and skip the next two characters
                $moves++;
                $i += 3;
            } else {
                // Skip 'O'
                $i++;
            }
        }

        return $moves;
    }
}

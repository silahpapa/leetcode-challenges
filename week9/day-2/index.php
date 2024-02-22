<?php
class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        $rows = array_fill(0, 9, array());
        $cols = array_fill(0, 9, array());
        $boxes = array_fill(0, 9, array());

        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $cell = $board[$i][$j];
                if ($cell != '.') {
                    $num = intval($cell); // Convert cell value to integer

                    // Check row
                    if (in_array($num, $rows[$i])) {
                        return false;
                    }
                    $rows[$i][] = $num;

                    // Check column
                    if (in_array($num, $cols[$j])) {
                        return false;
                    }
                    $cols[$j][] = $num;

                    // Check 3x3 sub-box
                    $boxIndex = (int)($i / 3) * 3 + (int)($j / 3);
                    if (in_array($num, $boxes[$boxIndex])) {
                        return false;
                    }
                    $boxes[$boxIndex][] = $num;
                }
            }
        }

        return true;
    }
}

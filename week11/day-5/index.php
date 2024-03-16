<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $map_s = [];
        $map_t = [];
        $len = strlen($s);

        for ($i = 0; $i < $len; $i++) {
            $char_s = $s[$i];
            $char_t = $t[$i];

            if (!isset($map_s[$char_s])) {
                $map_s[$char_s] = $char_t;
            } elseif ($map_s[$char_s] != $char_t) {
                return false;
            }

            if (!isset($map_t[$char_t])) {
                $map_t[$char_t] = $char_s;
            } elseif ($map_t[$char_t] != $char_s) {
                return false;
            }
        }

        return true;
    }
}

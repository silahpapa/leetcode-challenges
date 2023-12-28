<?php
class Solution {

    /**
     * @param String $s
     * @return String[]
     */
    function restoreIpAddresses($s) {
        $result = [];

        for ($i = 1; $i < 4 && $i < strlen($s); $i++) {
            for ($j = $i + 1; $j < $i + 4 && $j < strlen($s); $j++) {
                for ($k = $j + 1; $k < $j + 4 && $k < strlen($s); $k++) {
                    $part1 = substr($s, 0, $i);
                    $part2 = substr($s, $i, $j - $i);
                    $part3 = substr($s, $j, $k - $j);
                    $part4 = substr($s, $k);

                    if ($this->isValid($part1) && $this->isValid($part2) && $this->isValid($part3) && $this->isValid($part4)) {
                        $result[] = "$part1.$part2.$part3.$part4";
                    }
                }
            }
        }
        return $result;
    }
    function isValid($segment) {
        return intval($segment)
            <= 255 && (strlen($segment) == 1
                || $segment[0] != '0');
    }
}

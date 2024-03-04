<?php
class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
        $n = strlen($address);
        $new_ip = "";
        for($i=0;$i<=$n;$i++){
            if($address[$i]== '.') {
                $new_ip .= '[.]';
            }else {
                $new_ip .=$address[$i];
            }
        }
        return $new_ip;
    }
}
$solution = new Solution();
e

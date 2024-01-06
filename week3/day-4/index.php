<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if(count($strs) === 0 || $strs === ""){
            return "";
        }
        $firstWord = $strs[0];
        $prefix = "";
        for($i=0;$i<strlen($firstWord); $i++) {
            if($firstWord ==="") {
                return "";
            }
            $char = $firstWord[$i];
            foreach($strs as $word) {
                if(!isset($word[$i]) || $char !== $word[$i]) {
                    return $prefix;
                }
            }
            $prefix .= $char;
        }
        return $prefix;
    }
}
$solution = new Solution();
echo "input: [\"flower\",\"flow\",\"flight\"] <br>";
echo "expected output: \"fl\" <br>";
echo "output: \"" . $solution->longestCommonPrefix(["flower","flow","flight"]) . "\" <br>";

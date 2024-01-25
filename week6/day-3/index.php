<?php
class Solution {

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $maxAltitude = 0;
        $currentAltitude = 0;

        foreach ($gain as $altitudeGain) {
            $currentAltitude += $altitudeGain;
            $maxAltitude = max($maxAltitude, $currentAltitude);
        }

        return $maxAltitude;
    }
}
$solution = new Solution();
echo "input: [-5,1,5,0,-7] <br>";
echo "expected output: 1 <br>";
echo "output: " . $solution->largestAltitude([-5,1,5,0,-7]) . "<br>";

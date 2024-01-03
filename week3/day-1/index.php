<?php
// Path: week3/day-1/index.php
function longestPalindromeSubseq($s) {
    $n = strlen($s);
    $dp = array_fill(0, $n, array_fill(0, $n, 0));
    for ($i = $n - 1; $i >= 0; $i--) {
        $dp[$i][$i] = 1;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($s[$i] == $s[$j]) {
                $dp[$i][$j] = $dp[$i + 1][$j - 1] + 2;
            } else {
                $dp[$i][$j] = max($dp[$i + 1][$j], $dp[$i][$j - 1]);
            }
        }
    }
    return $dp[0][$n - 1];
}
$s = "bbbab";
$lps = logest($s);
echo "Input: s = \"bbbab\" <br>";
echo "Expected Output: 4 <br>";
echo "Output: " . $lps . "<br>";

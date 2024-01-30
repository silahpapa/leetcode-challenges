<?php
class Solution {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
        $maxWords = 0;
        foreach ($sentences as $sentence) {
            // Split the sentence into words using space as the delimiter
            $words = explode(" ", $sentence);
            // Count the number of words in the current sentence
            $numWords = count($words);

            // Update the maximum number of words if the current sentence has more words
            if ($numWords > $maxWords) {
                $maxWords = $numWords;
            }
        }
        return $maxWords;

    }
}
$solution = new Solution();
echo "input: ['I love you', 'I love leetcode'] <br>";
echo "expected output: 3 <br>";
echo "output: " . $solution->mostWordsFound(['I love you', 'I love leetcode']) . "<br>";

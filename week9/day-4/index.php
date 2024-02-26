<?php
class Solution {

    /**
     * @param String $beginWord
     * @param String $endWord
     * @param String[] $wordList
     * @return Integer
     */
    function ladderLength($beginWord, $endWord, $wordList) {
        $wordSet = array_flip($wordList);

        if (!isset($wordSet[$endWord])) {
            return 0; // If endWord is not in the wordList, return 0
        }

        $queue = [$beginWord];
        $visited = [$beginWord => true];
        $level = 1;

        while (!empty($queue)) {
            $size = count($queue);

            for ($i = 0; $i < $size; $i++) {
                $currentWord = array_shift($queue);

                // Generate all possible transformations of $currentWord by changing one letter at a time
                for ($j = 0; $j < strlen($currentWord); $j++) {
                    $originalChar = $currentWord[$j];
                    for ($c = ord('a'); $c <= ord('z'); $c++) {
                        $currentWord[$j] = chr($c);
                        if ($currentWord === $endWord) {
                            return $level + 1; // If we reached the endWord, return the level + 1
                        }
                        if (isset($wordSet[$currentWord]) && !isset($visited[$currentWord])) {
                            $visited[$currentWord] = true;
                            $queue[] = $currentWord;
                        }
                    }
                    $currentWord[$j] = $originalChar; // Restore the original character
                }
            }

            $level++;
        }

        return 0; //
    }
}
$solution = new Solution();
echo "input: beginWord = 'hit', endWord = 'cog', wordList = ['hot','dot','dog','lot','log','cog'] <br>";
echo "expected output: 5 <br>";
echo "output: " . $solution->ladderLength('hit', 'cog', ['hot','dot','dog','lot','log','cog']) . "<br>";
echo "<br>";

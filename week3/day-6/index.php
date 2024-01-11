<?php
class Solution {

    /**
     * @param Integer[] $startTime
     * @param Integer[] $endTime
     * @param Integer[] $profit
     * @return Integer
     */
    function jobScheduling($startTime, $endTime, $profit) {
        $n = count($startTime);
        $jobs = array_map(null, $startTime, $endTime, $profit);
        usort($jobs, function($a, $b) {
            return $a[1] <=> $b[1]; // Sort by end times using spaceship operator
        });

        $dp = [$jobs[0][2]]; // Initialize dp array with profit of the first job

        for ($i = 1; $i < $n; $i++) {
            // Binary search to find latest non-overlapping job
            $prevJobIndex = $this->binarySearch($jobs, $i);

            // Calculate current profit considering the latest non-overlapping job
            $currentProfit = $jobs[$i][2] + ($prevJobIndex !== -1 ? $dp[$prevJobIndex] : 0);

            // Update dp array
            $dp[] = max($currentProfit, $dp[$i - 1]);
        }

        return max($dp); // Maximum profit overall
    }

    private function binarySearch($jobs, $currentIndex) {
        $left = 0;
        $right = $currentIndex - 1;

        while ($left <= $right) {
            $mid = (int)(($left + $right) / 2);

            if ($jobs[$mid][1] <= $jobs[$currentIndex][0]) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        return $left  - 1;
    }
}
$solution = new Solution();
echo "Input: startTime = [1,2,3,3], endTime = [3,4,5,6], profit = [50,10,40,70] <br>";
echo "Expected Output: 120 <br>";
echo "Output: " . $solution->jobScheduling([1,2,3,3], [3,4,5,6], [50,10,40,70]) . "<br>";
echo "Explanation: The subset chosen is the first and fourth job. <br>";

<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        $dummy = new ListNode();
        $current = $dummy;

        while ($list1 !== null && $list2 !== null) {
            if ($list1->val < $list2->val) {
                $current->next = $list1;
                $list1 = $list1->next;
            } else {
                $current->next = $list2;
                $list2 = $list2->next;
            }
            $current = $current->next;
        }

        // If one of the lists is not empty, append the remaining nodes
        if ($list1 !== null) {
            $current->next = $list1;
        } elseif ($list2 !== null) {
            $current->next = $list2;
        }

        // The merged list starts from the next of the dummy node
        return $dummy->next;
    }
}
$solution = new Solution();
echo "Input: list1 = [1,2,4], list2 = [1,3,4] <br>";
echo "Expected Output: [1,1,2,3,4,4] <br>";
echo $solution->mergeTwoLists([1,2,4], [1,3,4]) . "<br>";
echo "Explanation: The lists have the same number of nodes. <br>";

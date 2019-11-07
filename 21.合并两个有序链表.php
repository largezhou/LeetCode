<?php

/*
 * @lc app=leetcode.cn id=21 lang=php
 *
 * [21] 合并两个有序链表
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }.
 */
class Solution
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     *
     * @return ListNode
     */
    public function mergeTwoLists($l1, $l2)
    {
        $res = null;
        $next = null;

        while ($l1 || $l2) {
            if (!$l1) {
                $val = $l2->val;
                $l2 = $l2->next;
            } elseif (!$l2) {
                $val = $l1->val;
                $l1 = $l1->next;
            } elseif ($l1->val < $l2->val) {
                $val = $l1->val;
                $l1 = $l1->next;
            } else {
                $val = $l2->val;
                $l2 = $l2->next;
            }

            if (is_null($res)) {
                $res = new ListNode($val);
                $next = $res;
            } else {
                $next->next = new ListNode($val);
                $next = $next->next;
            }
        }

        return $res;
    }
}
// @lc code=end

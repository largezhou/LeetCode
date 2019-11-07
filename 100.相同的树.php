<?php

/*
 * @lc app=leetcode.cn id=100 lang=php
 *
 * [100] 相同的树
 */

// @lc code=start
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }.
 */
class Solution
{
    /**
     * @param TreeNode $p
     * @param TreeNode $q
     *
     * @return bool
     */
    public function isSameTree($p, $q)
    {
        if (!$p && !$q) {
            return true;
        } elseif (!$p || !$q) {
            return false;
        } elseif ($p->val == $q->val) {
            return $this->isSameTree($p->left, $q->left) &&
                $this->isSameTree($p->right, $q->right);
        }
    }
}
// @lc code=end

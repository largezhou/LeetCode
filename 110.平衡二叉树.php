<?php

/*
 * @lc app=leetcode.cn id=110 lang=php
 *
 * [110] 平衡二叉树
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
     * @param TreeNode $root
     *
     * @return bool
     */
    public function isBalanced($root)
    {
        if (is_null($root)) {
            return true;
        } elseif (abs($this->height($root->left, 0) - $this->height($root->right, 0)) <= 1) {
            return $this->isBalanced($root->left) && $this->isBalanced($root->right);
        } else {
            return false;
        }
    }

    protected function height($n, $h)
    {
        if (is_null($n)) {
            return $h;
        }

        return max($this->height($n->left, $h + 1), $this->height($n->right, $h + 1));
    }
}
// @lc code=end

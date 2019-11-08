<?php

/*
 * @lc app=leetcode.cn id=101 lang=php
 *
 * [101] 对称二叉树
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
    public function isSymmetric($root)
    {
        if (!$root) {
            return true;
        }

        if (!$root->left && !$root->right) {
            return true;
        }

        return $this->isSame($root->left, $root->right);
    }

    protected function isSame($a, $b)
    {
        if (!$a && !$b) {
            return true;
        } elseif (!$a || !$b) {
            return false;
        } elseif ($a->val == $b->val) {
            return $this->isSame($a->left, $b->right) &&
                $this->isSame($a->right, $b->left);
        } else {
            return false;
        }
    }
}
// @lc code=end

<?php

/*
 * @lc app=leetcode.cn id=108 lang=php
 *
 * [108] 将有序数组转换为二叉搜索树
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
     * @param int[] $nums
     *
     * @return TreeNode
     */
    public function sortedArrayToBST($nums)
    {
        return $this->build($nums, 0, count($nums) - 1);
    }

    protected function build($nums, $left, $right)
    {
        if ($left > $right) {
            return null;
        }

        $mid = $right - floor(($right - $left) / 2);
        $val = $nums[$mid];

        $node = new TreeNode($val);
        $node->left = $this->build($nums, $left, $mid - 1);
        $node->right = $this->build($nums, $mid + 1, $right);

        return $node;
    }
}
// @lc code=end

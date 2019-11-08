<?php

/*
 * @lc app=leetcode.cn id=104 lang=php
 *
 * [104] 二叉树的最大深度
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
     * @return int
     */
    public function maxDepth($root)
    {
        return $this->dig($root, 0);
    }

    protected function dig($node, $depth)
    {
        if (!$node) {
            return $depth;
        } else {
            return max(
                $this->dig($node->left, $depth + 1),
                $this->dig($node->right, $depth + 1)
            );
        }
    }
}
// @lc code=end

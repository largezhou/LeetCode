<?php

/*
 * @lc app=leetcode.cn id=111 lang=php
 *
 * [111] 二叉树的最小深度
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
    public function minDepth($root)
    {
        if (!$root) {
            return 0;
        }

        $height = 1;
        $nodes = [$root];
        while (true) {
            $t = [];
            foreach ($nodes as $n) {
                if (!$n->left && !$n->right) {
                    return $height;
                }

                $n->left && ($t[] = $n->left);
                $n->right && ($t[] = $n->right);
            }

            $nodes = $t;
            $height++;
        }
    }
}
// @lc code=end

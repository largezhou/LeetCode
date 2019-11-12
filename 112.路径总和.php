<?php

/*
 * @lc app=leetcode.cn id=112 lang=php
 *
 * [112] 路径总和
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
     * @param int      $sum
     *
     * @return bool
     */
    public function hasPathSum($root, $sum)
    {
        if (!$root) {
            return false;
        }

        $root->pre = 0;
        $nodes = [$root];
        while (true) {
            $t = [];
            foreach ($nodes as $n) {
                $now = $n->val + $n->pre;
                if (($now == $sum) && !$n->left && !$n->right) {
                    return true;
                }

                if ($n->left) {
                    $n->left->pre = $now;
                    $t[] = $n->left;
                }

                if ($n->right) {
                    $n->right->pre = $now;
                    $t[] = $n->right;
                }
            }

            if (empty($t)) {
                return false;
            }

            $nodes = $t;
        }
    }
}
// @lc code=end

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
        if (!$root) {
            return 0;
        }

        $depth = 1;
        $nodes = [$root];
        while (true) {
            $nextNodes = [];
            foreach ($nodes as $n) {
                $n->left && ($nextNodes[] = $n->left);
                $n->right && ($nextNodes[] = $n->right);
            }

            if (empty($nextNodes)) {
                return $depth;
            } else {
                $depth++;
            }

            $nodes = $nextNodes;
        }
    }
}
// @lc code=end

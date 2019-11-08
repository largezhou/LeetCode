<?php

/*
 * @lc app=leetcode.cn id=107 lang=php
 *
 * [107] 二叉树的层次遍历 II
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
     * @return Integer[][]
     */
    public function levelOrderBottom($root)
    {
        $res = [];
        $nodes = [$root];

        while (true) {
            $l = [];
            $newNodes = [];
            foreach ($nodes as $n) {
                if ($n) {
                    $l[] = $n->val;
                    $n->left && ($newNodes[] = $n->left);
                    $n->right && ($newNodes[] = $n->right);
                }
            }

            if (empty($l)) {
                return $res;
            }

            $nodes = $newNodes;
            array_unshift($res, $l);
        }
    }
}
// @lc code=end

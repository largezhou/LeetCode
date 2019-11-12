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
    protected $res = true;

    /**
     * @param TreeNode $root
     *
     * @return bool
     */
    public function isBalanced($root)
    {
        $this->height($root);
        return $this->res;
    }

    protected function height($n)
    {
        if (is_null($n)) {
            return 0;
        }

        $lh = $this->height($n->left) + 1;
        $rh = $this->height($n->right) + 1;

        /**
         * 一直在想，如何在递归求高度时候，自底向上的判断左右高度差，然后终止递归
         * 虽然这里不能终止递归，但是通过类变量记录结果，每个节点只需遍历一次
         */
        if (abs($lh - $rh) > 1) {
            $this->res = false;
        }

        return max($lh, $rh);
    }
}
// @lc code=end

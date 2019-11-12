<?php

/*
 * @lc app=leetcode.cn id=125 lang=php
 *
 * [125] 验证回文串
 */

// @lc code=start
class Solution
{
    /**
     * @param string $s
     *
     * @return bool
     */
    public function isPalindrome($s)
    {
        $s = strtolower($s);
        $s = preg_replace('/[^0-9a-z]/', '', $s);

        $l = strlen($s);
        $m = floor($l / 2);
        for ($i=0; $i < $m; $i++) {
            if ($s[$i] != $s[$l - $i - 1]) {
                return false;
            }
        }

        return true;
    }
}
// @lc code=end

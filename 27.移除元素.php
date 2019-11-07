<?php

/*
 * @lc app=leetcode.cn id=27 lang=php
 *
 * [27] 移除元素
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $nums
     * @param int   $val
     *
     * @return int
     */
    public function removeElement(&$nums, $val)
    {
        $max = count($nums);
        // 已去重的当前下标
        $cur = 0;
        for ($i = 0; $i < $max; ++$i) {
            if ($nums[$i] != $val) {
                $nums[$cur] = $nums[$i];
                ++$cur;
            } elseif ($i < $max - 1) {
                $nums[$cur] = $nums[$i + 1];
            }
        }

        return $cur;
    }
}
// @lc code=end

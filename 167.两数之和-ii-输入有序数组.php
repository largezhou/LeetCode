<?php

/*
 * @lc app=leetcode.cn id=167 lang=php
 *
 * [167] 两数之和 II - 输入有序数组
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $numbers
     * @param int   $target
     *
     * @return int[]
     */
    public function twoSum($numbers, $target)
    {
        $t = [];
        $pre = null;
        foreach ($numbers as $idx => $value) {
            // 由于是升序的，所以可以提前结束
            if (isset($pre) && ($pre > $target)) {
                return [];
            }

            if (isset($t[$target - $value])) {
                return [$t[$target - $value] + 1, $idx + 1];
            }

            $t[$value] = $idx;
            $pre = $value;
        }

        return [];
    }
}
// @lc code=end

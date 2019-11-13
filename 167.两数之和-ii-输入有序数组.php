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
        $start = 0;
        $end = count($numbers) - 1;

        while ($start < $end) {
            $sum = $numbers[$start] + $numbers[$end];
            if ($sum == $target) {
                return [++$start, ++$end];
            } elseif ($sum < $target) {
                $start++;
            } else {
                $end--;
            }
        }

        return [];
    }
}
// @lc code=end

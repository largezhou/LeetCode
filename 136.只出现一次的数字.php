<?php

/*
 * @lc app=leetcode.cn id=136 lang=php
 *
 * [136] 只出现一次的数字
 */

// @lc code=start
class Solution
{
    /**
     * 异或运算满足交换律，而不同的位异或则为 1，否则为 0
     * 所有出现过 2 次的数，异或后，所有位都为 0，再与唯一不同的数异或，
     * 即得到该不同的数。
     *
     * 引申为，找出唯一一个出现次数为奇数的数
     *
     * @param int[] $nums
     *
     * @return int
     */
    public function singleNumber($nums)
    {
        $res = 0;
        foreach ($nums as $val) {
            $res ^= $val;
        }

        return $res;
    }
}
// @lc code=end

<?php

/*
 * @lc app=leetcode.cn id=70 lang=php
 *
 * [70] 爬楼梯
 */

// @lc code=start
class Solution
{
    /**
     * 首先用递归爬梯子，能得出正确答案，但是超时了，
     * 然后打印了一组连续数据发现结果就是斐波拉契数列，，，
     *
     * @param int $n
     *
     * @return int
     */
    public function climbStairs($n)
    {
        if ($n <= 2) {
            return $n;
        }

        $pre1 = 1;
        $pre2 = 2;
        for ($i = 3; $i <= $n; $i++) {
            $t = $pre2;
            $pre2 = $pre1 + $pre2;
            $pre1 = $t;
        }

        return $pre2;
    }
}
// @lc code=end

<?php

/*
 * @lc app=leetcode.cn id=122 lang=php
 *
 * [122] 买卖股票的最佳时机 II
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $prices
     *
     * @return int
     */
    public function maxProfit($prices)
    {
        // 补一个负数，不用特殊处理最后一天
        $prices[] = -1;
        $c = count($prices);
        $res = 0;
        $buy = $prices[0];

        for ($i = 1; $i < $c; $i++) {
            $preSell = $prices[$i - 1];
            $sell = $prices[$i];
            // 如果这天的价格小于上一天的，则在上一天卖掉，再今天买入
            if ($sell < $preSell) {
                $res += ($preSell - $buy);
                $buy = $sell;
            }
        }

        return $res;
    }
}
// @lc code=end

<?php

/*
 * @lc app=leetcode.cn id=121 lang=php
 *
 * [121] 买卖股票的最佳时机
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
        $c = count($prices);
        $res = 0;
        $buy = $prices[0];
        for ($i = 1; $i < $c; $i++) {
            // 当前总是作为卖出
            $sell = $prices[$i];
            // 对比利润和之前的利润
            $t = $sell - $buy;
            if ($t > $res) {
                $res = $t;
            }
            // 更新买入
            $buy = $sell < $buy ? $sell : $buy;
        }

        return $res;
    }
}
// @lc code=end

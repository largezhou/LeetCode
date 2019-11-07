<?php

/*
 * @lc app=leetcode.cn id=66 lang=php
 *
 * [66] 加一
 */

// @lc code=start
class Solution
{
    /**
     * @param int[] $digits
     *
     * @return int[]
     */
    public function plusOne($digits)
    {
        $count = count($digits);
        $digits[$count - 1]++;
        for ($i = $count - 1; $i >= 0; $i--) {
            $cur = $digits[$i];
            if ($cur > 9) {
                $digits[$i] = $cur % 10;
                if (($i - 1) < 0) {
                    array_unshift($digits, 1);
                } else {
                    $digits[$i - 1]++;
                }
            } else {
                break;
            }
        }

        return $digits;
    }
}
// @lc code=end

<?php

/*
 * @lc app=leetcode.cn id=38 lang=php
 *
 * [38] 报数
 */

// @lc code=start
class Solution
{
    /**
     * @param int $n
     *
     * @return string
     */
    public function countAndSay($n)
    {
        $pre = '1';

        for ($i = 0; $i < $n - 1; ++$i) {
            $count = 0;
            $num = -1;
            $cur = '';

            $l = strlen($pre);
            for ($j = 0; $j < $l; ++$j) {
                $val = $pre[$j];

                if ($val == $num) {
                    ++$count;
                } else {
                    if (-1 != $num) {
                        $cur .= $count.$num;
                    }
                    $num = $val;
                    $count = 1;
                }
            }

            if (-1 != $num) {
                $cur .= $count.$num;
            }
            $pre = $cur;
        }

        return $pre;
    }
}
// @lc code=end

var_dump((new Solution())->countAndSay(5));

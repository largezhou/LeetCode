<?php

/*
 * @lc app=leetcode.cn id=58 lang=php
 *
 * [58] 最后一个单词的长度
 */

// @lc code=start
class Solution
{
    /**
     * @param string $s
     *
     * @return int
     */
    public function lengthOfLastWord($s)
    {
        $max = 0;
        $pre = '';

        $l = strlen($s);
        for ($i = 0; $i < $l; $i++) {
            $v = $s[$i];

            if ($v != ' ' && $pre == ' ') {
                $max = 0;
            }

            if ($v != ' ') {
                $max++;
            }

            $pre = $v;
        }

        return $max;
    }
}
// @lc code=end

var_dump((new Solution())->lengthOfLastWord('b   a    '));

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
        // 表示是否出现过非空格字符
        $firstLetter = false;

        $l = strlen($s);
        for ($i = $l - 1; $i >= 0; $i--) {
            $v = $s[$i];
            if ($v != ' ') {
                $max++;
                $firstLetter = true;
            }
            //  如果是空格，且已经出现过非空格，则不需要再遍历了
            elseif ($firstLetter) {
                break;
            }
        }

        return $max;
    }
}
// @lc code=end

var_dump((new Solution())->lengthOfLastWord('1 22 333'));

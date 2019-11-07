<?php

/*
 * @lc app=leetcode.cn id=28 lang=php
 *
 * [28] 实现 strStr()
 */

// @lc code=start
class Solution
{
    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return int
     */
    public function strStr($haystack, $needle)
    {
        $haystackLen = strlen($haystack);
        $needleLen = strlen($needle);

        if ($needleLen > $haystackLen) {
            return -1;
        }

        for ($i = 0; $i < $haystackLen - $needleLen + 1; ++$i) {
            for ($j = 0; $j < $needleLen; ++$j) {
                if ($needle[$j] != $haystack[$i + $j]) {
                    break;
                }
            }

            if ($j >= $needleLen) {
                return $i;
            }
        }

        return -1;
    }
}
// @lc code=end

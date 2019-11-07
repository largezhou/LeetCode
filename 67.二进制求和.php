<?php

/*
 * @lc app=leetcode.cn id=67 lang=php
 *
 * [67] 二进制求和
 */

// @lc code=start
class Solution
{
    /**
     * @param string $a
     * @param string $b
     *
     * @return string
     */
    public function addBinary($a, $b)
    {
        $la = strlen($a);
        $lb = strlen($b);
        $lMax = max($la, $lb);

        $carry = 0;
        $res = '';
        for ($i = 0; $i < $lMax; $i++) {
            $strA = ($la - $i - 1 >= 0) ? $a[$la - $i - 1] : 0;
            $strB = ($lb - $i - 1 >= 0) ? $b[$lb - $i - 1] : 0;

            $sum = $strA + $strB + $carry;
            if ($sum > 1) {
                $sum %= 2;
                $carry = 1;
            } else {
                $carry = 0;
            }

            $res = $sum.$res;
        }

        if ($carry) {
            $res = $carry.$res;
        }

        return $res;
    }
}
// @lc code=end

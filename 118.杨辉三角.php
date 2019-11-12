<?php

/*
 * @lc app=leetcode.cn id=118 lang=php
 *
 * [118] 杨辉三角
 */

// @lc code=start
class Solution
{
    /**
     * @param int $numRows
     *
     * @return int[][]
     */
    public function generate($numRows)
    {
        $res = [];
        for ($i = 0; $i < $numRows; $i++) {
            if ($i == 0) {
                $res[] = [1];
                continue;
            }

            $preArr = $res[$i - 1] ?? [];
            $t = [1];

            $c = count($preArr);
            for ($j = 1; $j < $c; $j++) {
                $t[] = $preArr[$j - 1] + $preArr[$j];
            }
            $t[] = 1;

            $res[] = $t;
        }

        return $res;
    }
}
// @lc code=end

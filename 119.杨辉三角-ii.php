<?php

/*
 * @lc app=leetcode.cn id=119 lang=php
 *
 * [119] 杨辉三角 II
 */

// @lc code=start
class Solution
{
    /**
     * @param int $rowIndex
     *
     * @return int[]
     */
    public function getRow($rowIndex)
    {
        $preArr = [];
        for ($i = 0; $i <= $rowIndex; $i++) {
            if ($i == 0) {
                $preArr = [1];
                continue;
            }

            $t = [1];

            $c = count($preArr);
            for ($j = 1; $j < $c; $j++) {
                $t[] = $preArr[$j - 1] + $preArr[$j];
            }
            $t[] = 1;

            $preArr = $t;
        }

        return $preArr;
    }
}
// @lc code=end

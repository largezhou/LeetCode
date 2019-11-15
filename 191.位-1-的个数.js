/*
 * @lc app=leetcode.cn id=191 lang=javascript
 *
 * [191] 位1的个数
 */

// @lc code=start
/**
 * @param {number} n - a positive integer
 * @return {number}
 */
var hammingWeight = function (n) {
    var res = 0;
    for (var i = 0; i < 32; i++) {
        if (n & 1) {
            res++;
        }

        n >>= 1;
    }

    return res;
};
// @lc code=end

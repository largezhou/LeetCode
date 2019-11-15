/*
 * @lc app=leetcode.cn id=190 lang=javascript
 *
 * [190] 颠倒二进制位
 */

// @lc code=start
/**
 * 循环 32 次，每次从 n 的末尾 pop 出一位，并 push 到 res 中
 * 最后做一次无符号右移 0 位，转成无符号数
 *
 * @param {number} n - a positive integer
 * @return {number} - a positive integer
 */
var reverseBits = function (n) {
    var res = 0;
    for (var i = 0; i < 32; i++) {
        // 左移一位，最后补 0 做占位
        res <<= 1;
        // n & 1 得到 n 的末位，加上 res 末位 0，所以等于 n 的末位
        // 相当于把 n 的末位，放到 res 的末位
        res += n & 1;
        // n 右移一位，让倒数第二位成为末位，继续循环
        n >>= 1;
    }

    return res >>> 0;
};
// @lc code=end

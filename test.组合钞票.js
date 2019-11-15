/**
 * 动态规划的例子，组合钞票
 * 钞票面额为 1，5，11
 *
 * 组合值为 15，要求钞票数量最少
 *
 * f(n) = cost，表示组合值 n，需要用到最少超票数 cost
 * 则：f(15) = min(f(15 - 1), f(15 - 5), f(15 - 11)) + 1，
 * 即：f(15) = min(f(14), f(10), f(4)) + 1
 * 依次 “递归下去”
 */

var n = 15;
// 存储从 1 到 15，各组合值，所需的最小钞票数
var tmp = [0];
for (var i = 1; i <= n; i++) {
    var cost = Infinity;
    if (i - 1 >= 0) {
        cost = Math.min(cost, tmp[i - 1] + 1);
    }
    if (i - 5 >= 0) {
        cost = Math.min(cost, tmp[i - 5] + 1);
    }
    if (i - 11 >= 0) {
        cost = Math.min(cost, tmp[i - 11] + 1);
    }
    tmp[i] = cost;
}

console.log(cost);

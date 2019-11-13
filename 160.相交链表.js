/*
 * @lc app=leetcode.cn id=160 lang=javascript
 *
 * [160] 相交链表
 */

// @lc code=start
/**
 * Definition for singly-linked list.
 * function ListNode(val) {
 *     this.val = val;
 *     this.next = null;
 * }
 */

/**
 * 新版的思路：
 * 遍历两个链表，如果到头了，则指向另一个链表的头部，继续遍历
 * 这样就相当于遍历两个 a+b 和 b+a 链表，这两个链表长度相同，
 * 所以最后都会同时抵达终点，由于中间某个点有相交，
 * 所以从相交点，到终点这些节点都是一样的，所以遍历时必定会有相同的节点，
 * 如果没有相交，最后都为 null 了，结束循环，返回也是 null
 *
 * @param {ListNode} headA
 * @param {ListNode} headB
 * @return {ListNode}
 */
var getIntersectionNode = function (headA, headB) {
    var a = headA;
    var b = headB;
    while (a != b) {
        a = a ? a.next : headB;
        b = b ? b.next : headA;
    }

    return a;
};
// @lc code=end

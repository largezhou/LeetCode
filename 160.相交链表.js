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
 * @param {ListNode} headA
 * @param {ListNode} headB
 * @return {ListNode}
 */
var getIntersectionNode = function (headA, headB) {
    var offset = 0;
    var a = headA;
    var b = headB;
    var long = headA;
    var short = headB;
    while (a || b) {
        if (!a || !b) {
            offset++;

            if (b) {
                long = headB;
                short = headA;
            }
        }
        a = a && a.next;
        b = b && b.next;
    }

    while (long && short) {
        if (offset > 0) {
            offset--;
            long = long.next;
            continue;
        }

        if (long === short) {
            return long;
        } else {
            long = long.next;
            short = short.next;
        }
    }

    return null;
};
// @lc code=end

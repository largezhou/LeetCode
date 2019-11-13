<?php

/*
 * @lc app=leetcode.cn id=155 lang=php
 *
 * [155] 最小栈
 */

// @lc code=start
class MinStack
{
    protected $data = [];
    protected $min = null;

    /**
     * initialize your data structure here.
     */
    public function __construct()
    {
    }

    /**
     * @param int $x
     *
     * @return null
     */
    public function push($x)
    {
        array_unshift($this->data, $x);
        if (!isset($this->min) || ($x < $this->min)) {
            $this->min = $x;
        }
    }

    /**
     * @return null
     */
    public function pop()
    {
        $m = array_shift($this->data);

        if (empty($this->data)) {
            $this->min = null;
        } else {
            $t = $this->data[0];
            foreach ($this->data as $v) {
                if ($v < $t) {
                    $t = $v;
                }
            }
            $this->min = $t;
        }
    }

    /**
     * @return int
     */
    public function top()
    {
        return $this->data[0] ?? null;
    }

    /**
     * @return int
     */
    public function getMin()
    {
        return $this->min;
    }
}

/*
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */
// @lc code=end

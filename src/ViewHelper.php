<?php
/**
 * @link https://github.com/yii2deman/yii2-helpers
 * @copyright Copyright (c) 2017 Vladimir Kuprienko
 * @license BSD 3-Clause License
 */

namespace frontend\helpers;

/**
 * View helper for rendering logic
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class ViewHelper
{
    /**
     * Generates side css class for block.
     * Useful in loops
     *
     * @return string
     */
    public static function sideCssClass()
    {
        static $index = 0;
        return ($index++ % 2 == 0) ? 'right' : 'left';
    }

    /**
     * Check is last iteration. Useful in loops.
     *
     * @param int $total
     * @return bool
     */
    public static function isLast($total)
    {
        static $current = 0;
        return (++$current) == $total;
    }

    /**
     * Returns even number
     *
     * @return int
     */
    public static function evenNum()
    {
        static $number = 0;
        if ($number % 2 == 0) {
            return ++$number;
        }

        ++$number;
        return self::evenNum();
    }

    /**
     * Returns odd number
     *
     * @return int
     */
    public static function oddNum()
    {
        static $number = 0;
        if ($number % 2 != 0) {
            return ++$number;
        }

        ++$number;
        return self::oddNum();
    }
}

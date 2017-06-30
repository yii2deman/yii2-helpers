<?php
/**
 * @link https://github.com/yii2deman/yii2-helpers
 * @copyright Copyright (c) 2017 Vladimir Kuprienko
 * @license BSD 3-Clause License
 */

namespace yii2deman\helpers;

use yii\helpers\BaseArrayHelper;

/**
 * Extended yii array helper
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class ArrayHelper extends BaseArrayHelper
{
    /**
     * Returns next key of array after current key
     *
     * @param string|int $currentKey Current array key
     * @param array $array
     * @return string|int|null
     */
    public static function getNextKey($currentKey, array $array)
    {
        reset($array);
        do {
            $tmpKey = key($array);
            next($array);
        } while ($tmpKey !== $currentKey);

        return key($array);
    }

    /**
     * Returns previous key of array before current key
     *
     * @param string|int $currentKey Current array key
     * @param array $array
     * @return mixed
     */
    public static function getPrevKey($currentKey, array $array)
    {
        end($array);
        do {
            $tmpKey = key($array);
            prev($array);
        } while ($tmpKey !== $currentKey);

        return key($array);
    }
}

<?php
/**
 * @link https://github.com/yii2deman/yii2-helpers
 * @copyright Copyright (c) 2017 Vladimir Kuprienko
 * @license BSD 3-Clause License
 */

namespace frontend\modules\reviews\helpers;

/**
 * Vimeo API helper
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class VimeoHelper
{
    /**
     * Returns ID of video from URL
     *
     * @param string $url
     * @return null|string
     */
    public static function getVideoId($url)
    {
        preg_match('/vimeo\.com\/[0-9]\d+/', $url, $matches);
        if (!empty($matches)) {
            $parts = explode('/', $matches[0]);
            return $parts[1];
        }
        return null;
    }
}

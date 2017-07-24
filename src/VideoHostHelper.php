<?php
/**
 * @link https://github.com/yii2deman/yii2-helpers
 * @copyright Copyright (c) 2017 Vladimir Kuprienko
 * @license BSD 3-Clause License
 */

namespace yii2deman\helpers;

/**
 * Helper for YouTube and Vimeo video hostings
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class VideoHostHelper
{
    const HOST_UNDEFINED    = 'undefined';
    const HOST_YOUTUBE      = 'youtube';
    const HOST_VIMEO        = 'vimeo';

    /**
     * Returns video hosting type by video URL.
     *
     * @param string $url Video URL.
     * @return string
     */
    public static function videoHosting($url)
    {
        if (preg_match('/^(http|https):\/\/w*\.*youtu(be\.com|\.be)/', $url)) {
            return self::HOST_YOUTUBE;
        } elseif (preg_match('/^(http|https):\/\/w*\.*vimeo\.com/', $url)) {
            return self::HOST_VIMEO;
        }
        return self::HOST_UNDEFINED;
    }
}

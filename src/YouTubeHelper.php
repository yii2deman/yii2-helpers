<?php
/**
 * @link https://github.com/yii2deman/yii2-helpers
 * @copyright Copyright (c) 2017 Vladimir Kuprienko
 * @license BSD 3-Clause License
 */

namespace yii2deman\helpers;

/**
 * YouTube API helper
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class YouTubeHelper
{
    /**
     * @var string URL to player API.
     */
    public static $playerEndpoint = 'https://www.youtube.com/embed/{video-code}';


    /**
     * Returns video ID
     *
     * @param string $url URL to video
     * @return null
     */
    public static function getVideoId($url)
    {
        if (preg_match('/youtu\.be\/[a-zA-Z0-9]+/', $url, $matches)) {
            $parts = explode('/', $matches[0]);
            return $parts[1];
        } elseif (preg_match('/youtube\.com\/watch/', $url)) {
            $pathInfo = parse_url($url);
            parse_str($pathInfo['query'], $params);
            return isset($params['v']) ? $params['v'] : null;
        }
        return null;
    }

    /**
     * Generates URL to player API
     *
     * @param string $embed URL to video
     * @return null|string
     */
    public static function getApiUrl($embed)
    {
        if ($code = self::getVideoId($embed)) {
            return strtr(self::$playerEndpoint, ['{video-code}' => $code]);
        }
        return null;
    }
}

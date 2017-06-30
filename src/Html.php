<?php
/**
 * @link https://github.com/yii2deman/yii2-helpers
 * @copyright Copyright (c) 2017 Vladimir Kuprienko
 * @license BSD 3-Clause License
 */

namespace yii2deman\helpers;

use yii\helpers\BaseHtml;

/**
 * Extended yii html helper
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class Html extends BaseHtml
{
    /**
     * Generates a hyperlink tag to another site
     *
     * @param string $text
     * @param array|string|null $url
     * @param array $options
     * @return string
     */
    public static function externalLink($text, $url = null, $options = [])
    {
        $options['rel'] = 'nofollow';
        $options['target'] = '_blank';
        return self::a($text, $url, $options);
    }

    /**
     * Returns HTML wrapped in to no index block
     *
     * @param string $html
     * @return string
     */
    public static function wrapToNoIndex($html)
    {
        return '<!--noindex-->' . $html . '<!--/noindex-->';
    }

    /**
     * Returns HTML wrapped in to no index tag
     *
     * @param string $html
     * @return string
     */
    public static function wrapToNotIndexTag($html)
    {
        return '<noindex>' . $html . '</noindex>';
    }

    /**
     * Generates a callto hyperlink
     *
     * @param string $text
     * @param null|string $tel
     * @param array $options
     * @return string
     */
    public static function callto($text, $tel = null, $options = [])
    {
        $options['href'] = 'tel:' . ($tel === null ? $text : $tel);
        return self::tag('a', $text, $options);
    }
}
<?php
/**
 * @link https://github.com/yii2deman/yii2-helpers
 * @copyright Copyright (c) 2017 Vladimir Kuprienko
 * @license BSD 3-Clause License
 */

namespace yii2deman\helpers;

use Yii;

/**
 * User agent helper.
 * 
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class UserAgentHelper
{
    /**
     * Check whether user agent is a Google Page Speed Insights.
     * @see https://stackoverflow.com/questions/29162881
     *
     * @return bool
     */
    public static function isGooglePageSpeed()
    {
        $userAgent = Yii::$app->getRequest()->getUserAgent();
        return ($userAgent != null) && (stripos($userAgent, 'Speed Insights') != false);
    }
}   

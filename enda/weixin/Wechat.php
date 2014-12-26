<?php
/**
 * 微信扩展
 * User: 袁超<yccphp@163.com>
 * Time: 2014.12.20 上午11:24
 */
namespace yuanchao\wechat\enda\weixin;

use Yii;
use yii\base\Event;
use yii\base\Component;
use yii\web\HttpException;
use yii\base\InvalidParamException;
use yii\base\InvalidConfigException;

class Wechat extends Component{

    const WECHAT_BASE_URL = 'https://api.weixin.qq.com';

    public function init()
    {
        if ($this->appId === null) {
            throw new InvalidConfigException('The appId property must be set.');
        } elseif ($this->appSecret === null) {
            throw new InvalidConfigException('The appSecret property must be set.');
        } elseif ($this->token === null) {
            throw new InvalidConfigException('The token property must be set.');
        }
    }



}
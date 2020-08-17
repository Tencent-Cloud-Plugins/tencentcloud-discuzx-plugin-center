<?php

/*
 * Copyright (C) 2020 Tencent Cloud.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
if (!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
    exit('Access Denied');
}

$create_sql = <<<EOF
CREATE TABLE IF NOT EXISTS cdb_tencentcloud_pluginInfo (
       `plugin_name` varchar(255) NOT NULL DEFAULT '',
       `version` varchar(32) NOT NULL DEFAULT '',
       `href` varchar(255) NOT NULL  DEFAULT '',
       `plugin_id` varchar(255) NOT NULL DEFAULT '',
       `activation` varchar(32) NOT NULL DEFAULT '',
       `status` varchar(32) NOT NULL DEFAULT '',
       `install_datetime` timestamp NOT NULL DEFAULT  CURRENT_TIMESTAMP(),
       `last_modify_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
       PRIMARY KEY (`plugin_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
EOF;
runquery($create_sql);

$create_sql = <<<EOF
CREATE TABLE IF NOT EXISTS cdb_tencentcloud_center (
       `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
       `plugin_name` varchar(255) NOT NULL DEFAULT '',
       `nick_name` varchar(255) NOT NULL DEFAULT '',
       `plugin_desc` varchar(255) NOT NULL DEFAULT '',
       PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
EOF;
runquery($create_sql);

$insert_sql = <<<EOF
INSERT INTO cdb_tencentcloud_center (`plugin_name`, `nick_name`, `plugin_desc`) VALUES ( 'tencentcloud_captcha','腾讯云验证码（CAPTCHA）插件', '通过腾讯云验证码提供立体、全面的人机验证。');
EOF;
runquery($insert_sql);

$insert_sql = <<<EOF
INSERT INTO cdb_tencentcloud_center (`plugin_name`, `nick_name`, `plugin_desc`) VALUES ( 'tencentcloud_cos', '腾讯云对象存储（COS）插件', '通过腾讯云对象存储服务使网站中静态文件无缝同步腾讯云对象存储COS，提升网站内容访问速度，降低本地存储开销。');
EOF;
runquery($insert_sql);

$insert_sql = <<<EOF
INSERT INTO cdb_tencentcloud_center (`plugin_name`, `nick_name`, `plugin_desc`) VALUES ( 'tencentcloud_ims', '腾讯云图片内容安全（IMS）插件', '通过腾讯云图片内容安全服务对媒体库上传和URL插入的图片进行内容检测和过滤。');
EOF;
runquery($insert_sql);

$insert_sql = <<<EOF
INSERT INTO cdb_tencentcloud_center (`plugin_name`, `nick_name`, `plugin_desc`) VALUES ( 'tencentcloud_sms', '腾讯云短信（SMS）插件', '通过腾讯云短信服务使网站支持手机号登录,通过手机号+短信验证码找回密码等功能。');
EOF;
runquery($insert_sql);

$insert_sql = <<<EOF
INSERT INTO cdb_tencentcloud_center (`plugin_name`, `nick_name`, `plugin_desc`) VALUES ( 'tencentcloud_tms', '腾讯云文本内容安全（TMS）插件', '通过腾讯云文本内容安全服务对评论提交的文字进行内容检测和过滤。');
EOF;
runquery($insert_sql);

$finish = TRUE;



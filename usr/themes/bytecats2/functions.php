<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowSearch' => _t('显示搜索框'),
         'ShowCategory' => _t('显示分类'),
        'ShowRecentPosts' => _t('显示最新文章'),
    
   
    'ShowArchive' => _t('显示归档'),
    'ShowTags' => _t('显示标签')),
    array('ShowSearch', 'ShowCategory', 'ShowRecentPosts', 'ShowArchive', 'ShowTags'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());

    $css = new Typecho_Widget_Helper_Form_Element_Radio('css',
    array(
    'red' => _t('红色系'),
    'green' => _t('绿色系'),
    'blue' => _t('蓝色系'),
    'purple' => _t('紫色'),
    'black' => _t('黑色')
    ),
    'green',
    _t('配色选择'));
     
    $form->addInput($css->multiMode());


    }
/**
*
*手机移动设备识别函数
*
**/
function is_mobile() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $mobile_browser = Array(
        "mqqbrowser", //手机QQ浏览器
        "opera mobi", //手机opera
        "juc","iuc",//uc浏览器
        "fennec","ios","applewebKit/420","applewebkit/525","applewebkit/532","ipad","iphone","ipaq","ipod",
        "iemobile", "windows ce",//windows phone
        "240x320","480x640","acer","android","anywhereyougo.com","asus","audio","blackberry",
        "blazer","coolpad" ,"dopod", "etouch", "hitachi","htc","huawei", "jbrowser", "lenovo",
        "lg","lg-","lge-","lge", "mobi","moto","nokia","phone","samsung","sony",
        "symbian","tablet","tianyu","wap","xda","xde","zte"
    );
    $is_mobile = false;
    foreach ($mobile_browser as $device) {
        if (stristr($user_agent, $device)) {
            $is_mobile = true;
            break;
        }
    }
    return $is_mobile;
}
//加载耗时
function timer_start() {
global $timestart;
$mtime = explode( ' ', microtime() );
$timestart = $mtime[1] + $mtime[0];
return true;
}
timer_start();
 
function timer_stop( $display = 0, $precision = 3 ) {
global $timestart, $timeend;
$mtime = explode( ' ', microtime() );
$timeend = $mtime[1] + $mtime[0];
$timetotal = $timeend - $timestart;
$r = number_format( $timetotal, $precision );
if ( $display )
echo $r;
return $r;
}

<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $cdn = new Typecho_Widget_Helper_Form_Element_Radio('cdn',
        array('true' => '启用',
              'false' => '禁用'),
              'false', 'CDN','主题文件CDN');
    $form->addInput($cdn);
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('https://www.google.com.hk/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0CAcQjRxqFQoTCJyxjZzFicYCFY2UiAodsIkATQ&url=%68%74%74%70%3a%2f%2f%77%77%77%2e%73%6c%6c%6c%2e%69%6e%66%6f%2f%61%72%63%68%69%76%65%73%2f%34%30%34%2e%68%74%6d%6c&ei=5X16VdyqD42pogSwk4LoBA&psig=AFQjCNHjNmPrhZo-0XC4-zpT299xu1dDAg&ust=1434177206126687'));
    $layout->addItem($logoUrl);
}
*/


function is_mobile(){ 
    $regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|"; 
    $regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|"; 
    $regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";     
    $regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|"; 
    $regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220"; 
    $regex_match.=")/i";         
    return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT'])); 
} 
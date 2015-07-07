<?php
/*
*	@name 多说读者墙实现方法
*	@author 阳光[xux851@gmail.com]
*	@Ver 20131014
*/
/*多说参数*/
function readers($num=10,$size=32,$prefix='ys_'){
  $options = Typecho_Widget::widget('Widget_Options');  //系统参数
  if(!$options->duoshuo) return false;
  $n = 1;   //数量开关
  $reader = '';   //读者墙列表
  $limit = 200;  //统计条数，越大越详细，但是却会越慢
  $author = explode(',', $options->author);
  $url = 'http://'.$options->duoshuo.'.duoshuo.com/api/posts/list.json?limit='.$limit; //API地址
  $period = 3600 * 24 * 30; // 時段: 30 天, 單位: 秒
  $path = __TYPECHO_ROOT_DIR__ .'/usr/uploads/cache/'; //缓存路径
  $file =  $path . $prefix .'readers.php';
  if (time() - @filemtime($file) > $period || !file_exists($file)){
    //统计读者墙
    $list = file_get_contents($url);
    $list = json_decode($list,true);
    $list = $list['parentPosts'];
    foreach ($list as $k => $v) {
        if(isset($v['author']) && !in_array($v['author']['name'],$authors)){
            $usr_arr[] = $v['author']['name'];
            $usr_info[$v['author']['name']]['url'] = $v['author']['url'];
            $usr_info[$v['author']['name']]['avatar_url'] = empty($v['author']['avatar_url']) ? 'http://static.duoshuo.com/images/noavatar_default.png' : $v['author']['avatar_url'];
        }
    }
    $usr = array_count_values($usr_arr);
    arsort($usr); //排序
    foreach ($usr as $k => $v) {
      if($n > $num) break;
      $reader .= '<li><a href="'.$usr_info[$k]['url'].'" target="_blank" rel="nofollow" title="'.$k.'[共'.$v.'条评论]"><img src="'.$usr_info[$k]['avatar_url'].'" style="width:'.$size.'px"></a></li>'."\n\r";
      $n++;
    }
    SaveCache($file,$reader);
  }else{
    $reader =  LoadCache($file);
  }
  echo $reader;
}
//公共过程 2012-12-07
//缓存读写
function SaveCache($file,$str){
    $fp = fopen($file, "wb");
    fwrite($fp, $str);
    fclose($fp);
  }
function LoadCache($file){
    if(!file_exists($file)){
      exit("ERR");
    }
    $handle = fopen($file,"rb");
    $contents = fread($handle,filesize($file));
    fclose($handle);
    return $contents;
}
function sermore($content,$tip,$link,$title){
  if(empty($content)) return false;
  $r = explode('<!--more-->',$content);
  if(isset($r[1])){
    unset($r[1]);
    $r = implode("", $r);
    return $r . '<p class="more"><a href="'.$link.'" title="'.$title.'">'.$tip.'</a></p>';
  }else{
    return $content;
  } 
 
}
//主题设置
function themeConfig($form) {
    $beian = new Typecho_Widget_Helper_Form_Element_Textarea('beian', NULL, NULL, _t('站点备案号'), _t('在这里填入备案号或是自己要加的一段话，显示在左边栏下方，支持html'));
    $form->addInput($beian);
    $duoshuo = new Typecho_Widget_Helper_Form_Element_Text('duoshuo', NULL, NULL, _t('你的多说ID'), _t('你的多说ID，如 http://xxx.duoshuo.com 则填入 xxx'));
    $form->addInput($duoshuo);
    $author = new Typecho_Widget_Helper_Form_Element_Text('author', NULL, NULL, _t('不上读者墙的用户名'), _t('支持多个用英文逗号隔开，填写的用户不会显示在读者墙上'));
    $form->addInput($author);
    $cstyle = new Typecho_Widget_Helper_Form_Element_Radio('cstyle', array(0=>_t('普通版本'), 1=>_t('圣诞版本')), 0, _t('主题样式设置'),_t('主题样式设置，默认为普通'));
    $form->addInput($cstyle);

}
?>
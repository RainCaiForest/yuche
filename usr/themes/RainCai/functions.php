<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}

function themeInit($archive) {
    $archive->parameter->pageSize = 48; // 自定义条数
}

/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/




function getIntTag()
{
   return $arr = [
        ['tag' => "30秒懂车",'id'=> "1385"],
        ['tag' => "萝卜报告",'id'=> "1355"],
        ['tag' => "新车评",'id'=> "1369"],
        ['tag' => "大家车言论",'id'=> "1364"],//
        ['tag' => "爱极客",'id'=> "1401"],
        // ['tag' => "汽车棒棒堂",'id'=> "1480"],
        // ['tag' => "海阔试车",'id'=> "1398"],
        ['tag' => "易车",'id'=> "1395"],
        // ['tag' => "麻辣车事",'id'=> "1482"],
        // ['tag' => "车市进言",'id'=> "1483"],
        // ['tag' => "玩车教授",'id'=> "1372"],
        // ['tag' => "四万说车",'id'=> "1391"],
        ['tag' => "这车值么",'id'=> "1412"],
        // ['tag' => "集车",'id'=> "1387"],
        ['tag' => "网上车市",'id'=> "1484"],
        ['tag' => "视知车学院",'id'=> "1485"],
        ['tag' => "老司机出品",'id'=> "1486"],
        ['tag' => "汽车洋葱圈",'id'=> "1361"],
        // ['tag' => "新浪汽车",'id'=> "1487"],
        ['tag' => "跟我视驾",'id'=> "1362"],
        ['tag' => "太平洋汽车",'id'=> "1363"],
        // ['tag' => "66车讯",'id'=> "1428"],
        ['tag' => "超级试驾",'id'=> "1350"],
        ['tag' => "爱车兵团",'id'=> "1488"],
        ['tag' => "逗斗车",'id'=> "1389"],
        // ['tag' => "一和一",'id'=> "1489"],
        ['tag' => "暴走汽车",'id'=> "1373"],
        ['tag' => "兮有视频",'id'=> "1374"],
        // ['tag' => "优酷汽车",'id'=> "1490"],
        ['tag' => "玩车TV",'id'=> "1343"],
        ['tag' => "主试角",'id' => "1430"],
        // ['tag' => "五号频道",'id' => "1491"],
        ['tag' => "CarSee车影",'id' => "1415"],
        ['tag' => "踢车帮",'id' => "1344"],
        ['tag' => "豆哥不卖车",'id' => "1492"],
        ['tag' => "汽车天涯",'id' => "1377"],
        // ['tag' => "AL频道",'id' => "1378"],
        ['tag' => "吴佩频道",'id' => "1493"],
        ['tag' => "智选车",'id' => "1379"],
        ['tag' => "38车评中心",'id' => "1478"],
        ['tag' => "车若初见",'id' => "1393"],
        ['tag' => "爱路客",'id' => "1340"],
        ['tag' => "白话汽车",'id' => "1409"],
        ['tag' => "Goingworld",'id' => "1406"],
        ['tag' => "胖哥汽车",'id' => "1494"],
        // ['tag' => "薄荷Car",'id' => "1495"],
        ['tag' => "啊车视频",'id' => "1424"],
        ['tag' => "车扯",'id' => "1408"],
        ['tag' => "Y车评",'id' => "1386"],
        ['tag' => "李老鼠说车",'id' => "1383"],
        ['tag' => "驾驭制造者",'id' => "1429"],
        ['tag' => "爽爽侃车",'id' => "1380"],
        // ['tag' => "车图腾",'id' => "1496"],
        // ['tag' => "拆车坊",'id' => "1394"],
        ['tag' => "车比得",'id' => "1382"],
        ['tag' => "TopDIao",'id' => "1400"],
        ['tag' => "ams车评网",'id' => "1447"],
        ['tag' => "一辆ACarTV",'id' => "1397"],
        // ['tag' => "五号车论",'id' => "1342"],
        ['tag' => "JSFamily集视家",'id' => "1423"],
        // ['tag' => "车论帮之叫兽",'id' => "1420"],
        // ['tag' => "新出行视频",'id' => "1498"],
        ['tag' => "蜗牛车志",'id' => "1417"],
        // ['tag' => "Ray哥侃车",'id' => "1413"],
        ['tag' => "汽车娱乐星球",'id' => "1411"],
        ['tag' => "驭动汽车",'id' => "1410"],
        // ['tag' => "爱车的诺诺",'id' => "1407"],
        // ['tag' => "车少话车",'id' => "1405"],
        ['tag' => "0991车评中心",'id' => "1499"],
        // ['tag' => "车世界视频",'id' => "1500"],
        ['tag' => "好购汽车",'id' => "1501"],
        // ['tag' => "锤哥试车",'id' => "1502"],
        // ['tag' => "星哥侃车",'id' => "1396"],
        ['tag' => "车评家",'id' => "1390"],
        ['tag' => "开车去非洲",'id' => "1503"],
        ['tag' => "autov汽车生活网",'id' => "1504"],
        ['tag' => "牛车网",'id' => "1505"],
        ['tag' => "车生活",'id' => "1506"],
        ['tag' => "Gran车驭",'id' => "1507"],
        ['tag' => "车映讯",'id' => "1508"],
        ['tag' => "EK爱车人说",'id' => "1509"],
        // ['tag' => "车闻社",'id' => "1426"],
        ['tag' => "涡轮时间",'id' => "1425"],

    ];
}

function navList()
{
    return $arr = [
        // ['tag' => "EK爱车人说",'id' => "1509"],
        ['tag' => "Y车评",'id' => "1386"],
        ['tag' => "Goingworld",'id' => "1406"],
        ['tag' => "车比得",'id' => "1382"],
        ['tag' =>  "美女",'id' => '1439'],
        ['tag' =>  "初晓敏",'id' => '1432'],
        ['tag' =>  "爽爽侃车",'id' => '1380'],
        ['tag' =>  "30秒懂车",'id' => '1385'],
        ['tag' =>  "车映讯",'id' => '1508']



    ];
}


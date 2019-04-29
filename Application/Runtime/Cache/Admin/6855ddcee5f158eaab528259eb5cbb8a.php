<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>2017年全国各地高考试题及答案解析111111111</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="darkmirrors_bj _bj" />
<link rel="stylesheet" href="/Public/Admin/css/index.css" />
<script src="/Public/Admin/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="/Public/Admin/js/index.js" type="text/javascript" charset="utf-8"></script>
<!--[if IE 6]><script>document.execCommand("BackgroundImageCache", false, true)</script><![endif]-->
</head>
<body>
<iframe width="100%" height="186px" style="border:none" src="http://www.dearedu.com/zt/inc/header_zt.html"></iframe>

<div class="doc">
<div class="header">
<div class="banner">&nbsp;</div>
<!-- <img src="images/banner.jpg" width="100%" /> --></div>
<div class="wraper">
<div class="linkA clearfix"><a class="linkA_1" href="http://www.dearedu.com/zt/gkzw" target="_blank">2017高考作文</a> <a class="linkA_2" href="http://s.dearedu.com/list.php?Keyword=2016年普通高等学校招生全国统一考试+解析" target="_blank">2017试题解析</a> <a class="linkA_3" href="http://s.dearedu.com/list.php?g=1&amp;t=18&amp;ye=2016" target="_blank">2017真题书稿</a> <a class="linkA_4" href="javascript:void();" target="_blank">2017英语听力</a> <a class="linkA_5" href="http://www.dearedu.com/zt/ljzt/" target="_blank">历届高考试题</a></div>
<div class="navB"><a href="#qg1">全国卷1</a> <a href="#qg2">全国卷2</a> <a href="#qq">全国卷3</a><a href="#bj">北京卷</a> <a href="#tj">天津卷</a> <a href="#zj">浙江卷</a> <a href="#sh">上海卷</a> <a href="#js">江苏卷</a> <a href="#sd">山东卷</a> <a href="#hn">海南</a></div>
<?php
 echo '<pre>'; ?>
<?php if(is_array($res)): foreach($res as $k=>$vo): ?><div class="boxContent" id="qg<?php echo ($k); ?>">
	<div class="thA"><span class="fr"><?php echo ($vo['zone_area']); ?></span>
		<h3 style="color:white;margin-top:-80px;"><?php echo $vo['zone_name']; ?></h3>
	</div>
	<div class="tbA">
		<ul class="clearfix">
			<?php
 foreach($vo['son'] as $k=>$val){ ?>
			<li>
				<h5><?php echo $val['subject']; ?></h5>
				<p><a class="now" href="<?php echo $val['url1']; ?>" target="_blank">试题</a><i>|</i><a class="now" href="<?php echo $val[url2]; ?>" target="_blank">解析</a></p>
			</li>
			<?php
 } ?>
			<!-- <li>
				<h5>数学文</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3847743.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849126.html" target="_blank">解析</a></p>
			</li>
			<li>
				<h5>数学理</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3847494.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848389.html" target="_blank">解析</a></p>
			</li>
			<li>
				<h5>文综</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3848898.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3857203.html" target="_blank">解析</a></p>
			</li>
			<li>
				<h5>理综</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3848804.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3855996.html" target="_blank">解析</a></p>
			</li>
			<li>
				<h5>英语</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3849720.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850540.html" target="_blank">解析</a></p>
			</li> -->
		</ul>
		<div class="borderA1">&nbsp;</div>
		<ul class="clearfix">
		<!-- 	<li>
				<h5>政治</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3848906.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849364.html" target="_blank">解析</a></p>
			</li>
			<li>
				<h5>历史</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3848903.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849432.html" target="_blank">解析</a></p>
			</li>
			<li>
				<h5>地理</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3848905.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850533.html" target="_blank">解析</a></p>
			</li>
			<li>
				<h5>生物</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3848908.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850513.html" target="_blank">解析</a></p>
			</li>
			<li>
				<h5>物理</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3848897.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850529.html" target="_blank">解析</a></p>
			</li>
			<li>
				<h5>化学</h5>
				<p><a class="now" href="http://s.dearedu.com/downs/p-3848907.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849958.html" target="_blank">解析</a></p>
			</li> -->
		</ul>
	</div>
</div><?php endforeach; endif; ?>
<!-- <div class="boxContent" id="qg2">
<div class="thA"><span class="fr">适用地区: 北京、上海、广州、重庆、深圳、武汉、杭州、苏州、南京、新疆、内蒙</span>
<h3>全国卷2</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3846784.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848300.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848110.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849131.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848257.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848390.html" target="_blank">解析</a></p>
</li>
<li>
<h5>文综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848880.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3857204.html" target="_blank">解析</a></p>
</li>
<li>
<h5>理综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848909.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3855999.html
" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850516.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850541.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848873.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849365.html" target="_blank">解析</a></p>
</li>
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848877.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849717.html" target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848806.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850534.html" target="_blank">解析</a></p>
</li>
<li>
<h5>生物</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848912.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850549.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848911.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850530.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848913.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849960.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div>
<div class="boxContent" id="qq">
<div class="thA"><span class="fr">适用地区: 北京、上海、广州、重庆、深圳、武汉、杭州、苏州、南京、新疆、内蒙 </span>
<h3>全国卷3</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850542.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850551.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848288.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849962.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848289.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850567.html" target="_blank">解析</a></p>
</li>
<li>
<h5>文综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848914.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856013.html" target="_blank">解析</a></p>
</li>
<li>
<h5>理综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849718.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3857199.html" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850194.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850792.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848917.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850538.html" target="_blank">解析</a></p>
</li>
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848915.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850518.html " target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848916.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850535.html" target="_blank">解析</a></p>
</li>
<li>
<h5>生物</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849661.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850526.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849719.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850558.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849716.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850514.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div>
<div class="boxContent" id="bj">
<div class="thA">
<span class="fr">适用地区: 北京、上海、广州、重庆、深圳、武汉、杭州、苏州、南京、新疆、内蒙 </span>
<h3>北京卷</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3846822.html" target="_blank">试题<i>|</i></a><a class="now" href="http://s.dearedu.com/downs/p-3847434.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848284.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850614.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848282.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848372.html" target="_blank">解析</a></p>
</li>
<li>
<h5>文综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850613.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856023.html" target="_blank">解析</a></p>
</li>
<li>
<h5>理综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849091.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856016.html" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850385.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850791.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850623.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850621.html" target="_blank">解析</a></p>
</li>
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850546.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850620.html" target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850624.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850619.html" target="_blank">解析</a></p>
</li>
<li>
<h5>生物</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848919.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850524.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849322.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850553.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848918.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849954.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div> -->
<!--
<div class="boxContent" id="tj">
<div class="thA">
<h3>天津卷</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850559.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850556.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850543.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850602.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848286.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848391.html" target="_blank">解析</a></p>
</li>
<li>
<h5>文综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850561.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856026.html" target="_blank">解析</a></p>
</li>
<li>
<h5>理综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850562.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856019.html" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850548.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850799.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850544.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850608.html" target="_blank">解析</a></p>
</li>
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850547.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850606.html" target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850536.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850604.html" target="_blank">解析</a></p>
</li>
<li>
<h5>生物</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850528.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850944.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850545.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850568.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850560.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850557.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div>
<div class="boxContent" id="zj">
<div class="thA">
<h3>浙江卷</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850611.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850612.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850574.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850603.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850550.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850600.html" target="_blank">解析</a></p>
</li>
<li>
<h5>文综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850566.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3855990.html" target="_blank">解析</a></p>
</li>
<li>
<h5>理综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850616.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856002.html" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850596.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850625.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850572.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850609.html" target="_blank">解析</a></p>
</li>
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850571.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850836.html" target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850570.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850605.html" target="_blank">解析</a></p>
</li>
<li>
<h5>生物</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850555.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850599.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850563.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850837.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850564.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850598.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div>
<div class="boxContent" id="js">
<div class="thA">
<h3>江苏卷</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3846783.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848287.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848199.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848392.html" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850515.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3851054.html" target="_blank">解析</a></p>
</li>
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850617.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3851048.html" target="_blank">解析</a></p>
</li>
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850615.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3851047.html" target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850618.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850942.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>生物</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850565.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850790.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850552.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850943.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850595.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850597.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div>
<div class="boxContent" id="sh">
<div class="thA">
<h3>上海卷</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848805.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849363.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-%203851964.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3852481.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849327.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850532.html" target="_blank">解析</a></p>
</li>
<li>
<h5>生命科学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3851969.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856010.html" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-%203851970.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856029.html" target="_blank">解析</a></p>
</li>
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3852478.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3857206.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3851968.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3857202.html" target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3851967.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3852479.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-%203851966.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3852480.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-%203851965.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3857205.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div>
<div class="boxContent" id="sd">
<div class="thA"><span class="fr">说明：英语、文综、理综使用全国卷1</span>
<h3>山东卷</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3846823.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848301.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849572.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850835.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848285.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850569.html" target="_blank">解析</a></p>
</li>
<li>
<h5>文综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848898.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3857203.html" target="_blank">解析</a></p>
</li>
<li>
<h5>理综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848804.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3855996.html" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849720.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850540.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848906.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849364.html" target="_blank">解析</a></p>
</li>
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848903.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849432.html" target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848905.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850533.html" target="_blank">解析</a></p>
</li>
<li>
<h5>生物</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848908.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850513.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848897.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850529.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848907.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849958.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div>
<div class="boxContent" id="js">
<div class="thA"><span class="fr">说明：其中语文、文综使用全国卷3</span>
<h3>四川卷</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850542.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850551.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848283.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850601.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848258.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848394.html" target="_blank">解析</a></p>
</li>
<li>
<h5>文综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848914.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856013.html" target="_blank">解析</a></p>
</li>
<li>
<h5>理综</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849721.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3857201.html" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850554.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850794.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848917.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850538.html" target="_blank">解析</a></p>
</li>
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848915.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850518.html " target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848916.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850535.html" target="_blank">解析</a></p>
</li>
<li>
<h5>生物</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3849575.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850527.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848910.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850531.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850727.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850521.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div>
<div class="boxContent" id="hn">
<div class="thA"><span class="fr">说明：语文、数学、英语使用全国卷2</span>
<h3>海南卷</h3>
</div>
<div class="tbA">
<ul class="clearfix">
<li>
<h5>语文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3846784.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848300.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学文</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848110.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3849131.html" target="_blank">解析</a></p>
</li>
<li>
<h5>数学理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3848257.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3848390.html" target="_blank">解析</a></p>
</li>
<li>
<h5>物理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3852571.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3853573.html" target="_blank">解析</a></p>
</li>
<li>
<h5>化学</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3854244.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3856324.html" target="_blank">解析</a></p>
</li>
<li>
<h5>英语</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3850516.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3850541.html" target="_blank">解析</a></p>
</li>
</ul>
<div class="borderA1">&nbsp;</div>
<ul class="clearfix">
<li>
<h5>政治</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3854246.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3858461.html" target="_blank">解析</a></p>
</li>
<li>
<h5>历史</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3854245.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3858459.html" target="_blank">解析</a></p>
</li>
<li>
<h5>地理</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3854243.html" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3857200.html" target="_blank">解析</a></p>
</li>
<li>
<h5>生物</h5>
<p><a class="now" href="http://s.dearedu.com/downs/p-3858462.html
" target="_blank">试题</a><i>|</i><a class="now" href="http://s.dearedu.com/downs/p-3858460.html" target="_blank">解析</a></p>
</li>
</ul>
</div>
</div>
</div>
</div>
-->
<br />
<iframe width="100%" height="200px" style="border:none" src="http://www.dearedu.com/zt/inc/footer.html"></iframe>
<div style="display:none">
<script type="text/javascript">
	var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1259144622'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1259144622%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"2016中考语文模拟分项汇编","bdMini":"2","bdMiniList":false,"bdPic":"http://img.dearedu.com/www/2016/06/06/img/lishi.jpg","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"0","bdPos":"left","bdTop":"150"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<div style="display:none">
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1255799837'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1255799837%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</div>
</body>
</html>
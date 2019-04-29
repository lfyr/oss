<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>2017年全国各地高考试题及答案解析</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="darkmirrors_bj _bj" />
<link rel="stylesheet" href="/Public/Admin/css/index.css?id=1" />
<script src="/Public/Admin/js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="_/Public/Admin/js/index.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
<iframe width="100%" height="186px" style="border:none" src="http://www.dearedu.com/zt/inc/header_zt.html"></iframe>

<div class="doc">
	<div class="header">
		<div class="banner">&nbsp;</div>
	</div>
	<div class="wraper">
		<div class="linkA clearfix"><a class="linkA_1" href="http://www.dearedu.com/zt/gkzw" target="_blank">2017高考作文</a> <a class="linkA_2" href="http://s.dearedu.com/list.php?Keyword=2016年普通高等学校招生全国统一考试+解析" target="_blank">2017试题解析</a> <a class="linkA_3" href="http://s.dearedu.com/list.php?g=1&amp;t=18&amp;ye=2016" target="_blank">2017真题书稿</a> <a class="linkA_4" href="javascript:void();" target="_blank">2017英语听力</a> <a class="linkA_5" href="http://www.dearedu.com/zt/ljzt/" target="_blank">历届高考试题</a></div>
		<div class="navB">
			<?php if(is_array($res)): foreach($res as $k=>$vo): ?><a href="#qg1"><?php echo ($vo['zone_name']); ?></a><?php endforeach; endif; ?>
		</div>

		<?php if(is_array($res)): foreach($res as $k=>$vo): ?><div class="boxContent" id="qg<?php echo ($k); ?>">
			<div class="thA"><span class="fr">适用地区: <?php echo ($vo['zone_area']); ?></span>
			<h3><?php echo $vo['zone_name']; ?></h3>
			</div>
			<div class="tbA">
				<ul class="clearfix">
					<?php
 foreach($vo['son'] as $k=>$val){ ?>
					<li>
						<h5><?php echo $val['subject']; ?></h5>
						<p><a class="now" href="<?php echo $val['url1']; ?>" target="_blank">试题</a><i>|</i><a class="now" href="<?php echo $val['url2']; ?>" target="_blank">解析</a></p>
					</li>
					
					<?php
 } ?>
				</ul>
			</div>
		</div><?php endforeach; endif; ?>
	</div>
</div>


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
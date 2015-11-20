<!--<?php
$met_foot_nav = methtml_footnav();//底部导航标签（次导航）
$met_foot_txt = metlabel_foot();//底部信息标签
$icon	=	array();
$icon[101]	=	$lang_icon_about;
$icon[102]	=	$lang_icon_product;
$icon[103]	=	$lang_icon_news;
$icon[104]	=	$lang_icon_contact;

echo <<<EOT
-->
<div class="footer_nav">
<ul class="tem_inner">
<!--
EOT;
foreach($navfoot_list as $key=>$val){
$navnow = $val[id]==$navdown?'class="navdown"':'';
if($val[columnimg]){
	$str	=	'<span class="img"><img src="'.$val[columnimg].'" alt="" class="sort_icon"></span>';
}else{
	$str	=	'';
}
echo <<<EOT
-->
	<li>
		<a class="sort" href="{$val[url]}" {$val[new_windows]} title="{$val[name]}" {$navnow}>
		{$str} <span>{$val[name]}</span>
		</a>
<!--
EOT;
if(count($nav_list2[$val[id]])){
$dtok = 1;
echo <<<EOT
-->
		<dl>
			<dd>
<!--
EOT;
foreach($nav_list2[$val[id]] as $key=>$val2){
if($val[module]==3&&$lang_nav_select_pai){
$dtok = 0;
echo <<<EOT
-->	
			<div>
				<h3><a href="{$val2[url]}" {$val2[new_windows]} title="{$val2[name]}">{$val2[name]}</a></h3>
<!--
EOT;
foreach($nav_list3[$val2[id]] as $key=>$val3){
echo <<<EOT
-->
				<p><a href="{$val3[url]}" {$val3[new_windows]} title="{$val3[name]}">{$val3[name]}</a></p>
<!--
EOT;
}
echo <<<EOT
-->
			</div>
<!--
EOT;
}else{
echo <<<EOT
-->
			<a href="{$val2[url]}" {$val2[new_windows]} title="{$val2[name]}">{$val2[name]}</a>
<!--
EOT;
}
}
echo <<<EOT
-->
			<div class="met_clear"></div>
			</dd>
<!--
EOT;
echo <<<EOT
-->
		</dl>
<!--
EOT;
}
echo <<<EOT
-->
	</li>
<!--
EOT;
}
$back=messagelabel_table();
echo <<<EOT
-->
<li class="index_feedback">
<div class="title">Feedback</div>
{$back}
</li>
<script>
$().ready(function(){
	var container	=	$('.footer_nav table.feedback_table')
	,	i			=	0
	,	arr 		=	['fa-user','fa-envelope-o','fa-file-text-o']
	$($(container).selector+' tr').is(function(){
		if(arr[i])$(this).children('.text').prepend('<span class="fa '+arr[i]+'"></span>');
		$(this).addClass('li'+i++)
	})
})
</script>
<div class="met_clear"></div>
</ul>
<script>
	var container	=	$(".footer_nav ul")
	var li			=	$(container.selector+" li")
	,	liWidth		=	li.width()
	li.last().css('margin-right','0')
	var resizeLi	=	function(){
		var	allWidth	=	container.width()
		var right=(allWidth-400-(li.length-1)*li.width())/(li.length)
		$(this).css('margin-right',right+'px')
	}
	$(window).resize(function(){
		li.is(resizeLi)
	})
	li.is(resizeLi)
</script>
</div>
<footer class="tem_footer">
	<section class="tem_inner">
		<div class="tem_footer_nav">
		{$lang_company_ICP}<a href="http://goomay.cn">Powered by Goomay</a>
		</div>
		<div class="tem_footer_text">
			{$lang_company_copyright}
		</div>
	</section>
</footer>
<script src="{$navurl}public/ui/v1/js/sea.js" type="text/javascript"></script>
</body>
</html>
<!--
EOT;
?>-->

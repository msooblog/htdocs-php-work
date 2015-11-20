<!--<?php
/*四个文章列表*/
if($lang_news_list1_open){
$tem_news[1]           = tmpcentarr($lang_news_list1_id);
$tem_news[1]['name']   = $lang_news_list1_title?$lang_news_list1_title:$tem_news[1]['name'];
$tem_news[1]['imgurl'] = $lang_news_list1_img?$lang_news_list1_img:"{$img_url}newlistbg1.jpg";
$tem_news[1]['list']   = methtml_getarray($lang_news_list1_id,$lang_news_list1_type,'','',$lang_news_num);
}
if($lang_news_list2_open){
$tem_news[2]           = tmpcentarr($lang_news_list2_id);
$tem_news[2]['name']   = $lang_news_list2_title?$lang_news_list2_title:$tem_news[2]['name'];
$tem_news[2]['imgurl'] = $lang_news_list2_img?$lang_news_list2_img:"{$img_url}newlistbg2.jpg";
$tem_news[2]['list']   = methtml_getarray($lang_news_list2_id,$lang_news_list2_type,'','',$lang_news_num);
}
/*
if($lang_news_list3_open){
$tem_news[3]           = tmpcentarr($lang_news_list3_id);
$tem_news[3]['name']   = $lang_news_list3_title?$lang_news_list3_title:$tem_news[3]['name'];
$tem_news[3]['imgurl'] = $lang_news_list3_img?$lang_news_list3_img:"{$img_url}newlistbg3.jpg";
$tem_news[3]['list']   = methtml_getarray($lang_news_list3_id,$lang_news_list3_type,'','',$lang_news_num);
}
if($lang_news_list4_open){
$tem_news[4]           = tmpcentarr($lang_news_list4_id);
$tem_news[4]['name']   = $lang_news_list4_title?$lang_news_list4_title:$tem_news[4]['name'];
$tem_news[4]['imgurl'] = $lang_news_list4_img?$lang_news_list4_img:"{$img_url}newlistbg4.jpg";
$tem_news[4]['list']   = methtml_getarray($lang_news_list4_id,$lang_news_list4_type,'','',$lang_news_num);
}
*/
$tem_wp3 = $lang_waypointsok==1?'tem_wp3':'';
echo <<<EOT
-->
<section class="index_news {$into}">
	<div class="title">
	<div class="tem_inner">{$lang_news_title}<i class="fa fa-caret-right"></i></div>
	</div>
<!--
EOT;
echo <<<EOT
--> 
		<div class="index_news_slides">
		<div class="tem_inner">
<!--
EOT;
foreach($tem_news as $key=>$val){
echo <<<EOT
--> 
		<ul class="one {$tem_wp3}">
		<li class="title">
			<span class="name"><a href="{$val[url]}" title="{$lang_news_more}" {$metblank}>{$val[name]}</a></span>
			<span class="more"><a href="{$val[url]}" title="{$lang_news_more}" {$metblank}>{$lang_news_more}</a><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></span>
		</li>
<!--
EOT;
$i=0;
foreach($val['list'] as $key=>$val2){
$i++;
$val2[imgurl]="{$thumb_src}dir=../{$val2[imgurl]}&x=90&y=90";
$to = $i%2==0?'class="tem_even"':'';//判断是否为偶数
echo <<<EOT
-->
			<a href="{$val2[url]}" title="{$val2[title]}" {$metblank}>
			<li>
				<span class='time'>{$val2['updatetime']}</span>{$val2['title']}						
			</li>
			</a>
<!--
EOT;
}
echo <<<EOT
--> 
		</ul>
<!--
EOT;
}
echo <<<EOT
--> 
		</div>
		<div class="met_clear"></div>
		</div>
		
		<script>
		$().ready(function(){
			var container	=	$('section.index_news .index_news_slides')
			,	li			=	$($(container).selector+' .one')
			,	length		=	li.width()
			,	l			=	parseInt(container.width()/length)
			,	i			=	0
			li.is(function(){
				if((i+1)%l==0){
					$(this).css('margin-right','0')
				}
				i++
			})
		})
		</script>
	</div>
</section>
<!--
EOT;
?>
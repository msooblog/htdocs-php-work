<!--<?php
echo <<<EOT
-->
<div style="border-bottom:1px dashed rgb(183,150,111);margin:2px 0";"></div>
<div class="index_product">
<div class="title">
<div class="tem_inner">
<span class="index_sort_name">{$lang_index_sort_name}<i class="fa fa-caret-right"></i></span>
<div class="sort">
<!--
EOT;

$list=$nav_list2[intval($lang_index_sort)];
foreach($list as $li){
//$imgs	=	$thumb_src.'dir=../'.$li[columnimg].'&x='.$lang_index_sort_x.'&y='.$lang_index_sort_y;
$imgs	=	$li[columnimg];
echo <<<EOT
-->
	<a href="{$li[url]}" class="one">
		<img src="{$imgs}" alt="">{$li[name]}
	</a>
	
<!--
EOT;
}
echo <<<EOT
-->
</div>
</div>
</div>
<ul class="tem_inner">
<!--
EOT;
$newslist=methtml_getarray($lang_index_sort,'','',$promd,5);
foreach($newslist as $li){
$imgs	=	$thumb_src.'dir=../'.$li[imgurl].'&x='.$lang_index_sort_x.'&y='.$lang_index_sort_y;
echo <<<EOT
-->
	<a href="{$li[url]}">
	<li>
		<div class="img"><img src="{$imgs}" alt=""></div>
		<div class="bar">
		<div class="main">{$li[title]}</div>
		</div>
	</li>
	</a>
<!--
EOT;
}
echo <<<EOT
-->
<div class="met_clear"></div>
</ul>
<div class="tem_inner morel"><a href="{$class_list[intval($lang_index_sort)][url]}"><span class="more">{$lang_index_sort_more}</span></a></div>
<script>
	$().ready(function(){
		var container	=	$('.index_product ul')
		,	li			=	$($(container).selector+' li')
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
<!--
EOT;
?>
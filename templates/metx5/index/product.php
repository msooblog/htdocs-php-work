<!--<?php
$tem_product         = tmpcentarr($lang_product_id);
$tem_product['name'] = $lang_product_title?$lang_product_title:$tem_product['name'];
$promd = $lang_product_id?'':'product';
$tem_product['list'] = methtml_getarray($lang_product_id,$lang_product_type,'',$promd,$lang_product_num);
$tem_wp2 = $lang_waypointsok==1?'tem_wp2':'';
echo <<<EOT
-->
<section class="tem_index_product2 {$into}">
	<div class="tem_inner">
		<ul data-product_x=>
<!--
EOT;
foreach($tem_product['list'] as $key=>$val){
$val[imgurl]="{$thumb_src}dir=../{$val[imgurl]}&x={$lang_product_x}&y={$lang_product_y}";
echo <<<EOT
-->
			<li class="{$tem_wp2}">
				<a href="{$val[url]}" title="{$val[title]}" {$metblank}>
				  <img src="{$val[imgurl]}" title="{$val[title]}" alt="{$val[title]}" width ="{$lang_product_x}" height="{$lang_product_y}" />
				  <h2>{$val[title]}</h2>
				  <div class="description">{$val[description]}</div>
				</a>
			</li>
<!--
EOT;
}
echo <<<EOT
--> 
		</ul>
		<div class="met_clear"></div>
	</div>
	<script>
	$().ready(function(){
		var container	=	$('.tem_index_product2 ul')
		,	li			=	$($(container).selector+' li')
		,	length		=	li.length
		,	i			=	0
		li.is(function(){
			if((i+1)%3==0){
				$(this).css('margin-right','0')
			}
			i++
		})
	})
	</script>
</section>
<!--
EOT;
?>
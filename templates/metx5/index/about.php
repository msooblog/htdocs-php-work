<!--<?php
$url=$class_list[intval($lang_about_id)][url];
$img="{$thumb_src}dir=../{$lang_about_img2}&x=405&y=270";
$bgimg="{$thumb_src}dir=../{$lang_about_img1}{$lang_about_img1_size}";
echo <<<EOT
-->
<section class="tem_index_about" style="background-image:url({$bgimg})">
	<div class="tem_inner">
	<a href="{$url}">
		<div class="content">
		<div class="title">{$lang_about_title}</div>
		{$lang_about_content}
		</div>
	</a>
		<div class="img"><img src="{$img}" alt=""></div>
			<div class="met_clear"></div>
		</div>
	</div>
</section>
<!--
EOT;
?>
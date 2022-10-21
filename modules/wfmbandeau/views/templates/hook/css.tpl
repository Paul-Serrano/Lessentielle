{if $wfmbandeaupromo_show}
<style type="text/css">
	#top-fluid{
		width: 100%;
		height: 30px;
		position: relative;
		text-align: center;
		text-transform: uppercase;
		line-height: 30px;
		font-weight: normal;
		z-index: 100;
		font-weight: normal;
		margin: 0;
		padding: 0;
		{if isset($wfmbandeaupromo_size) && $wfmbandeaupromo_size != ''}font-size: {$wfmbandeaupromo_size}!important;{/if}
		{if isset($wfmbandeaupromo_color) && $wfmbandeaupromo_color != ''}color: {$wfmbandeaupromo_color}!important;{/if}
		{if isset($wfmbandeaupromo_background) && $wfmbandeaupromo_background != ''}background: {$wfmbandeaupromo_background}!important;{/if}
	}
	#top-fluid p{
		vertical-align:middle;
		display:inline-block;
		line-height:1.3;
		margin: 0;
		{if isset($wfmbandeaupromo_size) && $wfmbandeaupromo_size != ''}font-size: {$wfmbandeaupromo_size}!important;{/if}
		{if isset($wfmbandeaupromo_color) && $wfmbandeaupromo_color != ''}color: {$wfmbandeaupromo_color}!important;{/if}
	}
	#top-fluid a{
		text-decoration: none;
		font-weight:bold;
		{if isset($wfmbandeaupromo_color) && $wfmbandeaupromo_color != ''}color: {$wfmbandeaupromo_color}!important;{/if}
	}
	#top-fluid strong, #top-fluid strong a{
		{if isset($wfmbandeaupromo_color_strong) && $wfmbandeaupromo_color_strong != ''}color: {$wfmbandeaupromo_color_strong}!important;{/if}
	}
	/*@media only screen and (max-width: 1024px) {
		#bandeau-promo{
			font-size: 1em;
		}
	}
	@media only screen and (max-width: 768px) {
		#bandeau-promo{
			font-size: 0.8em;
		}
	}*/
	@media only screen and (max-width: 767px) {
		#top-fluid{
			{if isset($wfmbandeaupromo_size_mobile) && $wfmbandeaupromo_size_mobile != ''}font-size: {$wfmbandeaupromo_size_mobile}!important;{/if}
		}
	}
</style>
{/if}
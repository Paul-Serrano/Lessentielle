{if $wfmbandeaupromo_show}
	<div id="top-fluid" class="fluid-bg">
        <div class="container">  
            <div id="top" class="column full">
				<p>
					{if isset($wfmbandeaupromo_link) && $wfmbandeaupromo_link != ''}
						<a href="{$wfmbandeaupromo_link}"{if $wfmbandeaupromo_link == '#popupli'} id="trigger"{/if}>
					{/if}
						{$wfmbandeaupromo_text nofilter}
					{if isset($wfmbandeaupromo_link) && $wfmbandeaupromo_link != ''}
						</a>
					{/if}
				</p>
			</div>
		</div>
	</div>
{/if}

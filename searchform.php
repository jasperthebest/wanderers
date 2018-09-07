<div class="searchbar">
	<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
		<input type="text" name="s" id="s" placeholder="Looking for..." name="" value="<?php echo the_search_query(); ?>">
		<button id="searchsubmit" type="submit"><i class="material-icons">search</i></button>
	</form>
</div>
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<label class="visuallyhidden" for="s">Search for:</label>
	<input type="search" value="" name="s" id="s" placeholder="Search <?php bloginfo('name'); ?>">
	<input type="submit" id="searchsubmit" value="Search" class="adelante-button">
</form>

<script>
    jQuery(function(){
        jQuery('#s').css('width', (jQuery('#s').parent().parent().width() - 120) + 'px');
    });
</script>
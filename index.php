<?php get_header(); ?>

<?php adelante_get_teaser(); ?>
                       
<div id="content" class="<?php echo adelante_container_class; ?>">
	
    <div id="main" class="<?php echo get_option('adelante_main_class'); ?>" role="main">
		<div class="container">
			<table>
				<tr>
					<td><?php adsensem_ad('ad-6'); ?></td>
					<td><?php adsensem_ad('ad-7'); ?></td>
					<td><?php adsensem_ad('ad-8'); ?></td>
				</tr>
			</table>
			<?php get_template_part('loop', 'index'); ?>
		</div>
	</div><!-- /#main -->
	
    <aside id="sidebar" class="<?php echo get_option('adelante_sidebar_class'); ?>" role="complementary">
		<div class="container">
			<?php get_sidebar(); ?>
		</div>
	</aside><!-- /#sidebar -->

</div><!-- /#content -->		

<?php get_footer(); ?>

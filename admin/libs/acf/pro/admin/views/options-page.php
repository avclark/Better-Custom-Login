<?php 

// extract
extract($args);
		
?>

<div id="bcl-header">
  <div id="bcl-logo"><img src="<?php echo plugins_url( 'better-custom-login/admin/images/bcl-logo.png' ); ?>" alt="<?php _e( 'Better Custom Login', 'better-custom-login'); ?>"></div>
</div>

<div class="wrap">
  <div class="heading-wrap">
    <h1 class="wp-heading-inline">Better Custom Login is an <a href="http://avclark.com">avclark</a> plugin.</h1>
  </div>
</div>

<hr class="wp-header-end">

<div class="wrap acf-settings-wrap">
	
	<!-- <h1><?php echo $page['page_title']; ?> Hello</h1> -->
	
	<form id="post" method="post" name="post">
		
		<?php 
		
		// render post data
		acf_form_data(array( 
			'post_id'	=> $page['post_id'], 
			'nonce'		=> 'options',
		));
		
		wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false );
		wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false );
		
		?>
		
		<div id="poststuff">
			
			<div id="post-body" class="metabox-holder columns-<?php echo 1 == get_current_screen()->get_columns() ? '1' : '2'; ?>">
				
				<div id="postbox-container-1" class="postbox-container">
					
					<?php do_meta_boxes('acf_options_page', 'side', null); ?>
						
				</div>
				
				<div id="postbox-container-2" class="postbox-container">
					
					<?php do_meta_boxes('acf_options_page', 'normal', null); ?>
					
				</div>
			
			</div>
			
			<br class="clear">
		
		</div>
		
	</form>
	
</div>
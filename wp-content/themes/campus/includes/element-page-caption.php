<!-- 960 Container -->	
	<div id="page-header">
		<?php if(get_custom_field('page_caption')) : ?>
		<h1 class="page-caption"><?php echo get_custom_field('page_caption'); // PAGE CAPTION // ?></h1>
		<?php if (get_custom_field('action_button_row')) :	// ACTION BUTTON ROW //
			echo '<div class="action_button_wrapper">';
			  $buttons = get_custom_field( 'action_button_row' );
			  foreach( $buttons as $button ) {
			  	
			  	$buttonlink = '<span><a title="Click Me!" target="_'.$button['target'].'" href="'.$button['button_row_link'].'"  style="color: '.$button['button_text_color'].'; 
  	background: '.$button['button_bg_color'].';	" >'; 
				$buttonendlink = '</a></span>';								
				
			    echo ' 
					<div class="action_button">
					'.$buttonlink.' '.$button['button_row_text'].' '.$buttonendlink.'
					</div>
			    ';	
			    		
			  }
			echo '</div> ';
		endif; ?>	
		<?php else : ?>
		<p>&nbsp;</p>
		<?php endif; ?>
	</div>
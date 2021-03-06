<?php

	function jackbox_enqueue() {

		global $jackbox_options;
		
		wp_enqueue_style("jackbox_global", plugins_url("wp-jackbox/jackbox/css/jackbox-global.css"));
		wp_enqueue_style("jackbox_ie8", plugins_url("wp-jackbox/jackbox/css/jackbox-ie8.css"));
		wp_enqueue_style("jackbox_ie9", plugins_url("wp-jackbox/jackbox/css/jackbox-ie9.css"));
		
		wp_enqueue_script("jquery");
		wp_enqueue_script("jackbox_scripts", plugins_url("wp-jackbox/jackbox/js/jackbox-scripts.js"));
		wp_localize_script("jackbox_scripts", "jackboxOptions", $jackbox_options);

	}
	
	function jackbox_ie($style, $type) {
	
		if($type === "jackbox_ie8") {
			
			$style = "<!--[if lt IE 9]>" . PHP_EOL . $style . "<![endif]-->" . PHP_EOL;
			
		}
		else if($type === "jackbox_ie9") {
			
			$style = "<!--[if gt IE 8]>" . PHP_EOL . $style . "<![endif]-->" . PHP_EOL;
			
		}
		
		return $style;
		
	}
	
	add_action("wp_enqueue_scripts", "jackbox_enqueue");
	add_filter("style_loader_tag", "jackbox_ie", 10, 2);
	
	if($jackbox_options["remove-canonical"] === "yes") remove_action("wp_head", "rel_canonical");


?>
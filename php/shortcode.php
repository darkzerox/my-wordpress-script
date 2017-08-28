<?php
/**
 * [add_shortcode promotion shortcode]
 * [promotion pro="eclip"] insert to product short description
 * @var [type]
 */


add_shortcode('promotion','promotion');
function promotion( $atts ){
	$data = "" ;
	$args = shortcode_atts( array(
			 'pro' => 'pro',
       'name' => 'name',
	), $atts );
	//promotion conditional
	if ($args['pro'] == "eclip") {
		$data = 'abc';
	}
	if ($args['pro'] == 'maspo') {
		$data = 'cde';
	}
	 return $data;
}


?>

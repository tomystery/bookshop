<?php
function generate_string( $length = 16 ) {
	$chars = '0123456789';
	$str = 'DD';
	for ( $i = 0; $i < $length; $i++ )
	{
		$str .= $chars[ mt_rand(0, strlen($chars) - 1) ];
	}
	return $str;
}

?>
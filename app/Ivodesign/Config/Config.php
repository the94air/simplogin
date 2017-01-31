<?php

namespace Ivodesign\Config;

Class Config
{

	public static function get( $arr, $key, $default=null )
	{	
		@list( $index, $key ) = explode( '.', $key, 2 );
		
		if ( !isset( $arr[$index] ) ) return $default;
		if ( strlen( $key ) > 0 ) return static::get( $arr[$index], $key, $default );
		return isset( $arr[$index] ) ? $arr[$index] : $default;
	}
	
}
<?php
/**
 * Created by Paul du Long
 * ScriptMotion - http://www.scriptmotion.nl - pauldulong@gmail.com
 */

class Format extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	function sec_2_time( $input = false )
	{
		//Hours
		$hours = floor($input / 3600);
		$input = $input - ($hours*3600);

		if( strlen($hours) != 2 )
			$hours = '0' . $hours;

		//Minutes
		$min 	= floor($input / 60);
		$input 	= $input - ($min*60);

		if( strlen($min) != 2 )
			$min = '0' . $min;

		if( strlen($input) != 2 )
			$input = '0' . $input;

		//Seconds
		return array(
			'hours'	=> $hours,
			'min'	=> $min,
			'sec'	=> $input
		);

	}

	function pretty_date( $input = false )
	{
		if( $input < 0 )
		{
			$input 	= $input * -1;
			$dead	= 1;
		}

		$days 	= floor( $input / 86400 );
		$weeks	= floor( $days / 7 );
		$remaining_days = $days - ($weeks*7);

		if( ($weeks == 0) && ($remaining_days == 0) )
		{
			return array(
				'input'				=> $input,
				'days'				=> 0,
				'weeks'				=> 0,
				'remaining_days'	=> 0,
				'text'				=> 'Vandaag',
				'color'				=> 'red',
				'dead'				=> 0,
			);
		}

		$text	= '';

		if( $weeks )
		{
			$text .= $weeks . ' ' . (($weeks==1)?'week':'weken') . ($remaining_days?' en ':'');
		}

		if( $remaining_days )
			$text .= $remaining_days . ' ' . (($remaining_days==1)?'dag':'dagen');

		$color = 'green';

		if( $days < 3 )
			$color	= 'red';

		if( $days > 4 && $days <= 7 )
			$color	= 'blue';

		return array(
			'input'				=> $input,
			'days'				=> $days,
			'weeks'				=> $weeks,
			'remaining_days'	=> $remaining_days,
			'text'				=> $text,
			'color'				=> $color,
			'dead'				=> (isset($dead)?1:0)
		);

	}
	
	function cents_to_amount( $input = false, $valuta = 'euro' )
	{
	    if( !$input ) return false;
	    
	    $amount = $input / 100;
	    
	    $amount = number_format($amount, 2);
	    
	    switch ($valuta)
	    {
		case 'euro':
		    $amount = '&euro;' . $amount;
		    break;
		
	    }
	    
	    return $amount;
	}

}
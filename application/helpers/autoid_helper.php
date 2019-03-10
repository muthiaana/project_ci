<?php
 if (!function_exists('get_id')) {
 	function get_id($fields="", $table="", $inisial="")
 	{
 		#code
 		$CI = &get_instance();
 		$query = $CI->db->query("SELECT MAX($fields) AS max FROM ".$table);
 		$result = current($query->result());
 		$number = 0;
 		$imax = 9;
 		$tmp = "";
 		if ( $result->max !='')
 		{
 			$number = substr($result->max, strlen($inisial));
 			$number++;
 			$number = strval($number);
 			for ($i=0; $i <= ($imax-strlen($inisial)-strlen($number)) ; $i++){

 			}
 		}
 		return $inisial.$tmp.$number;
 	}
 }
?>
<?php
$arr[0]['id']   = '1';
$arr[0]['name'] = 'A';
$arr[1]['id']   = '2';
$arr[1]['name'] = 'B';
$arr[2]['id']   = '3';
$arr[2]['name'] = 'C';

$arr = array_sort_by_value($arr,'name');
echo '<pre>';
print_r($arr);
echo '</pre>';
function array_sort_by_value($arr,$orderby,$order='DESC'){
	if(isset($arr)){
		foreach($arr as $person){ 
			foreach($person as $key=>$value){ 
				if(!isset($sortArray[$key])){ 
					$sortArray[$key] = array(); 
				} 
				$sortArray[$key][] = $value; 
			} 
		} 
		$sort_price = ($order == 'ASC')?'SORT_ASC':'SORT_DESC';
		array_multisort($sortArray[$orderby],($order == 'ASC')?SORT_ASC:SORT_DESC,$arr); 
		return $arr;
	}
	return false;
}
?>

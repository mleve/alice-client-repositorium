<?php

function create_checkbox($fieldName,$input, $keyName, $valueName){
	
	foreach ($input as $row){
		$aux = get_object_vars($row);
		echo '<input type="checkbox" name="'.$fieldName.'" value="'.$row->$keyName.'">'.$row->$valueName.'  ';

	}
}	
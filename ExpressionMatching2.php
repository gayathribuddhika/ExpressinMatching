<?php

function has_space($string){
	if(preg_match("/ /",$string)){
		return true;
	}else{
		return false;
	}
}

$string = "Thisdoesnothaveanyspaces.";

if(preg_match("/ /",$string)){
	echo "Has spaces";
	
}else{
	echo "Has no spaces";
}

?>
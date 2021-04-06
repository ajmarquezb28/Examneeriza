<?php 
		$formato="C001-1233333X";

		if($formato[0]=="C" && $formato[4]=="-" && ctype_digit(substr($formato, -8)))
			return "Formato valido";
		else 
			return"formato in válido"

?>
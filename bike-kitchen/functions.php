<?php

	function pageBuilder($key){
		foreach($key as $value) {
			if ( is_array($value) ){
				foreach($value as $list) {
					if ( is_array($list) ){
						foreach($list as $li){
							echo $li;
						}
					} else {
						echo $list;
					}
				}
			} else {
				echo $value;
			}
		}
	}

?>
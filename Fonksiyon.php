<?php

function sqlInjectionSecurity(){
		$inj = array ('select', 'insert', 'update', 'drop table', 'union', 'null', 'SELECT', 'INSERT', 'DELETE', 'UPDATE', 'DROP TABLE', 'UNION', 'NULL','order by','order  by');
		for ($i = 0; $i < sizeof ($_GET); ++$i){
			for ($j = 0; $j < sizeof ($inj); ++$j){
				foreach($_GET as $gets){
					$gets = strtolower($gets);
					if(preg_match ('/' . $inj[$j] . '/', $gets)){
						$gets = strtolower($gets);
						$temp = key ($_GET);
						$_GET[$temp] = '';
						exit('<iframe title="YouTube video player" width="800" height="600" src="http://www.youtube.com/embed/bzen6iORGIk" frameborder="0" allowfullscreen></iframe>');
						continue;
					}
				}
			}
		}
	}
  
  ?>

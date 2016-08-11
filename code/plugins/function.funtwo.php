<?php
	function smarty_function_funtwo($args, $smarty) {
		return '<font color="'.$args['color'].'" size="'.$args['size'].'">'.$args['content'].'</font>';
	}

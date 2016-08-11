<?php
	function smarty_block_funthree($args, $content, $smarty, &$repeat) {
		if(!$repeat) {
		
			return '<font color="'.$args['color'].'" size="'.$args['size'].'">'.$content.'</font>';
		}
	}

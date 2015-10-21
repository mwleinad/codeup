<?php

	function flash($title = null, $message = null)
	{
		$flash = app('App\Http\Flash');

		if(func_num_args() == 0)
		{
			return $flash;
		}



		return $flash->Message($title, $message);
	}

	function link_path(App\Link $link)
	{
		//var_dump($link);
		//exit;
		return $link->linkName;
	}
?>
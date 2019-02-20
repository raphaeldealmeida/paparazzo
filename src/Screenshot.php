<?php
namespace Pds\Skeleton;

class Screenshot
{
	public function execute($root = null)
	{
		$url = $root ?: 'http://google.com.br';

		if (!filter_var($url, FILTER_VALIDATE_URL)) return false; 
  	$result = exec("google-chrome --headless --screenshot {$url}", $output, $finally);
		return true;
	}
}

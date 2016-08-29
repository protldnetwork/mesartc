<?php
/*
     @author: protldnetwork
     @license: open-source
     @name: mesartc
     @version: v1.0.0-beta
*/
namespace mesartc;
class mesartc {
	// $config->$this['repo'];
	$repo['version'] = 'v1.0.0-beta';
	$repo['name'] = 'mesartc';
	$repo['author'] = 'protldnetwork';
	
	public function info() {
		echo "{version:$repo['version']}{author:$repo['author']}";
	}
}
?>
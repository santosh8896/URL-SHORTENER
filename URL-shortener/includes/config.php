<?php
error_reporting(0);
#error_reporting(E_ALL ^ E_NOTICE);

$conf = $TMPL = array();
$conf['host'] = 'localhost';
$conf['user'] = 'root';
$conf['pass'] = '';
$conf['name'] = 'URLSHORT';
$conf['url'] = 'http://localhost/URL-shortener/'; #<-- Enter the Installation URL (e.g: http://pricop.info/newfolder);

$action = array('admin'			=> 'admin',
				'redirect'		=> 'redirect',
				'latest'		=> 'latest',
				'stats'			=> 'stats',
				'page'			=> 'page',
				);
?>
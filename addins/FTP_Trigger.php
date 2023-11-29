
<?php
 set_time_limit(0);
include 'FTPCrawl/ftp-crawler.class.php';

$crawler = new FTPCrawler('us-ops-sp.inside.ups.com', 'anonymous', '');

$settings = array(
	'passive'=>true,
	'ignore_types'=>array(
		'js',
		'css',
		'png'
	),
	'ignore_dirs'=>array(
		'cgi-bin',
		'_uploads'
	)
);
$results = $crawler->settings($settings);

$output = $crawler->output('xml');
echo "<pre>" . print_r($output, true) . "</pre>";

header("Location: http://uwkp0008fa2e:8080/addins/fire.php");
die();
?>
<?php
if ($_SERVER['HTTP_HOST']=='3d.atom.do') {
	$dbname = '3d';
	$host = '192.168.1.6';
	$user = 'sandy';
	$password = 'sandy123';
} else {
	$dbname = 'tiltViewer';
	$host = 'localhost';
	$user = 'root';
	$password = '177628';
}
return array(
    'database' => array(
        'connection' => array('pdo', 'mysql:dbname='.$dbname.';host='.$host, $user, $password ),
        'initialization' => array(
            'SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary',
            'SET sql_mode=``'
        ),
        'tablePreFix' => 'tilt_'
    )
);
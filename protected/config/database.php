<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=yii-console',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'guru220914',
	'charset' => 'utf8',

);
<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
// Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'KANTOR DESA BOJONGKUNCI',
	'theme' => 'zdashboard',
	'language'=>'id',
	'timeZone'=>'Asia/Jakarta',	

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.EExcelWriter.*', 
		),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>false,
		// 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths' => array('bootstrap.gii'),
			),
		
		),

	// application components
	'components'=>array(
		'user'=>array(
			//'class'=> 'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class'=>'WebUser',
			),
		
		// 'bootstrap'=>array(
		// 	'class'=>'bootstrap.components.Bootstrap',
		// ),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

		// uncomment the following to use a MySQL database
		// uncomment the following to use a MySQL database
		// 'db'=>array(
		// 	'connectionString' => 'mysql:host=localhost;dbname=u0282705_sisnaker',
		// 	'emulatePrepare' => true,
		// 	'username' => 'u0282705_sisnake',
		// 	'password' => '.mwcg1pp!{%R',
		// 	'charset' => 'utf8',
		// ),

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=i_desa',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			),		
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
			),
		
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
					),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
				),
			),
		),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		),
	);
<?php

 /*
 ** This file will register the spl autoloader functions.
 ** This file should only be called once from index.php.
 **
 ** @author Dakotak <dakotak@outlook.com>
 ** @package PHPBaseFrame
 **
 **
 */

// Nullify any existing autoload functions
spl_autoload_register();

// Specify extentions that may be loaded
spl_autoload_extentions('.php, .class.php');

// Register autoloader functions
spl_autoload_register('classLoader');


/***** Autoloader Functions *****/

// Class Loaded Function
function classLoader($className) {
	$fileName = strtolower($className) . '.class.php';
	$file = ROOT . "application/classes/$fileName";
	if (!file_exists($file)){
		throw new Exception("Unable to find class: $file");
	}
	require $file;
}

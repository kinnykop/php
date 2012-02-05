<?php
		class ErrorFromPHPException extends Exception {}
			function PHPErrorHandler($errno, $errstr, $errfile, $errline) {
			    throw new ErrorFromPHPException($errstr,$errno);
		}
			
		$oldHandler = set_error_handler('PHPErrorHandler');
		fopen('/tmp/non-existent','r');
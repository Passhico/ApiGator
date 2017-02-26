<?php

use Monolog;

/*
 * Implementacion de tool basada en https://getcomposer.org/doc/01-basic-usage.md
 */

require __DIR__ . '/vendor/autoload.php';

class SimpleMonoLogger extends Monolog\Logger {
	/* @var $LogFilename string */

	private static $LogFileName;

	/* @var $logger Monolog\ */
	private static $Logger;

	public function __construct(string $LogFileName) {

		$log = new Monolog\Logger($LogFileName);
		$log->pushHandler(new Monolog\Handler\StreamHandler($LogFileName, Monolog\Logger::INFO));
			$log->addInfo("SimpleMonologLogger", ["Filename:" => __DIR__ . '/' . $LogFileName]);

		$log->addError("y esto no sale o que ", ["algo" => "algo"]);
		$this->LogFileName = $LogFileName;
	}

}

$log = new SimpleMonoLogger("Apigator.log");

<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'On');

chdir(__DIR__);

$loader = require '../vendor/autoload.php';



//@todo: remove this, it's only temporary, common should be loaded via composer
$loader->add('DrestCommon', __DIR__ . '/../drest-common/src');



$cli = new \Symfony\Component\Console\Application('Drest Client Command Line Interface Tool', DrestClient\Version::VERSION);
$cli->setCatchExceptions(true);
$cli->addCommands(array(
	// Drest Commands
    new DrestClient\Tools\Console\Command\GenerateClasses(),
));
$cli->run();
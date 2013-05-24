<?php
/**
 * version 0.0.1a
 */

require_once( '../src/importer.php' );
require_once( '../src/config.php' );

$configfile = dirname(__FILE__) . '\test.xml';

$config = new CsvImporter_Config ($configfile);
// $config-> setDatabaseConnection ($server, $username, $password);
$importer = new CsvImporter(dirname(__FILE__), 'test.csv',  $config);

if ($importer->import()) {
    echo 'imported';
} else {
    echo 'notimported';
}

<?php  // Moodle configuration file to add in Docker Agent Instance
unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->dbtype    = 'auroramysql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '';
$CFG->dbname    = 'moodleprod2';
$CFG->dbuser    = 'klgroup4';
$CFG->dbpass    = 'KLgroup4*';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);
$CFG->wwwroot   = 'http://'.$_SERVER['HTTP_HOST'].'/moodle';
$CFG->dataroot  = '/var/moodledata';
$CFG->admin     = 'admin';
$CFG->directorypermissions = 0777;
require_once(__DIR__ . '/lib/setup.php');
?>

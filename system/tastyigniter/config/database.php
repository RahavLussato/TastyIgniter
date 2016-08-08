<?php  if ( ! defined('BASEPATH')) exit('No direct access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default']['dsn'] = '';
$db['default']['hostname'] = 'eu-cdbr-west-01.cleardb.com';
$db['default']['username'] = 'b78ea69e48464d';
$db['default']['password'] = '682bba09';
$db['default']['database'] = 'heroku_ef18fa3e596706c';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = 'ti_';
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = (ENVIRONMENT !== 'production');
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['encrypt']  = FALSE;
$db['default']['compress'] = FALSE;
$db['default']['stricton'] = FALSE;
$db['default']['failover'] = array();
$db['default']['save_queries'] = (ENVIRONMENT !== 'production');

/* End of file database.php */
/* Location: ./system/tastyigniter/config/database.php */

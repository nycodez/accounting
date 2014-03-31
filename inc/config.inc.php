<?php
date_default_timezone_set('America/New_York');
$defaultController = 'splash';
$base = dirname(dirname(__FILE__)).'/mvc';
$modelMapping = Array
(
 'default' => 'default',
 'splash' => 'splash',

 'clients' => 'entity',
 'vendosr' => 'entity',
 'users' => 'entity',
 'contacts' => 'entity',

 'record' => 'record',

 'management' => 'management',

 'invoices' => 'record',
 'invoicePayment' => 'record',
 'bills' => 'record',
 'billPayment' => 'record',
 'events' => 'record',
 'calls' => 'record',
 'documents' => 'record',

 'products' => 'record',
 'reports' => 'record',
 'help' => 'record',
 'timeclock' => 'record',

 'settings' => 'settings',
 );
function pr($arr)
{
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

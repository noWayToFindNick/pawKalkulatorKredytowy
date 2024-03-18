<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$amount,&$years,&$interestRate)
{
	$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$interestRate = isset($_REQUEST['interestRate']) ? $_REQUEST['interestRate'] : null;	
}

function validate(&$amount,&$years,&$interestRate,&$messages)
{
	if ( ! (isset($amount) && isset($years) && isset($interestRate)))
	{
		return false;
	}
	
	if ($amount == "")
	{
		$messages [] = 'Nie podano kwoty';
	}
	if ($years == "") 
	{
		$messages [] = 'Nie podano na ile lat';
	}
	if ($interestRate == "")
	{
		$messages [] = 'Nie podano opodatkowania';
	}
	
	if (count($messages) != 0) return false;
	
	if (! is_numeric($amount))
	{
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	if (! is_numeric($years))
	{
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	if (! is_numeric($interestRate))
	{
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}	
	
	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$amount,&$years,&$interestRate,&$messages,&$result)
{
	global $role;
	
	$amount = intval($amount);
	$years = intval($years);
	$interestRate = intval($interestRate);
	
	$interest = $amount * $years * $interestRate * 0.01;
	$semiResult = $amount + $interest;
	$months = $years * 12;
	
	if($amount > 100000 || $years > 25)
	{
		if($role == 'admin')
		{
			$result = number_format(($semiResult/$months),2, ',', '');
		}
		else
		{
			$messages [] = 'Tylko administrator może brać kredyt na wiecej niż 100000 LUB na wiecej niż 25 lat';
		}
	}
	else
	{
		$result = number_format(($semiResult/$months),2, ',', '');
	}
}

$amount = null;
$years = null;
$interestRate = null;
$result = null;
$messages = array();

getParams($amount,$years,$interestRate);

if (validate($amount,$years,$interestRate,$messages))
{ 
	process($amount,$years,$interestRate,$messages,$result);
}

include 'calc_view.php';
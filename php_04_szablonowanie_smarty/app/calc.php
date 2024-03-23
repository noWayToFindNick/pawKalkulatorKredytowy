<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form)
{
	$form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$form['interestRate'] = isset($_REQUEST['interestRate']) ? $_REQUEST['interestRate'] : null;	
}
function validate(&$form,&$infos,&$msgs)
{

	if ( ! (isset($form['amount']) && isset($form['years']) && isset($form['interestRate']) ))	return false;	

	$infos [] = 'Przekazano parametry';

	if ( $form['amount'] == "") $msgs [] = 'Nie podano kwoty';
	if ( $form['years'] == "") $msgs [] = 'Nie podano na ile lat';
	if ( $form['interestRate'] == "") $msgs [] = 'Nie podano oprocentowania';
	
	if ( count($msgs)==0 )
    {
		if (! is_numeric( $form['amount'] )) $msgs [] = 'Wartość kwoty nie jest liczbą';
		if (! is_numeric( $form['years'] )) $msgs [] = 'Wartość lat nie jest liczbą';
		if (! is_numeric( $form['interestRate'] )) $msgs [] = 'Wartość oprocentowania nie jest liczbą';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
function process(&$form,&$infos,&$msgs,&$result)
{
	$infos [] = 'Parametry poprawne';
	
	$form['amount'] = floatval($form['amount']);
	$form['years'] = floatval($form['years']);
	$form['interestRate'] = floatval($form['interestRate']);

	$interest = $form['amount'] * $form['years'] * $form['interestRate'] * 0.01;
	$semiResult = $form['amount'] + $interest;
	$months = $form['years'] * 12;
	$result = number_format(($semiResult/$months),2, ',', ''); // 1 - wartosc, 2 - po przecinku, 3 - separator dziesiatek 4 - sep. tysiecy
}

$form = null;
$infos = array();
$messages = array();
$result = null;

getParams($form);

if (validate($form,$infos,$messages))
{
	process($form,$infos,$messages,$result);
}

//-----SMARTY-----

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kacper Mularczyk zad 4');
$smarty->assign('page_description','kalkulator kredytowy');
$smarty->assign('page_description','kalkulator kredytowy');
$smarty->assign('first_part_of_title','kalkulator');
$smarty->assign('second_part_of_title','kredytowy');

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc.html');
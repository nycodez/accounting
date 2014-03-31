<?php
class Billing extends Controller
{
	public function Billing_Default()
	{
		$view = new View('billing', 'default', $arr);
		echo $view->Render();
	}
	public function Billing_Balances()
	{
		$view = new View('balances', 'invoices', $arr);
		echo $view->Render();
	}
	public function Billing_Invoices()
	{
		$view = new View('billing', 'invoices', $arr);
		echo $view->Render();
	}
	public function Billing_Expenses()
	{
		$view = new View('billing', 'expenses', $arr);
		echo $view->Render();
	}
}

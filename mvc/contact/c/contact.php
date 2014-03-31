<?php
class Contact extends Controller
{
	public function Contact_Default()
	{
		$user = $_SESSION['uid'];
		$arr['contacts'] = ModelLoad::Load('contact', 'contactsForUser', $user);
		$view = new View('contact', 'default', $arr);
		echo $view->Render();
	}
	public function Contact_Added()
	{
		$arr['contacts'] = ModelLoad::Load('contact', 'search', array('type'=>'contact'));
		$view = new View('contact', 'default', $arr);
		echo $view->Render();
	}
	public function Contact_Viewed()
	{
		$arr['contacts'] = ModelLoad::Load('contact', 'search', array('type'=>'contact'));
		$view = new View('contact', 'default', $arr);
		echo $view->Render();
	}
	public function Contact_Active()
	{
		$arr['contacts'] = ModelLoad::Load('contact', 'search', array('type'=>'contact'));
		$view = new View('contact', 'default', $arr);
		echo $view->Render();
	}
	public function Contact_Inactive()
	{
		$arr['contacts'] = ModelLoad::Load('contact', 'search', array('type'=>'contact','ifActive'=>false));
		$view = new View('contact', 'default', $arr);
		echo $view->Render();
	}

	public function Contact_New()
	{
		$view = new View('contact', 'new', $arr);
		echo $view->Render();
	}
	public function Contact_Add()
	{
		//		$new = FormScrub::Sanitize($_POST[$_POST['formName']]);
		$info= $_POST[$_POST['formName']];
		$info['clientName'] = ModelLoad::Load('client', 'getName', $info['client']);
		$info['ifActive'] = true;
		$info['type'] = 'contact';
		$result = ModelLoad::Load('contact', 'add', $info);
		//		Logger::Write('add', 'contact', $r['_id']);
		$view = new View('contact');
		$view->Redirect();
	}
	public function Contact_View($id)
	{
		$arr['contact'] = ModelLoad::Load('contact', 'get', $id);
		$view = new View('contact', 'view', $arr);
		echo $view->Render();
	}
	public function Contact_Update()
	{
		//		$info = FormScrub::Sanitize($_POST[$_POST['formName']]);
		$info = $_POST[$_POST['formName']];
		$info['clientName'] = ModelLoad::Load('client', 'getName', $info['client']);
		$result = ModelLoad::Load('contact', 'save', $info);
		//		Logger::Write('update', 'contact', $info['_id']);
		$view = new View('contact');
		$view->Redirect();
	}
}

<?php

class Book extends \MVC\Controller {
	
	protected $model = [
		1 => [
			'author'  => 'Stanis³aw Lem',
			'title'   => 'Niezwyciê¿ony',
		],
		2 => [
			'author'  => 'Jacek Dukaj',
			'title'   => 'Inne Pieœni',
		],
		3 => [
			'author'  => 'Jacek Dukaj',
			'title'   => 'Lód',
		],
	];
	
	function index(){
		return $this->list();
	}
	
	function list_action(){
		echo "This page lists all books.";
	}
	
	function show($id){
		if(!$this->filter_id($id)) return false;
		
		$author  = $this->model[$id]['author'];
		$title   = $this->model[$id]['title'];
		
		//$this->database->books(34);
		//$this->database->books(['limit' => 30]);
		//$this->database->books(['{author} ~ "Dukaj"']);
		
		echo
			"<table>" .
			"<tr><td>autor:</td><td>$author</td></tr>" .
			"<tr><td>tytu³:</td><td>$title</td></tr>" .
			"</table>";
	}
	
	function show_2($id){
		if(!$this->filter_id($id)) return false;
		
		return $this->model[$id];
	}
	
	function show_3($id){
		if(!$this->filter_id($id)) return false;
		
		return $this->get('view')->create('book/show', $this->model[$id]);
	}
	
	private function filter_id($id){
		if(isset($this->model[$id])){
			return true;
		} else {
			return false;
		}
	}
}
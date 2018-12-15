<?php
namespace app\admin\controller;
use think\Controller;
/**
* 
*/
class Account extends Controller
{
	
	public function login(){
		return $this->fetch();
	}

}
<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
//use Think\Model;

class UserController extends Controller {
    public function index(){
    	echo 'User index';
    }
    public function test($user, $pass) {
    	echo 'user:'.$user.'<br />pass:'.$pass;
    }
    public function model() {
    	//创建Model基类，传递User表，think_user
    	//$user = new Model('User','tp_');
    	//var_dump($user);
    	//$user = new Model('User','think_','mysql://root:123456@localhost/thinkphp');
    	//$user = new Model('User');
    	//$user = M('User');
    	//$user = new Model('User');
    	//var_dump($user->select());
    	$user = new UserModel();
    	var_dump($user->select());
    }
}
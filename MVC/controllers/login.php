<?php

class LoginController extends Controller {
    
	public function index(){
	    $data = array();
	    if(User::isAuth()){
		    redirect('tasks');
		} else {
		    Header::render();
			$data = array();
		    renderView('pages/'.CONTROLLER,$data);
		    renderView('footer');
			echo '<!--'.round(timeMeasure()-TIMESTART, 6).' sec. -->';
		}
	}
	
	public function test($email = 'aydar@creativestripe.ru'){
	    echo Mail::sendInvite($email, 'http://vk.com', '�����', '����������', 'CreativeStripe');
	}
	
}
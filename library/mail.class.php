<?php

class Mail
{
    
    public static function send($html, $email) { //тут составляются заголовки и отправляется письмо
		echo 'send';
		$result = true;
		return $result;
	}
	
	
	
    public static function sendPasswordRecovery($email, $recoveryLink, $firstName, $lastName) {  //восстановление пароля для пользователя
	    $html = 'генерация письма';
		return Mail::send($html,$email);
	}
	
	public static function sendInvite($email, $inviteLink, $firstName, $lastName, $company) {  //приглашение нового пользователя в организацию
	    $html = 'генерация письма';
		return Mail::send($html,$email);
	}
	
	public static function sendEmailValidation($email, $inviteLink, $firstName, $lastName) {  //подтверждение email
	    $html = 'генерация письма';
		return Mail::send($html,$email);
	}
	
}
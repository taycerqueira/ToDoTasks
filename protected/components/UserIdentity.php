<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_username;
	
	public function authenticate() {
		$usuario = Usuario::model()->findByAttributes(array('email'=>$this->username));

		if($usuario===null){
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		
        else if($usuario->senha!==$this->password){
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
        
		else{
			$this->_id = $usuario->id;
			$this->setState('nome', $usuario->nome);
			$this->errorCode=self::ERROR_NONE;
		}

		return $this->errorCode==self::ERROR_NONE;
	}
	
	/**
	 * Overriding CUserIdentity's getId() method
	 * @access public
	 * @return integer user id
	 */
	public function getId() {
	    return $this->_id;
	}
	
	/**
	 * Overriding CUserIdentity's getName() method
	 * @access public
	 * @return string username
	 */
	public function getName() {
	    return $this->_username;
	}
			
}
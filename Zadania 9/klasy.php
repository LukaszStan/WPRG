<?php
class User{
    protected $id;
    protected $login;
    protected $pass;
    protected $id_rola;
    protected $logged_in;
    public function guest(){
        $this->id = 1;
        $this->login = "gosc";
        $this->pass = "";
        $this->id_rola = 1;
        $this->logged_in = false;
    }
    public function getLoggedin(){
        return $this->logged_in;
    }
    public function getId(){
        return $this->id;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getIdRola(){
        return $this->id_rola;
    }
    public function getPass(){
        return $this->pass;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }
    public function setIdRola($id_rola){
        $this->id_rola = $id_rola;
    }
    public function setLogged_In($logged_in){
        $this->logged_in = $logged_in;
    }
}
?>
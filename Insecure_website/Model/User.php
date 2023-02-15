<?php

class User {
    private $mem_no;
    private $name;
    private $email;
    private $id;
    private $pwd;
    private $aboutMe;
    private $photo;
    
    public $score;
    public $rank;
    
    function _construct($mem_no, $name, $email, $id, $pwd, $aboutMe, $photo){
        $this->mem_no = $mem_no;
        $this->name = $name;
        $this->email = $email;
        $this->id = $id;
        $this->pwd = $pwd;
        $this->aboutMe = $aboutMe;
        $this->photo = $photo;
    }
    
    public function getMem_no() {
        return $this->mem_no;
    }
    
    public function setMem_no($mem_no): void{
        $this->mem_no = $mem_no;
    }
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getId() {
        return $this->id;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function getAboutMe() {
        return $this->aboutMe;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setPwd($pwd): void {
        $this->pwd = $pwd;
    }

    public function setAboutMe($aboutMe): void {
        $this->aboutMe = $aboutMe;
    }

    public function setPhoto($photo): void {
        $this->photo = $photo;
    }

}

<?php
class Dmodel
{
    protected $db = array();
    public function __construct()
    {
        $connect = 'mysql:dbname=oak; host=localhost; charset=utf8';
        $user = 'root';
        $pass = '';
        $this->db = new Database($connect, $user, $pass);
    }
}
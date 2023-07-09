<?php
    class Model {

        public $connect;
        protected $server = 'localhost';
        protected $username = 'root';
        protected $password = '';
        protected $dbname = 'qareviewerdb';

        public function __construct()
        {
            $this->connect = mysqli_connect($this->server, $this->username, $this->password);
            mysqli_select_db($this->connect, $this->dbname);
        }
    }
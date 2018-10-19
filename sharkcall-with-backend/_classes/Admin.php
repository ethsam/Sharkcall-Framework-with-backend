<?php
    class Admin
    {
        public $adresseMail;
        public $Token = NULL;
        public $Password;

        public function attributData($data) {
            $this->Token = $data;
        }

        public function getData() {
            return $this->Token;
        }
    }
?>
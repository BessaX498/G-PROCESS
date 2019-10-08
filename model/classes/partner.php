<?php

    class partner{
        public $id_user;
        public $id_partner;

        function __construct($id_user, $id_partner){
            $this->id_user = $id_user;
            $this->id_partner = $id_partner;
        }
    }

?>
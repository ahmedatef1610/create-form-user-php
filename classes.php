<?php

class User {
    public $name;
    public $age;
    private $email;

    public function __construct( $name, $age, $email ) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    function getEmail() {
        return $this->email;
    }
    function setEmail( $email ) {
        if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            $this->email = $email;
        }
        return $this;
    }
}

?>
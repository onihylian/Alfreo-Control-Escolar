<?php

include_once 'db.php';

class User extends DB{

    private $nombre;
    private $username;

    }

    public function setUser($user){
    
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>

<?php


namespace Models ;

class Postalcode extends Database
{
   
    public function newUser( $pseudo, $email, $password )
    {
        return $this->addUser( 'users', $pseudo, $email, $password );
    }
    public function getUser( $email )
    {
        return $this->findEmail( 'users', $email );
    }

    public function getUser2( $pseudo )
    {
        return $this->findPseudo( 'users', $pseudo );
    }
}
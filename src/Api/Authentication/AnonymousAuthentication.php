<?php

namespace Bluetea\Api\Authentication;

class AnonymousAuthentication implements AuthenticationInterface
{

    /**
     * @return null
     */
    public function getCredential()
    {
        return null;
    }

    /**
     * @return null
     */
    public function getUsername()
    {
        return null;
    }

    /**
     * @return null
     */
    public function getPassword()
    {
        return null;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {

    }

    /**
     * @param $password
     */
    public function setPassword($password)
    {

    }
} 

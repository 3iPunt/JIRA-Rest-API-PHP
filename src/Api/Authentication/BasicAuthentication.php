<?php

namespace Bluetea\Api\Authentication;

class BasicAuthentication implements AuthenticationInterface
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;
    

    /**
     * @return string
     */
    public function getCredential()
    {
        return base64_encode($this->username . ':' . $this->password);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
} 
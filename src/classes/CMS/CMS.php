<?php
namespace OPS\CMS;                                   // Declare namespace

class CMS
{
    protected $db        = null;                         // Stores reference to Database object
    protected $member    = null;                         // Stores reference to Member object
    protected $session   = null;                         // Stores reference to Session object
    protected $token     = null;                         // Stores reference to Token object

    // OPS
    protected $production = null;                        // Stores reference to Production
    protected $option     = null;                        // Stores reference to Option


    public function __construct($dsn, $username, $password)
    {
        $this->db = new Database($dsn, $username, $password); // Create Database object
    }

    public function getMember()
    {
        if ($this->member === null) {                    // If $member property null
            $this->member = new Member($this->db);       // Create Member object
        }
        return $this->member;                            // Return Member object
    }

    public function getSession()
    {
        if ($this->session === null) {                   // If $session property null
            $this->session = new Session();              // Create Session object
        }
        return $this->session;                           // Return Session object
    }

    public function getToken()
    {
        if ($this->token === null) {                     // If $token property null
            $this->token = new Token($this->db);         // Create Token object
        }
        return $this->token;                             // Return Token object
    }

    public function getProduction()
    {
        if ($this->production === null) {                        // If $production property null
            $this->production = new Production($this->db);       // Create Production object
        }
        return $this->production;                                // Return Production object
    }

    public function getOption(){
        if ($this->option === null) {                    // If $option property null
            $this->option = new Option($this->db);       // Create Option object
        }
        return $this->option;                            // Return Option object
    }

}
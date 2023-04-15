<?php
namespace OPS\CMS;                                   // Declare namespace

class Session
{                                                        // Define Session class
    public $id;                                          // Store member's id
    public $user_name;                                    // Store member's user name
    public $role;                                        // Store member's role

    public function __construct()
    {                                                    // Runs when object created
        session_start();                                 // Start, or restart, session
        $this->id       = $_SESSION['id'] ?? 0;          // Set id property of this object
        $this->user_name = $_SESSION['user_name'] ?? '';   // Set user name property of this object
        $this->role     = $_SESSION['role'] ?? 'public'; // Set role property of this object
    }

    // Create new session
    public function create($member)
    {
        session_regenerate_id(true);                     // Update session id
        $_SESSION['id']       = $member['id'];           // Add member id to session
        $_SESSION['user_name'] = $member['user_name'];     // Add user name to session
        $_SESSION['role']     = $member['role'];         // Add role to session
    }

    // Update existing session - alias for create()
    public function update($member)
    {
        $this->create($member);                          // Update data in session
    }

    // Delete existing session
    public function delete()
    {
        $_SESSION = [];                                  // Empty $_SESSION superglobal
        $param    = session_get_cookie_params();         // Get session cookie parameters
        setcookie(session_name(), '', time() - 2400, $param['path'], $param['domain'],
            $param['secure'], $param['httponly']);       // Clear session cookie
        session_destroy();                               // Destroy the session
    }
}
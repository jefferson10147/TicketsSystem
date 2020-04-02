<?php
    class UserSession
    {
        public function __construct()
        {
            session_start();
        }

        public function setCurrentUser($user)
        {
            $_SESSION['userName'] = $user;
        }

        public function getCurrentUser()
        {
            return $_SESSION['userName'];
        }

        public function closeSession()
        {
            session_unset();
            session_destroy();
        }
    }
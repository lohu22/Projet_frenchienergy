<?php
class AuthController {
    public function login() {
        // Affiche la page de connexion
        require_once dirname(__DIR__) . '/views/login.php';
    }

    public function register() {
        // Affiche la page d'inscription
        require_once dirname(__DIR__) . '/views/register.php';
    }
}
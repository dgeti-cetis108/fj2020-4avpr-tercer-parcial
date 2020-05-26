<?php
/**
 * Clase User para las tareas de usuarios
 * CRUD = Create Read Update Delete
 */
class User {
    public $id;
    public $name;
    public $email;
    public $password;
    public $firstname;
    public $lastname;

    public function findByName($name) {}

    public function findByEmail($email) {}
}
<?php

class UserRepository implements Persistence
{

    public $first_name;
    public $last_name;

    public function full_name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function findAll()
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=someDatabase', $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $result = $pdo->query('SELECT * FROM users');

            # Map results to object
            $result->setFetchMode(PDO::FETCH_CLASS, 'User');

            while ($user = $result->fetch()) {
                # Call our custom full_name method
                echo $user->full_name();
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
}


<?php
class register extends database
{

    public function create($name, $lastname, $phone, $email, $hasPassword)
    {
        try {
            $request = 'INSERT INTO inscription(name,lastname,phone,email,password) VALUES(:name,:lastname,:phone,:email,:password)';
            $result = $this->connexion->prepare($request);
            $result->execute([
                ':name' => $name,
                ':lastname' => $lastname,
                ':phone' => $phone,
                ':email' => $email,
                ':password' => $hasPassword,
            ]);
        } catch (PDOException $e) {
            echo ("erreur lors de la creation de l'utilisatieur" . $e->getMessage());
        }
    }
    public function verifiEmail($email)
    {
        try {
            $request = 'SELECT * FROM inscription WHERE email=:email';
            $result = $this->connexion->prepare($request);
            $result->execute([
                ':email' => $email
            ]);
            return $result;
        } catch (PDOException $th) {
            echo ("Erreur " . $th->getMessage());
        }
    }
}

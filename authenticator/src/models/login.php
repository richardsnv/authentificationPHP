<?php

class login extends database
{
/**
 * Undocumented function
 *
 * @param [type] $email
 * @return PDOStatement|sinon elle retourne false
 */
    //Recuperation de l'utilisateur par sont email
    public function getEmail($email)
    {
        try {

            $request = 'SELECT * FROM inscription WHERE email = :email';
            $result = $this->connexion->prepare($request);
            $result->execute([
                ":email" => $email
            ]);
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $event) {
            throw new Exception("Erreur lors de la recuperation de l'utilisateur " . $event->getMessage());
        }
    }
}

<?php
class register extends database
{

    /**
     * Undocumented function
     * Insertion dans la table inscription les données du formulaire
     *
     * @param [type] $name
     * @param [type] $lastname
     * @param [type] $phone
     * @param [type] $email
     * @param [type] $hasPassword
     * @return void
     */
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

    /**
     * Undocumented function
     * Verifier si un email existe dans la table inscription
     *
     * @param [type] $email
     * @return PDOStatement|fase si rien n'est trouvé
     */
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
            throw new Exception("Erreur " . $th->getMessage());
            return false;
        }
    }
}

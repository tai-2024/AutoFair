<?php

/**
 * Our model classes (UserModel in this example) extends the base class DBModel
 * so that we can factorize every common methods into the super class
 * 
 * Every other model classes (to deal with other data and tables) will follow the same principle
 * 
 * @author: w.delamare
 * @date: Dec. 2023
 */

require_once("DBModel.php");

class UserModel extends DBModel {


    /**
     * @return an associative array of all employees with first_name, last_name, id, creation_date (not formatted)
     */
    function check_login(string $login, string $password) {
        $result = [];
        if (!$this->connected) {
            // Something went wrong during the connection to the database.
            // In this example, we simply do not perform the query...
            // A real website should display a message for users to understand while they cannot log in
            return $result;
        }
        // The request uses the MD5() functions since password should not be stored
        // without any protection in the database (i.e., use MD5() to store and retrieve passwords)
        $request = "SELECT * FROM members WHERE pseudo=:pseudo AND motdepasse=:motdepasse";
        $statement = $this->db->prepare($request);
        $statement->execute([
            "pseudo" => $login,
            "motdepasse" => $password
        ]);        
        $entries = $statement->fetchAll();
        if (count($entries) == 1) {
            $result["prenom"] = $entries[0]['prenom'];
            $result["nom"] = $entries[0]['nom'];
        }
        return $result;
    }
    
    function get_role(string $login) {
        $role = null;
        if (!$this->connected) {
            return $role;
        }
        $request = "SELECT id_role FROM members WHERE pseudo=:pseudo";
        $statement = $this->db->prepare($request);
        $statement->execute(["pseudo" => $login]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $role = $result['id_role'];
        }
        return $role;
    }
    

    // other useful methods to interact with the database
    // could be to add a new user, to delete a user, to update a user, etc.
    // all these methods will be called by the controller
    // and will be used to display the correct view
    // (e.g., if the user is added, the controller will call the view to display the welcome page)
    // (e.g., if the user is not added, the controller will call the view to display the login form with an error message)
    
}


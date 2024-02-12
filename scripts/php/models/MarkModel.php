
<?php

require_once("DBModel.php");

class MarkModel extends DBModel {

    function get_all_mark() {

        $request = "SELECT * FROM Mark";
        $statement = $this->db->prepare($request);
        $result = $statement->execute();
        $entries = $statement->fetchAll();
        return $entries;
    }

    // other useful methods to interact with the database
    // could be to add a new user, to delete a user, to update a user, etc.
    // all these methods will be called by the controller
    // and will be used to display the correct view
    // (e.g., if the user is added, the controller will call the view to display the welcome page)
    // (e.g., if the user is not added, the controller will call the view to display the login form with an error message)
    
}

?>
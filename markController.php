<?php
    // Ensure the path is correct based on your project structure
    require_once(__DIR__."/scripts/php/models/MarkModel.php");
    
    $markModel = new MarkModel();
    
    // Test the Show_mark() function to retrieve marks
    $marks = $markModel->get_all_mark();
    

    require_once(__DIR__."/scripts/php/views/includes.php");

    require_once(__DIR__."/scripts/php/views/index.php");

?>
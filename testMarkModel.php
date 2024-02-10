<?php
// Ensure the path is correct based on your project structure
require_once(__DIR__."/scripts/php/models/MarkModel.php");

$markModel = new MarkModel();
print_r($markModel);
// Test the Show_mark() function to retrieve marks
//$result = $markModel->get_all_mark();

//print_r($result);

?>

<?php
include_once("includes.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/styles/admin_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php include_header(); ?>

<?php 
    // 如果出现错误
    if (isset($something_to_say)) {
        include_error_message($something_to_say);
    }
?>

    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button>Search</button>
         </div>
        <table id="adminTable">
            <thead>
                <tr>
                    <th onclick="sortTable(0)">
                        Ad Title
                        <i class="fas fa-sort"></i>
                    </th>
                    <th onclick="sortTable(1)">
                        Date
                        <i class="fas fa-sort"></i>
                    </th>
                    <th>User</th>
                    <th onclick="sortTable(3)">
                        State
                        <i class="fas fa-sort"></i>
                    </th>
                    <th>By Who</th>
                    <th>Validation</th>

                </tr>
            </thead>
            <tbody>
                <tr id="row1">
                    <td>ZOE INTENS R110 52kwh 1s main</td>
                    <td>2024-02-07</td>
                    <td>Bastien</td>
                    <td>Good</td>
                    <td>Clément</td>
                    <td><input type="checkbox" onchange="toggleRowColor(this)">
                        <span class="checkmark"></span>
                    </td>
                </tr>
                <tr id="row1">
                    <td>Audi A3 Sportback 40 TFSIe 204 S tronic 6 S Line</td>
                    <td>2024-02-15</td>
                    <td>Car Bayonne</td>
                    <td>Very good</td>
                    <td>Wail</td>
                    <td><input type="checkbox" onchange="toggleRowColor(this)">
                        <span class="checkmark"></span>
                    </td>
                </tr>
                <tr id="row1">
                    <td>Renault Clio 4 tce 90ch blue</td>
                    <td>2023-03-26</td>
                    <td>Solenn</td>
                    <td>Good</td>
                    <td>Kunmin</td>
                    <td><input type="checkbox" onchange="toggleRowColor(this)">
                        <span class="checkmark"></span>
                    </td>
                </tr>
                <tr id="row1">
                    <td>BMW x3 280ch</td>
                    <td>2021-12-08</td>
                    <td>Bernard</td>
                    <td>Bad</td>
                    <td>Matthew</td>
                    <td><input type="checkbox" onchange="toggleRowColor(this)">
                        <span class="checkmark"></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <script src="script.js"></script>

    <?php include_footer(); ?>
</body>
</html>

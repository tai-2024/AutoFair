<?php
include_once("includes.php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeBonCoin</title>
    <link rel="stylesheet" href="/styles/ad_styles.css">
</head>
<body>
<?php include_header(); ?>

<?php 
    // 如果出现错误
    if (isset($something_to_say)) {
        include_error_message($something_to_say);
    }
?>
    <form method="post" action="process_form.php">
        <fieldset class="center">
            <legend>Tell us more</legend>
            
            <label for="registration">License plate number <span class="small">(not visible on the ad)</span></label>
            <input type="text" id="registration" name="registration"><br>
            
            <div class="horizontal-align">
                <div>
                    <label for="mark">Mark</label>
                    <input type="text" id="mark" name="mark">
                </div>
                <div>
                    <label for="model">Model</label>
                    <input type="text" id="model" name="model">
                </div>
            </div>
            
            <div class="horizontal-align">
                <div>
                    <label for="year">Year</label>
                    <input type="number" id="year" name="year">
                </div>
                <div>
                    <label for="dateOfFirstRegistration">Date of first registration</label>
                    <input type="text" id="dateOfFirstRegistration" name="dateOfFirstRegistration">
                </div>
            </div>
            
            <div class="horizontal-align">
                <div>
                    <label for="finishing">Finishing</label>
                    <input type="text" id="finishing" name="finishing">
                </div>
                <div>
                    <label for="version">Version</label>
                    <input type="text" id="version" name="version">
                </div>
            </div>
            
            <div class="horizontal-align">
                <div>
                    <label for="carburant">Carburant</label>
                    <div class="checkboxes">
                        <input type="checkbox" id="diesel" name="carburant[]" value="diesel">
                        <label for="diesel">Diesel</label>
                        <input type="checkbox" id="diesel excellium" name="carburant[]" value="diesel excellium">
                        <label for="diesel excellium">Diesel Excellium</label>
                        <input type="checkbox" id="sp-95" name="carburant[]" value="sp-95">
                        <label for="sp-95">SP-95</label>
                        <input type="checkbox" id="sp-98" name="carburant[]" value="sp-98">
                        <label for="sp-98">SP-98</label>
                        <input type="checkbox" id="ethanol" name="carburant[]" value="ethanol">
                        <label for="ethanol">Ethanol</label>
                    </div>
                </div>
                <div>
                    <label for="gearbox">Gearbox</label>
                    <div class="checkboxes">
                        <input type="checkbox" id="auto" name="gearbox[]" value="auto">
                        <label for="auto">Automatic</label>
                        <input type="checkbox" id="manual" name="gearbox[]" value="manual">
                        <label for="manual">Manual</label>
                    </div>
                </div>   
            </div>
            
            <div class="horizontal-align">
                <div>
                    <label for="vehicleType">Vehicle Type</label>
                    <select id="vehicleType" name="vehicleType">
                        <option value="passenger">Passenger car</option>
                        <option value="truck">Truck</option>
                    </select>
                </div>
                <div>
                    <label for="numberOfDoors">Number of doors</label>
                    <div class="checkboxes">
                        <input type="checkbox" id="2doors" name="numberOfDoors[]" value="2">
                        <label for="2doors">2 doors</label>
                        <input type="checkbox" id="4doors" name="numberOfDoors[]" value="4">
                        <label for="4doors">4 doors</label>
                    </div>
                </div>
            </div>
            
            <div class="horizontal-align">
                <div>
                    <label for="numberOfSeats">Number of seat(s)</label>
                    <input type="number" id="numberOfSeats" name="numberOfSeats">
                </div>
                <div>
                    <label for="fiscalPower">Fiscal power</label>
                    <input type="number" id="fiscalPower" name="fiscalPower">
                </div>
            </div>
            
            <div class="horizontal-align">
                <div>
                    <label for="mileage">Mileage</label>
                    <input type="number" id="mileage" name="mileage"><br>
                </div>
                <div>            
                    <label for="color">Color</label>
                    <input type="text" id="color" name="color"><br>
                </div>
            </div>
            
            <div class="button-container">
                <input type="submit" value="ADD" class="add-ad-button">
                <input type="cancel" value="CANCEL" class="cancel-ad-button">
            </div>
        </fieldset>
    </form>
    <?php include_footer(); ?>
</body>
</html>

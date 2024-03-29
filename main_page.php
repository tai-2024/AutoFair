<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main_styles.css">
    <title>LeBonCoin</title>
</head>
<body>

    
    <header>
        <div class="header-left">
            <button class="add-ad-button">+ Add an Ad</button>
        </div>
        <div class="header-center">
            <h1>LeBonCoin</h1>
            <input type="text" placeholder="Search..." class="search-bar">
        </div>
        <div class="header-right">
            <ul>
                <li><i class="icon">&#128269;</i><span> Search</span></li>
                <li><i class="icon">&#10084;</i><span> Favorites</span></li>
                <li><i class="icon">&#128172;</i><span> Message</span></li>
                <li><i class="icon">&#128100;</i><span> Profile</span></li>
            </ul>
        </div>
    </header>

    <section class="carousel">
        <!-- Carousel content (images, description, etc.) -->
        <p>It is time for selling</p>
        <button class="add-ad-button">+ Add an Ad</button>
    </section>

    <div class="container">
        <aside class="filters">
            <!-- Filters content -->
            <div class="filter-item">
                <label for="mark">Mark:</label>
                <select id="mark" name="mark">
                    <option value="all">All</option>
                    <!-- Add more brand options here -->
                </select>
            </div>            
            <div class="filter-item">
                <label for="model">Model:</label>
                <select id="model" name="model">
                    <option value="all">All</option>
                    <!-- Add more model options here -->
                </select>
            </div>

            <div class="filter-item">
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" min="1900">
            </div>            
            <div class="filter-item">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" min="0">
            </div>            
            <div class="filter-item">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location">
            </div>
        </aside>

        <section class="listings">
            <!-- Listings with images, text, and favorite button -->
            <div class="listing-item">
                <img src="images/car1.jpg" alt="Car 1" class="listing-image">
                <div class="text-content">
                    <p>Toyota Corolla de 2000</p>
                    <button class="favorite-button">&#10084; Add to Favorites</button>
                </div>
            </div>
            <div class="listing-item">
                <img src="images/car2.jpg" alt="Car 2" class="listing-image">
                <div class="text-content">
                    <p>BMW Serie 7 de 1999</p>
                    <button class="favorite-button">&#10084; Add to Favorites</button>
                </div>
            </div>
            <div class="listing-item">
                <img src="images/car3.jpg" alt="Car 3" class="listing-image">
                <div class="text-content">
                    <p>Ford Mustang de 1969</p>
                    <button class="favorite-button">&#10084; Add to Favorites</button>
                </div>
            </div>
            <div class="listing-item">
                <img src="images/car4.jpg" alt="Car 4" class="listing-image">
                <div class="text-content">
                    <p>BMW X3 de 2017</p>
                    <button class="favorite-button">&#10084; Add to Favorites</button>
                </div>
            </div>
            <div class="listing-item">
                <img src="images/car5.jpg" alt="Car 5" class="listing-image">
                <div class="text-content">
                    <p>Audi Q7 de 2023</p>
                    <button class="favorite-button">&#10084; Add to Favorites</button>
                </div>
            </div>
            <div class="listing-item">
                <img src="images/car6.jpg" alt="Car 6" class="listing-image">
                <div class="text-content">
                    <p>Mercedes-Benz S-Class de 2008</p>
                    <button class="favorite-button">&#10084; Add to Favorites</button>
                </div>
            </div>
        </section>
    </div>

    
</body>
</html>

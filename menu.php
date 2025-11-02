<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
       /* Menu Page Styles */
.menu-hero {
    text-align: center;
    background: linear-gradient(to right, #fa923d, #e72c6b);
    color: white;
    padding: 40px 20px;
    border-radius: 8px;
}

.menu-section, .cake-section {
    padding: 50px 20px;
    text-align: center;
   
}

.menu-grid, .cake-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    justify-content: center;
    
}

.menu-item, .cake-item {
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    max-width: 300px;
    

}

.menu-item:hover, .cake-item:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}

.menu-icon {
    font-size: 40px;
    color: #db6504;
    margin-bottom: 15px;
}
.menu-section h2{
    padding: 30px;
    color: #db6504;
    font-size: 2.5rem;
}
/* Cake Section Styles */
.cake-section {
    padding: 50px 20px;
    text-align: center;
    background: #f9f9f9; /* Light background color for better contrast */
}

.cake-section h2 {
    font-size: 2.5rem;
    color: #db6504; /* Pinkish-orange color for heading */
    margin-bottom: 30px;
}

.cake-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.cake-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    background: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    max-width: 250px; /* Ensure consistent size */
    min-height: 350px; /* Maintain equal height for all items */
}

.cake-item img {
    width: 100%;
    height: 150px; /* Fixed height for images */
    object-fit: cover; /* Ensure images fit perfectly */
    border-radius: 8px;
    margin-bottom: 15px;
}

.cake-item h4 {
    font-size: 1.2rem;
    color: #db6504; /* Orange color for titles */
    margin-bottom: 10px;
}

.cake-item p {
    font-size: 1rem;
    color: #555; /* Neutral text color */
    margin: 0;
}

    </style>
</head>
<body>

                        <!-- header -->
<?php
include "includes/header.php"
?>

      <!-- Hero Section -->
    <section class="menu-hero">
        <h2>Our Delicious Menu</h2>
        <p>Explore a wide variety of food options and make your event truly special!</p>
    </section>

    <!-- Menu Section -->
    <section class="menu-section">
        <h2>Menus</h2>
        <div class="menu-grid">
            <div class="menu-item">
                <i class="fas fa-hamburger menu-icon"></i>
                <h3>Menu 1</h3>
                <p>Includes fast food items like burgers, fries, and pizzas with refreshing beverages.</p>
            </div>
            <div class="menu-item">
                <i class="fas fa-utensils menu-icon"></i>
                <h3>Menu 2</h3>
                <p>A blend of desi foods like biryani, karahi, naan, and a selection of salads.</p>
            </div>
            <div class="menu-item">
                <i class="fas fa-drumstick-bite menu-icon"></i>
                <h3>Menu 3</h3>
                <p>Premium menu including grilled items, seafood platters, and continental dishes.</p>
            </div>
        </div>
    </section>

    <!-- Cake Section -->
    <section class="cake-section">
        <h2>Cakes</h2>
        <div class="cake-grid">
            <div class="cake-item">
                <img src="images/chocolatecake.jpg" alt="Chocolate Cake">
                <h4>Chocolate Cake</h4>
                <p>Rich and creamy chocolate cake perfect for celebrations.</p>
            </div>
            <div class="cake-item">
                <img src="images/vanial cake.jpg" alt="Vanilla Cake">
                <h4>Vanilla Cake</h4>
                <p>Classic vanilla flavor with elegant frosting.</p>
            </div>
            <div class="cake-item">
                <img src="images/red cake.jpg" alt="Red Velvet Cake">
                <h4>Red Velvet Cake</h4>
                <p>Soft and moist red velvet cake with cream cheese frosting.</p>
            </div>
            <div class="cake-item">
                <img src="images/fruit cake.jpg" alt="Fruit Cake">
                <h4>Fruit Cake</h4>
                <p>Loaded with fresh fruits and a delightful cream base.</p>
            </div>
        </div>
    </section>
    <?php
include "includes/footer.php"
?>

</body>
</html>
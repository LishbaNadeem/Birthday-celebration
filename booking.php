
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <style>
    .booking-section {
    padding: 50px 20px;
    text-align: center;
    background: #f9f9f9;
    border-radius: 8px;
    margin: 40px 0;
}

.booking-section h2 {
    font-size: 2.5rem;
    color: #db6504;
    margin-bottom: 20px;
}

.booking-section p {
    color: #666;
    margin-bottom: 30px;
}

.booking-form {
    max-width: 600px;
    margin: 0 auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #333;
    font-weight: bold;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #db6504;
    outline: none;
}

.submit-button {
    background: linear-gradient(to right, #db6504, #ff6f61);
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    transition: background 0.3s;
}

.submit-button:hover {
    background: linear-gradient(to right, #ff6f61, #db6504);
}

   </style>
</head>
<body>
                          <!-- header -->
<?php
include "includes/header.php"
?>
     <section class="booking-section" id="booking">
        <h2>Book Your Event</h2>
        <p>Fill out the form below to plan your perfect celebration with us!</p>
        <form action="php/submit-booking.php" method="post" class="booking-form">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="venu">Select Your Venu:</label>
                <select id="menu" name="menu" required>
                    <option value="">Choose a Venu</option>
                    <option value="Menu 1">Taj mehal</option>
                    <option value="Menu 2">royal palm</option>
                    <option value="Menu 3">sareena</option>
                    <option value="Menu 3">kohinoor</option>
                    <option value="Menu 3">khayam</option>
                    <option value="Menu 3">paradise</option>
                </select>
            </div>
            <div class="form-group">
                <label for="event-date">Event Date:</label>
                <input type="date" id="event-date" name="event_date" required>
            </div>
            <div class="form-group">
                <label for="menu">Select Your Menu:</label>
                <select id="menu" name="menu" required>
                    <option value="">Choose a menu</option>
                    <option value="Menu 1">Menu 1</option>
                    <option value="Menu 2">Menu 2</option>
                    <option value="Menu 3">Menu 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cake">Select Your Cake:</label>
                <select id="cake" name="cake" required>
                    <option value="">Choose a cake</option>
                    <option value="Cake 1">Cake 1</option>
                    <option value="Cake 2">Cake 2</option>
                    <option value="Cake 3">Cake 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notes">Additional Notes:</label>
                <textarea id="notes" name="notes" rows="5" placeholder="Any special requests or details?"></textarea>
            </div>
            <button type="submit" class="submit-button">Submit Booking</button>
        </form>
        
    <section>
        <?php
        include "includes/footer.php"
        ?>


    </body>
    </html>
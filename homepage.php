<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - o'clocks</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Cambria', serif;
            background-color: #f4f4f4;
        }

        /* Navbar Styling */
        .navbar {
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .brand-name {
            font-size: 1.8rem;
            font-weight: bold;
            margin-left: 10px;
        }

        .navbar img {
            height: 60px;
        }

        .navbar .search-bar {
            width: 50%;
            border-radius: 25px;
            border: 1px solid #ccc;
            padding: 8px 12px;
        }

        .navbar .profile-icon {
            font-size: 1.5rem;
            color: #333;
        }

        .carousel img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .product-images-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .product-image {
            width: 300px;
            height: 300px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-image:hover {
            transform: scale(1.05);
            transition: all 0.3s ease;
        }
        
        .carousel-item video {
    width: auto; /* Automatically adjusts based on height */
    height: 700px; /* Set the height for portrait orientation */
    object-fit: cover; /* Ensures the video fills the area proportionally */
    border-radius: 12px; /* Optional: Rounds the corners */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Optional: Adds a shadow */
}
        .carousel-inner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    z-index: 0;
}

.carousel-item {
    position: relative;
    z-index: 1; /* Ensures slides stay above the overlay */
}



        
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <img src="oclocks.png" alt="Logo">
            <span class="brand-name">o'clocks</span>
        </div>
        <input class="search-bar" type="text" placeholder="Search products...">
        <a href="#" class="profile-icon">
            <i class="fas fa-user-circle"></i>
        </a>
    </nav>

    <!-- Carousel -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner" style="position: relative; background-image: url('hp2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <!-- Video Slide 1 -->
        <div class="carousel-item active">
            <video class="d-block mx-auto" autoplay loop muted>
                <source src="vid1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Santos de Cartier Medium Watch</h52
                <p>$456,774.95</p>
            </div>
        </div>
        <!-- Video Slide 2 -->
        <div class="carousel-item">
            <video class="d-block mx-auto" autoplay loop muted>
                <source src="vid2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Cartier Baignoire</h5>
                <p>$368,366</p>
            </div>
        </div>
        <!-- Video Slide 3 -->
        <div class="carousel-item">
            <video class="d-block mx-auto" autoplay loop muted>
                <source src="vid3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="carousel-caption d-none d-md-block">
                <h5>Rolex Day-Date 40</h5>
                <p>$120,280</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

    <!-- Clickable Product Images Section -->
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Explore Our Collection</h2>
        <div class="product-images-container">
            <div class="product-image" onclick="location.href='product1.php';">
                <img src="prod1.jpg" alt="Product 1">
            </div>
            <div class="product-image" onclick="location.href='product2.php';">
                <img src="prod2.jpg" alt="Product 2">
            </div>
            <div class="product-image" onclick="location.href='product3.php';">
                <img src="prod3.jpg" alt="Product 3">
            </div>
            <div class="product-image" onclick="location.href='product4.php';">
                <img src="prod4.jpg" alt="Product 4">
            </div>
            <div class="product-image" onclick="location.href='product5.php';">
                <img src="prod5.jpg" alt="Product 5">
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

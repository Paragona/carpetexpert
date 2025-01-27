<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarpetExpert.online - Your Guide to Clean Carpets</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        /* CSS styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', Arial, sans-serif;
            scroll-behavior: smooth;
            line-height: 1.6;
            color: #333;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }
        .logo span {
            color: #3498db;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
        }
        nav ul li {
            margin: 0 10px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
            padding: 5px 10px;
        }
        nav ul li a:hover {
            color: #3498db;
        }
        section {
            padding: 6rem 2rem;
        }
        #hero {
            background-image: url('https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            text-align: center;
            padding: 10rem 2rem;
            color: white;
            position: relative;
        }
        #hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        #hero * {
            position: relative;
            z-index: 1;
        }
        #recent-posts {
            background-color: #f9f9f9;
        }
        .post-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        .post-item {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        .post-item:hover {
            transform: translateY(-5px);
        }
        .post-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 1rem;
        }
        #contact {
            background-color: #ecf0f1;
        }
        form {
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: 0 auto;
        }
        input, textarea {
            margin-bottom: 1rem;
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 1rem;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2980b9;
        }
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
        }
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #3498db;
        }
        #featured-story {
            background-color: #f9f9f9;
            padding: 4rem 2rem;
            text-align: center;
        }
        .featured-story-box {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .featured-story-box h2 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 0;
        }
        #story-preview {
            background-color: #f9f9f9;
            padding: 4rem 2rem;
        }
        .story-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .story-content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 2rem;
        }
        .story-image {
            flex: 1 1 300px;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .story-text {
            flex: 1 1 300px;
        }
        .read-more {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .read-more:hover {
            background-color: #2980b9;
        }
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            nav ul li {
                margin-bottom: 0.5rem;
            }
            .featured-story-box h2 {
                font-size: 2rem;
            }
            .story-content {
                flex-direction: column;
            }
            .story-image, .story-text {
                flex-basis: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">Carpet<span>Expert</span></a>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#recent-posts">Recent Posts</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero">
        <h1>Welcome to CarpetExpert.online</h1>
        <p>Your one-stop solution for all carpet cleaning needs!</p>
        <a href="#recent-posts"><button>Explore Our Recent Posts</button></a>
    </section>

    <section id="featured-story">
        <div class="featured-story-box">
            <h2>The Devil Dog's New Challenge</h2>
            <div class="story-content">
                <div class="story-image">
                    <img src="loki.png" alt="Loki, the carpet artist" style="width: 100%; max-width: 500px; border-radius: 10px; margin-bottom: 1rem;">
                </div>
                <div class="story-text">
                <p>Think your pet’s carpet messes are bad? Meet Loki, the "Devil Horn Maestro" who turned every inch of Jenny's carpet into his personal canvas of destruction. Will Jenny ever regain control of her carpets, or is Loki's reign unstoppable?</p>
                    <p>Armed with new powerful tool, Jenny fights back. Can she win the ultimate battle against Loki's chaos?</p>
                    <a href="loki-story.php" class="read-more" style="display: inline-block; margin-top: 1rem; padding: 0.5rem 1rem; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px;">Read the Full Story</a>
                </div>
            </div>
        </div>
    </section>

    <section id="recent-posts">
        <h2>Recent Posts</h2>
        <div class="post-grid">
            <a href="cat-urine-removal.php" class="post-item">
                <img src="https://images.unsplash.com/photo-1592150621744-aca64f48394a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" alt="Cat on a clean carpet">
                <h3>Cat Urine Removal Guide</h3>
                <p>Discover effective methods to remove cat urine from carpets and eliminate odors. Our step-by-step guide will help you tackle even the toughest stains.</p>
            </a>
            <a href="dog-pee-cleaning.php" class="post-item">
                <img src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1349&q=80" alt="Dog on a clean carpet">
                <h3>Dog Pee Cleaning Tutorial</h3>
                <p>Learn how to clean dog pee from your carpet effectively. We'll show you the best techniques and products to use for a fresh, clean carpet.</p>
            </a>
            <a href="general-pet-urine-solutions.php" class="post-item">
                <img src="https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Clean carpet with vacuum cleaner">
                <h3>General Pet Urine Solutions</h3>
                <p>Get comprehensive advice on cleaning all types of pet urine from your carpets. Our guide covers everything from immediate action to long-term prevention.</p>
            </a>
        </div>
    </section>


    <section id="contact">
        <h2>Contact Us</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            // In a real-world scenario, you would send an email here
            // For this example, we'll just display a confirmation message
            echo "<p>Thank you, $name! Your message has been received. We'll get back to you soon.</p>";
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2025 CarpetExpert.online. All rights reserved.</p>
        <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="disclaimer">Disclaimer: This site may contain affiliate links. We may earn a commission if you make a purchase through these links, at no extra cost to you.</p>
    </footer>

    <script src="https://kit.fontawesome.com/3b161c540c.js" crossorigin="anonymous"></script>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>

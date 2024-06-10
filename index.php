<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic Store</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<section id="home">
    <div class="hero">
        <h1>Welcome to My Graphic Store</h1>
        <p>Hello! I'm Ahsan Shabeer, a passionate and innovative graphic designer dedicated to transforming ideas into visually compelling designs. With a keen eye for detail and a deep understanding of design principles, I specialize in creating stunning visuals that not only capture attention but also communicate effectively.</p>
    </div>
</section>

<section id="about">
    <div class="container">
        <h2>What I Do:</h2>
        <p>Brand Identity: Crafting memorable logos, cohesive brand guidelines, and impactful visual identities that resonate with target audiences.<br>
            Print Design: Designing eye-catching brochures, flyers, posters, and other marketing materials that make a lasting impression.<br>
            Digital Graphics: Creating engaging social media graphics, web banners, and digital ads that enhance online presence and drive engagement.<br>
            Illustration: Bringing concepts to life with custom illustrations that add a unique touch to projects.<br>
            UI/UX Design: Designing intuitive and aesthetically pleasing interfaces for websites and mobile applications, ensuring a seamless user experience.<br></p>
        <h2>My Design Philosophy:</h2>
        <p>I believe that great design is not just about aesthetics but also about solving problems and telling stories. My goal is to create designs that are not only beautiful but also functional and aligned with the client's vision and goals.</p>
        <h2>Why Work With Me:</h2>
        <p>Creativity & Innovation: I constantly explore new design trends and techniques to keep my work fresh and innovative.<br>
            Attention to Detail: Every element of my design is meticulously crafted to ensure the highest quality.<br>
            Collaboration: I value open communication and collaboration, working closely with clients to bring their ideas to life.<br>
            Timely Delivery: Committed to meeting deadlines without compromising on quality.<br>
            Let's collaborate to create something amazing! Feel free to reach out to discuss your next project.
        </p>

    </div>
</section>

<section id="portfolio">
    <div class="container">
        <h2>Portfolio</h2>
        <div class="gallery">
            <img src="project1.jpg" alt="Project 1">
            <img src="project2.jpg" alt="Project 2">
            <img src="project3.jpg" alt="Project 3">
            <img src="project4.jpg" alt="Project 4">
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <h2>Services</h2>
        <ul>
            <li>Logo Design</li>
            <li>Brand Identity</li>
            <li>Web Design</li>
            <li>Print Design</li>
        </ul>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Contact Me</h2>
        <form action="#">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send</button>
        </form>
    </div>
</section>

<footer>
    <p>&copy; 2024 Graphic Store. All Rights Reserved.</p>
</footer>

<script src="scripts.js"></script>
</body>
</html>

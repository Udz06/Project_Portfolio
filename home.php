<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of John Lloyd Bañares — Web Developer and Designer.">
    <title>Portfolio</title>
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #ffffff;
            color: #333333;
        }

        /* Navbar */
        header {
            background: white;
            border-bottom: 1px solid #eaeaea;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 15px;
        }
        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        nav a.active {
            color: #b74b4b;
        }

        /* Home Section */
        .home {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
            flex-wrap: wrap;
        }
        .home-content {
            max-width: 500px;
        }
        .home-content h1 {
            font-size: 2.5rem;
            color: #b74b4b;
        }
        .typing-text {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .typing-text span {
            position: relative;
        }
        .typing-text span::after {
            content: "";
            position: absolute;
            right: -8px;
            width: 2px;
            height: 100%;
            background: #b74b4b;
            animation: blink 0.6s infinite alternate;
        }
        @keyframes blink {
            to {
                opacity: 0;
            }
        }
        .home-img img {
            width: 300px;
            border-radius: 50%;
            box-shadow: 0 0 25px #b74b4b;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="?page=home" class="<?php echo (!isset($_GET['page']) || $_GET['page'] === 'home') ? 'active' : ''; ?>">Home</a>
            <a href="?page=about" class="<?php echo (isset($_GET['page']) && $_GET['page'] === 'about') ? 'active' : ''; ?>">About</a>
            <a href="?page=skills" class="<?php echo (isset($_GET['page']) && $_GET['page'] === 'skills') ? 'active' : ''; ?>">Skills</a>
        </nav>
    </header>

    <section class="home">
        <div class="home-content">
            <h1>Hello, I'm John Lloyd Bañares</h1>
            <div class="typing-text">I am a <span id="typing"></span></div>
        </div>
        <div class="home-img">
            <img src="profile.jpg" alt="Portrait of John Lloyd Bañares">
        </div>
    </section>

    <script>
        // Typing effect JS version for better browser support
        const words = ["Web Developer", "Designer", "Freelancer"];
        let i = 0;
        let j = 0;
        let currentWord = "";
        let isDeleting = false;
        const typingElement = document.getElementById("typing");

        function type() {
            currentWord = words[i];
            if (isDeleting) {
                typingElement.textContent = currentWord.substring(0, j--);
            } else {
                typingElement.textContent = currentWord.substring(0, j++);
            }

            let typingSpeed = isDeleting ? 50 : 100;

            if (!isDeleting && j === currentWord.length) {
                typingSpeed = 1500;
                isDeleting = true;
            } else if (isDeleting && j === 0) {
                isDeleting = false;
                i = (i + 1) % words.length;
                typingSpeed = 500;
            }
            setTimeout(type, typingSpeed);
        }
        type();
    </script>
</body>
</html>

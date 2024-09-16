<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            border: none;
            outline: none;
            font-family: 'Poppins', sans-serif;
        }

        html {
            font-size: 62.5%;
        }

        body {
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
            background-color: black;
            color: white;
        }

        header {
            margin-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1rem 9%;
            background-color: transparent;
            filter: drop-shadow(10px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .logo {
            font-size: 3rem;
            color: #b74b4b;
            font-weight: 800;
            cursor: pointer;
            transition: 0.5s ease;
        }

        .logo:hover {
            transform: scale(1.1);
        }

        nav a {
            font-size: 1.8rem;
            color: white;
            margin-left: 4rem;
            font-weight: 500;
            transition: 0.3s ease;
            border-bottom: 3px solid transparent;
        }

        nav a:hover,
        nav a.active {
            color: #b74b4b;
            border-bottom: 3px solid #b74b4b;
        }

        @media(max-width:995px) {
            nav {
                position: absolute;
                display: none;
                top: 0;
                right: 0;
                width: 40%;
                border-left: 3px solid #b74b4b;
                border-bottom: 3px solid #b74b4b;
                border-bottom-left-radius: 2rem;
                padding: 1rem;
                background-color: #161616;
                border-top: 0.1rem solid rgba(0,0,0,0.1);
            }

            nav.active {
                display: block;
            }

            nav a {
                display: block;
                font-size: 2rem;
                margin: 3rem 0;
            }

            nav a:hover,
            nav a.active {
                padding: 1rem;
                border-radius: 0.5rem;
                border-bottom: 0.5rem solid #b74b4b;
            }
        }

        section {
            min-height: 100vh;
            padding: 5rem 9% 5rem;
        }

        .home {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8rem;
            background-color: black;
        }

        .home .home-content h1 {
            font-size: 6rem;
            font-weight: 700;
            line-height: 1.3;
        }

        span {
            color: #b74b4b;
        }

        .home-content h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .home-content p {
            font-size: 1.6rem;
        }

        .home-img img {
            position: relative;
            width: 32vw;
            border-radius: 50%;
            box-shadow: 0 0 25px solid #b74b4b;
            cursor: pointer;
            transition: 0.2s linear;
        }

        .home-img img:hover {
            transform: scale(1.05);
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 4rem;
            height: 4rem;
            background-color: transparent;
            border: 0.2rem solid #b74b4b;
            font-size: 2rem;
            border-radius: 50%;
            margin: 3rem 1.5rem 3rem 0;
            transition: 0.3s ease;
            color: #b74b4b;
        }

        .social-icons a:hover {
            color: black;
            transform: scale(1.3) translateY(-5px);
            background-color: #b74b4b;
            box-shadow: 0 0 25px #b74b4b;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.8rem;
            background-color: black;
            border-radius: 4rem;
            font-size: 1.6rem;
            color: #b74b4b;
            letter-spacing: 0.3rem;
            font-weight: 600;
            border: 2px solid #b74b4b;
            transition: 0.3s ease;
            cursor: pointer;
        }

        .btn:hover {
            transform: scale(1.03);
            background-color: #b74b4b;
            color: black;
            box-shadow: 0 0 25px #b74b4b;
        }

        .typing-text {
            font-size: 34px;
            font-weight: 600;
            min-width: 280px;
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid #b74b4b;
            animation: typing 4s steps(30, end), blink 0.75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }

        @media (max-width: 1000px) {
            .home {
                gap: 4rem;
            }
        }

        @media (max-width: 995px) {
            .home {
                flex-direction: column;
                margin: 5rem 4rem;
            }

            .home .home-content h3 {
                font-size: 2.5rem;
            }

            .home-content h1 {
                font-size: 5rem;
            }

            .home-img img {
                width: 70vw;
                margin-top: 4rem;
            }
    </style>
</head>
<body>
    <section class="home" id="home">
        <div class="home-img">
            <img src="https://i.pinimg.com/736x/2d/e5/8f/2de58f5120f2c39f40987c4c52c3e406.jpg" alt="Description of Image">
        </div>
        <div class="home-content">
            <h1>Hi, It's <span>Justin</span></h1>
            <h3 class="typing-text">and my niche is <span></span></h3>
            <p>Third year college student with knowledge in video and photo editing. Passionate about using technology to solve real-world problems, especially in education, and eager to continue growing my skills and contribute to innovative projects.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/J.Mendozaaaaaaaaa" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://x.com/JustinMend42795" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://github.com/Udz06" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.youtube.com/@justinmendoza7183" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </section>
</body>
</html>

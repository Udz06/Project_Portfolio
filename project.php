<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Project</title>
    <style>
        /* Ensure body and html have no margin or padding */
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }

        /* Projects Section */
        .project {
            background-color: black; /* Matches the rest of your website */
            color: white; /* Ensure text color contrasts well with the background */
            padding: 5rem 0; /* Add padding to top and bottom */
            text-align: center; /* Center text and content */
            margin: 0; /* Ensure no additional margin is added */
            border: 0; /* Remove any border that might add white space */
        }

        .project-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center project items */
            gap: 2rem;
            max-width: 1200px; /* Limit width of the project list */
            margin: 0 auto; /* Center align the project list */
            padding: 0 1rem; /* Add some padding for responsiveness */
        }

        .project-item {
            background-color: #2a2a2a; /* Darker background for individual items */
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            max-width: 300px; /* Limit width of each project item */
            text-align: center;
            transition: 0.3s ease;
        }

        .project-item img {
            width: 100%;
            height: auto;
            transition: 0.3s ease;
        }

        .project-item:hover img {
            transform: scale(1.05);
        }

        .project-item h3 {
            font-size: 2.5rem; /* Increase the font size of the title */
            margin: 1rem 0;
            color: #b74b4b;
        }

        .project-item p {
            font-size: 1.4rem;
            color: white;
            padding: 0 1rem 1rem;
        }

        .project-item a {
            color: white;
            text-decoration: none;
        }

        .section-title {
            font-size: 3rem; /* Increase the font size of the section title */
            margin-bottom: 2rem; /* Add some space below the title */
            color: #b74b4b; /* Ensure the title color contrasts well */
        }
    </style>
</head>

<body>
    <section id="project" class="project">
        <h2 class="section-title">Projects</h2>
        <div class="project-list">
            <!-- Project 1 -->
            <div class="project-item">
                <a href="https://github.com/Udz06/ColorGame" target="_blank">
                    <img src="https://play-lh.googleusercontent.com/G7YH8O9-DEHrCOa4o90WLtIV6HnRRlWCS-kwGgs11UCsxnQNTwxGEO052HEMWc-eTU0t" alt="Project 1">
                    <h3>COLOR GAME</h3>
                    <p>Playing the color game was simple. On the betting table, there were six colors: green, red, blue, pink, white, and yellow.</p>
                </a>
            </div>
            <!-- Project 2 -->
            <div class="project-item">
                <a href="https://github.com/Udz06/webpage" target="_blank">
                    <img src="https://i2.pngimg.me/thumb/f/720/comdlpng6936380.jpg" alt="Project 2">
                    <h3>Project Title 2</h3>
                    <p>One Direction, often shortened to 1D, are an English-Irish pop boy band formed in London in 2010..</p>
                </a>
            </div>
            <!-- Project 3 -->
            <div class="project-item">
                <a href="https://github.com/Udz06/PYTH0N/blob/main/PROJECT1" target="_blank">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb2o1YhYwR4D7Dq2olGSZ_0fBBSooHt_Ph7g&s" alt="Project 3">
                    <h3>PYTHON 1</h3>
                    <p>This code will analyze if you passed or failed.</p>
                </a>
            </div>
            <!-- Project 4 -->
            <div class="project-item">
                <a href="https://github.com/Udz06/PYTH0N" target="_blank">
                    <img src="https://preview.redd.it/rxezjyf4ojx41.png?width=640&crop=smart&auto=webp&s=61f4647f327a1fee4554b82965cc8b2e8b208c4f" alt="Project 4">
                    <h3>PYTHON 2</h3>
                    <p>Other Python codes.</p>
                </a>
            </div>
            <!-- Add more projects as needed -->
        </div>
    </section>
</body>

</html>

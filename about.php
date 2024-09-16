<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me - My Portfolio</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #1e1e1e; /* Dark background for the whole page */
      color: #e0e0e0; /* Light text color for contrast */
    }

    .section-title {
      font-size: 3rem; /* Larger title font size */
      color: #ff6f61; /* Soft coral color for titles */
      margin: 2rem 0;
      text-align: center;
    }

    .resume-content {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      margin: 2rem auto;
    }

    .resume-image {
      max-width: 70%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 1.5rem;
    }

    .resume-content p {
      font-size: 1.4rem;
      margin-bottom: 1rem;
    }

    .skills-list {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
      margin: 2rem auto;
    }

    .skill-item {
      background-color: #2a2a2a;
      border-radius: 10px;
      padding: 2rem;
      color: #f5f5f5;
      width: 100%;
      max-width: 350px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .skill-item:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    .progress-bar {
      background-color: #333;
      border-radius: 5px;
      height: 10px;
      margin-top: 0.5rem;
      overflow: hidden;
      width: 100%;
    }

    .progress {
      background-color: #4caf50;
      height: 100%;
      width: 0; /* Placeholder; actual width set inline */
      transition: width 0.3s ease;
    }

    .experience-list {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      margin: 2rem auto;
    }

    .experience-item {
      background-color: #2a2a2a;
      border-radius: 8px;
      padding: 2rem;
      color: #f5f5f5;
      font-size: 1.6rem;
    }

    .experience-item h3 {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #ff6f61; /* Soft coral color for section headings */
    }

    .experience-item p {
      font-size: 1.4rem;
    }
  </style>
</head>

<body>
  <section id="resume" class="resume">
    <h2 class="section-title">Resume</h2>
    <div class="resume-content">
      <a href="https://www.facebook.com/photo/?fbid=1164167674663655&set=a.233477284399370" target="_blank">
        <img src="https://scontent.fmnl25-2.fna.fbcdn.net/v/t39.30808-6/459704666_1164167677996988_8518977030727671680_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeHY3H2aJW8J8IrlXX_NlWKWRlzhSbX5xH1GXOFJtfnEfQhpDMHy1M3Qbxaf7DKtvSiS1KpWUxdKriPeM7nJzcji&_nc_ohc=kUYtZhgP0McQ7kNvgH_FQNx&_nc_ht=scontent.fmnl25-2.fna&_nc_gid=Ab54crzRf_UJ5cFfZZpUnND&oh=00_AYCj98E2lTLro2ATZcRNWHph2aeeHDA6u8apDNjHctlDfg&oe=66EAE55F" alt="Resume" class="resume-image">
      </a>
      <p>Click the image above to view my resume:</p>
    </div>
  </section>

  <section id="skills" class="skills">
    <h2 class="section-title">Skills</h2>
    <div class="skills-list">
      <div class="skill-item">
        HTML
        <div class="progress-bar">
          <div class="progress" style="width: 90%;"></div>
        </div>
      </div>
      <div class="skill-item">
        CSS
        <div class="progress-bar">
          <div class="progress" style="width: 80%;"></div>
        </div>
      </div>
      <div class="skill-item">
        JavaScript
        <div class="progress-bar">
          <div class="progress" style="width: 50%;"></div>
        </div>
      </div>
      <div class="skill-item">
        Python
        <div class="progress-bar">
          <div class="progress" style="width: 70%;"></div>
        </div>
      </div>
      <div class="skill-item">
        Photoshop
        <div class="progress-bar">
          <div class="progress" style="width: 60%;"></div>
        </div>
      </div>
      <div class="skill-item">
        Video Editing
        <div class="progress-bar">
          <div class="progress" style="width: 65%;"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="experience" class="experience">
    <h2 class="section-title">Experience</h2>
    <div class="experience-list">
      <div class="experience-item">
        <h3>Student</h3>
        <p>I’m currently a 3rd-year college student majoring in Information Technology. Over the course of my studies, I’ve gained experience in website development, programming, and project management. I have a strong foundation in web technologies like HTML, CSS, and JavaScript, and I’ve also explored PHP for backend development.</p>
      </div>
      <div class="experience-item">
        <h3>Knowledge and Skills:</h3>
        <p>AWebsite Development: I’ve created websites, including one for a band group, where I focused on design and functionality. I’ve also developed two games, "Color Game" and "Rock Paper Scissors," which taught me a lot about interactive web applications.</p>
      </div>
      <div class="experience-item">
        <h3>Programming Languages:</h3>
        <p>I’m proficient in HTML, CSS, and JavaScript, and I have working knowledge of PHP and Python for backend processes.</p>
      </div>
      <div class="experience-item">
        <h3>Project Management: </h3>
        <p>I’ve managed small projects, from initial concept to final execution, including handling layouts, design, and coding.</p>
      </div>
    </div>
  </section>
</body>

</html>

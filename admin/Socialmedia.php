<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>
<body>
    <aside class="aside"> 
        <button id="toggle">
            <i class='bx bxs-home'></i> Home
        </button>
        <div class="link">
            <ul>
              <li><i class='bx bxs-dashboard'></i><label><a href="dashboard.html"> Dashboard </a></label></li>
              <li><i class='bx bxs-user'></i><label><a href="aboutme.html">About Me</a></label></li>
              <li><i class='bx bxs-cog'></i><label><a href="socialmedia.html">Social Media</a></label></li>
              <li><i class='bx bxs-book'></i><label><a href="education.html">Education</a></label></li>
              <li><i class='bx bxs-folder'></i><label><a href="project.html">Projects</a></label></li>
              <li><i class='bx bxs-star'></i><label><a href="skillsedit.html">Skills</a></label></li>
              <li><i class='bx bxs-envelope'></i><label><a href="message.html">Messages</a></label></li>
            </ul>
          </div>
    </aside>
  <div class="socialmedia-content">
    <div class="header">
      <h1>Social Media Links</h1>
    </div>
    <div class="breadcrumb">
      <span><a href="dashboard.html">Dashboard</a></span> > <span><a href="socialmedia.html">Social Media</a></span>
    </div>

    <h3>Select and Add Your Social Media Links</h3>

    <form id="socialmedia-form">
      <!-- TikTok -->
      <div class="social-item">
        <input type="checkbox" id="tiktok" />
        <label for="tiktok">TikTok</label>
        <input type="url" class="social-link hidden" id="tiktok-link" placeholder="Enter TikTok link" />
      </div>

      <!-- Instagram -->
      <div class="social-item">
        <input type="checkbox" id="instagram" />
        <label for="instagram">Instagram</label>
        <input type="url" class="social-link hidden" id="instagram-link" placeholder="Enter Instagram link" />
      </div>

      <!-- Facebook -->
      <div class="social-item">
        <input type="checkbox" id="facebook" />
        <label for="facebook">Facebook</label>
        <input type="url" class="social-link hidden" id="facebook-link" placeholder="Enter Facebook link" />
      </div>

      <!-- Twitter -->
      <div class="social-item">
        <input type="checkbox" id="twitter" />
        <label for="twitter">Twitter</label>
        <input type="url" class="social-link hidden" id="twitter-link" placeholder="Enter Twitter link" />
      </div>

      <!-- GitHub -->
      <div class="social-item">
        <input type="checkbox" id="github" />
        <label for="github">GitHub</label>
        <input type="url" class="social-link hidden" id="github-link" placeholder="Enter GitHub link" />
      </div>

      <!-- YouTube -->
      <div class="social-item">
        <input type="checkbox" id="youtube" />
        <label for="youtube">YouTube</label>
        <input type="url" class="social-link hidden" id="youtube-link" placeholder="Enter YouTube link" />
      </div>

      <!-- LinkedIn -->
      <div class="social-item">
        <input type="checkbox" id="linkedin" />
        <label for="linkedin">LinkedIn</label>
        <input type="url" class="social-link hidden" id="linkedin-link" placeholder="Enter LinkedIn link" />
      </div>

      <button type="submit">Save Links</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>

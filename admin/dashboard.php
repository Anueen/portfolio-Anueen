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
    <div class="main-content">
      <div class="header">
        <h1>Portfolio Dashboard</h1>
      </div>
      <div class="breadcrumb">
        <span><a href="dashboard.html">Dashboard</a></span>
      </div>
      <div class="card-container">
        <div class="card">
          <h4>View</h4>
          <div class="progress">
            <div class="progress-circle blue">0%</div>
            <span>0 </span>
          </div>
        </div>
        <div class="card">
          <h4>Project</h4>
          <div class="progress">
            <div class="progress-circle yellow">0%</div>
            <span>0</span>
          </div>
        </div>
        <div class="card">
          <h4>Contact</h4>
          <div class="progress">
            <div class="progress-circle green">0%</div>
            <span>0</span>
          </div>
        </div>
      </div>
    </div>
    



    <script>
        let sideBar = document.querySelector("aside");
        let toggle = document.querySelector("#toggle");
  
        toggle.addEventListener("click", function (e) {
          if (sideBar.classList.contains("mini")) {
            sideBar.classList.remove("mini");
            sideBar.style.width = "16rem";
          } else {
            sideBar.classList.add("mini");
            sideBar.style.width = "4rem";
          }
        });
      </script>
</body>
</html>
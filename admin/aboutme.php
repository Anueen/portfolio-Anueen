<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-About me</title>
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
        <div class="user">
            <ul>
              <li>
                <i>
                    <img src="../person.jpg" alt="Person" />
                </i>
                <label>Anurag kohli</label>
              </li>
              <li>
                <i class="fi-rr-settings"></i>
                <label>Settings</label>
              </li>
            </ul>
          </div>
    </aside>
    <div class="About-content">
        <div class="header">
          <h1>Portfolio Dashboard - About Me</h1>
        </div>
        <div class="breadcrumb">
          
          <span><a href="dashboard.html">Dashboard</a></span> > <span><a href="aboutme.html">About me</a></span>
        </div>
        <div class="about-update">
      
          <!-- Profile Picture Section -->
          <div class="profile-pic-section">
              <div class="profile-pic-display">
                <img src="default-profile.jpg" alt="Profile Picture" id="profile-pic-preview" />
              </div>
            <label for="profile-pic">Profile Picture:</label>
            <input type="file" id="profile-pic" accept="image/*" />
          </div>
      
          <!-- Headline Section -->
          <div class="headline-section">
            <label for="headline">Headline:</label>
            <input type="text" id="headline" placeholder="Enter your headline" />
          </div>
      
          <!-- Description Section -->
          <div class="description-section">
            <label for="description">Description:</label>
            <textarea id="description" rows="4" placeholder="Enter a description about yourself"></textarea>
          </div>
      
          <!-- Save Button -->
          <button id="save-btn">Save Change</button>
        </div>
      </div>
      <script>
        const profilePicInput = document.getElementById("profile-pic");
        const profilePicPreview = document.getElementById("profile-pic-preview");

        profilePicInput.addEventListener("change", function () {
          const file = this.files[0];
          if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
              profilePicPreview.src = e.target.result;
            };
            reader.readAsDataURL(file);
          }
        });

      </script>
</body>
</html>


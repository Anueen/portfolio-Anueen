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
  <div class="education-content">
    <div class="header">
        <h1>My Education</h1>
      </div>
      <div class="breadcrumb">
        <span><a href="dashboard.html">Dashboard</a></span> > <span><a href="education.html">Education</a></span>
      </div>
  
      <div class="actions">
        <button class="add-btn">Add Education</button>
      </div>
  
      <table>
        <thead>
          <tr>
            <th>Year</th>
            <th>Institution</th>
            <th>Percentage</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example Row -->
          <tr>
            <td>2025</td>
            <td>Doaba Group of Colleges, Punjab</td>
            <td>72.1%</td>
            <td>Doing the final year (8th semester) in BTech, specializing in computer Data science, AI, PHP, Python, and web development</td>
            <td>
              <button class="edit-btn">Edit</button>
              <button class="delete-btn">Delete</button>
            </td>
          </tr>
          <!-- Add more rows dynamically -->
        </tbody>
      </table>
  </div>

  <script src="script.js"></script>
</body>
</html>

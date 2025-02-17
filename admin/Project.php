<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects</title>
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
        <li><i><img src="../person.jpg" alt="Person" /></i><label>Anurag Kohli</label></li>
        <li><i class="fi-rr-settings"></i><label>Settings</label></li>
      </ul>
    </div>
  </aside>

  <div class="project-content">
    <div class="header">
      <h1>Projects</h1>
    </div>
    <div class="breadcrumb">
      <span><a href="dashboard.html">Dashboard</a></span> > <span><a href="project.html">Projects</a></span>
    </div>

    <!-- Project Table -->
    <h2>Your Projects</h2>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Project Type</th>
          <th>Project Image</th>
          <th>Project Name</th>
          <th>Project Link</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>App</td>
          <td><img src="placeholder.png" alt="Project Image" class="project-img"></td>
          <td>Software Mongo</td>
          <td><a href="#" target="_blank">Open Link</a></td>
          <td>
            <button class="delete-btn">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Add Project Form -->
    <h2>Add Project</h2>
    <form class="add-project-form">
      <div class="form-group">
        <label for="project-type">Project Type</label>
        <select id="project-type">
          <option value="software">Software</option>
          <option value="app">App</option>
          <option value="website">Website</option>
          <option value="idea">Idea</option>
          <option value="product">Product</option>
          <option value="video">Video</option>
          <option value=" Animation">Animation</option>
        </select>
      </div>

      <div class="form-group">
        <label for="project-image">Project Image</label>
        <input type="file" id="project-image" accept="image/*">
      </div>

      <div class="form-group">
        <label for="project-name">Project Name</label>
        <input type="text" id="project-name" placeholder="Enter project name">
      </div>

      <div class="form-group">
        <label for="project-link">Project Link</label>
        <input type="url" id="project-link" placeholder="Enter project link">
      </div>

      <button type="submit" class="add-btn">Add Project</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>

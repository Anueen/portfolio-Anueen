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
    <div class="message-content">
      <div class="header">
        <h1>User Messages</h1>
      </div>
      <div class="breadcrumb">
        <span><a href="dashboard.html">Dashboard</a></span> > <span><a href="message.html">Messages</a></span>
      </div>
  
      <h3>All Received Messages</h3>
  
      <table>
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Course</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>johndoe@example.com</td>
            <td>+1234567890</td>
            <td>Web Development</td>
            <td>I'm interested in the course. Please provide more details.</td>
          </tr>
          <tr>
            <td>Jane Smith</td>
            <td>janesmith@example.com</td>
            <td>+9876543210</td>
            <td>Graphic Design</td>
            <td>Can I enroll for the next session?</td>
          </tr>
          <!-- Add more rows dynamically if required -->
        </tbody>
      </table>
    </div>

</body>
</html>
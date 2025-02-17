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
    <div class="main-content">
        <div class="header">
            <h1>Portfolio Dashboard - Skills</h1> 
        </div>
        <div class="breadcrumb">
            <span><a href="dashboard.html">Dashboard</a></span> > <span><a href="Skillsedit.html">Skills</a></span>
        </div>
          <h3>SKILL EDIT!</h3> 
          <button onclick="addSkill()">ADD SKILLS</button>
          <div class="table-wrapper">
          <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Skill Name</th>
                      <th>Skill Score</th>
                      <th>Update</th>
                      <th>Delete</th>
                  </tr>
              </thead>
              <tbody id="skillTable">
                  <tr>
                      <td>1</td>
                      <td>HTML</td>
                      <td>90</td>
                      <td><button class="action-btn update-btn">Update</button></td>
                      <td><button class="action-btn delete-btn" >Delete</button></td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>CSS</td>
                      <td>80</td>
                      <td><button class="action-btn update-btn" >Update</button></td>
                      <td><button class="action-btn delete-btn" >Delete</button></td>
                  </tr>
              </tbody>
          </table>
        </div>
    </div>
</body>
</html>
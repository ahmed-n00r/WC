<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#mySidenav a {
    //position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    border-radius: 0 5px 5px 0;
    text-decoration: none;
    font-size: 20px;
    color: white;
}

#mySidenav a:hover {
    left: 0;
}

#about {
    top: 20px;
    background-color: #4CAF50;
}

#hom {
    top: 20px;
    background-color: #ff9800;
}


#blog {
    top: 80px;
    background-color: #2196F3;
}

#projects {
    top: 140px;
    background-color: #f44336;
}

#contact {
    top: 200px;
    background-color: #555
}
#cal {
    top: 20px;
    background-color: #4CAF50;
}
</style>
</head>
<body>

  <div id="mySidenav" class="sidenav">
    <a href="index.php" id="hom">hom</a>
    <a href="name.php" id="about">About</a>
    <a href="cal.php" id="blog">Blog</a>
    <a href="log.php" id="projects">Projects</a>
    <a href="pdata.php" id="contact">Contact</a>
    <a href="calcu.php" id="cal">calcultor</a>
  </div>

</body>
</html>

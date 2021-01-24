<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <?php
            function menuList($name,$link) {
            echo  ' <li class="nav-item  mr-2 "><a class="nav-link text-white" href='.$link.'>'.$name.'<span class="sr-only">(current)</span></a> </li>';
            }
            $name = array("Home", "Attendance Report Page", "Dashboard page", "Academy Gallery");
            $link=array("indexx.php","table.php","dashboard.php","academyGallery.php");
            array_map("menuList", $name,$link); 
          ?>
        </ul>
        </div>
      </nav>
    </div>
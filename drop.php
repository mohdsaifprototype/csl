<html>

<head>
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

  <style>
    .dropdown-menu>li.kopie>a {
      padding-left: 5px;
      background-color: #FF69B4;
      color: white;
    }

    .dropdown-submenu {
      position: relative;

    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: -1px;
      border-radius: 0 6px 6px 6px;
      -moz-border-radius: 0 6px 6px 6px;
      border-radius: 0 6px 6px 6px;

    }

    .dropdown-submenu>a:after {
      border-color: transparent transparent transparent #333;
      border-style: solid;
      border-width: 5px 0 5px 5px;
      content: " ";
      display: block;
      float: right;
      height: 0;
      margin-right: -10px;
      margin-top: 5px;
      width: 0;

    }

    .dropdown-submenu:hover>a:after {
      border-left-color: #555;
      background-color: #FF69B4;
      color: white;

    }

    .dropdown-menu>li>a:hover,
    .dropdown-menu>.active>a:hover {
      text-decoration: none;
      background-color: #FF69B4;
      color: white;
    }

    @media (max-width: 767px) {

      .navbar-nav {
        display: inline;
      }

      .navbar-default .navbar-brand {
        display: inline;
      }

      .navbar-default .navbar-toggle .icon-bar {
        background-color: #fff;
      }

      .navbar-default .navbar-nav .dropdown-menu>li>a {
        color: red;
        background-color: #ccc;
        border-radius: 4px;
        margin-top: 2px;
      }

      .navbar-default .navbar-nav .open .dropdown-menu>li>a {
        color: #333;
      }

      .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,
      .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus {
        background-color: #ccc;
      }

      .navbar-nav .open .dropdown-menu {
        border-bottom: 1px solid white;
        border-radius: 0;
      }

      .dropdown-menu {
        padding-left: 10px;
      }

      .dropdown-menu .dropdown-menu {
        padding-left: 20px;
      }

      .dropdown-menu .dropdown-menu .dropdown-menu {
        padding-left: 30px;
      }

      li.dropdown.open {
        border: 0px solid red;
      }

    }

    @media (min-width: 768px) {
      ul.nav li:hover>ul.dropdown-menu {
        display: block;
      }

      #navbar {
        text-align: center;
      }
    }

    .navbar-collapse {

      background-color: #FF69B4;

    }


    img {
      width: 100px;
      height: 50px;
    }
  </style>
</head>

<body>
  <div id="navbar">
    <nav class="navbar navbar-default " role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://CSLskills.com/">
          <img src="images\form\logo.png">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Link</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>

            <ul class="dropdown-menu">

              <li><a href="#">Dropdown Link 1</a></li>

              <li><a href="#">Dropdown Link 3</a></li>

              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                <ul class="dropdown-menu">

                  <li><a href="#">Dropdown Submenu Link 4.1</a></li>
                  <li><a href="#">Dropdown Submenu Link 4.2</a></li>
                  <li><a href="#">Dropdown Submenu Link 4.3</a></li>
                  <li><a href="#">Dropdown Submenu Link 4.4</a></li>

                </ul>
              </li>

              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
                <ul class="dropdown-menu">

                  <li><a href="#">Dropdown Submenu Link 5.1</a></li>
                  <li><a href="#">Dropdown Submenu Link 5.2</a></li>
                  <li><a href="#">Dropdown Submenu Link 5.3</a></li>

                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                    <ul class="dropdown-menu">
                      <li class="kopie"><a href="#">Dropdown Submenu Link 5.4</a></li>
                      <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                      <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>


                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="kopie"><a href="#">Dropdown2</a></li>
              <li><a href="#">Dropdown2 Link 1</a></li>
              <li><a href="#">Dropdown2 Link 2</a></li>
              <li><a href="#">Dropdown2 Link 3</a></li>

              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 Link 4</a>
                <ul class="dropdown-menu">
                  <li class="kopie"><a href="#">Dropdown2 Link 4</a></li>
                  <li><a href="#">Dropdown2 Submenu Link 4.1</a></li>
                  <li><a href="#">Dropdown2 Submenu Link 4.2</a></li>
                  <li><a href="#">Dropdown2 Submenu Link 4.3</a></li>
                  <li><a href="#">Dropdown2 Submenu Link 4.4</a></li>

                </ul>
              </li>
              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown2 Link 5</a>
                <ul class="dropdown-menu">
                  <li class="kopie"><a href="#">Dropdown Link 5</a></li>
                  <li><a href="#">Dropdown2 Submenu Link 5.1</a></li>
                  <li><a href="#">Dropdown2 Submenu Link 5.2</a></li>
                  <li><a href="#">Dropdown2 Submenu Link 5.3</a></li>
                  <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                    <ul class="dropdown-menu">
                      <li class="kopie"><a href="#">Dropdown2 Submenu Link 5.4</a></li>
                      <li><a href="#">Dropdown2 Submenu Link 5.4.1</a></li>
                      <li><a href="#">Dropdown2 Submenu Link 5.4.2</a></li>

                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </div>



</body>

</html>
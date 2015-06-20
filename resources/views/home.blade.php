<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pro-Technic iznajmljivanje alata </title>
    <!-- the meta tag scales the web page so that it displays correctly on all resolutions -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <!-- the style.css is our CSS file to modify the bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/style.css"/>
</head>
<body>
    <!-- import the JQUERY files for use with bootstrap -->
    <script src="jq/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- the menu -->
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <!-- text that will appear as the name of the menu -->
            <a href="#" class="navbar-brand">Pro-Technic</a>

            <!-- this will create a button when the menu is collapsed and it will take all  -->
            <!-- the items from the collapseMenu -->
            <button class="navbar-toggle" data-toggle="collapse" data-target="#collapseMenu">
                <!-- this will add the icon to the collapsed menu -->
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>

            <!-- this part will collapse when the resolution is small (i.e. on a mobile) -->
            <!-- the name of the collapsible menu is: collapseMenu -->
            <div class="collapse navbar-collapse" id="collapseMenu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Test 1</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Test 2 <b class="caret"></b></a>

                        <ul class="dropdown-menu">
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Test 3</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
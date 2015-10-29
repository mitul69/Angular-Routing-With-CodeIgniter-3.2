<!-- index.html -->
<!DOCTYPE html>
<html ng-app="ci3App">
    <head>
        <!-- SCROLLS -->
        <!-- load bootstrap and fontawesome via CDN -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />

        <!-- SPELLS -->
        <!-- load angular and angular route via CDN -->
        <script>
            var siteUrl = '<?php echo base_url(); ?>';
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
        <script src='assets/angular-ui-bootstrap-modal.js'></script>
        <script src="assets/script.js"></script>

    </head>
    <body ng-controller="mainController">

        <header>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">Angular Routing With CI 3.2</a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#user"><i class="fa fa-shield"></i> User</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="main">
            <div ng-view></div>
        </div>

    </body>
</html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
        <!-- Stili custom -->
        <link rel="stylesheet" href="../css/mob.css" />
    </head>
    <body>
        <div id="background" class="conatiner-fluid"  style="background-color: black; height: 50%">
            <div id="ghost" style="display: none"></div>
            <div id="bg-textB">BLACK FRIDAY</div>
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's content.
                Some quick example text to build on the card title and make up the bulk of the card's content.
                Some quick example text to build on the card title and make up the bulk of the card's content.
                Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
            <div class="card text-center" style="background-color: white;">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item" style="width: 50%">
                            <a id="su" class="nav-link active" href="#"><img src='../assets/ico-mail.svg'></a>
                        </li>
                        <li class="nav-item" style="width: 50%">
                            <a id="pu" class="nav-link active" href="#"><img src='../assets/ico-notification.svg'></a>
                        </li>
                    </ul>
                </div>
                <div id="sub" class="card-body">
                    <h5 class="card-title tit"><strong>Newsletter</strong></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <label class="sr-only" for="inlineFormInput">Name</label>
                    <input type="email" class="div-control mb-2" id="inlineFormInput" placeholder="example@mail.com" />
                    <input id='ok' name='ok' type='checkbox' value='1' />
                    <label class="form-check-label">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </label>
                    <a href="#" class="btn btn-primary" onclick="validate()">SUBSCRIBE</a>
                </div>
                <div id="push" class="card-body" style="display: none">
                    <h5 class="card-title tit">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <ul>
                        <li>
                            Some quick example text
                        </li>
                        <li>
                            Some quick example text
                        </li>
                        <li>
                            Some quick example text
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary">KEEP ME UPDATE</a>
                </div>
            </div>
            <div id='search' class="container-fluid">
                <h4 style="text-align: center;"><strong>SHOP WOMAN</strong></h4>
                <input type="text" class="div-control mb-2" id="search" placeholder="Testo da ricercare" />
                <div id='woman' style="text-align: center; padding-top: 1%"></div>
                <h4 style="text-align: center;"><strong>SHOP MAN</strong></h4>
                <input type="text" class="div-control mb-2" id="search" placeholder="Testo da ricercare" />
                <div id='man' style="text-align: center; padding-top: 1%"></div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!-- Custom JavaScript -->
            <script type="text/javascript" src="../js/functions.js"></script>
            <script type="text/javascript">
                        $(document).ready(function () {
                            retrieve();
                        });
                        $("#pu").click(function () {
                            $("#sub").hide();
                            $("#push").show();
                        });
                        $("#su").click(function () {
                            $("#push").hide();
                            $("#sub").show();
                        });
            </script>
    </body>
</html>
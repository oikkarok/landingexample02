<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
        <!-- Stili custom -->
        <link rel="stylesheet" href="../css/land.css" />
    </head>
    <body>
        <div id="background" style="background-color: black; height: 80%">
            <div id="bg-textB">BLACK FRIDAY</div>
            <div id="content" style="padding-bottom: 5%">
                <div id="ghost" style="display: none"></div>
                <div class="card ggg">
                    <div class="card-body tes">
                        <h3 class="card-title tit">Card title</h3>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                    </div>
                </div>
                <div class="row rex">
                    <div class="card boh">
                        <div class="card-body pad">
                            <h5 class="card-title tit">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div style="text-align: center"><img src='../assets/qr-code-lvr-ios-app-1024x1024.png' style='width: 40%;'></div>
                            <div style="text-align: center"><img src='../assets/CTA-App-Store.png' style='width: 60%;'></div>
                        </div>
                    </div>
                    <div class="card boh" style="padding-right: 2%">
                        <div class="card-body pad">
                            <h5 class="card-title tit">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="div-row">
                                <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInput">Name</label>
                                    <input type="email" class="div-control mb-2" id="inlineFormInput" placeholder="example@mail.com" />
                                </div>
                                <div class="form-check mb-2 mr-sm-2 pri">
                                    <div style="margin-top: 10%; width: 10%; float: left">
                                        <input id='ok' name='ok' type='checkbox' value='1' />
                                    </div>
                                    <div id="xx">
                                        <label class="form-check-label">
                                            Some quick example text to build on the card title and make up the bulk of the card's content.
                                            Some quick example text to build on the card title and make up the bulk of the card's content.
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <div href="#" id="but" class="btn btn-primary" onclick="validate()">SUBSCRIBE</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id='search' class="container">
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
        </script>
    </body>
</html>
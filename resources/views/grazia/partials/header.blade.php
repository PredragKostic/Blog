<header>
    <div class="container">
        <div class="row justify-content-between align-items-center py-3">
            <div class="col-4"><i class="fab fa-facebook-f mr-3"></i> <i class="fab fa-twitter mr-3"></i> <i class="fab fa-instagram"></i></div>
            <div class="col-4">
                <a href="#"><img src="{{ url('grazia/images/logo.jpg') }}" alt="Grazia logo" class="logo"></a>
            </div>
            <div class="col-4 d-inline-flex justify-content-end align-items-center" id="na">
                <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5"><i class="fas fa-envelope prefix grey-text"></i>
                                    <input type="email" id="defaultForm-email" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                                </div>
                                <div class="md-form mb-4"><i class="fas fa-lock prefix grey-text"></i>
                                    <input type="password" id="defaultForm-pass" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button class="btn btn-default">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center"><a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginForm">Login</a></div><i class="fas fa-shopping-bag"></i>
                <div class="circle mr-2">88</div><i class="fas fa-star mr-2"></i></div>
        </div>
    </div>
    <div class="container-fluid bg-secondary">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-md bg-secondary p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav"><a class="nav-item nav-link active pl-0" href="#">HOME <span class="sr-only">(current)</span></a>
                            <div class="dropdown bg-secondary">
                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">U FOKUSU</button>
                                <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton"><a class="dropdown-item pl-3" href="#">Intervju</a> <a class="dropdown-item pl-3" href="#">U fokusu</a> <a class="dropdown-item pl-3" href="#">Blog</a></div>
                            </div>
                            <div class="dropdown bg-secondary">
                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LEPOTA</button>
                                <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton"><a class="dropdown-item pl-3" href="#">Trendovi</a> <a class="dropdown-item pl-3" href="#">Make Up</a> <a class="dropdown-item pl-3" href="#">Kosa</a> <a class="dropdown-item pl-3" href="#">Nega Kože</a> <a class="dropdown-item pl-3" href="#">Parfemi</a> <a class="dropdown-item pl-3" href="#">Fitnes</a> <a class="dropdown-item pl-3" href="#">Saveti stručnjaka</a></div>
                            </div>
                            <div class="dropdown bg-secondary">
                                <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SCENA</button>
                                <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuButton"><a class="dropdown-item pl-3" href="#">Film</a> <a class="dropdown-item pl-3" href="#">Muzika</a> <a class="dropdown-item pl-3" href="#">Knjige</a> <a class="dropdown-item pl-3" href="#">Umetnost</a> <a class="dropdown-item pl-3" href="#">Pozorište</a></div>
                            </div><a class="nav-item nav-link" href="#">HOROSKOP</a> <a class="nav-item nav-link" href="#">MAGAZIN</a> <a class="nav-item nav-link" href="#">AKCIJE</a> <a class="nav-item nav-link" href="#">PROMO</a> <a class="nav-item nav-link" href="#">CASAVIVA</a> <a class="nav-item nav-link" href="#">GASTRO</a> <a class="nav-item nav-link" href="#">SHOP</a></div>
                    </div>
                    <div class="search"><a data-toggle="modal" data-target="" href="#"><i class="fa fa-search"></i></a></div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-info" id="nav-bottom">
        <div class="container">
            <div class="row">
                <div class="container bg-info pl-0">Grazia/Home</div>
            </div>
        </div>
    </div>
</header>
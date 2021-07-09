<?php
include("includes/header.php");
?>
<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top main-navigation">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="../assets//logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">HOME
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">RUN INFORMATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">REGISTRATION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main role="main" id="home">
        <section class="jumbotron">
        </section>
    </main>
    <img src="../assets/header.png" class="img-responsive center-block d-block mx-auto">
    <div class="container text-center">
        <label>A 3K run alongside the candidates of Miss Philippines Earth 2015<br /> to aid the Calumpang River
            Rehabilitation</label>
    </div>
    <div class="container text-center mt-2">
        <h5>APRIL 25, 2015 | Assembly Time: 5:00 AM | SM City Batangas Parking Grounds</h5>
        <label>Registration Fee: Php 500 inclusive of race kit with skirt</label>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <button type="button" class="btnreg"><a href="#register">Register Now!</a></button>
    </div>
    <img src="../assets/background.png" class="img-fullsize mt-5">
</div>
<section class="page" id="register">
    <section class="jumbotron2">
    </section>
    <div class="container text-center">
        <label class="textheader">SIGN UP</label>
        <img src="../assets/section-divider.png" class="imgsize mx-auto d-block">
        <label class="white mt-1">Vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facillisis
            at vero eros et accumsan<br />et iusto odio dignissim qui blandit praesent luptatum zril delenit augue duis
            dolore te feugait nulla facilisi</label>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputFirstname" placeholder="First name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputLastname" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="inputAddressLine"
                                placeholder="Complete Address" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputBirthday" placeholder="Birthday" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="inputContact" placeholder="Contact Number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
                        </div>
                        <div class="col-sm-6">
                            <select class="box">
                                <option value="" disabled="" selected="">Shirt Size</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <div style="font-size: 0.5rem;">
                                <i class="fas fa-plus-square fa-5x plussizeicon">
                                </i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <input type="checkbox" value="agree" required="" class="checkboxbutton">
                            <label class="underline">
                                I have read and understand the Terms and Conditions
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-4 float-right font-weight-bold">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
</div>

<?php
include("includes/script.php");
?>
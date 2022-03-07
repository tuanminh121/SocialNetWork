<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Facebook</title>
    <!--THƯ VIỆN BOOSTRAP-->
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="../../assets/css/login-page/SF-Pro-Display-Bold.css?v=<?php echo time(); ?>"
    >
    <link
      rel="stylesheet"
      href="../../assets/css/login-page/SF-Pro-Display-Medium.css?v=<?php echo time(); ?>"
    >
    <link
      rel="stylesheet"
      href="../../assets/css/login-page/SF-Pro-Display-Regular.css?v=<?php echo time(); ?>"
    >
    <link rel="stylesheet" href="../../assets/css/login-page/login-page.css?v=<?php echo time(); ?>">
  </head>


<body>
    <div id="body">
        <div class=" form_login container">
            <div class="">
                <div id="body-row" class="row">
                    <div class="col-xxl-1"></div>
                    <div class="
                    col-xxl-5 
                    col-lg-6 col-12
                    d-flex
                    flex-column
                    justify-content-center
                    justify-content-lg-start
                    align-items-center
                    align-items-lg-start
                    ">
                        <div id="text-wrapper">
                            <h1 style="color: #fff;text-align: center;">Log In</h1>
                        </div>
                        <div class="
                    col-xxl-5
                    col-lg-6
                    col-12
                    d-flex 
                    flex-column
                    justify-content-center
                    justify-content-lg-start
                    align-items-center
                    align-items-lg-start
                ">
                            <div id="body-top-right">
                                <form action="" method="post" class="form_layout">
                                    <div class="" style="margin-bottom: 20px;">
                                        <input name="UserEmail" class="form-control login-form-input" type="text"
                                            placeholder="Email address" autofocus required />
                                        <input name="UserPassword" id="login-form-input-password"
                                            class="form-control login-form-input" type="password" placeholder="Password"
                                            required />

                                    </div>
                                    <div class="
                                        col-xxl-5
                                        col-lg-6
                                        col-12
                                        justify-content-center
                                        justify-content-lg-start
                                        align-items-center
                                        align-items-lg-start
                                        checkbox">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        <a class="needhelp_form" href="">Sign up?</a>
                                    </div>
                                    <button name="btnSignIn" id="login-btn" class="btn btn-primary btn-lg"
                                        type="submit">
                                        Log In Now
                                    </button>
                                    <div id="forgotten-pwd-link-wrapper" class="text-center">
                                        <a id="forgotten-pwd-link" class="text-decoration-none" href="#">
                                            Forgotten password?
                                        </a>
                                    </div>
                            </div>


                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="modal fade signup-modal" id="signup-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div style="background-color:#F26398" class="modal-header d-flex align-items-start">
                    <div class="modal-title-wrapper">
                        <h2 style="color:#fff" class="modal-title modal-title-custom" id="exampleModalLabel">Sign Up
                        </h2>
                        <p style="color:#fff" class="modal-title-description">It's quick and easy.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <div class="firstRow d-flex align-items-center justify-content-center">
                                <input name="firstnameSignUp" type="text"
                                    class="form-control me-2 p-2 form-control-input" id="recipient-first-name"
                                    placeholder="First name" required autofocus>
                                <input name="lastnameSignUp" type="text" class="form-control p-2 form-control-input"
                                    id="recipient-sur-name" placeholder="Last name" required>
                            </div>
                            <input name="emailSignUp" type="email" class="form-control mt-2 p-2 form-control-input"
                                id="recipient-mobile-mail" placeholder="Email address" required>
                            <input name="pwSignUp" type="password" class="form-control mt-2 p-2 form-control-input"
                                id="recipient-password" placeholder="New password" required>
                        </div>
                        <div class="mb-3">
                            <span class="form-description">Date of birth</span>
                            <div class="date-of-birth-wrapper d-flex align-items-center justify-content-center">
                                <select name="dayOfBirth" class="form-select" id="" required>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select name="monthOfBirth" class="form-select ms-2" id="" required>
                                    <option value="1" selected>Jan</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Mar</option>
                                    <option value="4">Apr</option>
                                    <option value="5">May</option>
                                    <option value="6">Jun</option>
                                    <option value="7">Jul</option>
                                    <option value="8">Aug</option>
                                    <option value="9">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                </select>
                                <select name="yearOfBirth" class="form-select ms-2" id="" required>
                                    <option value="2021" selected>2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="form-description">Gender</span>
                            <div class="date-of-birth-wrapper d-flex align-items-center justify-content-around">
                                <div class="btn btn-outline-dark gender-checkbox">
                                    <label class="form-check-label" role="button" for="flexRadioDefault1">
                                        Female
                                    </label>
                                    <input class="form-check-input" type="radio" name="genderSignUp"
                                        id="flexRadioDefault1" value=1 required>
                                </div>
                                <div class="btn btn-outline-dark gender-checkbox ms-2">
                                    <label class="form-check-label" role="button" for="flexRadioDefault2">
                                        Male
                                    </label>
                                    <input class="form-check-input" type="radio" name="genderSignUp"
                                        id="flexRadioDefault2" value=0 required>
                                </div>
                            </div>
                        </div>
                        <p class="form-description">By clicking Sign Up, you agree to our Terms, Data Policy and Cookie
                            Policy. You may receive SMS notifications from us and can opt out at any time.</p>
                        <div class="modal-footer d-flex justify-content-center">
                            <button style="background-color:#F26398" name="btnSignUp" type="submit"
                                class="btn btn-success d-grid gap-2 col-6 mx-auto" id="success-btn">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
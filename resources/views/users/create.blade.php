<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('assets/css/freelancer.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Portfolio Grid Section -->
    <section id="portfolio" style="padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Fill Your Profile</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    {!! Form::open(['url' => 'user']) !!}
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls input-select-div">
                                <label style="margin-right: 110px;">Age</label>
                                <select name="age" id="" class="form-control">
                                    <option value="" selected disabled>Select your age category</option>
                                    <option value="1">Under 18</option>
                                    <option value="18">18-24</option>
                                    <option value="25">25-34</option>
                                    <option value="35">35-44</option>
                                    <option value="45">45-49</option>
                                    <option value="50">50-55</option>
                                    <option value="56">56++</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls radio-button-div">
                                <label style="margin-right: 80px;">gender</label>
                                <label>
                                    <input type="radio" class="" placeholder="gender" id="gender"  name="gender" required data-validation-required-message="Please choose your gender" value="M"> Male
                                </label>
                                <label for="">
                                    <input type="radio" class="" placeholder="gender" id="gender"  name="gender" required data-validation-required-message="Please choose your gender" value="F"> Female
                                </label>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls input-select-div">
                                <label>occupation</label>
                                <select name="occupation" id="" class="form-control">
                                    <option value="" selected disabled>Select your occupatuion</option>
                                    <option value="1">Academic/Educator</option>
                                    <option value="2">Artist</option>
                                    <option value="3">Clerical/Admin</option>
                                    <option value="4">College/Grad Student</option>
                                    <option value="5">Costumer Service</option>
                                    <option value="6">Doctor/Health Service</option>
                                    <option value="7">Executive/Managerial</option>
                                    <option value="8">Farmer</option>
                                    <option value="9">Homemaker</option>
                                    <option value="10">Student</option>
                                    <option value="11">Lawyer</option>
                                    <option value="12">Programmer</option>
                                    <option value="13">Retired</option>
                                    <option value="14">Sales/Marketing</option>
                                    <option value="15">Scientist</option>
                                    <option value="16">Self-employed</option>
                                    <option value="17">Technician/Engineer</option>
                                    <option value="18">Tradesman/Craftsman</option>
                                    <option value="19">Unemployed</option>
                                    <option value="20">Writer</option>
                                    <option value="0">"Other" or not specified</option>
                                </select>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Register</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-12">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="{{URL::asset('assets/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{URL::asset('assets/js/classie.js')}}"></script>
    <script src="{{URL::asset('assets/js/cbpAnimatedHeader.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{URL::asset('assets/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{URL::asset('assets/js/contact_me.js"')}}'></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('assets/js/freelancer.js')}}"></script>

</body>

</html>

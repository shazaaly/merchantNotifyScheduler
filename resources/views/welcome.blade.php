<!DOCTYPE html>
<html lang="en">
<head>
    <title> Merchant Subscription</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="html.design">
    <!-- description -->
    <meta name="description" content="Merchant Subscription">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css">
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
    <!-- Reset CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/reset.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>
<body>

<div class="wizard-main">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title-wb">Merchant Subscription </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('assets/images/slider-01.jpg')}}"
                                 alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('assets/images/slider-02.jpg')}}"
                                 alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('assets/images/slider-03.jpg')}}"
                                 alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 login-sec">
                <div class="login-sec-bg">
                    <h2 class="text-center">Account Information</h2>
                    <form id="example-advanced-form" action=" {{ route('merchant_store') }}" method="post"
                          style="display: none;">
                        @csrf

                        <h3>Account</h3>
                        <fieldset class="form-input">
                            <h4>Account Information</h4>

                            <label for="userName">User name *</label>
                            <input id="userName" name="username" type="text" class="form-control required">

                            <label for="email">Email*</label>
                            <input id="email" name="email" type="email" class="form-control required">

                            <label for="password">Password *</label>
                            <input id="password" name="password" type="password" class="form-control required">


                            <p>(*) Mandatory</p>
                        </fieldset>

                        <h3>Profile</h3>
                        <fieldset class="form-input">
                            <h4>Personal Information</h4>

                            <label for="name">First name *</label>
                            <input id="name" name="first_name" type="text" class="form-control required">
                            <label for="first_name">Last name *</label>
                            <input id="first_name" name="last_name" type="text" class="form-control required">

                            <label for="address">Address</label>
                            <input id="address" name="address" type="text" class="form-control">
                            <label for="age">Age (The warning step will show up if age is less than 18) *</label>
                            <input id="age" name="age" type="number" class="form-control required number">
                            <p>(*) Mandatory</p>
                        </fieldset>

                        <h3>Tradeline</h3>
                        <fieldset class="form-input">
                            <h4>Tradeline Data</h4>

                            <label for="trade_type">Trade Type *</label>
                            <input id="trade_type" name="trade_type" type="text" class="form-control required">

                            <label for="account_number">Account Number *</label>
                            <input id="account_number" name="account_number" type="text" class="form-control required">

                            <label for="current_balance">Balance</label>
                            <input id="current_balance" name="current_balance" type="text" class="form-control">
                            <label for="withdrawals">Total Withdrawals</label>
                            <input id="withdrawals" name="withdrawals" type="number" class="form-control required number">
                            <label for="deposits">Deposit</label>
                            <input id="deposits" name="deposits" type="number" class="form-control required number">
                            <p>(*) Mandatory</p>
                        </fieldset>

                        <h3>Finish</h3>
                        <fieldset class="form-input">
                            <h4>Terms and Conditions</h4>

                            <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label
                                for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                        </fieldset>




                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright text-center">Task <a href="#">merchant subscribtion with admin scheduled
                        notification</a> @ Shaza Ali <a href="https://html.design/"></a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- jquery latest version -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- popper.min.js -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- jquery.steps js -->
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
<script src="{{asset('assets/js/jquery.steps.js')}}"></script>
<!-- particles js -->
<script src="{{asset('assets/js/particles.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        particlesJS("particles-js",
            {
                "particles": {
                    "number": {
                        "value": 160,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 1,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 1,
                            "opacity_min": 0,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 4,
                            "size_min": 0.3,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": false,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 1,
                        "direction": "none",
                        "random": true,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 600
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "bubble"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 250,
                            "size": 0,
                            "duration": 2,
                            "opacity": 0,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 400,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            }
        );
    });
</script>

<script>
    var form = $("#example-advanced-form").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex) {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },

        onFinished: function (event, currentIndex)
        {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var username = $("input[name=username]").val();
            var first_name = $("input[name=first_name]").val();
            var last_name = $("input[name=last_name]").val();
            var address = $("input[name=address]").val();
            var age = $("input[name=age]").val();
            var password = $("input[name=password]").val();
            var email = $("input[name=email]").val();
            var trade_type = $("input[name=trade_type]").val();
            var account_number = $("input[name=account_number]").val();
            var current_balance = $("input[name=current_balance]").val();
            var withdrawals = $("input[name=withdrawals]").val();
            var deposits = $("input[name=deposits]").val();


            $.ajax({
                type: 'POST',
                url: "http://127.0.0.1:8000/merchant/store",

                data: {
                    username: username, password: password,
                    email: email, first_name: first_name,
                    last_name: last_name, address: address,
                    age: age, trade_type: trade_type,
                    account_number: account_number,
                    current_balance: current_balance,
                    withdrawals: withdrawals,
                    deposits: deposits,

                },

                success: function (data) {

                    alert(data.success);
                }
            });

            // alert("Submitted!");
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
</script>



</body>
</html>

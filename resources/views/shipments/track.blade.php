

<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="tixia : tixia School Admission Admin  Bootstrap 5 Template" />
	<meta property="og:title" content="tixia : tixia School Admission Admin  Bootstrap 5 Template" />
	<meta property="og:description" content="tixia : tixia School Admission Admin  Bootstrap 5 Template" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
    <title>Track Shipment </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ URL::asset('public/asset/css/style.css')}}" rel="stylesheet">

</head>

<!-- <body class="vh-100" style="background-color:#0080e5;"> -->
<body class="vh-100" >

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Track Your Shipment</h4>
                                    <form method="POST" action="{{ route('trackedshipment')}}">
                        @csrf

                                        <div class="form-group">
                                            <label class="mb-1"><strong>{{ __('Enter your Tracking Number:') }}</strong></label>
                                            <input type="text"  class="form-control" id="tracking-number" name="tracking_id" required>
                                 
                                        </div>
                                    



                                    
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Track</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ URL::asset('public/asset/vendor/global/global.min.js')}}"></script>
	<script src="{{ URL::asset('public/asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ URL::asset('public/asset/js/custom.min.js')}}"></script>
    <script src="{{ URL::asset('public/asset/js/deznav-init.js')}}"></script>

</body>


</html>


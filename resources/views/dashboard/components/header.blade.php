{{-- @php
{{
    if (auth()->user()) {
        return view('pages.contact');
    }else{
		return view('pages.contact');
	}
}}
@endphp --}}

<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from themezhub.net/rikada-demo-05/rikada/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Aug 2022 21:08:58 GMT -->
<head>
	
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>Ozde properties</title>	
		
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="assets/css/colors.css" rel="stylesheet">
		<script 
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script>
		<style>
			.head_nav{
				display: none;
			}
			.side_bar{
				display: block;
			}
			@media only screen and (max-width: 674px) {
  .head_nav {
    display: block;
  }
  .side_bar{
	display: none;

  }
} .image_container{
        height: 120px;
        width: 200px;
        border-radius:20px;
        overflow: hidden;
        margin: 10px;
      }
      .image_container img{
        height: 100%;
        width: auto;
        object-fit: cover;

      }
      .image_container span{
        top: -8px;
        right: 12px;
        color: red;
        font-size: 30px;
        font-weight: normal;
        cursor: pointer;
      }



		</style>
		
    </head>
	
    <body class="green-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
			
			
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light head-shadow ">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape nav-collapse ">
						<div class="nav-header">
							<div class="nav-toggle"></div>
							
							<a class="nav-brand" href="/">
								<img src="logo.png" class="logo" alt="" style="margin-top:-10px " />
							</a>
							
						</div>
						<div class="nav-menus-wrapper  head_nav" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li class="active">
									<a href="#">Home</a>
									
									
								</li>
						
								
								<li><a href="JavaScript:Void(0);">properties<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="listings">Land</a></li>                                    
										<li><a href="listings">Houses</a></li>   
										
										
										
									</ul>
								</li>
								
								<li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="about">About us</a></li>                                    
										
										<li><a href="contact">Contact Us</a></li>
									</ul>
								</li>
								
								{{-- <li><a href="register" data-toggle="modal" data-target="#signup">Sign Up</a></li> --}}
								<li >
									<a href="login">
										Signup
									</a>

								</li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								<li >
									<a href="login">
										<i class="fas fa-user-circle mr-1"></i>Signin</a>
									</a>

								</li>
								
								{{-- <li>
									<a href="#" data-toggle="modal" data-target="#login">
										<i class="fas fa-user-circle mr-1"></i>Signin</a>
								</li> --}}
								<li class="add-listing theme-bg">
									<a href="add_property">Add Property</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
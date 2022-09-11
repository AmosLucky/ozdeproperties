@include('dashboard.components.header')
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Page Title Start================================== -->
			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Welcome!</h2>
							<span class="ipn-subtitle">Welcome To Your Account</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ User Dashboard ================================== -->
			<section>
				<div class="container-fluid">
								
					<div class="row">
						
						@include("dashboard.components.sidebar")
						
						<div class="col-lg-9 col-md-8">
							
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h4>Your Current Package: <span class="pc-title theme-cl">Gold Package</span></h4>
								</div>
							</div>
							
							<div class="row">
					
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-1">
										<div class="dashboard-stat-content"><h4>607</h4> <span>Listings Included</span></div>
										<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-2">
										<div class="dashboard-stat-content"><h4>102</h4> <span>Listings Remaining</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-3">
										<div class="dashboard-stat-content"><h4>70</h4> <span>Featured Included</span></div>
										<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-4">
										<div class="dashboard-stat-content"><h4>30</h4> <span>Featured Remaining</span></div>
										<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-5">
										<div class="dashboard-stat-content"><h4>Unlimited</h4> <span>Images / per listing</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-6">
										<div class="dashboard-stat-content"><h4>2021-02-26</h4> <span>Ends On</span></div>
										<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
									</div>	
								</div>

							</div>
							
				
					
							<div class="dashboard-wraper d-none">
							
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4>My Account</h4>
									<div class="submit-section">
										<div class="form-row">
										
											<div class="form-group col-md-6">
												<label>Your Name</label>
												<input type="text" class="form-control" value="Shaurya Preet">
											</div>
											
											<div class="form-group col-md-6">
												<label>Email</label>
												<input type="email" class="form-control" value="preet77@gmail.com">
											</div>
											
											<div class="form-group col-md-6">
												<label>Your Title</label>
												<input type="text" class="form-control" value="Web Designer">
											</div>
											
											<div class="form-group col-md-6">
												<label>Phone</label>
												<input type="text" class="form-control" value="123 456 5847">
											</div>
											
											<div class="form-group col-md-6">
												<label>Address</label>
												<input type="text" class="form-control" value="522, Arizona, Canada">
											</div>
											
											<div class="form-group col-md-6">
												<label>City</label>
												<input type="text" class="form-control" value="Montquebe">
											</div>
											
											<div class="form-group col-md-6">
												<label>State</label>
												<input type="text" class="form-control" value="Canada">
											</div>
											
											<div class="form-group col-md-6">
												<label>Zip</label>
												<input type="text" class="form-control" value="160052">
											</div>
											
											<div class="form-group col-md-12">
												<label>About</label>
												<textarea class="form-control">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="form-submit">	
									<h4>Social Accounts</h4>
									<div class="submit-section">
										<div class="form-row">
										
											<div class="form-group col-md-6">
												<label>Facebook</label>
												<input type="text" class="form-control" value="https://facebook.com/">
											</div>
											
											<div class="form-group col-md-6">
												<label>Twitter</label>
												<input type="email" class="form-control" value="https://twitter.com/">
											</div>
											
											<div class="form-group col-md-6">
												<label>Google Plus</label>
												<input type="text" class="form-control" value="https://googleplus.com/">
											</div>
											
											<div class="form-group col-md-6">
												<label>LinkedIn</label>
												<input type="text" class="form-control" value="https://linkedin.com/">
											</div>
											
											<div class="form-group col-lg-12 col-md-12">
												<button class="btn btn-theme" type="submit">Save Changes</button>
											</div>
											
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
			
			@include('dashboard.components.footer')
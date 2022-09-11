@include('layouts.header')
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<!-- ============================ Footer End ================================== -->
			
			<!-- Log In Modal -->
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="login-form">
								<form method="POST" action="{{ route('login') }}">
									@csrf

									<div class="row">
										<div class="col-12">
											<div>
											   @include('layouts.alert')
												
											</div>
										</div>
									</div>
								
									<div class="form-group">
										<label>Email</label>
										<div class="input-with-icon">
											<input type="email" name="email" class="form-control" placeholder="Email">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" name="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Login</button>
									</div>
								
								</form>
							</div>
							<div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
									<li><a href="#" class="btn connect-twitter"><i class="ti-twitter"></i>Twitter</a></li>
								</ul>
							</div>
							<div class="text-center">
								<p class="mt-5"><a href="#" class="link">Forgot password?</a></p>
							</div>
						</div>
					
				</div>
				<div class="col-md-3"></div>

			</div>
			<!-- End Modal -->
			

			@include('layouts.footer')
			
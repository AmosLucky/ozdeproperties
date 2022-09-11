@include('dashboard.components.header')
			<!-- ============================ Page Title Start================================== -->
			<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Submit Property</h2>
							<span class="ipn-subtitle">Just Submit Your Property</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Submit Property Start ================================== -->
			<section>
			
				<div class="container">
					<div class="row">
						{{-- <div class="col-lg-12 col-md-12">
						
							<div class="alert alert-success" role="alert">
							<p>Please, Sign In before you submit a property. If you don't have an account you can create one by <a href="#">Clicking Here</a></p>
							</div>
						
						</div> --}}
						
						<!-- Submit Form -->
						<div class="col-lg-12 col-md-12">
						
							<div class="submit-page">
								
								<!-- Basic Information -->
								<div class="form-submit">	
									<h3>Basic Information</h3>
									<div class="submit-section">
										<div class="form-row">
										
											<div class="form-group col-md-12">
												<label>Property Title<a href="#" class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></a></label>
												<input name="title" type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Status</label>
												<select id="status" name="type" class="form-control">
													<option value="">&nbsp;</option>
													<option value="rent">For Rent</option>
													<option value="sale">For Sale</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Property Category</label>
												<select id="ptypes" name="category" class="form-control">
													<option value="">&nbsp;</option>
													<option value="land">Land</option>
													<option value="house">House</option>
													
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Price</label>
												<input type="number" name="price" class="form-control" placeholder="USD">
											</div>
											
											<div class="form-group col-md-6">
												<label>Area (in sqaured meter)</label>
												<input type="number" name="area" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>Bedrooms</label>
												<select id="bedrooms" name="bedrooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
											
											<div class="form-group col-md-6">
												<label>Bathrooms</label>
												<select id="bathrooms" name="bathrooms" class="form-control">
													<option value="">&nbsp;</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Gallery -->
								<div class="form-submit">	
									<h3>Gallery</h3>
									<div class="submit-section">
										<div class="form-row">
										
											<div class="form-group col-md-12">
												<label>Upload Gallery</label>
												<form action="" class="dropzone dz-clickable primary-dropzone">
													<div class="dz-default dz-message">
														<i class="ti-gallery"></i>
														<span>Drag & Drop To Change Logo</span>
													</div>
												</form>
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Location -->
								<div class="form-submit">	
									<h3>Location</h3>
									<div class="submit-section">
										<div class="form-row">
										
											
											
											<div class="form-group col-md-6">
												<label>City</label>
												<input name="city" type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-6">
												<label>State</label>
												<input name="state" type="text" class="form-control">
											</div>
											
											
											<div class="form-group col-md-6">
												<label>Locality</label>
												<input name="location" type="text" class="form-control">
											</div>
											<div class="form-group col-md-6">
												<label>Country</label>
												<input name="country" type="text" class="form-control">
											</div>
											
										</div>
									</div>
								</div>
								
								<!-- Detailed Information -->
								<div class="form-submit">	
									<h3>Detailed Information</h3>
									<div class="submit-section">
										<div class="form-row">
										
											<div class="form-group col-md-12">
												<label>Description</label>
												<textarea class="form-control h-120"></textarea>
											</div>
										
										</div>
									</div>
								</div>
								
								<!-- Contact Information -->
								<div class="form-submit">	
									<h3>Contact Information</h3>
									<div class="submit-section">
										<div class="form-row">
{{-- 										
											<div class="form-group col-md-4">
												<label>Name</label>
												<input type="text" class="form-control">
											</div>
											
											<div class="form-group col-md-4">
												<label>Email</label>
												<input type="text" class="form-control">
											</div> --}}
											
											<div class="form-group col-md-4">
												<label>Phone (optional)</label>
												<input type="text" class="form-control">
											</div>
											
										</div>
									</div>
								</div>
								
								<div class="form-group col-lg-12 col-md-12">
									{{-- <label>Agreement *</label> --}}
									<ul class="no-ul-list">
										<li>
											<input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox">
											<label for="aj-1" class="checkbox-custom-label"> Terms and Conditions.</label>
										</li>
									</ul>
								</div>
								
								<div class="form-group col-lg-12 col-md-12">
									<button class="btn btn-theme" type="submit">Submit & Preview</button>
								</div>
											
							</div>
						</div>
						
					</div>
				</div>
						
			</section>
			<!-- ============================ Submit Property End ================================== -->
			
			@include('dashboard.components.footer')
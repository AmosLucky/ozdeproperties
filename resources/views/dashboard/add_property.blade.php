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
									<div class="container mt-3 w-100">

										<div class="card shadow w-100">
											<div class="card-header d-flex justify-content-between">
												<h4>Image Upload</h4>
												<form class="form"  method="post" id="form" >
													<input  type="file" name="image" id="image" multiple="" onchange="selectImage()" style="width:110px;" >
													<!-- <button class="btn btn-primary btn-sm" onclick="document.getElementById('image').click()">Choose Image</button> -->
												</form>
											</div>
											<div class="card-body d-flex flex-wrap justify-content-start" id="container">
									
									
												
												
											</div>
											<form id="form2" class="d-non">
												
											</form>
											  <button class="btn btn-primary" id="submit">SUMBIT</button>
										</div>
										
									</div>
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

			
<script type="text/javascript">

    $("#submit").click(function(){
//         var form = $('form2')[0]; 
// var formData = new FormData(form);
 

const form2 = document.getElementById("form2");
        if (form2.hasChildNodes()) {
            var fd = new FormData();
        for(i = 0; i < form2.length; i++){
            var files = form2.children[i].files[0];
        fd.append('image'+i.toString(),files);
        }
		
        fd.append("num_images",form2.length);
		//_token: '{{csrf_token()}}'
		fd.append("_token",'{{csrf_token()}}');
  // form2.removeChild(form2.children[0]);
   console.log(fd);
    $.ajax({
            url: '/uploadimage',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
               $('#file').val("");
               var counter = 0;

                if(response != 0){
                    alert(response.msg);
                 //  $('.preview').prepend($('<img>',{id:response,src:"../images/"+response,width:"100",height:"100"}));
                
                 // images.push(response);
                 


                 // counter ++;
                    //$("#img"+counter).attr("src",response); 
                    //$(".preview img"+counter).show(); // Display image element
                }else{
                    alert('Image was not accepted');
                }
            },
        });
}


        
    });
</script>


			{{-- <script>
				$(document).ready(function(){
					$("#submit").click(function(){

					})
					$.ajax({
               type:'POST',
               url:'/uploadImage',
               data:{_token: '{{csrf_token()}}'},
               success:function(data) {
                 alert(data.msg);
               }
            });
				});
			</script> --}}
			<!-- ============================ Submit Property End ================================== -->
			<script type="text/javascript">
				var images = [];
				function selectImage() {
					var image = document.getElementById('image').files;
					var file = document.getElementById('image').file;
					for( i =0; i < image.length; i++){
						images.push({
							"name":image[i].name,
							"url":URL.createObjectURL(image[i]),
							file: image[i]
			
						});
			
					}
					 var input = document.getElementById("image").cloneNode(true);
					 input.id = "new_element";
					 input.style.width = "100%";
					 // input.type = "file";
					 // input.value = image.value;
					 document.getElementById("form2").appendChild(input);
				   // console.log(images);
					document.getElementById('form').reset();
					document.getElementById('container').innerHTML= showImage();
				   
				}
				 function showImage() {
					// body...
					var image = "";
					images.forEach((i)=>{
						image += '<div class="image_container d-flex justify-content-center position-relative" id="con"> <img src="'+i.url+'" alt="image"><span type="button" class="position-absolute" onclick="deleteImage('+images.indexOf(i)+')">&times;</span></div>';
					});
					return image;
				}
			
				 function deleteImage(e) {
					console.log(e);
					images.splice(e,1);
					document.getElementById('container').innerHTML= showImage();
					const form2 = document.getElementById("form2");
					if (form2.hasChildNodes()) {
			  form2.removeChild(form2.children[e]);
			   //console.log(form2.length);
			}
			
				 }
			</script>
			
			
			@include('dashboard.components.footer')
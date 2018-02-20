<?php include"header.php"; ?>
			<div class="bg-wrapper aout-page">
				<section id="title-box" class="paralax bg-opacity-color vendor">
					<div class="wrapper">
			 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							
							<span class="subtitle"></span>
						</div>
					</div>
				</section>
				<section id="breadcrumbs" class="tooth tooth-green">
					<div class="section-bg">
						<div class="wrapper top-bug">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<ul>
									<li>
										<a href="index.php">Home</a>
									</li>
									<li>
										<span>Dealer</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<section class="title-center">
					<div class="wrapper">
                    
                    <div class="col-lg-3 col-md-3 crr">
							<div class="left-block-wrapper wow fadeInLeft">
								<div class="title-left-block">
									<h3 class="text-uppercase">products Categories</h3>
								</div>
								 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="myScrollspy">
                                 	
            <ul class="nav nav-tabs nav-stacked" data-offset-top="190" >
                <li><span class="fi flaticon-plants5 clr1"></span> <span><a href="plant_nutrition.php">Plant Nutrition</a></span></li>
                <li><span class="fi flaticon-plants5 clr1"></span> <span><a href="plant_protection.php">Plant Protection</a></span></li>
                <li><span class="fi flaticon-plants5 clr1"></span> <span><a href="soil_nutrition.php">Soil Nutrition</a></span></li>
                <li><span class="fi flaticon-plants5 clr1"></span> <span><a href="soil_conditioner.php">Soil Conditioner</a></span></li>
                
                
                
            </ul>
							</div>

					

							
							
						</div>
					</div>
                    
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="section-title-box title-box-center wow bounceInDown center">
                            <h3> DEALER REGISTRATION FORM </h3>
								<h3 style="color:#e04700"><marquee dir="ltr">Trade Enquiry required dealer in all district of M.P. , U.P. , Rajasthan , Bihar ..    </marquee></h3>
								
							</div>
						</div>
                        
                        
                    <br>
						<div class="contact-form-box">
								<div id="success"></div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								 <form class="form-horizontal" id="formvendor" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Name">Name:</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="username" placeholder="Enter Name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Name">Firm Name:</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="firmname" placeholder="Enter Firm Name" required>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="Email">Email Id:</label>
      <div class="col-sm-10">
      <input type="email" class="form-control" id="name" name="useremail" placeholder="Enter Email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Phone">Phone No.:</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="userphone" placeholder="Enter Phone #" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Name">Address:</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="useraddress" placeholder="Enter Address">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Name">Message:</label>
      <div class="col-sm-10 input-box textarea">
      <textarea id="" name="message" required> </textarea>
      </div>
    </div><br>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       <button class="button-border text-uppercase">
	   												<span id="message"></span>
													<span class="text-btn submit_but">Submit</span>
													<span class="borfer-btn"></span>
												</button>
      </div>
    </div>
  </form>
                                </div>
							</div>
					</div>
				</section>
                <br>
				
				
				<section class="box-tools-bg">
					<div class="wrapper">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="row-2-blocks wow bounceInDown center">
								<div class="r-block-1">
									<div class="c-content-block">
										<h2>We Provide 24 Hours Helpline</h2>
										<div>Friendly customer service staff for your all questions!</div>
									</div>
								</div>
								<div class="r-block-2">
									<div class="btn big-circle very-big-circle">
										<span class="ef icon_phone"></span>
										<span class="v-center">+91 9644020000</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tooth-color-black"></div>
				</section>
                
				
			</div>
			<?php include"footer.php"; ?>

<script type="text/javascript">
$(document).ready(function () { 
	$("form#formvendor").submit(function(e){
		e.preventDefault();
				$.ajax({
				url: "ajaxtrade.php",
				type: "POST",             // Type of request to be send, called as method
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,   // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(data)   // A function to be called if request succeeds
				{
					$("#message").html(data);
					$(".submit_but").hide();	
				}
				});
		});
});		
</script>						
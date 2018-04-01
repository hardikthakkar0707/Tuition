
	<div class="navbar navbar-inverse" style="margin-top:-25px;">
		
		<div class="container" style="padding-top: 1.5rem">
			<div class="navbar-header" style="margin-bottom: 10px;">
				<!-- Button for smallest screens -->


				<a class="navbar-brand" href='<?php echo base_url("index.php/welcome"); ?>'>

					<img src='<?php echo base_url("assets/images/logo.jpg"); ?>' alt="Logo" style="margin-top:0px;width: 150px; height:80px;">
				</a><br />

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>


			</div>

			<div class="navbar-collapse collapse"><br />
				
					<ul class="nav navbar-nav pull-right mainNav">
						<li><a href="<?php echo base_url('index.php/welcome'); ?>">Home</a></li>
						<li><a href="<?php echo base_url('index.php/welcome/#AboutUs'); ?>">About Us</a></li>
						<li>
							<a href="<?php echo base_url('index.php/welcome/#Faculty'); ?>">Profile of Faculty</a>
						</li>

						<li>
							<a href="<?php echo base_url('index.php/Topper_Controller/Toppers'); ?>">Toppers</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/GalleryDisplay_Controller/Gallery'); ?>">Gallery</a>
						</li>

						<?php if(!isset($_SESSION['facultyid']) && !isset($_SESSION['studentid'])){?>

						<!-- Without Login -->
						<li class="dropdown" style="cursor:pointer;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Login
							<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" style="background-color:white;">
								<li><a style="color: black;" data-toggle="modal" data-target="#student">Student</a></li>
								<li><a style="color: black;" data-toggle="modal" data-target="#faculty">Faculty</a></li>
							</ul>
						</li>
						<?php }else if(isset($_SESSION['studentid'])) {?>
							
						<!-- Student Logged in -->

						<li class="dropdown" >
    					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

    						<?php echo $_SESSION['stud_name']; ?>
    					<span class="caret"></span></a>
    					<ul class="dropdown-menu" style="background-color:white;">
      					<li><a href="<?php echo base_url('index.php/Student_Controller/ViewResults'); ?>" style="color: black;">My Dashboard</a></li>
      					<li><a href="" style="color: black;">My Announcement</a></li>
      					<li class="divider"></li>

      					<center>
      					<a href="<?php echo base_url("index.php/Student_Controller/LogOut"); ?>" class="btn btn-success" style="color: white;font-size: 12px;border-radius: 10px;margin-bottom:5px;"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
      					</center>
    					</ul>
  						</li>
  						<?php }elseif (isset($_SESSION['facultyid'])) {?>
  						
  						<!-- Faculty Logged in -->

  						<li class="dropdown" >
    					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

    						<?php echo $_SESSION['facultyname']; ?>
    					<span class="caret"></span></a>
    					<ul class="dropdown-menu" style="background-color:white;">
      					<li><a href="<?php echo base_url('index.php/Faculty_Controller/ViewResults'); ?>" style="color: black;">My Dashboard</a></li>
      					<li><a href="" style="color: black;">My Announcement</a></li>
      					<li class="divider"></li>
      					<center>
      					<a href="<?php echo base_url('index.php/Faculty_Controller/LogOut');?>" class="btn btn-success" style="color: white;font-size: 12px;border-radius: 10px;margin-bottom:5px;"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
      					</center>
    					</ul>
  						</li>
  						<?php } ?>


						<li><a href="<?php echo base_url('index.php/ContactUS_Controller/ContactUs'); ?>">Contact Us</a></li>



						<div class="contact_info">
							&nbsp;<span><i class="fa fa-phone"></i> &nbsp;+91 9876543210 </span>
						</div>
					</ul>
					
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	<!-- /.navbar -->




<!-- Student Modal -->
  <div class="modal fade" id="student" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;font-size:28px;">Student Login</h4>
        </div>
        <div class="modal-body">
          <form accept-charset="UTF-8" role="form" action="<?php echo base_url('index.php/Student_Controller/Student'); ?>" Method="POST"> 
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="email" type="text" required="true">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
							</div>
							<center>
								<a href="">Forgot Password?</a>
								<br>
							<input class="btn btn-lg" type="submit" value="Login" style="margin-top: 30px;border-radius: 20px 20px">
						
							
							</center>

						</fieldset>
					</form>
        </div>
       
      </div>
      
    </div>
  </div>


  <!-- Faculty Modal -->

  <div class="modal fade" id="faculty" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
      	<center>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;font-size:28px">Faculty Login</h4>
        </div>
        <div class="modal-body">
          <form accept-charset="UTF-8" role="form" method="post" action="<?php echo base_url('index.php/Faculty_Controller/Staff_Login'); ?>">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="email" type="email" required="true">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
							</div>
							<center>
								<a href="">Forgot Password?</a> <br>
							<input class="btn btn-lg" type="submit" value="Login" style="margin-top: 30px;border-radius: 20px 20px">
						
							
							</center>

						</fieldset>
					</form>
        </div>
       
      </div>
      
    </div>
  </div>
  
	
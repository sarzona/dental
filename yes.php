<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar_dasboard.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="span3">
					    <ul class="nav nav-tabs nav-stacked">
							<li class="active">
							<a href="#"><i class="icon-pencil icon-large"></i>&nbsp;Create Account</a>
							</li>
					
						</ul>
						<p><strong>Today is:</strong></p>
				 <div class="alert alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('d:m:y');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>		
						<div class="alert alert-info">Time Guide for Each Number</div>
						<p>Number 1  - 9:30 - 10:00</p>
						<p>Number 2  - 10:00 - 10:30</p>
						<p>Number 3  - 10:30 - 11:00</p>
						<p>Number 4  - 11:30 - 12:00</p>
						<p>Number 5  - 12:30 - 1:00</p>
						
						<p>Number 6  - 3:00 - 3:30</p>
						<p>Number 7  - 3:30 - 4:00</p>
						<p>Number 8  - 4:30 - 5:00</p>
					
					
					
				<div class="alert alert-info">Office Hours</div>
						<p>Monday - Firday (9:30 am to 1:00 pm)</p>
						<p>Monday - Friday (3:00 pm to 5:00 pm)</p>
						<p>Room 312</p>
						<p>Saturday(half day)</p>
						<p>(9:30 pm to 1:00 pm)</p>
						<p>Roxas Public Market Bagumbayan, </p>
						<p>Roxas Oriental Mindoro</p>
						
					
					
					
				<div class="alert alert-info">Testimonial</div>
				<div class="testimonial_div">
					<p>
					I was delighted with the treatment. Despite me being a somewhat difficult patient Dr. Ruel S. Taytay was really gentle, patient and understanding.
					The treatment was explained precisely to me and the price was quoted right at the beginning which is exactly what the price was at the end.
					The transformation to my teeth and to my life in general has been amazing. 
					I know have a smile that I’m not afraid to show anymore. I am extremely happy with the quality of the treatment.
					</p>
					</div>		
				</div>
				<div class="span6">
					<img src="img/44.png">
					<br>
					<br>
					
				<div class="alert alert-info">Select Date of Appointment and Service Offer</div>

		<!-- reservation -->
		<?php if (isset($_POST['yes'])){ 
		$session_id = $_POST['session_id'];
		$date1 = $_POST['date1'];
		$service1 = $_POST['service1'];
		$equal = $_POST['equal'];
		mysqli_query($conn,"insert into schedule (member_id,date,service_id,number,status) values('$session_id','$date1','$service1','$equal','Pending')")or die(mysqli_error($conn));
		?>
		<div class="yes"><h3>Your appointment has been set on  <?php echo  $date1; ?>. THANK YOU</h3></div>
		<?php }else{ ?>
		<script>
		alert('error');
		</script>
		<?php } ?>
		<br>
		<br>
	
	<!-- end reservation -->
	


	
	
	
				</div>
				<div class="span3">
				<img src="img/32x32/facebook.png">
				<img src="img/32x32/twitter.png">
				<img src="img/32x32/rss.png">
				<div class="alert alert-info">List of Services</div>
						<table class="table  table-bordered">
                            
                                <thead>
                                    <tr>
                                        <th>Service Offer</th>
                                        <th>Price</th>                                 
                                     
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysqli_query($conn,"select * from service")or die(mysqli_error($conn));
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['service_id']; ?>
									 <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['service_offer']; ?></td> 
                                    <td><?php echo $row['price']; ?></td>                         
									<?php } ?>
                           
                                </tbody>
                            </table>
				<div class="alert alert-info">Dr. Terry Lee</div>	
					<img  class="img img-polaroid" src="images/c.jpg">
				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
<html>

<head>
	<title> Mind of Medical</title>

	<link rel="stylesheet" href="font/css/all.css">
	<link rel="stylesheet" href="css/moms.css">
	<link rel="stylesheet" href="css/mediamoms.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="icon" type="image/x-icon" href="img/moma.jpg">


	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>


	<div class="heading">
		<div class="logo">
			<h1 class="logo-heading"><b><i> Mind of Medical</i></b></h1>
			<img name="slide" class="logo-img" src="img/her.jpg" height="20px">
		</div>

		<div class="anchor">

			<a href="index.php">
				<li class="li-home"><i class="fas fa-home"></i> Home</li>
			</a>
			<a href="html/about.html">
				<li class="li-home"><i class="fab fa-app-store-ios"></i> About</li>
			</a>

			<li class="li-home"><i class="fab fa-envira"></i> Gallery</li>
			<a href="html/contribute/contribute.html">
				<li class="li-home"><i class="fas fa-comment-dollar"></i> Contribute</li>
			</a>


		</div>

	</div>




	<div class="left-division">
		<div class="left-division-heading">
			<p><b>Search for Diesease & Treatments <i class="fas fa-sort-alpha-down"></i></b></p>

		</div>
		<div class="left-division-dieses">
			<ul>

				<b> <?php

					include "admin/connection.php";

					$sql = "SELECT * FROM disease ";
					$query = mysqli_query($con, $sql) or die("Query Failed!!");


					while ($rows = mysqli_fetch_array($query)) {

					?>
						<a href="html/disease/bloodpressure/disease.php?id=<?php echo $rows['disease_id'] ?>">
							<li class="dieses"><?php echo $rows['disease_name'] ?></li>
						</a>
					<?php } ?>



					<a href="html/disease/asthma/asthma.html">
						<li class="dieses">Asthma</li>
					</a>
					<a href="html/disease/blood cancer/bloodcancer.html">
						<li class="dieses">Blood-cancer</li>
					</a>
					<a href="html/disease/bloodpressure/bp.html">
						<li class="dieses">Blood-pressure</li>
					</a>
					<a href="html/disease/breast cancer/breastcancer.html">
						<li class="dieses">Breast-cancer</li>
					</a>
					<a href="html/disease/common cold/commoncold.html">
						<li class="dieses">Common-Cold</li>
					</a>
					<a href="html/disease/diabetes/diabetes.html">
						<li class="dieses">Diabetes</li>
					</a>
					<a href="html/disease/disjoints/disjoint.html">
						<li class="dieses">Dislocation</li>
					</a>
					<a href="html/disease/dengue/dengue.html">
						<li class="dieses">Dengue</li>
					</a>
					<a href="html/disease/depression/depression.html">
						<li class="dieses">Depression</li>
					</a>
					<a href="html/disease/fever/fever.html">
						<li class="dieses">Fever</li>
					</a>
					<a href="html/disease/flue/flue.html">
						<li class="dieses">Flue</li>
					</a>
					<a href="html/disease/heart attack/heartattack.html">
						<li class="dieses">Heart-Attack</li>
					</a>
					<a href="html/disease/kidney stone/kidneyston.html">
						<li class="dieses">Kidney-Stone</li>
					</a>
					<a href="html/disease/mensuration/mensuration.html">
						<li class="dieses">Mensuration</li>
					</a>
					<a href="html/disease/migraine/migraine.html">
						<li class="dieses">Migraine</li>
					</a>
					<a href="html/disease/pimples/pimples.html">
						<li class="dieses">Pimples</li>
					</a>
					<a href="html/disease/pneumonia/pneumonia.html">
						<li class="dieses">Pneumonia</li>
					</a>
					<a href="html/disease/sore throat/sorethroat.html">
						<li class="dieses">Sore-throat</li>
					</a>
					<a href="html/disease/stroke/stroke.html">
						<li class="dieses">Stroke</li>
					</a>
					<a href="html/disease/wrinkles/wrinkles.html">
						<li class="dieses">Wrinkles</li>
					</a>



					<div class="left-division-view">
						<a class="view" href="html/medicines/medicine2.html">View All <i class="far fa-hand-point-right"></i></a>
					</div>

				</b>
			</ul>
		</div>




	</div>





	<div class="e g">


		<div class="top-middle-division">
			<marquee>
				-"How very little can be done under the spirit of fear."</marquee>
		</div>







<?php 
	include "admin/connection.php";

	  $sql = "SELECT * FROM post";
	  $query = mysqli_query($con, $sql) or die("Query Failed");
	
	  while ($row = mysqli_fetch_assoc($query)) {

?>



						
		<div class="middle-division" data-aos="fade-right">
			<img class="middle-division-img" src="admin/html/post/post_img/<?php echo $row['image']; ?>" height="80px" width="90px">
			<div class="middle-division-heading"><a href="../momss/html/disease/stroke/stroke.html">
					<h5><?php echo (substr($row['title'],0,47) ."...");  ?></h5>
			</div>
			<p class="middle-division-text">

		
			<?php echo (substr($row['descreption'],0,227) ."...");  ?>
			</p>
			</a>

			<a class="a_mid_div" href="html/disease/stroke/stroke.html">
				<div class="read-more">
					<p>Read more</p>
				</div>
			</a>

		</div>

<?php } ?>










		<div class="middle-division" data-aos="fade-right">
			<img class="middle-division-img" src="img/magnet.jpg" height="80px" width="90px">
			<div class="middle-division-heading"><a href="../momss/html/disease/stroke/stroke.html">
					<h5>Magnetic body after covid second dose in nepal..</h5>
			</div>
			<p class="middle-division-text">

			Over the past few weeks, several posts and video clips claiming
			 Covid-19 vaccines can make people magnetic are doing the rounds 
			 on social media. The video clips show metal spoons, coins, plates and keys sticking to people’s 
			bodies...
			</p>
			</a>

			<a class="a_mid_div" href="html/disease/stroke/stroke.html">
				<div class="read-more">
					<p>Read more</p>
				</div>
			</a>

		</div>



		<div class="middle-division" data-aos="fade-right">
			<img class="middle-division-img" src="img/stroke.webp" height="80px" width="90px">
			<div class="middle-division-heading"><a href="../momss/html/disease/stroke/stroke.html">
					<h5>Everything you need to know about stroke...</h5>
			</div>
			<p class="middle-division-text">

				A stroke is a medical condition in which poor blood flow to the brain results in cell death.
				There are two main types of stroke: ischemic, due to lack of blood flow, and hemorrhagic, due to bleeding...
			</p>
			</a>

			<a class="a_mid_div" href="html/disease/stroke/stroke.html">
				<div class="read-more">
					<p>Read more</p>
				</div>
			</a>

		</div>


		<div class="middle-division">
			<img class="middle-division-img" src="img/corona-1.jpg" height="80px" width="90px">
			<div class="middle-division-heading">
				<h5>What to Do If You Think You Have the New Coronavirus Symptoms..</h5>
			</div>

			<p class="middle-division-text">


				If you are diagnosed to have coronavirus but your symptoms are mild, you can isolate at home.
				Separate yourself from the others who live there,
				including your pets. Do not have any direct contact with your families.
			</p>


			<div class="read-more">
				<p>Readmore</p>
			</div>

		</div>





		<div class="middle-division">
			<img class="middle-division-img" src="img/sharp-pain.webp" height="80px" width="90px">
			<div class="middle-division-heading">
				<h5>What can cause sharp pain in the eye?..</h5>
			</div>
			<p class="middle-division-text">

				Sharp eye pain can stem from many causes. Without treatment,
				some of these issues can lead to vision loss and other serious complications.<br>
				In this article, we discuss seven causes of sharp eye pain and when to see a doctor.
			</p>


			<div class="read-more">
				<p>Readmore</p>
			</div>

		</div>


		<div class="middle-division" data-aos="fade-right">
			<img class="middle-division-img" src="img/stroke.webp" height="80px" width="90px">
			<div class="middle-division-heading">
				<h5>Everything you need to know about stroke...</h5>
			</div>
			<p class="middle-division-text">

				A stroke is a medical condition in which poor blood flow to the brain results in cell death.
				There are two main types of stroke: ischemic, due to lack of blood flow, and hemorrhagic, due to bleeding...
			</p>


			<div class="read-more">
				<p>Readmore</p>
			</div>

		</div>







		<div class="middle-division" data-aos="fade-left">
			<img class="middle-division-img" src="img/stroke.webp" height="80px" width="90px">
			<div class="middle-division-heading">
				<h5>Everything you need to know about stroke...</h5>
			</div>
			<p class="middle-division-text">

				A stroke is a medical condition in which poor blood flow to the brain results in cell death.
				There are two main types of stroke: ischemic, due to lack of blood flow, and hemorrhagic, due to bleeding...
			</p>


			<div class="read-more">
				<p>Readmore</p>
			</div>

		</div>




		<div class="middle-division" data-aos="fade-right">
			<img class="middle-division-img" src="img/stroke.webp" height="80px" width="90px">
			<div class="middle-division-heading">
				<h5>Everything you need to know about stroke...</h5>
			</div>
			<p class="middle-division-text">

				A stroke is a medical condition in which poor blood flow to the brain results in cell death.
				There are two main types of stroke: ischemic, due to lack of blood flow, and hemorrhagic, due to bleeding...
			</p>


			<div class="read-more">
				<p>Readmore</p>
			</div>

		</div>




		<div class="middle-division" data-aos="fade-left">
			<img class="middle-division-img" src="img/stroke.webp" height="80px" width="90px">
			<div class="middle-division-heading">
				<h5>Everything you need to know about stroke...</h5>
			</div>
			<p class="middle-division-text">

				A stroke is a medical condition in which poor blood flow to the brain results in cell death.
				There are two main types of stroke: ischemic, due to lack of blood flow, and hemorrhagic, due to bleeding...
			</p>


			<div class="read-more">
				<p>Readmore</p>
			</div>

		</div>




		<div class="middle-division" data-aos="fade-right">
			<img class="middle-division-img" src="img/stroke.webp" height="80px" width="90px">
			<div class="middle-division-heading">
				<h5>Everything you need to know about stroke...</h5>
			</div>
			<p class="middle-division-text">

				A stroke is a medical condition in which poor blood flow to the brain results in cell death.
				There are two main types of stroke: ischemic, due to lack of blood flow, and hemorrhagic, due to bleeding...
			</p>


			<div class="read-more">
				<p>Readmore</p>
			</div>

		</div>




		<div class="middle-division" data-aos="fade-left">
			<img class="middle-division-img" src="img/stroke.webp" height="80px" width="90px">
			<div class="middle-division-heading">
				<h5>Everything you need to know about stroke...</h5>
			</div>
			<p class="middle-division-text">

				A stroke is a medical condition in which poor blood flow to the brain results in cell death.
				There are two main types of stroke: ischemic, due to lack of blood flow, and hemorrhagic, due to bleeding...
			</p>


			<div class="read-more">
				<p>Readmore</p>
			</div>

		</div>



		<div class="middle-division" data-aos="fade-right">
			<img class="middle-division-img" src="img/stroke.webp" height="80px" width="90px">
			<div class="middle-division-heading">
				<h5>Everything you need to know about stroke...</h5>
			</div>
			<p class="middle-division-text">

				A stroke is a medical condition in which poor blood flow to the brain results in cell death.
				There are two main types of stroke: ischemic, due to lack of blood flow, and hemorrhagic, due to bleeding...
			</p>


			<div class="read-more">
				<p>Readmore</p>
			</div>

		</div>



		<?php


		?>






		<!-- this div is for contact form -->

		<div class="quick_link" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

			<div class="contact_form">

				<h3 class="Review"> Message US!!</h3>
				<div class="alert">Your message has been successfully sent !!..</div>
				<form id="contactForm" action="message.php" method="POST">
					<label for="fname">Full Name :</label>
					<input type="text" id="name" name="fname" placeholder="Enter your name.." required>


					<label for="fname">Contact :</label>
					<input type="text" id="contact" name="contact" placeholder=" Not Necessary...">


					<label for="lname">Email :</label>
					<input type="email" id="email" name="email" placeholder="Enter your Email Id.." required>


					<label for="subject">Message :</label>
					<textarea id="message" name="subject" placeholder="Write Your Query, Thoughts, Message, Response..." required style="height:50px"></textarea>

					<button type="submit" value="Submit">Submit</button>
				</form>
			</div>


		</div>





	</div>




	<div class="right_container">

		<div class="holder">
			<div class="right-division-1">
				<a href="html/medicines/medicines.html">
					<li class="li-home"><i class="fas fa-pills"></i> Medicines</li>
				</a>
			</div>


			<div class="right-division-2">
				<a href="html/Contacts/contact.html">
					<li class="li-home"><i class="far fa-address-book"></i> Contact's</li>
				</a>
			</div>
			<div class="right-division-3">

				<a href="html/hospital/hospital.html">
					<li class="li-home"><i class="far fa-address-book"></i> Hospital's</li>
				</a>
			</div>

			<div class="right-division-4">
				<a href="html/frontend/doctors-list.php">
					<li class="li-home"><i class="fas fa-user-graduate"></i> Doctor's</li>
				</a>
			</div>

			<div class="right-division-5">
				<a href="html/covid.html">
					<li class="li-home"><i class="fas fa-pills"></i> Covid-19</li>
				</a>
			</div>




		</div>
			<!-- sliding part -->
			<div class="galleryContainer">
				<div class="slideShowContainer">
				<div id="playPause" onclick="playPauseSlides()"></div>
				<div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
				<div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
				<div class="captionTextHolder">
					<p class="captionText slideTextFromTop"></p>
				</div>
				<div class="imageHolder">
					<img src="img/moma.jpg">1366X768
					<p class="captionText"></p>
				</div>
				<div class="imageHolder">
					<img src="img/co-info.jpg">
					<p class="captionText">covid-info</p>
				</div>
				<div class="imageHolder">
					<img src="img/covid-help.jpg">
					<p class="captionText">covid-prevention.</p>
				</div>


				</div>
				<div id="dotsContainer"></div>
			</div>

		<!-- <div class="slider">
			<style>
				.slider {
					background-color: red;
					height: auto;
					width: auto;
					position: absolute;
					z-index: 52122200;
				}

				img {
					z-index: 50221201;
				}
			</style>

			<img src="img/covid-help.jpg" name="slide" width="431.5px" height="289px">
			<script>
				var i = 0;
				var images = [];
				var time = 3000;

				// image list
				images[0] = "img/moma.jpg";
				images[1] = "img2.jpg";
				images[2] = "img3.jpg";
				images[3] = "img4.jpg";

				//change image function 

				function changeImg() {
					document.slide.src = images[i];

					if (i < images.length - 1) {
						i++;
					} else {
						i = 0;
					}
					setTimeout("changeImg()", time);
				}
				window.onload = changeImg;
			</script>

		</div> -->
	</div>

	<script src="js/myScript.js"></script>
	
</body>


</html>
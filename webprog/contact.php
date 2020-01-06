<?php 
	print '
	<h1>Contact Form</h1>
	<div id="contact">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2843.215332083698!2d14.882911351356435!3d44.55169667899819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47624a260452ddef%3A0x3d293e40509bfcdc!2sSlatinska%20ul.%2014-18%2C%2053291%2C%20Novalja!5e0!3m2!1shr!2shr!4v1578082186739!5m2!1shr!2shr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			<form action="http://work2.eburza.hr/pwa/responzive-page/send-contact.php" id="contact_form" name="contact_form" method="POST">
				<label for="fname">Vaše ime *</label>
				<input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>

				<label for="lname">Vaše prezime *</label>
				<input type="text" id="lname" name="lastname" placeholder="Vaše prezime.." required>
				
				<label for="lname">Vaš E-mail *</label>
				<input type="email" id="email" name="email" placeholder="Vaš E-mail.." required>

				<label for="country">Zemlja</label>
				<select id="country" name="country">
				  <option value="">Odaberite</option>
				  <option value="FR">France</option>
				  <option value="HR" selected>Croatia</option>
				  <option value="IT">Italy</option>
				  <option value="DE">Germany</option>
				</select>

				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Napišite nešto.." style="height:200px"></textarea>

				<input type="submit" value="Submit">			
		</form>
	</div>';
?>
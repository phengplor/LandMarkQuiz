<?php 
$pageTitle = 'Contact Us';

include "includes/header.html.php"; ?>
  <section>
    <h2 class="noDisplay">Contact Us</h2>
    <article class="left_article">
      <h3>How can we help you?</h3>
      <?php 
//		$name = isset($_POST['name']) ? $_POST['name'] : '';
//		$email = isset($_POST['email']) ? $_POST['email'] : '';
//		$message = isset($_POST['message']) ? $_POST['message'] : '';
		
		// 'name' and 'Anonymous' are ARGUMENTS
		$name = formVal('name', 'Anonymous');
		$email = formVal('email');
		$message = formVal('message');
		
//		if(isset($_POST['submit'])):
		if(formVal('submit')):
			// send an email
			$headers = "From: $name <$email>";
			$sent = mail("tkowalch@wctc.edu", "Message from site user", $message, $headers);
		
			if($sent){
				echo '<h4>Thank you for your message!</h4>';
			}else{
				echo '<h4>Uh oh... something went wrong :(</h4>';
			}
		else:
		?>
	  <form method="post">
	    <p>
	      <label for="name">Name</label>
	      <br>
	      	<input type="text" name="name" id="name" size="40" required>
        </p>
	    <p>
	      <label for="email">Email</label>
	      <br>
			<input type="email" name="email" id="email" size="40" required>
        </p>
	    <p>
	      <label for="message">Message</label>
	      <br>
			<textarea name="message" id="message" rows="5" cols="40" required></textarea>
	    </p>
	    <p>
	      <input type="submit" name="submit" id="submit" value="Send">
	    </p>
	  </form>
	  <?php endif; ?>
    </article>
    <aside class="right_article"><img src="images/placeholder.jpg" alt="" width="400" height="200" class="placeholder"/> </aside>
  </section>
<?php include "includes/footer.html.php"; ?>
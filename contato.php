
<?php /* Template Name: contato */ ?>

<?php 
get_header();
?>
<div class="container">

	<div class="contact-wrap">
		<div class="contact-wrap-panel">	
			<p>eu sou</p>
			<div class="row bottom-md">
				<div class="col-md-5">

					<img class="photo-contact" src="http://localhost/wordpress/wp-content/uploads/2017/07/tamy2.jpg" alt="retrato Tamy Rente" />
				</div>
				<div class="col-md-6 col-md-offset-1">
					<p>I'm a 25 year old designer, art director, coder and music producer. I'm self–taught and constantly learning. I speak english, spanish, russian, armenian and catalan.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-wrap">
		<div class="contact-wrap-panel">
			<p>let's talk</p>
			<div class="row">
				<div class="col-md-5">
					<p>follow me on —</p>
					<a href="#">Instagram revista Crescer, </a>
					<a href="#">Instagram Estúdio Sugoi, </a>
					<a href="#">Facebook, </a>
					<a href="#">Linkedin.</a>
					
				</div>
				<div class="col-md-6 col-md-offset-1">
					<p>diga oi!</p>
					<p>por e-mail: <a href="mailto:tamy.rente@gmail.com">tamy.rente@gmail.com</a></p>
					<p>ou por aqui</p>


					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						// Include the page content template.
						echo the_content();

					// End the loop.
					endwhile;
					?>

<!-- 					<form id="contact-form" name="contact-form" method="post" novalidate="novalidate">
					  <div class="name inp-grp">
					    <label for="name" id="name">name :</label>
					    <input type="text" id="name" name="name">
					  </div>
					  <div class="email inp-grp">
					    <label for="email" id="email">email :</label>
					    <input type="text" id="email" name="email">
					  </div>
					  <div class="message inp-grp">
					    <label for="message" id="message">message :</label>
					    <textarea name="message" rows="4"></textarea>
					  </div>
					  <div class="deco">
					    <div class="line line-1"></div>
					    <div class="line line-2"></div>
					  </div>
					  <div class="send-button">
					    <input type="submit" id="submit" value="">
					  </div>
					  <div class="contact-sent">
					    <p class="sent-message"><span>message sent! </span>I'll get back to you soon</p>
					  </div>
					</form> -->


				</div>
			</div>
		</div>
	</div>
</div>	





<?php
get_footer();
?>
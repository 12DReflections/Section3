<!doctype html>
<HTML>
    <head>
        <title>Main Page</title>
        <?php include './head.php';?>
    </head>
    <body>
        <div class="container">
            <?php include './header.php'; ?>
            <?php include './navbar.php'; ?>
           
	    <main>
				<div class="main_div">
		<h1>Contact Us</h1>
		<form action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php" method="post">

			<div>
				<p class="contact_p">Email:<span>*</span></p>
				</div>
				<div>
				<input type="text" name="email" id="email" class="contact_input" onblur="lose_check_email()" value="example@hostname.com" onfocus="focus_check_email()" />
				<span id="email_p" class="contact_span">Please enter your Email</span>
				</div>	
			<div>
			<p class="contact_p">Subject</p>
			</div>
			<div>
				<select name="subject" id="subject" class="contact_select">
					<option value="General Enquiry">General Enquiry</option>
					<option value="Group and Corporate Bookings">Group and Corporate Bookings</option>
					<option value="Suggestions & Complaints">Suggestions & Complaints</option>
				</select>
			</div>
			
			<div>
				<p class="contact_p">Message:<span>*</span></p>
				</div>
				<div>
				<textarea class="contact_textarea" name="message" id="message"  onfocus="focus_check_message()" onblur="lose_check_message()">--Please Enter Your Message--</textarea>
				<span id="message_p" class="contact_span">Please enter your Message</span>
				</div>
			<div class="contact_button">
				<button id="contact_sub_btn" onClick="contact_submit()" disabled>Submit</button>
			</div>
		</form>
		</div>
	</main>
			</div>
            <footer></footer>
        </div>  
    </body>
</HTML>

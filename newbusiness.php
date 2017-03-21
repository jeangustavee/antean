<?php include("head.php"); ?>
<style>
.col{
        border: 1.5px solid lightgray;
        padding: 10px;
    }
h3, p{
        margin: 10px;
        color: gray;
}

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.img {
  position: relative;
  border: 1px solid #333;
  margin: 2%;
  overflow: hidden;
  width: 540px;
}
img {
  max-width: 100%;

  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

    b {
        font-weight: 800;
        text-transform: uppercase;
    }
</style>
<?php include("menu.php"); ?>
<body>
	<div class="top-page">
            <img src="img/Antean_newbusiness.png" width="42%">
            <h1>Need to revamp your empire? <br>Well, get in touch</h1>
	</div>
        <div class="container">
        <h3>Gosh! Too many ways to get in touch with us!</h3>
            <p>If you would like to hire us for your next project you can <a href="mailto:hey@anteanstudios.com?subject=New%20business">send us an email</a> or for more details, just fill out the form below. </p>
<br><br>

       <!-- application submit status -->
        <?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>
        <!-- end status -->

        <form action="send" method="post">
  <div class="col-2">
      <label>
      <input name="name" placeholder="Your Name" tabindex="1" required="" />
      </label>
  </div>
  <div class="col-2">
    <label>
      <input name="company" placeholder="Your Company Name" tabindex="2" />
    </label>
  </div>
            <div class="col-2">
    <label>
      <input name="email" placeholder="Email Address" tabindex="3" />
    </label>
  </div>
  <div class="col-2">
    <label>
      <input name="phone" placeholder="Phone Number" tabindex="4" />
    </label>
  </div>

  <div class="col-2">
    <label>
      <select name="project" tabindex="5">
        <option value="None">What type of project</option>
        <option value="design">Brand/Identity Design</option>
        <option value="website">Website</option>
        <option value="app">Application Development</option>
        <option value="social-media">Social Media Marketing</option>
        <option value="photovideo">Photo/video production</option>
        <option value="other">Other</option>
      </select>
    </label>
  </div>
          <div class="col-2">
    <label>
      <select name="budget" tabindex="6">
        <option value="None">Budget</option>
        <option value="unsure">Not sure</option>
        <option value="under500">Under $500</option>
        <option value="under1000">Under $1000</option>
        <option value="1000">$1,000+</option>
        <option value="1500">$1,500+</option>
        <option value="2000">$2,000+</option>
        <option value="last">$,2000 - $10,000</option>
      </select>
    </label>
  </div>
           <div class="col-1">
    <label>
      <input name="website" placeholder="Exhisting Website (if applicable)" tabindex="7" />
    </label>
  </div>
            <div class="col-1">
            <label>
                <textarea name="message" placeholder="Tell us about your project" tabindex="8"></textarea>
                </label>
            </div>
						<div class="col-1">
					    <label>
					      <input name="hear" placeholder="How did you hear about us?" tabindex="9" />
					    </label>
					  </div>
  <div class="col-submit">
    <input type="submit" name="submit" value="Submit">
  </div>
</form>

    </div>

     <?php include("footer.php"); ?>

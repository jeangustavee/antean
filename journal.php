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
            <img src="img/Antean_News.png" width="42%">
            <h1>We don't take it to ourself, <br>we share it with the world.</h1>
	</div>
        <div class="container">
        <h1>OUR JOURNAL</h1><br><br>
            
            <!-- featured article -->
        <img src="img/journal/2017_winter_internship.jpg" width="100%">
	
        <h3>2017 SPRING INTERNSHIP</h3>
            <p>We are looking for a rockstar Graphic Design intern to work with our Creative Department.</p> 

            <p>This position is non-paid and ideal for current students seeking college credit, and recent graduates looking for experience in the field of advertising and marketing.</p>

            <p><b>Schedule:</b> Spring Semester (3 – 5 months - depending on amount of hours). Hours are flexible and can be arranged according to a student’s academic/work schedule.
</p>
        <p style="color:red"><a href="2017_spring_internship.php">Read more +</a>  </p>	
            <br><br><br>
            
              <!-- more artiles -->
         <div class="section group">
             <hr><br>
	<div class="col span_1_of_2">
        <img src="img/journal/11.jpg" width="100%"><br>
        <h3>PROPEURBS WORKSHOP</h3>
        <p>PROPEURBS is a one-day workshop for creative entrepreneurs, small business owners and anyone looking to Spark Results... <a href="propeurbs_workshop.php">Read more +</a> </p>
	</div>
             
	<div class="col span_1_of_2">
        <img src="img/journal/12.jpg" width="100%"><br>
        <h3>CELEBRATING OUR NEW WEBSITE</h3>
        <p>We also have to keep in mind that this new website is essentially a modern website with a minimal aspect, but contoured with our principles... <a href="website_celebration.php">Read more +</a></p>
        
	</div>
            </div>   
            <br><br><br>
            
           
    </div>
    
     <?php include("footer.php"); ?>
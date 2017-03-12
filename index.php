<?php include("head.php"); ?>
<style>
/*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }

/*  GRID OF FOUR  */
.span_4_of_4 {
	width: 100%;
}
.span_3_of_4 {
	width: 74.6%;
}
.span_2_of_4 {
	width: 49.2%;
}
.span_1_of_4 {
	width: 23.8%;
}

/*  GO FULL WIDTH BELOW 480 PIXELS */
@media only screen and (max-width: 480px) {
	.col {  margin: 1% 0 1% 0%; }
	.span_1_of_4, .span_2_of_4, .span_3_of_4, .span_4_of_4 { width: 100%; }
}
</style>

<body>
	<main>
		<h1></h1>
        <p>Moringa Lakay is a natural product imported from Haiti. We are happy to be the agency developping the brand in the US.<br>  
           <a href="#"> <button1 type="button">CASE STUDY</button1></a> </p>
	</main>

	<?php include("menu.php"); ?>

		<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
										<span class="image">
											<img src="img/casting/modeling-cover.jpg" alt="" />
										</span>
										<header class="major">
											<h3><a href="casting/">CASTING CALL</a></h3>
											<p>Journal</p>
										</header>
									</article>

            	<article>
									<span class="image">
                      <img src="img/propeurbs-workshop-thumb.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="propeurbs_workshop">PROPEURBS WORKSHOP</a></h3>
										<p>Journal</p>
									</header>
							</article>

								<article>
									<span class="image">
										<img src="img/nousho/nousho_businesscard_mockup_2.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="nousho">NOUSHO</a></h3>
										<p>Identity + Advertising</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="img/citiskope/citiskope_home_cover.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="citi_skope">CITISKOPE</a></h3>
										<p>App dev. + Identity + Advertising</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="img/star-o-thumbnail.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="starto">STAR-O</a></h3>
										<p>Branding & Packaging</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="img/viiatours_thumnail.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="viia_tours">VIIATOURS</a></h3>
										<p>Branding and Digital Marketing</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="img/ems-thumbnail.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="ems">EMS</a></h3>
										<p>Website Redesign + Social Media</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="img/citytax/citytax_thumbnail.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="city_tax">CITY TAX</a></h3>
										<p>Logo & Website</p>
									</header>
								</article>
							</section>

					</div>

    <div class="clients">
        <h1>Selected Clients and Collaborators</h1> <br>
        <p>We love our clients -- collaborators– programmers, designers and architects. Below we’ve shown the list of our most trusted partners and clients.</p>
        <br><br>
        <div class="section group">
	<div class="col span_1_of_4">
	<img src="img/clients/citytaxlogo.jpg" alt="" width="100%" />
	</div>
	<div class="col span_1_of_4">
	<img src="img/clients/healingandhopelogo.jpg" alt="" width="100%" />
	</div>
	<div class="col span_1_of_4">
	<img src="img/clients/thejannbandlogo.jpg" alt="" width="100%" />
	</div>
	<div class="col span_1_of_4">
	<img src="img/clients/mihlogo.jpg" alt="" width="100%" />
	</div>
</div>

        <div class="section group">
	<div class="col span_1_of_4">
	<img src="img/clients/nikelogo.jpg" alt="" width="100%" />
	</div>
	<div class="col span_1_of_4">
	<img src="img/clients/papichuloslogo.jpg" alt="" width="100%" />
	</div>
	<div class="col span_1_of_4">
	<img src="img/clients/foundationforfortitudelogo.jpg" alt="" width="100%" />
	</div>
	<div class="col span_1_of_4">
	<img src="img/clients/topkreyollogo.jpg" alt="" width="100%" />
	</div>
</div>

        <div class="section group">
	<div class="col span_1_of_4">
	<img src="img/clients/editionpulucialogo.jpg" alt="" width="100%" />
	</div>
	<div class="col span_1_of_4">
	<img src="img/clients/subwaylogo.jpg" alt="" width="100%" />
	</div>
	<div class="col span_1_of_4">
	<img src="img/clients/mariehoullogo.jpg" alt="" width="100%" />
	</div>
	<div class="col span_1_of_4">
	<img src="img/clients/ienvyonlinelogo.jpg" alt="" width="100%" />
	</div>
</div>

    </div>

<?php include("footer.php"); ?>

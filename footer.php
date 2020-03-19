
	</div><hr>
</div>

<div class="container mt-4 footer">
	<div class="row">
		<div class="col-md-3 col-6">
			<div class="card">
				<div class="card-header"><h3 class="text-color">İletişim</h3><hr width="100" class="float-left m-0"></div>
				<div class="card-body font">
					<ul class="p-0">
						<li><?php echo $query['ILET_BASLIK1']; ?><br><?php echo $query['ILET_TEL1']; ?></li>
						<li><?php echo $query['ILET_BASLIK2']; ?><br><?php echo $query['ILET_TEL2']; ?></li>
						<li><?php echo $query['ILET_BASLIK3']; ?><br><?php echo $query['ILET_TEL3']; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6">
			<div class="card">
				<div class="card-header"><h3 class="text-color">Destek</h3><hr width="100" class="float-left m-0"></div>
				<div class="card-body font">
					<ul class="p-0">
						<a href="#" class="custom-a"><i class=""></i> Help</a>
						<br>
						<br>
						<a href="#" class="custom-a"><i class=""></i> Contact</a>
						<br>
						<br>
						<a href="#" class="custom-a"><i class=""></i> FAQ</a>
						<br>
						<br>
						<a href="#" class="custom-a"><i class=""></i> Linkedin</a>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6">
			<div class="card">
				<div class="card-header"><h3 class="text-color">Bağlantılar</h3><hr width="100" class="float-left m-0"></div>
				<div class="card-body font">
					<ul class="p-0">
						<a href="#" class="custom-a"><i class=""></i> About</a>
						<br>
						<br>
						<a href="#" class="custom-a"><i class=""></i> Linkedin</a>
						<br>
						<br>
						<a href="#" class="custom-a"><i class=""></i> Linkedin</a>
						<br>
						<br>
						<a href="#" class="custom-a"><i class=""></i> Linkedin</a>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-6">
			<div class="card">
				<div class="card-header"><h3 class="text-color">Bölgeler</h3><hr width="100" class="float-left m-0"></div>
				<div class="card-body font">
					<ul class="p-0">
						<a href="#" class="custom-a"><i class=""></i> Sweden</a>
						<br>
						<br>
						<a href="#" class="custom-a"><i class=""></i> Germany</a>
						<br>
						<br>
						<a href="#" class="custom-a"><i class=""></i> Italy</a>
						<br>
						<br>
						<a href="#" class="custom-a"><i class=""></i> England</a>
					</ul>
				</div>
			</div>
		</div>
	</div><hr>
</div>

<div class="container mt-4">
	<div class="row font">
		<div class="col-md-3 col-6 text-center border-right"><a href="<?php echo $query['LINKEDIN']; ?>" class="custom-a"><i class="fab fa-linkedin-in"></i> Linkedin</a></div>
		<div class="col-md-3 col-6 text-center border-md-right"><a href="<?php echo $query['TWITTER']; ?>" class="custom-a"><i class="fab fa-twitter"></i> Twitter</a></div>
		<div class="col-md-3 col-6 text-center border-right mt-md-0 mt-4"><a href="<?php echo $query['FACEBOOK']; ?>" class="custom-a"><i class="fab fa-facebook"></i> Facebook</a></div>
		<div class="col-md-3 col-6 text-center mt-md-0 mt-4"><a href="<?php echo $query['INSTAGRAM']; ?>" class="custom-a"><i class="fab fa-instagram"></i> Instagram</a></div>
	</div><hr>
</div>

<div class="container mt-4 mb-5">
	<div class="row font">
		<div class="col-10 pt-3"><p>Copyright © 2005 - 2020 </p></div>
		<div class="col-2 text-right"><img src="images/logo.png" class="img-fluid"></div>
	</div>
	<div class="row">
		<div class="col font-size">
			<a href="#" class="custom-a font border-right pr-4">Lorem Ipsum</a>
			<a href="#" class="custom-a font border-right pl-4 pr-4">Lorem Ipsum</a>
			<a href="#" class="custom-a font pl-4 pr-4">Lorem Ipsum</a>
		</div>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/aos.js"></script>
<script src="js/highlight.js"></script>
<script src="js/app.js"></script>
<script type="text/javascript">
	jQuery("#carousel").owlCarousel({
  autoplay: true,
  lazyLoad: true,
  loop: true,
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});
</script>



<script type="text/javascript">
	AOS.init();
</script>
</body>
</html>
<?php
include 'header.php';


?>

<div class="container main">
	<div class="row pt-5">
		<div class="col-md-6 mx-auto text-center mt-5">
			<form>
				<div class="form-group">
					<label class="text-white font">Potansiyelini Keşfet!</label>
					<input type="text" name="" class="form-control font" placeholder="Hangi Üniversite">
				</div>
				<button type="submit" class="btn font text-white formbutton"><i class="fas fa-search"></i> ARA</button>
			</form>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col mt-5">
			<div class="owl-slider bg-white pt-2 pb-0">
			  <div id="carousel" class="owl-carousel">
			    <div class="item">
			      <center><img class="owl-lazy" data-src="images/u1.png" alt="" class="img-fluid"></center>
			    </div>		  
			  </div>
			</div>
		</div>
	</div>
</div>

<div class="container mt-4 abone">
	<div class="row">
		<div class="col-md-6 font" style="border-right:2px solid #F1F1F1;">
			<h2 class="text-color font-weight-bold"><?php echo $query['BASLIK']; ?></h2>
			<p><?php echo $query['ACIKLAMA']; ?></p>
		</div>
		<div class="col-md-6 font text-right my-auto">
			<form>
				<div class="form-group">
					<input type="text" name="" class="form-control float-left w-75" placeholder="Mail Adresiniz">
					<button type="submit" class="btn w-25 bg-color text-white">Abone Ol</button>
				</div>
			</form>
		</div>
	</div><hr>
</div>




<?php
include 'footer.php';
?>
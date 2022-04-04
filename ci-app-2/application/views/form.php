<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Contact Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?=base_url('assets/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/animate/animate.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="<?=base_url('form/insert')?>" method="POST">
				<span class="contact100-form-title">
					Merhaba!
				</span>

				<div class="wrap-input100 validate-input" data-validate="İsim alanı boş bırakılamaz">
					<span class="label-input100">İsim</span>
					<input class="input100" type="text" name="name" placeholder="İsminizi girin">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Geçersiz e-posta: ex@abc.xyz">
					<span class="label-input100">E-posta</span>
					<input class="input100" type="text" name="email" placeholder="E-posta adresinizi girin">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Servis Seçimi</span>
					<div>
						<select class="selection-2" name="service">
							<option value="0">Servis Seçiniz</option>
							<option value="1">Online Store</option>
							<option value="2">eCommerce Bussiness</option>
							<option value="3">UI/UX Design</option>
							<option value="4">Online Services</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Bütçe</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Bütçe Seçin</option>
							<option>1500 ₺</option>
							<option>2000 ₺</option>
							<option>2500 ₺</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Mesaj alanı boş bırakılamaz">
					<span class="label-input100">Mesaj</span>
					<textarea class="input100" name="message" placeholder="Mesajınızı yazın..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Gönder
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/select2/select2.min.js')?>"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?=base_url('assets/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/js/main.js')?>"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="<?=base_url('assets/https://www.googletagmanager.com/gtag/js?id=UA-23581568-13')?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<?php if($this->session->flashdata('insert_success')) : ?>
    <script>
        alert('Başarıyla gönderildi!');
    </script>
<?php endif; ?>

<?php if($this->session->flashdata('delete_success')) : ?>
    <script>
        alert('Başarıyla silindi!');
    </script>
<?php endif; ?>

</body>
</html>

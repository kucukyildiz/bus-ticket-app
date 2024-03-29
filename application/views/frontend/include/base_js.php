<script src="<?php echo base_url() ?>assets/frontend/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/frontend/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript"
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>


<script src="<?php echo base_url() ?>assets/frontend/js/superfish.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/js/jquery.magnific-popup.min.js"></script>

<script src="<?php echo base_url() ?>assets/frontend/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/js/mail-script.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/js/main.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/select2/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<?php echo "<script>".$this->session->flashdata('message')."</script>"?>
<!--Start of Tawk.to Script-->


<!--End of Tawk.to Script-->
<script type="text/javascript">
	$(document).ready(function () {
		$(".preloader").fadeOut();
	})
	$(":submit").click(function (e) {
		window.addEventListener("beforeunload", function (event) {
			$(".preloader").show();
		});
	});

</script>




<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/elements/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Log on to codeastro.com for more projects -->
	<!-- Site Title -->
	<title><?php echo $title ?></title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--CSS-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url() ?>assets/frontend/datepicker/dcalendar.picker.css">
	<?php $this->load->view('frontend/include/base_css'); ?>
</head>

<body>
	<!-- navbar -->
	<?php $this->load->view('frontend/include/base_nav'); ?>
	<section class="service-area section-gap relative bg-12 h-100vh">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Default Card Example -->
					<div class="card mb-5">
						<div class="card-header">
							<i class="fas fa-search"></i> Bilet Ara
						</div>
						<div class="card-body">
							
							<form action="<?php echo base_url() ?>tiket/cekjadwal?>" method="get">
			                          <div class="row">

								<div class="form-group col-md-4">
									<label for="exampleInputEmail1">Tarih seç</label>
									<input placeholder="Tarihi girin" type="text" class="form-control datepicker"
										name="tanggal" required="">
								</div>
								<div class="form-group col-md-4">
									<label for="exampleInputEmail1"></label>
									<select name="asal" class="form-control js-example-basic-single" required>
										<option value="" selected disabled="">Nereden?</option>
										<?php foreach ($asal as $row ) { ?>
										<option value="<?php echo $row['kd_tujuan'] ?>">
											<?php echo strtoupper($row['kota_tujuan']) ?>
											- <br><?php echo $row['terminal_tujuan']; ?> </option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-md-4">
									<label for="exampleInputEmail1"></label>
									<select name="tujuan" class="form-control js-example-basic-single">
										<option value="" selected disabled="">Nereye?</option>
										<?php foreach ($tujuan as $row ) { ?>
										<option value="<?php echo $row['kota_tujuan'] ?>">
											<?php echo strtoupper($row['kota_tujuan']); ?></option>
										<?php } ?>
									</select>
								</div>
							   </div>
 
								<!-- <a href="<?php echo base_url() ?>tiket" class="btn btn-danger pull-left">Go Back </a> -->
								<button type="submit" class="btn btn-primary pull-right">Otobüs Ara </button>

							</form>
						</div>
					</div>
				</div>
				
			</div>
	</section>
	<!-- End banner Area -->
	<!-- Log on to codeastro.com for more projects -->
	<!-- start footer Area -->
	<?php $this->load->view('frontend/include/base_footer'); ?>
	<!-- js -->

	<?php $this->load->view('frontend/include/base_js'); ?>
	<script type="text/javascript">
		$(function () {
			var date = new Date();
			date.setDate(date.getDate());

			$(".datepicker").datepicker({
				startDate: date,
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true,
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.js-example-basic-single').select2();
		});
	</script>
</body>

</html>
<!-- Modal -->
<!-- Log on to codeastro.com for more projects -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">How to book tickets?</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<ol class="ordered-list" align="justify"><span class="center_content2">
					<li>Select date and select your origin and destination terminal/city in order to search for available schedules.
							<li>Search for tickets then click on the <b>Select </b> button on the ticket you want to book.
							</li>
							<li>The system will redirect you to seat selection page where you have to <b>select any seats</b> [Max.4 seats at a time]</li>
							<li>After selection of seats, click on the <b>Next </b>button to proceed. </li>
							<li>Fill up your ticket details by providing customer's details such as Passenger's Name, Age and other required <b>Customer Identity</b>. With it, select any of the available bank [as a Payment Method] to book tickets.</li>
							<li>After submitting the form, the bookings are done <b>[temporarily]</b>. The system will provide you with a <b>QR Code</b> and you've to make payments.</li>
							<li>All the payment instructions are provided in the tickets page.</li>
							<li>Following that, click on the <b>Payment Confirmation</b> button to submit your payment details with an attachment of <b>proof image</b>.</li>
							<li>At last, you payment request will be sent for <b>verification</b>. </li>
							<li>You will also receive an <b>E-Ticket</b> onces after the payment gets verified. </li>
							<li>If you have made a payment, bring proof of payment at the time of departure and exchange it one hour before departure. </li>
						</span></ol>
					<w:worddocument></w:worddocument>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
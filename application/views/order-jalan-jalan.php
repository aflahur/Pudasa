<!-- Hero Start -->
<section class="bg-half bg-light d-table w-100">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<div class="page-next-level">
					<h4 class="title"> Checkout Jalan-jalan </h4>
					<div class="page-next">
						<nav aria-label="breadcrumb" class="d-inline-block">
							<ul class="breadcrumb bg-white rounded shadow mb-0">
								<li class="breadcrumb-item"><a href="<?= base_url(); ?>">PUDASA</a></li>
								<li class="breadcrumb-item"><a href="<?= base_url(); ?>Jalan_jalan">Jalan-jalan</a></li>
								<li class="breadcrumb-item active" aria-current="page" style="color: #4E83AB!important;">Checkout Jalan-jalan</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!--end col-->
		</div>
		<!--end row-->
	</div>
	<!--end container-->
</section>
<!--end section-->
<div class="position-relative">
	<div class="shape overflow-hidden text-white">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
		</svg>
	</div>
</div>
<!-- Hero End -->


<!-- Start -->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-6">
				<div class="rounded shadow-lg p-4">

					<form class="mt-4">
						<div class="row">
							<div class="col-12">
								<div class="form-group position-relative">
									<label>Title <span class="text-danger">*</span></label>
									<div class="form-group mb-0">
										<select class="form-control custom-select">
											<option value="Tuan">Tuan</option>
											<option value="Nyonya">Nyonya</option>
											<option value="Nona">Nona</option>
										</select>
									</div>
								</div>
							</div>
							<!--end col-->
							<div class="col-12">
								<div class="form-group position-relative">
									<label>Nama Lengkap Pemesan <span class="text-danger">*</span></label>
									<input name="fullname" id="namalengkap" type="text" class="form-control" placeholder="Nama Lengkap Pemesan :">
								</div>
							</div>
							<!--end col-->
							<div class="col-12">
								<div class="form-group position-relative">
									<label>Nomor Telepone <span class="text-danger">*</span></label>
									<input type="text" name="phone" id="phone" class="form-control" placeholder="Nomor Telepone :">
								</div>
							</div>
							<!--end col-->
							<div class="col-12">
								<div class="form-group position-relative">
									<label>Alamat Email <span class="text-danger">*</span></label>
									<input name="email" id="email" type="email" class="form-control" placeholder="Alamat Email :">
								</div>
							</div>
							<!--end col-->
						</div>
						<!--end row-->

					</form>
					<!--end form-->
				</div>

			</div>
			<!--end col-->

			<div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
				<div class="rounded shadow-lg p-4">
					<div class="table-responsive">
						<table class="table table-center table-padding mb-0">
							<tbody>
								<tr>
									<td class="h6 border-0">Kode Pesanan</td>
									<td class="text-center font-weight-bold border-0 text-right">27092020HFBTY</td>

								</tr>
								<tr>
									<td class="h6 border-0">Benteng Kuto Besak</td>
									<td class="text-center font-weight-bold border-0 text-right">Rp. 50.000</td>

								</tr>
								<tr>
									<td class="h6">Biaya Pajak</td>
									<td class="text-center font-weight-bold text-right">Rp. 3.000</td>
								</tr>
								<tr class="bg-light">
									<td class="h5 font-weight-bold">Total</td>
									<td class="text-center text-danger h5 font-weight-bold text-right">Rp. 53.000</td>
								</tr>
							</tbody>
						</table>

						<ul class="list-unstyled mt-4 mb-0">
							<li class="mt-3">
								<img src="<?= base_url(); ?>assets-layout/HTML/images/payments/maybank.jpg" alt="">
								<p>1111-222-333</p>
							</li>
							<li class="mt-3">
								<img src="<?= base_url(); ?>assets-layout/HTML/images/payments/mandiri.jpg" alt="">
								<p>1111-222-333</p>
							</li>

						</ul>

						<div class="mt-4 pt-2">
							<a href="<?= base_url(); ?>Order/success" class="btn btn-block text-white" style="background-color: #4E83AB;">Selesai Pembayaran</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end row-->
	</div>
	<!--end container-->
</section>
<!--end section-->
<!-- End -->

<!-- Hero Start -->
<section style="align-items: center; padding: 150px 0;">
	<div class="container">
		<div class="row" style="justify-content: center;">
			<div class="col-lg-6 col-md-8">
				<div class="card rounded shadow border-0">
					<div class="card-body py-5">
						<h5 class="card-title">Konfirmasi Pembayaran</h5>

						<div class="custom-form mt-4">
							<div id="message"></div>
							<form method="post" action="php/contact.php" name="contact-form" id="contact-form">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group position-relative">
											<label>Kode Pesanan <span class="text-danger">*</span></label>
											<input name="name" id="name" type="text" class="form-control " placeholder="23092020HYUI">
										</div>
									</div>
									<!--end col-->
									<div class="col-md-12">
										<div class="form-group position-relative">
											<label>Nama Pemesan <span class="text-danger">*</span></label>
											<input name="name" id="name" type="text" class="form-control " placeholder="alya">
										</div>
									</div>
									<!--end col-->
									<div class="col-md-12">
										<div class="form-group position-relative">
											<label>Email Pemesan <span class="text-danger">*</span></label>
											<input name="email" id="email" type="email" class="form-control" placeholder="alya@gmail.com">
										</div>
									</div>
									<!--end col-->
									<div class="col-md-12">
										<div class="form-group position-relative">
											<label>Total Nominal Pemesanan<span class="text-danger">*</span></label>
											<input name="name" id="name" type="text" class="form-control " placeholder="Rp. 50.000">
										</div>
									</div>
									<!--end col-->
									<div class="col-md-12">
										<div class="form-group position-relative">
											<label>Asal Bank<span class="text-danger">*</span></label>
											<input name="name" id="name" type="text" class="form-control " placeholder="BNI">
										</div>
									</div>
									<!--end col-->
									<div class="col-md-12 custom-file">
										<div class="form-group position-relative">
											<input type="file" class="custom-file-input" id="validatedCustomFile" required>
											<label class="custom-file-label" for="validatedCustomFile">Upload bukti transaksi...</label>
											<div class="invalid-feedback">Upload gagal</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group position-relative">
											<label>Keterangan Upload Bukti Transfer</label>
											<textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Keterangan"></textarea>
										</div>
									</div>
								</div>
								<!--end row-->
								<div class="row">
									<div class="col-sm-12 text-center">
										<input type="submit" id="submit" name="send" class="submitBnt btn text-white btn-block" style="background-color: #4E83AB;" value="Kirim">
										<div id="simple-msg"></div>
									</div>
									<!--end col-->
								</div>
								<!--end row-->
							</form>
							<!--end form-->
						</div>
						<!--end custom-form-->
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
<!-- Hero End -->

<!-- start belajar -->
<!-- Hero Start -->
<section class="bg-half bg-light d-table w-100" style="background-image:url('./assets-layout/HTML/images/pudasa-images/bg-tari.jpg'); margin-top:40px;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 text-center">
				<div class="page-next-level">
					<h4 class="title"> Belajar </h4>
					<p class="text-muted para-desc mb-0 mx-auto">Belajar budaya-budaya Indonesia dari fasilitas mitra kami.</p>
					<div class="page-next">
						<nav aria-label="breadcrumb" class="d-inline-block">
							<ul class="breadcrumb bg-white rounded shadow mb-0">
								<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Pudasa</a></li>
								<li class="breadcrumb-item active" aria-current="page" style="color: #4E83AB!important;">Belajar</li>
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
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
	<div class="shape overflow-hidden text-white">
		<svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
		</svg>
	</div>
</div>
<!--Shape End-->


<div class="container mt-100 mt-60">
	<div class="row justify-content-center">
		<div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
			<ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link rounded active" id="pills-cloud-tab" data-toggle="pill" href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
						<div class="text-center pt-1 pb-1">
							<h4 class="title font-weight-normal mb-0">Seni Tari</h4>
						</div>
					</a>
					<!--end nav link-->
				</li>
				<!--end nav item-->

				<li class="nav-item">
					<a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">
						<div class="text-center pt-1 pb-1">
							<h4 class="title font-weight-normal mb-0">Seni Musik</h4>
						</div>
					</a>
					<!--end nav link-->
				</li>
				<!--end nav item-->

				<li class="nav-item">
					<a class="nav-link rounded" id="seni-rupa-tab" data-toggle="pill" href="#seni-rupa" role="tab" aria-controls="seni-rupa" aria-selected="false">
						<div class="text-center pt-1 pb-1">
							<h4 class="title font-weight-normal mb-0">Seni Rupa</h4>
						</div>
					</a>
					<!--end nav link-->
				</li>
				<!--end nav item-->

			</ul>
			<!--end nav pills-->
		</div>
	</div>

	<div class="row">
		<div class="col-12 mt-4 pt-2">
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
					<div class="row justify-content-center mt-2">
						<div class="col-lg-7 col-md-10">
							<div class="subcribe-form mt-4 pt-2">
								<form class="ml-0">
									<div class="form-group">
										<input type="text" id="jalan-jalan" name="name" class="rounded" placeholder="Cari jenis seni tari..." autofocus>
										<button type="submit" class="btn text-white" style="background-color: #4E83AB;">Cari <i data-feather="search" class="fea icon-sm"></i></button>
									</div>
								</form>
								<!--end form-->
							</div>
						</div>
						<!--end col-->
					</div>


					<div class="row projects-wrapper">
						<div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
							<div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
								<div class="card-body p-0">
									<a class="mfp-image d-inline-block" title="">
										<img src="<?= base_url(); ?>assets-layout/HTML/images/pudasa-images/daerah_bali/tari_bali1.jpg" class="img-fluid" alt="work-image">
									</a>
									<div class="content bg-white p-3">
										<h5 class="mb-0"><a href="<?= base_url(); ?>Belajar/detail_jenis_tari" class="text-dark title">Tari Daerah Bali</a></h5>
									</div>
								</div>
							</div>
						</div>
						<!--end col-->

						<div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
							<div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
								<div class="card-body p-0">
									<a class="mfp-image d-inline-block" title="">
										<img src="<?= base_url(); ?>assets-layout/HTML/images/pudasa-images/daerah_aceh/tari_aceh1.jpg" class="img-fluid" alt="work-image" >
									</a>
									<div class="content bg-white p-3">
										<h5 class="mb-0"><a href="javascript:void(0)" class="text-dark title">Tari Daerah Aceh</a></h5>

									</div>
								</div>
							</div>
						</div>
						<!--end col-->


					</div>
					<!--end row-->
					<!-- PAGINATION START -->
					<div class="col-12 mt-4 pt-2 mb-4">
						<ul class="pagination justify-content-center mb-0">
							<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><i class="mdi mdi-arrow-left"></i> Prev</a></li>
							<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next <i class="mdi mdi-arrow-right"></i></a></li>
						</ul>
					</div>
					<!--end col-->
					<!-- PAGINATION END -->
				</div>
				<!--end teb pane-->

				<div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
					<div class="row justify-content-center mt-2">
						<div class="col-lg-7 col-md-10">
							<div class="subcribe-form mt-4 pt-2">
								<form class="ml-0">
									<div class="form-group">
										<input type="text" id="jalan-jalan" name="name" class="rounded" placeholder="Cari jenis seni musik..." autofocus>
										<button type="submit" class="btn text-white" style="background-color: #4E83AB;">Cari <i data-feather="search" class="fea icon-sm"></i></button>
									</div>
								</form>
								<!--end form-->
							</div>
						</div>
						<!--end col-->
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
							<div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
								<div class="card-body p-0">
									<a class="mfp-image d-inline-block" title="">
										<img src="<?= base_url(); ?>assets-layout/HTML/images/pudasa-images/gamelan1.jpg" class="img-fluid" alt="work-image">
									</a>
									<div class="content bg-white p-3">
										<h5 class="mb-0"><a href="<?= base_url(); ?>Belajar/detail_jenis_musik" class="text-dark title">Gamelan</a></h5>
									</div>
								</div>
							</div>
						</div>
						<!--end col-->

						<div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
							<div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
								<div class="card-body p-0">
									<a class="mfp-image d-inline-block" title="">
										<img src="<?= base_url(); ?>assets-layout/HTML/images/pudasa-images/angklung.jpg" class="img-fluid" alt="work-image">
									</a>
									<div class="content bg-white p-3">
										<h5 class="mb-0"><a href="<?= base_url(); ?>Belajar/detail_jenis_musik" class="text-dark title">Angklung</a></h5>

									</div>
								</div>
							</div>
						</div>
						<!--end col-->


						<!-- PAGINATION START -->
						<div class="col-12 mt-4 pt-2 mb-4">
							<ul class="pagination justify-content-center mb-0">
								<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><i class="mdi mdi-arrow-left"></i> Prev</a></li>
								<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next <i class="mdi mdi-arrow-right"></i></a></li>
							</ul>
						</div>
						<!--end col-->
						<!-- PAGINATION END -->

					</div>
					<!--end row-->
				</div>
				<!--end teb pane-->


				<div class="tab-pane fade" id="seni-rupa" role="tabpanel" aria-labelledby="seni-rupa-tab">
					<div class="row justify-content-center mt-2">
						<div class="col-lg-7 col-md-10">
							<div class="subcribe-form mt-4 pt-2">
								<form class="ml-0">
									<div class="form-group">
										<input type="text" id="jalan-jalan" name="name" class="rounded" placeholder="Cari jenis seni rupa..." autofocus>
										<button type="submit" class="btn text-white" style="background-color: #4E83AB;">Cari <i data-feather="search" class="fea icon-sm"></i></button>
									</div>
								</form>
								<!--end form-->
							</div>
						</div>
						<!--end col-->
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
							<div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
								<div class="card-body p-0">
									<a class="mfp-image d-inline-block" title="">
										<img src="<?= base_url(); ?>assets-layout/HTML/images/pudasa-images/batik.jpg" class="img-fluid" alt="work-image">
									</a>
									<div class="content bg-white p-3">
										<h5 class="mb-0"><a href="<?= base_url(); ?>Belajar/detail_jenis_seni_rupa" class="text-dark title">Batik</a></h5>
									</div>
								</div>
							</div>
						</div>
						<!--end col-->

						<div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
							<div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
								<div class="card-body p-0">
									<a class="mfp-image d-inline-block" title="">
										<img src="<?= base_url(); ?>assets-layout/HTML/images/pudasa-images/wayang.jpg" class="img-fluid" alt="work-image">
									</a>
									<div class="content bg-white p-3">
										<h5 class="mb-0"><a href="<?= base_url(); ?>Belajar/detail_jenis_seni_rupa" class="text-dark title">Wayang Kulit</a></h5>
									</div>
								</div>
							</div>
						</div>
						<!--end col-->


						<!-- PAGINATION START -->
						<div class="col-12 mt-4 pt-2 mb-4">
							<ul class="pagination justify-content-center mb-0">
								<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><i class="mdi mdi-arrow-left"></i> Prev</a></li>
								<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next <i class="mdi mdi-arrow-right"></i></a></li>
							</ul>
						</div>
						<!--end col-->
						<!-- PAGINATION END -->

					</div>
					<!--end row-->
				</div>
				<!--end teb pane-->

			</div>
			<!--end tab content-->
		</div>
		<!--end col-->



	</div>
	<!--end row-->

</div>

<!-- end belajar -->
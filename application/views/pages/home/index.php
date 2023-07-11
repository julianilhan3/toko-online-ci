
<?php $this->load->view('layouts/_alert') ?>






	<!-- <img src="<?= base_url(); ?>/assets/images/01img.png"" alt=""> -->


	<div class="section" id="hero">
		<div class="hero">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
				<div class="row">
					<div class="col-md-6">
						<div class="text-hero pt-12pt">
							<div class="text-box px-3 py-2">
							<h5>Reservasi sekarang juga </h5>
							</div>
							<h1>Pesan sembari santai, terapis akan datang.</h1>
							<p>cara nya mudah kok. pilih menu yang kamu ingin.  lalu klik order kemudian isi data kalian yang sesuai. .jangan lupa kalo misalkan kalian masih bingung bisa tanya-tanya dulu kok via whatsapp yang tersedia di menu.
							</p>
						</div>
						<div class="button">
						<?php if (!$this->session->userdata('is_login')) : ?>
						<button class="btn"><a href="<?= base_url('register') ?>">Reservasi</button></a>
						<?php else : ?>
							<?php endif ?>	
						<button class="btn btn-nobg"> <a href="https://api.whatsapp.com/send?phone=6287843033376&amp;text=Halo%2C%20Admin.%0D%0ASaya%20tertarik%20tertarik%20ingin%20%20konsultasi%2Fmengenai Bekam.%20%0D%0AMohon%20info%20lengkapnya%20yaa.%0D%0ATerima%20Kasih" ">Konsultasi</button></a>
					
					</div>
					</div>
					<div class="col-md-6">
							<img class="denyut" src="<?= base_url(); ?>/assets/images/01img.png" alt=""> 
					</div>						
				</div>		
				</div>		
			</div>						
		</div>				
	</div>
</div>



<section class="benerfits ">
      <div class="container">
        <div class="row ">
          <div class="col-lg">
            <div class="row ">
              <div class="col-12 col-lg-4">
                <img
                  class="mx-3"
                  style="float: left"
				  src="<?= base_url(); ?>/assets/images/01icon01.png" alt=""
                />
                <h4>10+ Terapist</h4>
                <p>Peserta Didik</p>
              </div>
              <div class="col-12 col-lg-4">
                <img
                  class="mx-3"
                  style="float: left"
				  src="<?= base_url(); ?>/assets/images/01icon02.png" alt=""
                />
                <h4>5+ Kota</h4>
                <p>Jabodetabek - Bali</p>
              </div>
              <div class="col-12 col-lg-4">
                <img
                  class="mx-3"
                  style="float: left"
                  src="<?= base_url(); ?>/assets/images/01icon03.png" alt=""
                />
                <h4>500+</h4>
                <p>Pelanggan yang sudah pesan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

















<div class="shop">
<main role="main" class="container">

	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-body">
							Kategori: <strong><?= isset($category) ? $category : 'Semua Kategori' ?></strong>
							<span class="float-right">
								Urutkan harga: <a href="<?= base_url('shop/sortby/asc') ?>" class="badge badge-primary">Termurah</a> | <a href="<?= base_url('shop/sortby/desc') ?>" class="badge badge-primary">Termahal</a> 

							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<?php foreach ($content as $row) : ?>
					<div class="col-md-6">
						<div class="card mb-3">
							<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title"><?= $row->product_title ?></h5>
								<p class="card-text"><strong>Rp.<?= number_format($row->price, 0, ',', '.') ?>,-</strong></p>
								<p class="card-text"><?= $row->description ?></p>
								<a href="<?= base_url("shop/category/$row->category_slug") ?>" class="badge badge-primary"><i class="fas fa-tags"></i> <?= $row->category_title ?></a>
							</div>
							<div class="card-footer">
								<form action="<?= base_url('cart/add') ?>" method="POST">
									<input type="hidden" name="id_product" value="<?= $row->id ?>">
									<div class="input-group">
										<input type="number" name="qty" value="1" class="form-control">
										<div class="input-group-append">
											<button class="btn btn-primary" type="submit">Add to cart</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>

			<nav aria-label="Page navigation example">
				<?= $pagination ?>
			</nav>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Pencarian
						</div>
						<div class="card-body">
							<form action="<?= base_url('shop/search') ?>" method="POST">
								<div class="input-group">
									<input type="text" name="keyword" class="form-control" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header">
							Category
						</div>
						<ul class="list-group">
							<li class="list-group-item"><a href="<?= base_url('home') ?>">Semua kategori</a></li>
							<?php foreach (getCategories() as $category) : ?>
								<li class="list-group-item"><a href="<?= base_url("shop/category/$category->slug") ?>"><?= $category->title ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
</div>

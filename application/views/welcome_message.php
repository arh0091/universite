			<div class="row-fluid content">
				<div class="span4">
					<h3 class="lead">SIMA Universitas Muhammadiyah Malang</h3>
					<p>Selamat datang di SIMA (Sistem Informasi Mahasiswa Universitas Muhammadiyah Malang). Sistem ini digunakan sebagai gateway dan portal Mahasiswa untuk menyimpan data-data pribadinya terkait tentang informasi pribadi, akademik, keuangan dan kemahasiswaan di lingkungan Universitas Muhammadiyah Malang.</p>
					<p>Adapun sistem ini dapat digunakan untuk mengambil data dan mengolah data terkait tentang kegiatan mahasiswa yang dapat setiap saat berubah tanpa ada pemberitahuan secara langsung.</p>
				</div>
				<div class="span4">
					<?php echo form_open('auth', array('class'=>'form')) ?>
					<!-- <form class="form" method="POST" action="<?php echo base_url() ?>auth"> -->
						<legend>Autentikasi</legend>
						<div class="control-group">
							<label class="control-label">Username</label>
							<div class="controls">
								<input type="text" name="username" placeholder="username" class="span12" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Password</label>
							<div class="controls">
								<input type="password" name="password" placeholder="password" class="span12" />
							</div>
						</div>
						<div class="form-actions">
							<input type="submit" class="btn" value="Login" />
						</div>
					<!-- </form> -->
					<?php echo form_close(); ?>
				</div>
				<div class="span4" style="text-align:center">
					<img src="http://placehold.it/300x300" class="img-circle">
				</div>

				<!-- Sidebar -->

				<!-- Main Content -->

			</div>
<div class="row content">			
<?php foreach($data as $row):?>
	<div class="span3 mhs">
		<div class="photo-content">
			<div class="photo-border">
				<?php $this->render_img(''.$row->foto.'') ?>	
				<div class="choose-btn">					
					<?php echo form_open_multipart('profil/do_upload');?>
					<input type="file" name="userfile" size="10" required />
				</div>
				<div class="upload-btn">
					<input class="btn btn-mini btn-primary" type="submit" value="upload" />					
					<?php echo form_close();?>					
				</div>								
				<center>
					<h4><td><?php echo $row->nama_depan ;echo ' '.$row->nama_belakang ;?></td></h4>					
				</center>									
				<center><i class="icon-picture" onClick="window.location.href='#'"></i>
				<i class="icon-tasks" onClick="window.location.href='#'"></i>
				<i class="icon-list" onClick="window.location.href='#'"></i></center>
			</div>
		</div>	
		<br>
		<br>
		<?php if($this->session->flashdata('error')) : ?>
			<div class="alert alert-danger"> <?php echo $this->session->flashdata('error') ?> </div>
		<?php endif; ?>	
	</div>	

<?php echo form_open('profil/edit_info');?>	
	<div class="span9 mhs">
		<div class="profil-content">	
			<div class="profile-head center">		
			<div><center><h3>Profile</h3><center></div>			
			</div>
			<hr>
			<div class="bio">
				<h5>Nama depan
				<div class="profil-tag"><input type="text" name="nama_depan" placeholder="nama" class="span5" value="<?php echo $row->nama_depan ;?>" required/></div>				
				<br>	
				<hr>
				Nama belakang
				<div class="profil-tag"><input type="text" name="nama_belakang" placeholder="nama" class="span5" value="<?php echo $row->nama_belakang ;?>" required/></div>
				<br>	
				<hr>
				Nomer telepon
				<div class="profil-tag"><input type="text" name="nomer_telepon" placeholder="nomer telepon" class="span5" value="<?php echo $row->nomer_telepon ;?>" required/></div>
				<br>
				<hr>
				Nomer hp
				<div class="profil-tag"><input type="text" name="nomer_hp" placeholder="nomer hp" class="span5" value="<?php echo $row->nomer_hp ;?>" required/></div>
				<br>
				<hr>
				Email
				<div class="profil-tag"><input type="text" name="email" placeholder="alamat email" class="span5" value="<?php echo $row->email ;?>" required/></div>
				<br>
				<hr>
				Alamat di malang
				<div class="profil-tag"><textarea name="alamat_malang" placeholder="alamat di malang" rows="4" class="span5" required><?php echo $row->alamat_malang ;?></textarea></div>
				<br>
				<hr>
				Alamat asal
				<div class="profil-tag"><textarea name="alamat_rumah" placeholder="alamat asal" rows="4" class="span5" required><?php echo $row->alamat_rumah ;?></textarea></div>
				<br>
				<hr>
				Nama ibu
				<div class="profil-tag"><input type="text" name="nama_ibu" placeholder="nama ibu" class="span5" value="<?php echo $row->nama_ibu ;?>" required/></div>
				<br>
				<hr>
				Nama ayah
				<div class="profil-tag"><input type="text" name="nama_ayah" placeholder="nama ayah" class="span5" value="<?php echo $row->nama_ayah ;?>" required/></div>	
				<br>
				<hr>
				Facebook
				<div class="profil-tag"><input type="text" name="facebook" placeholder="facebook" class="span5" value="<?php echo $row->facebook ;?>" required/></div>
				<br>
				<hr>
				Twitter
				<div class="profil-tag"><input type="text" name="twitter" placeholder="twitter" class="span5" value="<?php echo $row->twitter ;?>" required/></div>
				<br>
				<br>
				<div class="right lead">					
					<button type="submit" class="btn btn-danger" onClick="window.location.href='http://localhost/universite/profil'">Batal</button>					
					<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Simpan</a>
				</div>
				
				<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Edit profile</h3>
				  </div>
				  <div class="modal-body">
					<p>Anda yakin untuk menyimpan perubahan pada profil Anda ?</p>
				  </div>
				  <div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">keluar</button>
					<button type="submit" class="btn btn-primary">Simpan perubahan</button>
				  </div>
				</div>

				</h5>
			</div>
		</div>	
	</div>		
<?php echo form_close();?>
<?php endforeach; ?>	
</div>
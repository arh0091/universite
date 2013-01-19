<div class="row content">			
	<?php foreach($data as $row):?>
	<div class="span3 mhs">
		<div class="photo-content">
			<div class="photo-border">					
				 <?php $this->render_img(''.$row->foto.'') ?>				 	
				<center>																
					<h4><td><?php echo $row->nama_depan ;echo ' '.$row->nama_belakang ;?></td></h4>		
				</center>
				<center><i class="icon-picture" onClick="window.location.href='#'"></i>
				<i class="icon-tasks" onClick="window.location.href='#'"></i>
				<i class="icon-list" onClick="window.location.href='#'"></i></center>																
			</div>
		</div>	
	</div>			
	<div class="span9 mhs">
		<div class="profil-content">						
			<div class="profile-head center">				
				<div><center><h3>Profile</h3><center></div>										
				<div class="btn-edit">
					<a class="btn btn-link" href="http://localhost/universite/profil/edit"><i class="icon-edit icon-white"></i> Edit</a>
				</div>
			</div>						
			<hr>
			<div class="bio">
				<h5>Nama
				<div class="profil-tag"><?php echo $row->nama_depan ; echo ' '.$row->nama_belakang ;?></div>
				<br>					
				<hr>
				Nomer telepon
				<div class="profil-tag"><?php echo $row->nomer_telepon ;?></div>				
				<br>
				<hr>
				Nomer hp
				<div class="profil-tag"><?php echo $row->nomer_hp ;?></div>				
				<br>
				<hr>
				Email
				<div class="profil-tag"><?php echo $row->email ;?></div>			
				<br>
				<hr>
				Alamat di malang
				<div class="profil-tag"><?php echo $row->alamat_malang ;?></div>
				
				<br>
				<hr>
				Alamat asal
				<div class="profil-tag"><?php echo $row->alamat_rumah ;?></div>				
				<br>
				<hr>
				Nama ibu
				<div class="profil-tag"><?php echo $row->nama_ibu ;?></div>				
				<br>
				<hr>
				Nama ayah
				<div class="profil-tag"><?php echo $row->nama_ayah ;?></div>				
				<br>
				<hr>
				Facebook
				<div class="profil-tag"><?php echo $row->facebook ;?></div>			
				<br>
				<hr>
				Twitter
				<div class="profil-tag"><?php echo $row->twitter ;?></div>				
				<br>
				<br>
				</h5>
			</div>
		</div>	
	</div>		
	<?php endforeach; ?>				
</div>
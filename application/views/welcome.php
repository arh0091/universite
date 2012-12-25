			<div class="row content" style="min-height:400px;">
				<div class="span4 offset4 login">
					<?php if($this->session->flashdata('error')) : ?>
						<div class="alert alert-danger"> <?php echo $this->session->flashdata('error') ?> </div>
					<?php endif; ?>
					<?php echo form_open('auth', array('class'=>'form')) ?>
					<!-- <form class="form" method="POST" action="<?php echo base_url() ?>auth"> -->
						<p class="right lead">Autentikasi Akses</p>
						<br/>
						<div class="control-group">
							<label class="control-label">Username</label>
							<div class="controls">
								<input type="text" name="username" placeholder="fill in your username here" class="simplebox span4" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Password</label>
							<div class="controls">
								<input type="password" name="password" placeholder="write your password here" class="simplebox span4" />
							</div>
						</div>
						<div class="center action-login">
							<input type="submit" class="btn btn-login" value="Login" />
						</div>
					<!-- </form> -->
					<?php echo form_close(); ?>
					<p>
						<ul class="inline">
							<li><small><?php echo anchor('term','Ketentuan Penggunaan') ?></small></li>
						</ul>
					</p>
				</div>
			</div>
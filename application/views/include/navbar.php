<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
	<div class="search-icon">
		<i class="material-icons">search</i>
	</div>
	<input type="text" placeholder="START TYPING...">
	<div class="close-search">
		<i class="material-icons">close</i>
	</div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
			<a href="javascript:void(0);" class="bars"></a>
			<?php
			if ($this->session->userdata('user_id') == "0") :
			?>
				<a class="navbar-brand" href="<?= base_url('admin/dashboard'); ?>">UMN Radio Treasury </a>
			<?php
			else :
			?>
				<a class="navbar-brand" href="<?= base_url('user/profile'); ?>">UMN Radio Treasury </a>
			<?php
			endif;
			?>

		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php
				if ($this->session->userdata('user_id') == "0") :
				?>
					<!-- Notifications -->
					<li>
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
							<i class="material-icons">notifications</i>
							<span class="label-count">7</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">NOTIFICATIONS</li>
							<li class="body">
								<ul class="menu">
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-light-green">
												<i class="material-icons">person_add</i>
											</div>
											<div class="menu-info">
												<h4>12 new members joined</h4>
												<p>
													<i class="material-icons">access_time</i> 14 mins ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-cyan">
												<i class="material-icons">add_shopping_cart</i>
											</div>
											<div class="menu-info">
												<h4>4 sales made</h4>
												<p>
													<i class="material-icons">access_time</i> 22 mins ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-red">
												<i class="material-icons">delete_forever</i>
											</div>
											<div class="menu-info">
												<h4><b>Nancy Doe</b> deleted account</h4>
												<p>
													<i class="material-icons">access_time</i> 3 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-orange">
												<i class="material-icons">mode_edit</i>
											</div>
											<div class="menu-info">
												<h4><b>Nancy</b> changed name</h4>
												<p>
													<i class="material-icons">access_time</i> 2 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-blue-grey">
												<i class="material-icons">comment</i>
											</div>
											<div class="menu-info">
												<h4><b>John</b> commented your post</h4>
												<p>
													<i class="material-icons">access_time</i> 4 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-light-green">
												<i class="material-icons">cached</i>
											</div>
											<div class="menu-info">
												<h4><b>John</b> updated status</h4>
												<p>
													<i class="material-icons">access_time</i> 3 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-purple">
												<i class="material-icons">settings</i>
											</div>
											<div class="menu-info">
												<h4>Settings updated</h4>
												<p>
													<i class="material-icons">access_time</i> Yesterday
												</p>
											</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer">
								<a href="javascript:void(0);">View All Notifications</a>
							</li>
						</ul>
					</li>
					<!-- #END# Notifications -->
				<?php
				endif;			?>
				<li style="width:100%;"><a href="<?= base_url('auth/logout'); ?>" class="navbar-brand"><i class="material-icons p-r-10 m-t--20 font-20">input</i>Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
<!-- #Top Bar -->

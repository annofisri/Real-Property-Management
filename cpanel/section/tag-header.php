<section id="top-nav">
	<header class="p-2 border-bottom">
		<div class="container-fluid">
			<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
				<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
					<li>
						<div id="hamburger" >
							<span onclick="openNav()">&#9776;</span>
						</div>
					</li>
					<li><a href="#" class="nav-link px-2 link-secondary"><?php echo $title; ?></a></li>
				</ul>

				<!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
					<input type="search" class="form-control" placeholder="Search..." aria-label="Search">
				</form> -->

				<div class="dropdown text-end">
					<a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="/assets/cms/image/img_avatar2.png" alt="mdo" width="32" height="32" class="rounded-circle">
					</a>
					<ul class="dropdown-menu text-small">
						<!-- <li><a class="dropdown-item" href="#">New project...</a></li>
						<li><a class="dropdown-item" href="#">Settings</a></li>
						<li><a class="dropdown-item" href="#">Profile</a></li> -->
						<!-- <li><hr class="dropdown-divider"></li> -->
						<li><a class="dropdown-item" href="?logout">Sign out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
  
</section>

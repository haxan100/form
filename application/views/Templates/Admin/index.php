<!-- Right Panel -->

<div id="right-panel" class="right-panel">

	<!-- Header-->
	<header id="header" class="header">
		<div class="top-left">
			<div class="navbar-header">
				<a class="navbar-brand" href="./"><img src="<?= base_url() ?>templates/admin/images/logo.png" alt="Logo"></a>
				<a class="navbar-brand hidden" href="./"><img src="<?= base_url() ?>templates/admin/images/logo2.png" alt="Logo"></a>
				<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
			</div>
		</div>
	</header><!-- /header -->
	<!-- Header-->

	<body class="d-flex flex-column min-vh-100">
		<div class="content  page-row page-row-expanded d-flex flex-column min-vh-100 wrapper flex-grow-1">
			<div class="animated fadeIn">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<strong class="card-title">Custom Table</strong>
							</div>
							<div class="table-stats order-table ov-h">
								<table class="table ">
									<thead>
										<tr>
											<th class="serial">#</th>
											<th class="avatar">Avatar</th>
											<th>ID</th>
											<th>Name</th>
											<th>Product</th>
											<th>Quantity</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="serial">1.</td>
											<td class="avatar">
												<div class="round-img">
													<a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
												</div>
											</td>
											<td> #5469 </td>
											<td> <span class="name">Louis Stanley</span> </td>
											<td> <span class="product">iMax</span> </td>
											<td><span class="count">231</span></td>
											<td>
												<span class="badge badge-complete">Complete</span>
											</td>
										</tr>
										<tr>
											<td class="serial">2.</td>
											<td class="avatar">
												<div class="round-img">
													<a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
												</div>
											</td>
											<td> #5468 </td>
											<td> <span class="name">Gregory Dixon</span> </td>
											<td> <span class="product">iPad</span> </td>
											<td><span class="count">250</span></td>
											<td>
												<span class="badge badge-complete">Complete</span>
											</td>
										</tr>
										<tr>
											<td class="serial">3.</td>
											<td class="avatar">
												<div class="round-img">
													<a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
												</div>
											</td>
											<td> #5467 </td>
											<td> <span class="name">Catherine Dixon</span> </td>
											<td> <span class="product">SSD</span> </td>
											<td><span class="count">250</span></td>
											<td>
												<span class="badge badge-complete">Complete</span>
											</td>
										</tr>
										<tr>
											<td class="serial">4.</td>
											<td class="avatar">
												<div class="round-img">
													<a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
												</div>
											</td>
											<td> #5466 </td>
											<td> <span class="name">Mary Silva</span> </td>
											<td> <span class="product">Magic Mouse</span> </td>
											<td><span class="count">250</span></td>
											<td>
												<span class="badge badge-pending">Pending</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div> <!-- /.table-stats -->
						</div>
					</div>
	
				</div>
			</div><!-- .animated -->
		</div><!-- .content -->
		
		
		
		
		<div class="clearfix"></div>
		<div class="clearfix"></div>
		
		
	</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?= base_url() ?>templates/admin/assets/js/main.js"></script>


</body>
<style>
	html,
	body {
		height: 100%;
	}

	body {
		display: table;
		width: 100%;
	}

	.page-row {
		display: table-row;
		height: 1px;
	}

	.page-row-expanded {
		height: 100%;
	}

	body {
		min-height: 100vh;
		position: relative;
		margin: 0;
		padding-bottom: 100px; //height of the footer
		box-sizing: border-box;
	}

	footer {
		position: absolute;
		bottom: 0;
		height: 100px;
	}
</style>

</html>

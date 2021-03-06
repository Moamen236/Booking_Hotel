<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset("dashboard/img/icons/icon-48x48.png") }}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>@yield('title')</title>

	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<link href="{{ asset("dashboard/css/all.css") }}" rel="stylesheet">
	<link href="{{ asset("dashboard/css/app.css") }}" rel="stylesheet">
	<style>
		.sidebar-item .sidebar-dropdown .sidebar-link:hover{
			color: #fff !important;
			background: none !important;
    		border-left-color: transparent !important;
		}
		.sidebar-item .sidebar-dropdown .sidebar-item.active_dropdown .sidebar-link:hover{
			color: #3b7ddd !important;
			background: none !important;
    		border-left-color: transparent !important;
		}
		.active_dropdown a ,
		.active_dropdown i{
			color: #3b7ddd !important;
		}
	</style>
	@yield('css')
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{ route('admin.home') }}">
					<span class="align-middle">AdminKit</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-item {{ Request::segment(1) == 'admin' && Request::segment(2) == '' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('admin.home') }}">
							<i class="align-middle bx bx-slider bx-sm bx-rotate-270"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item {{ Request::segment(2) == 'rooms' || Request::segment(2) == 'room' ? 'active' : '' }}">
						<a data-bs-target="#room" data-bs-toggle="collapse" class="sidebar-link">
							<i class="fas fa-level-down-alt"></i>
							<span class="align-middle fw-bold">Rooms</span>
						</a>
						<ul id="room" class="sidebar-dropdown list-unstyled collapse ps-3 {{ route('types.index') == url()->current() || route('types.create') == url()->current()  || route('rooms.index') == url()->current()  || route('rooms.create') == url()->current()   ? 'show' : '' }}" data-bs-parent="#sidebar">
							<li class="sidebar-item {{ route('types.index') == url()->current()  ? 'active_dropdown' : '' }}">
								<a class="sidebar-link" href="{{ route('types.index') }}">
									<i class="align-middle bx bx-collection" style="font-size: 22px;"></i>
									<span class="align-middle">Type List</span>
								</a>
							</li>
							<li class="sidebar-item {{ route('types.create') == url()->current()  ? 'active_dropdown' : '' }}">
								<a class="sidebar-link" href="{{ route('types.create') }}">
									<i class="align-middle bx bx-add-to-queue" style="font-size: 20px;"></i>
									<span class="align-middle">Add Type</span>
								</a>
							</li>
							<li class="sidebar-item {{ route('rooms.index') == url()->current() ? 'active_dropdown' : '' }}">
								<a class="sidebar-link" href="{{ route('rooms.index') }}">
									<i class="align-middle bx bx-hotel" style="font-size: 22px;"></i>
									<span class="align-middle">Rooms List</span> 
								</a>
							</li>
							<li class="sidebar-item {{ route('rooms.create') == url()->current() ? 'active_dropdown' : '' }}">
								<a class="sidebar-link" href="{{ route('rooms.create') }}">
									<i class="align-middle bx bx-add-to-queue" style="font-size: 20px;"></i>
									<span class="align-middle">Add Room</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#booking" data-bs-toggle="collapse" class="sidebar-link">
							<i class="fas fa-level-down-alt"></i>
							<span class="align-middle fw-bold">Booking</span>
						</a>
						<ul id="booking" class="sidebar-dropdown list-unstyled collapse ps-3" data-bs-parent="#sidebar">
							<li class="sidebar-item">
								<a class="sidebar-link" href="#">
									<i class="align-middle bx bx-list-ul" style="font-size: 22px;"></i>
									<span class="align-middle">Booking List</span>
								</a>
							</li>
							<li class="sidebar-item">
								<a class="sidebar-link" href="#">
									<i class="align-middle bx bx-add-to-queue" style="font-size: 22px;"></i>
									<span class="align-middle">Add Book</span> 
								</a>
							</li>
							<li class="sidebar-item">
								<a class="sidebar-link" href="#">
									<i class="align-middle bx bx-wallet-alt" style="font-size: 20px;"></i>
									<span class="align-middle">Payment List</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#blog" data-bs-toggle="collapse" class="sidebar-link">
							<i class="fas fa-level-down-alt"></i>
							<span class="align-middle fw-bold">Blogs</span>
						</a>
						<ul id="blog" class="sidebar-dropdown list-unstyled collapse ps-3" data-bs-parent="#sidebar">
							<li class="sidebar-item">
								<a class="sidebar-link" href="#">
									<i class="align-middle bx bxl-blogger" style="font-size: 22px;"></i>
									<span class="align-middle">Blogs List</span>
								</a>
							</li>
							<li class="sidebar-item">
								<a class="sidebar-link" href="#">
									<i class="align-middle bx bx-book-add" style="font-size: 22px;"></i>
									<span class="align-middle">Add Blog</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
							<i class="align-middle bx bx-message-dots bx-sm"></i> 
							<span class="align-middle">Feedback</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>

        <div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
								aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the
													update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
													hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.
												</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
								data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
								aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="{{ asset("dashboard/img/avatars/avatar-5.jpg") }}"
													class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
													tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="{{asset ("dashboard/img/avatars/avatar-2.jpg") }}"
													class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod
													vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="{{ asset("dashboard/img/avatars/avatar-4.jpg") }}"
													class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
												</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="{{asset ("dashboard/img/avatars/avatar-3.jpg") }}"
													class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
													posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
								data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
								data-bs-toggle="dropdown">
								<img src="{{ asset("dashboard/img/avatars/avatar.jpg") }}" class="avatar img-fluid rounded me-1"
									alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
										data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1"
										data-feather="settings"></i> Settings & Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<div class="message">
				@include('includes.messages')
			</div>
            @yield('content')
            
            <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/"
									target="_blank"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
    </div>

	{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
	<script src="{{ asset("dashboard/js/all.js") }}"></script>
	<script src="{{ asset("dashboard/js/jquery.min.js") }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="{{ asset("dashboard/js/app.js") }}"></script>
	@yield('scripts')
</body>

</html>
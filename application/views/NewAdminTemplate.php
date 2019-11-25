<!DOCTYPE html>
<html lang="en">

<<<<<<< HEAD
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<meta name="description" content="Column search datatables examples">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<link href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/media/img/logo/favicon.ico" />
</head>


<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">

		<!-- BEGIN: Header -->
		<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
			<div class="m-container m-container--fluid m-container--full-height">
				<div class="m-stack m-stack--ver m-stack--desktop">

					<!-- BEGIN: Brand -->
					<div class="m-stack__item m-brand  m-brand--skin-dark ">
						<div class="m-stack m-stack--ver m-stack--general">
							<div class="m-stack__item m-stack__item--middle m-brand__logo">
								<a href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/index.html" class="m-brand__logo-wrapper">
									<img alt="" src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/media/img/logo/logo_default_dark.png" />
								</a>
							</div>
							<div class="m-stack__item m-stack__item--middle m-brand__tools">
=======
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title><?php echo $title; ?></title>
		<meta name="description" content="Column search datatables examples">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		
		<link href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		
		<link href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<link href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

	
		<link rel="shortcut icon" href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/media/img/logo/favicon.ico" />
	</head>

	
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/index.html" class="m-brand__logo-wrapper">
										<img alt="" src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/media/img/logo/logo_default_dark.png" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
>>>>>>> parent of d596a77... rubah form label material dan pendaftaran

								<!-- BEGIN: Left Aside Minimize Toggle -->
								<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
									<span></span>
								</a>

								<!-- END -->

								<!-- BEGIN: Responsive Aside Left Menu Toggler -->
								<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
									<span></span>
								</a>

								<!-- END -->

								<!-- BEGIN: Responsive Header Menu Toggler -->
								<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
									<span></span>
								</a>

								<!-- END -->

								<!-- BEGIN: Topbar Toggler -->
								<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
									<i class="flaticon-more"></i>
								</a>

								<!-- BEGIN: Topbar Toggler -->
							</div>
						</div>
					</div>

					<!-- END: Brand -->
					<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

						<!-- BEGIN: Horizontal Menu -->
						<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
						<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
							<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
								<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__link-text">
											<h4><?php echo $title; ?></h4>
										</span></a>
								</li>
							</ul>
						</div>
						<!-- END: Horizontal Menu -->

						<!-- BEGIN: Topbar -->
						<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
							<div class="m-stack__item m-topbar__nav-wrapper">
								<ul class="m-topbar__nav m-nav m-nav--inline">

									<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
										<a href="#" class="m-nav__link m-dropdown__toggle">
											<span class="m-topbar__userpic">
												<img src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
											</span>
											<span class="m-topbar__username m--hide">Nick</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__header m--align-center" style="background: url(<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
													<div class="m-card-user m-card-user--skin-dark">
														<div class="m-card-user__pic">
															<img src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
														</div>

														<div class="m-card-user__details">
															<span class="m-card-user__name m--font-weight-500"><?php echo $this->userdata['vl_op_nama']; ?></span>
															<!-- <a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a> -->
														</div>
													</div>
												</div>
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="m-nav m-nav--skin-light">
															<li class="m-nav__section m--hide">
																<span class="m-nav__section-text">Section</span>
															</li>
															<li class="m-nav__item">
																<a href="<?php echo base_url('assets/theme/default/dist/default/'); ?>/header/profile.html" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-profile-1"></i>
																	<span class="m-nav__link-title">
																		<span class="m-nav__link-wrap">
																			<span class="m-nav__link-text">My Profile</span>
																		</span>
																	</span>
																</a>
															</li>
															<li class="m-nav__separator m-nav__separator--fit">
															</li>
															<li class="m-nav__item">
																<a href="<?php echo site_url('login/logout'); ?>" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- END: Topbar -->
					</div>
				</div>
			</div>
		</header>

		<!-- END: Header -->

		<!-- begin::Body -->
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

			<!-- BEGIN: Left Aside -->
			<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>

			<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

				<!-- BEGIN: Aside Menu -->
				<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
					<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">

						<li class="m-menu__item " aria-haspopup="true"><a href="<?php echo site_url('Dashboard'); ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span></span></span></a></li>

						<?php foreach ($this->menu as $key => $value) {
							?>

							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text"><?php echo $value['NAMA_GROUP'] ?></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">

										<?php foreach ($value['submenu'] as $key2 => $value2) {
												$url = $value2['PATH'];
												?>
											<li class="m-menu__item " aria-haspopup="true"><a href="<?php echo site_url($url); ?>" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text"><?php echo $value2['NAMA_SUB_GROUP'] ?></span></a></li>
										<?php } ?>
									</ul>
								</div>
							</li>

						<?php } ?>

					</ul>
				</div>
				<!-- END: Aside Menu -->

			</div>

			<!-- END: Left Aside -->
			<div class="m-grid__item m-grid__item--fluid m-wrapper">
				<div class="m-content">

					<?= $content; ?>


					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>

		<!-- end:: Body -->

		<!-- begin::Footer -->
		<footer class="m-grid__item		m-footer ">
			<div class="m-container m-container--fluid m-container--full-height m-page__container">
				<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
					<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
						<span class="m-footer__copyright">
							2019 &copy; SIMRANMOR by <a href="#" class="m-link">PT. Tigapilar Maju Mandiri </a>
						</span>
					</div>
					<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
						<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
							<li class="m-nav__item">
								<a href="#" class="m-nav__link">
									<span class="m-nav__link-text">About</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!-- end::Footer -->
	</div>

	<!-- end:: Page -->

	<!-- begin::Scroll Top -->
	<div id="m_scroll_top" class="m-scroll-top">
		<i class="la la-arrow-up"></i>
	</div>

		<!-- begin::Quick Nav -->
		

		<!-- begin::Quick Nav -->

		<!--begin::Global Theme Bundle -->
		<script src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="<?php echo base_url('assets/theme/default/dist/default/'); ?>/assets/demo/default/custom/crud/datatables/search-options/column-search.js" type="text/javascript"></script>

<!-- end::Body -->

</html>
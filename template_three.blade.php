<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<?php
	$theme = $data['theme'];
	$bodyBackGroundImg =  public_path("storage/images/Ftemplate-3-"  . $theme . ".jpg");
	$bodyBackImg =  public_path("storage/images/Ftemplate-3-back-"  . $theme . ".jpg");
	$defaultImg =  public_path("storage/images/Template2_BCFloorplans-1_03.jpg");
	$banner =  public_path("storage/images/ftemplate-3-banner.png");

	?>                            
	<style>
		html {
			-webkit-print-color-adjust: exact;
			-webkit-filter: opacity(1);
		}

		@font-face {
			font-family: Century-Gothic-Regular;
			src: url("fonts/GOTHIC.TTF");
		}

		@font-face {
			font-family: Century-Gothic-Bold;
			src: url("fonts/GOTHICB.TTF");
		}

		@font-face {
			font-family: TrajanPro-Bold;
			src: url("fonts/TrajanPro-Bold.otf");
		}


		@font-face {
			font-family: Arial-Bold;
			src: url("fonts/arialbd.ttf");
		}

		@page {
			size: 17in 11in;
			margin: 0;
			padding: 0;
		}

		/* Front Page */

		.front-page-print {
			padding: 0.4931in 0.4931in 0in 0.4931in;
			width: 17in;
			/* height:11in; */
			box-sizing: border-box;
			background-repeat: no-repeat;
			/* zoom:90%; */
			/* background:url("Ftemplate-2-grey.jpg"); */
			/* background-size:100%; */
		}

		#bodyBackGroundImg {
			position: fixed;
			width: 17in;
			height: 11in;
			z-index: -999;
		}

		.pdf-convert {

			background: #ccc;
			position: absolute;
			height: 11in;
			width: 8.5in;
			top: 0;
			left: 0;
			overflow: none;

		}

		.pdf-convert img {
			height: 11in;
			width: 8.5in;
		}

		.main-wrap {
			float: left;
			width: 8in;
			
			box-sizing: border-box;
		}

		.header-banner-wrap {
			width: 100%;
			margin-top: 0.85in;
			color: #FFF;
			z-index: 20;
    position: relative;
		}

		.header-banner-wrap div {
			text-align: center;
		}

		.header-banner-wrap div:nth-child(1) {
			font-family: TrajanPro-Bold;
			font-size: 0.4861in;

		}

		.header-banner-wrap div:nth-child(2) {
			font-family: Century-Gothic-Regular;
			font-size: 0.1944in;
			text-transform: uppercase;
		}

		.header-banner-wrap div:nth-child(3) {
			font-family: TrajanPro-Bold;
			font-size: 0.3333in;
			text-transform: uppercase;
		}

		.header-banner-logo {
			position: absolute;
			bottom: 21px;
			text-align: center;
			width: 100%;
		}

		.header-banner-logo img {
			width: 1.7338in !important;
			height: 0.9467in !important;
		}

		.main-image {
			width: 8.4555in;
			height: 5.7in;
			/*border:0.0278in solid #fff;*/
		}

		.main-image img {
			width: 8.4984in;
			height: 5.7in;
		}

		.tile-images {
			background:#ffffff00;
			width: 100%;
			height: 1.66in;
			position: relative;
			top: 3.199in;
		}

		.tile-images img {
			position: relative;
			top: -3in;
			height: 1.611in;
		}


		.image-zoom-btn-wrap {
			z-index: 1;
			position: absolute;
			padding: 0 5px 0px;
			text-align: right;
			bottom: 37px;
			right: 20px;

		}

		.template-zoom-btn {
			background: #fff;
			/* padding: 5px; */
			height: 25px;
			border: 0;
			margin: 5px;
			border-radius: 7px;
			cursor: pointer;
			opacity: 0.6;
		}

		.front-pg-footer-img {
			width: 4.8522in;
			height: 3.2336in;
			position: relative;
			margin: auto;
			top: 21px;
			border: 0.0278in solid #fff;
		}

		.front-pg-footer-img img {
			width: 4.8522in;
			height: 3.2336in;
		}



		.floorplan-img-wrap {
			width: 7.5069in;
			height: 8.5in;
			padding-right: 0.4931in;
			box-sizing: border-box;
		}

		.floorplan-img-wrap img {
			width: 7.5069in;
			height: 8.5in;
		}

		.leftpanel-logo {
			width: 1.7478in;
			height: 0.9675in;
		}

		.leftpanel-logo img {
			width: 100%;
			height: 0.9675in;
		}

		.footer-name {
			color: #231f20;
			margin-top: 0.1875in;
		}


		.footer-name span {
			text-transform: uppercase;
		}

		.footer-name span:nth-child(1) {
			font-family: TrajanPro-Bold;
			font-size: 0.1389in;

		}

		.footer-name span:nth-child(2) {
			font-family: Century-Gothic-Bold;
			font-size: 0.1389in;

		}

		.contact-details {
			color: #231f20;
		}

		.phone-lbl {
			font-family: Century-Gothic-Bold;
			text-transform: uppercase;
			font-size: 0.1389in;
		}

		.phone-numb {
			font-family: Century-Gothic-Regular;
			font-size: 0.1389in;
		}

		.text-center {
			text-align: center;
		}

		.fsheets-copyright {
			font-family: Arial-Bold;
			margin-top: 1.2in;
			color: #231f20;
			font-size: 0.08in;
			margin-bottom: 0.0336in;
			text-align: left;
		}

		.footer-mark {
			font-family: Arial-Bold;
			font-size: 0.1333in;
			color: #231f20;
		}

		.clearfix {
			clear: both;
		}

		.header-wrap {
			margin-top: 0.1in;
		}

		.main-logo {
			position: absolute;
			width: 1.78in;
			height: 0.97in;
			top: 9px;
			left: 77px;
		}

		.main-logo img {
			
			height: 0.97in;
			
		}

		.bg-hide {
			display: none;
		}




		/* Back Page CSS */

		.back-page-print {
			padding: 0.4931in 0.4931in 0.4931in 0.4931in;
			width: 17in;
			/* height:11in; */
			/*     box-sizing: border-box;
    background-repeat: no-repeat;
    zoom:90%;
	background:url("Ftemplate-3-back-grey.jpg");
	background-size:100%; */
		}

		.main-img-back {
			width: 7.8577in;
			height: 5.2422in;
			position: relative;
			overflow: hidden;
			border: 5px solid #222;
    border-top: none;
    border-left: none;
		}

		.main-img-back img {
			width: 7.8577in;
			height: 5.2422in;
			
		}

		.main-wrap-front {
			float: left;
			width: 8.0069in;
		}

		.image-zoom-btn-wrap {
			z-index: 1;
			position: absolute;
			padding: 0 5px 0px;
			text-align: right;
			bottom: 37px;
			right: 13px;

		}

		.template-zoom-btn {
			background: #fff;
			/* padding: 5px; */
			height: 25px;
			border: 0;
			margin: 5px;
			border-radius: 7px;
			cursor: pointer;
			opacity: 0.6;
		}

		.main-description {
			margin-top: 0.2391in;
		}

		.description {
			box-sizing: border-box;
		}


		h1 {
			font-size: 0.3889in;
			color: #fff;
			font-family: TrajanPro-Bold;
			margin: 0;
			letter-spacing: 0.09in;
			text-align: center;
		}

		p {
			font-family: Century-Gothic-Regular;
			font-size: 0.125in;
			color: #fff;
			line-height: 0.18in;

		}

		.description-footer-img {
			width: 3.7578in;
			height: 2.5022in;
			margin-top: 0.3in;
			box-shadow: 10px 9px 3px #000;
		}

		.description-footer-img img {
			width: 3.7578in;
			height: 2.5022in;
			border: 5px solid #222;
    border-top: none;
    border-left: none;
		}

		.main-tile-img {
			width: 3.2527in;
			float: left;
		}

		.tile-img {
			width: 3.2527in;
			height: 2.16in;
			margin-bottom: 0.28888in;
			/*border:0.0278in solid #fff;*/
		}

		.tile-img img {
			width: 3.2527in;
			height: 2.16in;
			/* height:2.1646in; */
		}

		.details-master-wrap {
			right: 0;
		}

		.main-details-wrap {
			width: 4.4in;
			margin-left: 0.1654in;
			padding-left: 0.1in;
			box-sizing: border-box;
		}

		.right-panel-header {
			margin-bottom: 0.2971in;
		}

		.right-panel-header div {
			text-align: center;
			text-transform: uppercase;
			color: #fff;
		}

		.right-panel-header div:nth-child(1),
		.right-panel-header div:nth-child(2) {
			font-family: TrajanPro-Bold;
			font-size: 0.3333in;
		}

		.right-panel-header div:nth-child(2) {
			font-size: 0.2639in;
		}

		.right-panel-header div:nth-child(3) {
			font-family: Century-Gothic-Regular;
			font-size: 0.1389in;
		}

		.right-panel-header div:nth-child {
			font-family: TrajanPro-Bold;
			font-size: 0.3333in;
		}

		.main-details {
			margin-top: 0.06in;
		}

		.main-details-header {
			color: #fff;
			font-family: TrajanPro-Bold;
			font-size: 0.1667in;
			text-transform: uppercase;
		}

		.main-details-description {
			font-family: Century-Gothic-Regular;
			text-align: justify;
			font-size: 0.125in;
			color: #fff;
		}

		.right-bottom-img-wrap {
			margin-top: 0.188in;
		}

		.right-bottom-img {
			border: 0.0278in solid #fff;
			width: 4.9572in;
			height: 6.3422in;
			position: relative;
		}

		.right-bottom-img img {
			width: 100%;
			height: 6.3422in;
		}

		.right-main-img {
			width: 4.34in;
			height: 7.0in;
			margin-top: 0.2in;
			overflow: hidden;
		}

		.right-main-img img {
			width: 4.34in;
			height: 7.0in;
		}

		.breakPage {
			page-break-after: always;
		}

		.tmp-three-desc{
			
		}


		.clearfix {
			clear: both;
		}

		.img-shadow-border{
    border: 5px solid #222;
    border-top: none;
    border-left: none;
	}


		/* Back Page CSS End */
	</style>
	<title>Untitled Document</title>
</head>

<body>
	<!--    <img src="{{  $defaultImg }}" id="bodyBackGroundImg" />    -->

	<?php if ($data['front_page']->main_img_1->file_type == "VENDOR_IMAGE_PDF_CONVERT") {
		$backPageBodyWrap  = "backpage-body-wrap bg-hide";
		$backPagePdfConvert = "pdf-convert";
	?>
	<?php } else {
		$backPageBodyWrap = "backpage-body-wrap";
		$backPagePdfConvert = "pdf-convert bg-hide";
	}
	?>



	<!-- Front Page  -->

	<div class="front-page-print breakPage">
		<img src="{{  ( $bodyBackGroundImg) }}" id="bodyBackGroundImg" />

		<!--Left Panel-->
		<div class="{{$backPagePdfConvert}}">
			<img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />
		</div>

		<div class="main-wrap" style="position:relative;">
			<div class="{{ $backPageBodyWrap}}">
				<div class="floorplan-img-wrap" style=" padding-right: 0.4931in;box-sizing: border-box;"><img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}"></div>
				<div style="width:69%;left:0;position:absolute;bottom:0.5in">
					<div class="leftpanel-logo">

					</div>
					<div class="footer-name">
						<span>{{$data['front_page']->contact_value ?? '' }}</span>
					</div>
					<div class="footer-name" style="margin-top:0;"><span>MACDONALD REALTY</span></div>
					<div class="contact-details">
						<span class="phone-lbl">{{$data['front_page']->phone_title ?? '' }}</span>&nbsp;
						<span class="phone-numb">{{$data['front_page']->phone_value ?? '' }}</span>&nbsp;&nbsp;
						<span class="phone-lbl">{{$data['front_page']->email_title ?? '' }}</span>
						<span class="phone-numb">{{$data['front_page']->email_value ?? '' }}</span>
					</div>
					<div class="contact-details">
						<span class="phone-lbl">{{$data['front_page']->mls_title ?? '' }}</span>
						<span class="phone-lbl">{{$data['front_page']->mls_value ?? '' }}</span>
					</div>
					<div class="fsheets-copyright" style="margin-top:0;">
						ll information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal.
						Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless
					</div>
				</div>
				<div style="width:31%;padding-right: 0.4931in;box-sizing: border-box;position:absolute;right:-0.5in;bottom:0.3in;">
					<div class="fsheets-copyright">

						<img src="{{$data['company_logo'] ?? '' }}" style="height:75px;" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<div class="footer-mark" style="position:absolute;bottom:0.2in;">DESIGNED AND PRINTED BY BC FLOOR PLANS</div>
			</div>
		</div>

		<!--Left Panel End-->

		<!--Right Panel-->

		<div class="main-wrap" style="box-sizing:border-box;position:relative;width:8.5in;">
			<div style="position:relative;height:5.8437in;background:#ccc">
				<div class="main-image" style="position:absolute;top:-3px;">
					<img src="{{ $data['front_page']->main_img_2->file_path_large  ?? ''}}" />
				</div>
				<div style="position:absolute;top:-47px;z-index:4;">
					<div style="position: relative;">
						<img src="{{$banner}}" style="width:100%" />
						<div class="main-logo">
							<img src="{{$data['company_logo'] ?? '' }}" />
						</div>
					</div>
				</div>
			</div>
			<div class="tile-images">
					
				<img  src="{{ $data['front_page']->img_1->file_path  ?? ''}}"  style="width:24.95%;margin-top:0.2in;" />
				<img  src="{{ $data['front_page']->img_2->file_path  ?? ''}}" style="width:24.95%;margin-top:0.2in;" />
				<img  src="{{ $data['front_page']->img_3->file_path  ?? ''}}" style="width:24.25%;margin-top:0.2in;" />
				<img  src="{{ $data['front_page']->img_4->file_path  ?? ''}}" style="width:24.25%;;margin-top:0.2in;" />
			</div>
			<div class="header-wrap">
				<div class="header-banner-wrap">
					<div>
						{{$data['front_page']->header ?? '' }}
					</div>
					<div>{{$data['front_page']->sub_header ?? '' }}</div>
					<div>${{$data['front_page']->amount ?? '' }}</div>
				</div>

				<div class="clearfix"></div>
			</div>

		</div>

		<!--Right Panel End-->

	</div>

	<!-- Front Page End -->




	<!-- Back Page -->

	<div class="back-page-print" style="position:relative">

		<img src="{{ ($bodyBackImg) }}" id="bodyBackGroundImg" />

		<h1 style="position:absolute;bottom:0;width:100%;font-size:0.3in;">{{ $data['back_page']->description_header  ?? ''}}</h1>

		<!--Left Panel-->

		<div class="main-wrap-front" style="padding-right:0.1687in;box-sizing:border-box">
			<div class="main-img-back">
				<img src="{{ $data['back_page']->main_img_1->file_path  ?? ''}}"  />

				<div class="image-zoom-btn-wrap">
					<button type="button" class="template-zoom-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
					<button type="button" class="template-zoom-btn"><i class="fa fa-minus" aria-hidden="true"></i></button>
				</div>
			</div>
			<div style="position:relative">
				<div class="description-footer-img" style="position:absolute;top:0;left:0;">
					<img src="{{ $data['back_page']->img_1->file_path  ?? ''}}"  />
				</div>
				<div class="description-footer-img" style="margin-left:0.322in;position:absolute;top:0;right:0.15555in">
				<img src="{{ $data['back_page']->img_2->file_path  ?? ''}}"  />
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="main-description" style="position:absolute;bottom:0.2in;">
				<div class="description tmp-three-desc">
					<p style="height: 1.1777in; max-width: 7.7in; text-align: justify;">
						On top of it all! Beautiful sub-penthouse in the well appointed CENTRO building. This centrally home boasts incredible, totally unobstructed VIEWS overlooking Brighouse Park & to the South and South Westproviding unhindered privacy. The perfect floorplan with open concept living and cross unit bedrooms. Dark laminate flooring, S/S amenities including exercise room, sauna, roof top courtyard and outdoor kids playground. With parking, and storage locker and
						balance of the the 5-10 warranty, this home provides nothing but exceptional value. Call today to set up your viewing.
					</p>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>

		<!--Left Panel End-->

		<!--Right Panel-->

		<div class="main-wrap-front" style="box-sizing:border-box;position:relative;margin-left:-0.1in;">
			<div class="tile-img-wrap" style="position:relative;">
				<div class="main-tile-img" style="position:absolute;top:0;left:-1in;">
					<div class="tile-img img-shadow-border">	<img src="{{ $data['back_page']->img_3->file_path  ?? ''}}"  /></div>
					<div class="tile-img img-shadow-border">	<img src="{{ $data['back_page']->img_4->file_path  ?? ''}}"  /></div>
					<div class="tile-img img-shadow-border">	<img src="{{ $data['back_page']->img_5->file_path  ?? ''}}"  /></div>
					<div class="tile-img img-shadow-border">	<img src="{{ $data['back_page']->img_6->file_path  ?? ''}}"  /></div>
				</div>
				<div class="main-details-wrap" style="position:absolute;top:0;right:0.1in;">
					<div class="details-master-wrap" style="position:relative;">
						<div style="width:50%;position:absolute;top:0;left:0;">
							<div style="box-sizing:border-box;">
								<div class="main-details">
									<div class="main-details-header">
										{{ $data['back_page']->law_restrictions_title  ?? ''}}:
									</div>
									<div class="main-details-description">
										{{ $data['back_page']->law_restrictions_value  ?? ''}}
									</div>
								</div>
								<div class="main-details">
									<div class="main-details-header">
										{{ $data['back_page']->main_fees_title  ?? ''}}
									</div>
									<div class="main-details-description">
										${{ $data['back_page']->main_fees_value  ?? ''}}
									</div>
								</div>

								<div class="main-details">
									<div class="main-details-header">
										{{ $data['back_page']->main_fees_include_title  ?? ''}}
									</div>
									<div class="main-details-description">
										{{ $data['back_page']->main_fees_include_value  ?? ''}}
									</div>
								</div>

								<div class="main-details">
									<div class="main-details-header">
										{{ $data['back_page']->features_include_title  ?? ''}}
									</div>
									<div class="main-details-description">
										{{ $data['back_page']->features_include_value  ?? ''}}
									</div>
								</div>

							</div>
						</div>
						<div style="width:50%;;box-sizing:border-box;position:absolute;top:0;right:0">
							<div style="box-sizing:border-box;padding-left:0.2in">
								<div class="main-details">
									<div class="main-details-header">
										{{ $data['back_page']->site_influences_title  ?? ''}}
									</div>
									<div class="main-details-description">
										{{ $data['back_page']->site_influences_value  ?? ''}}
									</div>
								</div>
								<div class="main-details">
									<div class="main-details-header">
										{{ $data['back_page']->amenities_title  ?? ''}}
									</div>
									<div class="main-details-description">
										{{ $data['back_page']->amenities_value  ?? ''}}
									</div>
								</div>
								<div class="main-details">
									<div class="main-details-header">
										{{ $data['back_page']->view_title  ?? ''}}:
									</div>
									<div class="main-details-description">
										{{ $data['back_page']->view_value  ?? ''}}
									</div>

								</div>
							</div>
						</div>
						<div class="right-main-img" style="top:2.28888in;position:absolute;">
						<img src="{{ $data['back_page']->main_img_2->file_path  ?? ''}}"  />
							<div class="image-zoom-btn-wrap">
								<button type="button" class="template-zoom-btn"><i class="fa fa-plus" aria-hidden="true"></i></button>
								<button type="button" class="template-zoom-btn"><i class="fa fa-minus" aria-hidden="true"></i></button>
							</div>
						</div>

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>



		<!--Right Panel End-->

	</div>

	<!-- Back Page End -->
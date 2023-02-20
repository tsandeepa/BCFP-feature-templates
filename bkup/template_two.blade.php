<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<?php
	$theme = $data['theme'];
	$bodyBackGroundImg =  public_path("storage/images/Ftemplate-2-"  . $theme . ".jpg");
	$bodyBackImg =  public_path("storage/images/Ftemplate-2-back-"  . $theme . ".jpg");
	$defaultImg =  public_path("storage/images/HQ/default.png");   

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


		.front-page-print {
			padding: 0.4931in 0.4931in 0in 0.4931in;
			width: 17in;
			/* height:11in; */
			box-sizing: border-box;
			background-repeat: no-repeat;
			position:relative;
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

		.main-wrap {
			float: left;
			width: 8in;
			position:relative;
		}

		.header-banner-wrap {
			width: 100%;
			margin-top: 0.25in;
			color: #FFF;
		}

		.header-banner-wrap div {
			text-align: center;
		}

		.header-banner-wrap div:nth-child(1) {
			font-family: TrajanPro-Bold;
			font-size: 0.3333in;

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
			bottom: 0.2in;
			text-align: center;
			height: 3.2336in;
			width: 100%;
			z-index: 2;
			top: 0;
			left: 0;
		}

		.header-banner-logo img {
			
			width:1.7338in !important;
	height:0.9467in !important;
		}



		.main-image {
			width: 7.5013in;
			height: 5.2006in;
			border: 0.0278in solid #fff;
		}

		.main-image img {
			width: 7.5013in;
			height: 5.2006in;
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
			position: absolute;
			left: 0;
			left: 25%;
			margin: auto;
			bottom: 50px;
			border: 0.0278in solid #fff;
			overflow:hidden;

		}

		.front-pg-footer-image {
			width: 4.8522in;
			height: 3.2336in;
		}

		.front-pg-footer-image-logo {
			width: 1.7338in;
			margin-bottom: 0.3in;
		}



		.floorplan-img-wrap {
			width:7.5069in;
			height: 7.9711in;
			margin-right: 0.4931in;
			box-sizing: border-box;
			overflow: hidden;

		}

		.floorplan-img-wrap img {

			width: 8in;
			overflow: hidden;

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
			color: #fff;
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

			color: #fff;
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
			margin-top: 1.79in;
			color: #fff;
			font-size: 0.08in;
			margin-bottom: 0.0336in;
		}

		.footer-mark {
			font-family: Arial-Bold;
			font-size: 0.1333in;
			color: #fff;
			margin-top:0.03in;
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

		.bg-hide {
			display: none;
		}

		.breakPage {
			page-break-after: always;
		}

		.clearfix {
			clear: both;
		}


		/* Back Page CSS */

		.back-page-print {
			padding: 0.4931in 0.4931in 0.4931in 0.4931in;
			width: 17in;
			/*  height:11in; */
			box-sizing: border-box;
			/*  background-repeat: no-repeat;
   	zoom:90%;
	background:url("Ftemplate-2-back-grey.jpg"); */
			/* background-size:100%; */
		}

		.main-img-back {
			width: 7.8577in;
			height: 5.2422in;
			position: relative;
				overflow: hidden;
			border: 0.0278in solid #fff;
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
			left: 13px;

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
			font-size: 0.25in;
			color: #fff;
			font-family: TrajanPro-Bold;
			margin: 0;
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
			margin-top: 0.1739in;
			border: 0.0278in solid #fff;
		}

		.description-footer-img img {
			width: 3.7578in;
			height: 2.5022in;
		}

		.main-tile-img {
			width: 5.1292in;
		}

		.tile-img {
			width: 2.401in;
			height: 1.5946in;
			border: 0.0278in solid #fff;
		}

		.tile-img img {
			width: 2.401in;
			height: 1.5946in;
		}

		.details-master-wrap {
			right: 0;
		}

		.main-details-wrap {
			width: 2.541in;
			margin-left: 0.1654in;
			position: relative;
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
			margin-bottom: 0.2464in;
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
			position: relative;
			top: 3.62222in;
			
		}

		.right-bottom-img {
			margin-left:-0.17in;
			border: 0.0278in solid #fff;
			width: 5in;
			height: 6.298in;
			position: relative;
		}

		.right-bottom-img img {
			width: 100%;
			height: 6.298in;
		}
	</style>

	<!-- /* Back Page CSS End */ -->

	</style>
	<title>Untitled Document</title>
</head>

<body>


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

		<div class="main-wrap">
			<div class="{{ $backPageBodyWrap}}" style="position:relative;">
				<div class="floorplan-img-wrap" style="position:relative;">
				
				
					 <img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" /> 
				</div>
				<div style="margin-top:-0.4in;position:relative">
					<div style="width:45%;">
						<div class="leftpanel-logo">
					
						 <img src="{{$data['company_logo'] ?? '' }}" /> 
						</div>
						<div class="footer-name">
							<span>{{$data['front_page']->contact_value ?? '' }}</span>
							<span>MACDONALD REALTY</span>
						</div>
						<div class="contact-details">
							<span class="phone-lbl">{{$data['front_page']->phone_title ?? '' }}</span>&nbsp;
							<span class="phone-numb">{{$data['front_page']->phone_value ?? '' }}</span>&nbsp;&nbsp;
						</div>
						<div class="contact-details">
							<span class="phone-lbl">{{$data['front_page']->email_title ?? '' }}</span>
							<span class="phone-numb">{{$data['front_page']->email_value ?? '' }}</span>
						</div>
						<div class="contact-details">
							<span class="phone-lbl">{{$data['front_page']->mls_title ?? '' }}</span>
							<span class="phone-lbl">{{$data['front_page']->mls_value ?? '' }}</span>
						</div>
						<div class="footer-mark">DESIGNED AND PRINTED BY BC FLOOR PLANS</div>
					</div>
					<div style="margin-top:-0.3in;color: #fff;font-size: 0.08in;width:3.6in;margin-left:4in">
					
					All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor

</div>
					
				</div>
			</div>

		</div>
		<!--Left Panel End-->

		<!--Right Panel-->

		<div class="main-wrap" style="padding-left:0.4931in;box-sizing:border-box;position:relative;">
			<div class="main-image" style="position:relative;">
				<img src="{{ $data['front_page']->main_img_2->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_2_x}}px, {{ $data['front_page']->main_img_2_y}}px) scale( {{ $data['front_page']->main_img_2_scale}} );"  />
			</div>
			<div class="header-wrap" style="position:relative;">
				<div class="header-banner-wrap">
					<div>{{$data['front_page']->header ?? '' }}</div>
					<div>{{$data['front_page']->sub_header ?? '' }}</div>
					<div>${{$data['front_page']->amount ?? '' }}</div>
				</div>

				<div class="clearfix"></div>
			</div>
			<div class="front-pg-footer-img">
				<div style="position:relative">
					<img src="{{ $data['front_page']->img_1->file_path_large  ?? ''}}" class="front-pg-footer-image" />

					<div class="header-banner-logo">
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td valign="bottom" style="text-align:center;width:4.8522in;height:3.2336in;">
								<!-- <img src="{{$defaultImg }}"  /> -->
								<img src="{{$data['company_logo'] ?? '' }}"  class="front-pg-footer-image-logo" />
								</td>
							</tr>
						</table>
					</div>

				</div>

			</div>
		</div>

		<!--Right Panel End-->

	</div>


	<!-- Front Page End -->


	<!-- Back Page  -->

	<div class="back-page-print">
		<img src="{{($bodyBackImg)}}" id="bodyBackGroundImg" />
		<!--Left Panel-->

		<div class="main-wrap-front" style="padding-right:0.1687in;box-sizing:border-box" style="border:1px solid #ff0000">
			<div class="main-img-back">
				<img src="{{ $data['back_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['back_page']->main_img_1_x}}px, {{ $data['back_page']->main_img_1_y}}px) scale( {{ $data['back_page']->main_img_1_scale}} );" />
			</div>
			<div class="main-description">
				<div class="description">
					<h1>{{ $data['back_page']->description_header  ?? ''}}</h1>
					<p style="height: 1.1777in;">
						{{ $data['back_page']->main_description  ?? ''}}
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div style="position:relative;">
				<div class="description-footer-img" style="position:absolute;top:0;">
					<img src="{{ $data['back_page']->img_1->file_path_large  ?? ''}}" />
				</div>
				<div class="description-footer-img" style="position:absolute;right:0.1in;top:0;">
					<img src="{{ $data['back_page']->img_2->file_path_large  ?? ''}}" />
				</div>
			</div>

			<div class="clearfix"></div>

		</div>

		<!--Left Panel End-->

		<!--Right Panel-->

		<div class="main-wrap-front" style="padding-left:0.1687in;box-sizing:border-box;position:relative;">
			<div class="tile-img-wrap" style="float:left;">
				<div class="main-tile-img" style="float:left;">
					<div class="tile-img" style="top:0;left:-0.0222in;position:absolute;">
					<img src="{{ $data['back_page']->img_3->file_path_large  ?? ''}}" />
					</div>
					<div class="tile-img" style="top:0;left:2.6in;position:absolute;">
					<img src="{{ $data['back_page']->img_4->file_path_large  ?? ''}}" />
					</div>
					<div class="tile-img" style="top:1.8111in;left:-0.0222in;position:absolute;">
					<img src="{{ $data['back_page']->img_5->file_path_large  ?? ''}}" />
					</div>
					<div class="tile-img" style="top:1.8111in;left:2.6in;position:absolute;">
					<img src="{{ $data['back_page']->img_6->file_path_large  ?? ''}}" />
					</div>
					<div class="right-bottom-img-wrap" style="position:absolute;bottom:0.0333in;">
						<div class="right-bottom-img">
							<img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}"  />
						</div>
					</div>
				</div>
				<div class="main-details-wrap" style="position:absolute;right:0.3in;">
					<div class="right-panel-header">
						
						<div>{{$data['front_page']->header ?? '' }}</div>
						<div>{{$data['front_page']->sub_header ?? '' }}</div>
					</div>
					<div class="details-master-wrap">
						<div class="main-details">
							<div class="main-details-header">

							</div>
							<div class="main-details-description">
								{{ $data['back_page']->main_description_2  ?? ''}}
							</div>
						</div>
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
								{{ $data['back_page']->main_fees_title  ?? ''}}:
							</div>
							<div class="main-details-description">
								${{ $data['back_page']->main_fees_value  ?? ''}}
							</div>
						</div>
						<div class="main-details">
							<div class="main-details-header">
								{{ $data['back_page']->main_fees_include_title  ?? ''}}:
							</div>
							<div class="main-details-description">
								{{ $data['back_page']->main_fees_include_value  ?? ''}}
							</div>
						</div>
						<div class="main-details">
							<div class="main-details-header">
								{{ $data['back_page']->features_include_title  ?? ''}}:
							</div>
							<div class="main-details-description">
								{{ $data['back_page']->features_include_value  ?? ''}}
							</div>
						</div>
						<div class="main-details">
							<div class="main-details-header">
								{{ $data['back_page']->site_influences_title  ?? ''}}:
							</div>
							<div class="main-details-description">
								{{ $data['back_page']->site_influences_value  ?? ''}}
							</div>
						</div>
						<div class="main-details">
							<div class="main-details-header">
								{{ $data['back_page']->amenities_title  ?? ''}}:
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
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>



		<!--Right Panel End-->

	</div>


	<!-- Back Page End -->
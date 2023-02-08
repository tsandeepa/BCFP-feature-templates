<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <?php
   $theme = $data['theme'];
   $bodyBackGroundImg =  public_path("storage/images/ftemplate-1-"  . $theme . ".png");
   $bodyBackImg =public_path("storage/images/ftemplate-1-back-"  . $theme . ".jpg");
   $defaultImg =  public_path("storage/images/HQ/default.png");
 


   ?>
   <style>
      @charset "utf-8";

      /* CSS Document */
      html {
         -webkit-print-color-adjust: exact;
         -webkit-filter: opacity(1);
      }

      body {
         padding: 10px;
      }

      @page {
         size: 17in 11in;
         margin: 0;
         padding: 0;
      }


      .front-page-print {
         box-sizing: border-box;
         background-repeat: no-repeat;
         padding: 0.4931in 0.4931in 0in 0.4931in;
         width: 17in;
         position: relative;
         /* height:5in; */
         /* overflow: hidden; */
      }

      #bodyBackGroundImg {
         position: fixed;
         width: 17in;
         height: 11in;
         z-index: -999;
      }

      .template-1-tile-img {
         position: absolute;
         z-index: -1200;
         width: 8.5in;
         height: 8.8in;
         right: 1in;
         top: 2.4in;
         top: 2in;
         overflow: hidden;
      }

      .template-1-tile-img img {
         width: 8.5in;

      }

      .main-wrap {
         float: left;
         width: 8in;
      }

      .header-banner-wrap {
         width: 5.75in;
         margin-top: 0.25in;
         color: #FFF;
      }


      .header-banner-wrap div:nth-child(1) {
         font-family: Century-Gothic-Bold;
         font-size: 0.3611in;

      }

      .header-banner-wrap div:nth-child(2) {
         font-family: Century-Gothic-Regular;
         font-size: 0.1944in;
         text-transform: uppercase;
      }

      .header-wrap{
         position:relative;
      }

      .header-banner-logo img {
         width: 1.7478in;
         height: 1in;
      }

      .header-banner-wrap {
         float: left;

      }

      .header-banner-logo {
         height: 1in;
         z-index: 100;
         top: 0.1in;
         right:0.4931in;
         position: absolute;
      }

      .main-image {
         width: 8.5in;
         height: 8.199in;
         position: absolute;
         z-index: -2;
         top: 38px;
         left: -47px;
         overflow: hidden;

      }

      .main-image img {}

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

      .amout-wrap {
         color: #fff;
         text-transform: uppercase;
      }

      .amout-wrap div:nth-child(1) {
         font-family: Century-Gothic-Regular;
         font-size: 0.2778in;
      }

      .amout-wrap div:nth-child(2) {
         font-family: Century-Gothic-bold;
         font-size: 0.2778in;
      }

      .floorplan-img-wrap {
         width: 7.6in;
         height: 7.6in;
         margin-bottom: 0.3in;
         margin-right: 0.4931in;
         box-sizing: border-box;
         overflow: hidden;
         background-color:#fff;
      }

      .floorplan-img-wrap img {
         width: 7.6in;
      }

      .leftpanel-logo {
         margin: auto;
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
         font-family: Century-Gothic-Bold;
         font-size: 0.1667in;

      }

      .footer-name span:nth-child(2) {
         font-family: Century-Gothic-Regular;
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
         margin-top: 0.0336in;
         color: #fff;
         font-size: 0.08in;
         margin-bottom: 0.0336in;
      }

      .footer-mark {
         font-family: Arial-Bold;
         font-size: 0.1333in;
         color: #fff;
      }

      .clearfix {
         clear: both;
      }

      .breakPage {
         page-break-after: always;
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


      /* Front Page End */

      /* Back Page  */

      .back-page-print {
         padding: 0.4931in 0.4931in 0in 0.4931in;
         width: 17in;
         /* height:11in; */
         box-sizing: border-box;
         background-repeat: no-repeat;
         background-size: 100%;
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
         position: relative;
      }

      .description-image {
         width: 2.2194in;
         height: 1.71in;
         border: 0.0278in solid #fff;
      }

      .description {
         float: left;
         padding-left: 0.5817in;
         box-sizing: border-box;
         width: 5.51in;
      }

      .description-image img {
         width: 2.2194in;
         height: 1.71in;
      }

      h1 {
         font-size: 0.1667in;
         color: #2C638D;
         font-family: Century-Gothic-bold;
         margin: 0;
      }

      p {
         font-family: Century-Gothic-Regular;
         font-size: 0.125in;
         color: #231F20;
         line-height: 0.18in;

      }

      .description-footer-img {
         width: 3.7578in;
         height: 2.5022in;
         margin-top: 0.1739in;
         border: 0.0278in solid #fff;
         /* position: absolute; */
      }

      .description-footer-img img {
         width: 3.7578in;
         height: 2.5022in;
      }

      .main-tile-img {
         width: 3.7578in;
      }

      .tile-img {
         width: 3.7578in;
         height: 2.5022in;
         border: 0.0278in solid #fff;
      }

      .tile-img img {
         width: 3.7578in;
         height: 2.5022in;
      }

      .details-master-wrap {
         width: 2in;
         position: absolute;
         right: 0;
      }

      .main-details-wrap {
         width: 3.9111in;
         margin-left: 0.1654in;
         position: relative;
      }

      .main-details {
         margin-top: 0.06in;
      }

      .main-details-header {
         color: #fff;
         text-align: right;
         font-family: Century-Gothic-Bold;
         font-size: 0.1528in;
         text-transform: uppercase;
      }

      .main-details-description {
         font-family: Century-Gothic-Regular;
         text-align: right;
         font-size: 0.125in;
         color: #fff;
      }

      .main-details-tile-wrap {
         position: absolute;
         top: 259px;
         left: 0;
      }

      .main-details-tile {
         width: 1.76in;
         height: 1.16in;
         border: 0.0278in solid #fff;
         position: relative;
      }

      .main-details-tile img {
         width: 100%;
         height: 1.16in;
      }

      .right-bottom-img-wrap {
         margin-top: 0.28in;
      }

      .right-bottom-img {
         border: 0.0278in solid #fff;
         height: 4.491in;
         width: 7.7999in;
         position: relative;
         overflow: hidden;
      }

      .right-bottom-img img {
         width: 100%;
         height: 4.491in;
      }

      .right-bottom-description {
         font-family: Century-Gothic-Regular;
         color: #231F20;
         font-size: 0.125in;
         width: 2.9565in;
         height: 1.2826in;
         text-align: justify;
         position: absolute;
         right: 0.3in;
         top: 0.3in;
         line-height: 0.2in;
      }

      .clearfix {
         clear: both;
      }
   </style>
   <title>Untitled Document</title>
</head>

<body>


   <!-- Font Page -->

 <?php if ($data['front_page']->main_img_1->file_type == "VENDOR_IMAGE_PDF_CONVERT") {
      $backPageBodyWrap  = "backpage-body-wrap bg-hide";
      $backPagePdfConvert = "pdf-convert";
   ?>
   <?php } else {
      $backPageBodyWrap = "backpage-body-wrap";
      $backPagePdfConvert = "pdf-convert bg-hide";
   }
   ?>

   <div class="front-page-print template-1 breakPage">
      <img src="{{  ( $bodyBackGroundImg) }}" id="bodyBackGroundImg" />
      <div class="template-1-tile-img">
         <div>
         
      
     <img src="{{ $data['front_page']->main_img_2->file_path_large  ??   $defaultImg  }}" style="transform: translate({{ $data['front_page']->main_img_2_x}}px, {{ $data['front_page']->main_img_2_y}}px) scale( {{ $data['front_page']->main_img_2_scale}} );" /> 
         </div>
      </div>


      <div class="{{$backPagePdfConvert}}">
         <img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />
      </div>
      <div class="main-wrap">&nbsp;
         <div class="{{  $backPageBodyWrap}}">
            <div class="floorplan-img-wrap">
<img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />
           


</div>
            <div class="leftpanel-logo">
               <img src="{{ $data['company_logo'] ?? '' }}" />

            </div>
            <div class="footer-name text-center">
               <span>{{$data['front_page']->contact_value ?? '' }}</span>

            </div>
            <div class="contact-details text-center">
               <span class="phone-lbl">{{$data['front_page']->phone_title ?? '' }}</span>&nbsp;
               <span class="phone-numb">{{$data['front_page']->phone_value ?? '' }}</span>&nbsp;&nbsp;
               <span class="phone-lbl">{{$data['front_page']->email_title ?? '' }}</span>
               <span class="phone-lbl">{{$data['front_page']->email_value ?? '' }}</span>
            </div>
            <div class="contact-details text-center">
               <span class="phone-lbl">{{$data['front_page']->mls_title ?? '' }}</span>
               <span class="phone-lbl">{{$data['front_page']->mls_value ?? '' }}</span>
            </div>
            <div class="fsheets-copyright">


               All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor

            </div>
            
         </div>
         <div class="footer-mark" style="margin-top:5px;position:relative;z-index:1000;">DESIGNED AND PRINTED BY BC FLOOR PLANS</div>
      </div> 

      <!--Left Panel End-->

      <!--Right Panel-->

<div class="main-wrap" style="padding-left:0.4931in;box-sizing:border-box;position:relative;">
         <div class="header-wrap">
            <div class="header-banner-wrap">
               <div>{{$data['front_page']->header ?? '' }}</div>
               <div>{{$data['front_page']->sub_header ?? '' }}</div>
            </div>
            <div class="header-banner-logo">
               <img src="{{$data['company_logo'] ?? '' }}" />
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="main-image">
         </div>
         <div class="amout-wrap" style="position:absolute;bottom:50px;">
            <div>OFFERED AT</div>
            <div>${{$data['front_page']->amount ?? '' }}</div>
         </div>
      </div>

   

      <!--Right Panel End-->


   </div>



   <!-- Back Page  -->

   <div class="back-page-print">

<img src="{{ ($bodyBackImg) }}" id="bodyBackGroundImg" />
<!-- Left Panel -->
      <div class="main-wrap-front" style="padding-right:0.1687in;box-sizing:border-box">

         <div class="main-img-back">
            <img src="{{ $data['back_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['back_page']->main_img_1_x}}px, {{ $data['back_page']->main_img_1_y}}px) scale( {{ $data['back_page']->main_img_1_scale}} );" />
           
         </div>
         <div class="main-description" style="position:relative;">
            <div class="description-image">
               <img src="{{ $data['back_page']->img_1->file_path_large  ?? ''}}" />
            </div>
            <div class="description" style="position:absolute;top:0;right:-5px;float:none;">
               <h1>{{ $data['back_page']->description_header  ?? ''}}</h1>
               <p>
                  {{ $data['back_page']->main_description  ?? ''}}
               </p>
            </div>

         </div>
         <div>
            <div class="description-footer-img" style="float:left;">
               <img src="{{ $data['back_page']->img_2->file_path_large  ?? ''}}" />
            </div>
            <div class="description-footer-img" style="float:left;margin-left:4.1222in;">
               <img src="{{ $data['back_page']->img_3->file_path_large  ?? ''}}" />
            </div>


         </div>


      </div>

<!-- Right Panel -->

      <div class="main-wrap-front" style=";box-sizing:border-box;">

            <div class="tile-img-wrap" style="height:5.2in">
               <div class="main-tile-img" style="position:absolute;left:0.43333in;">
                  <div class="tile-img"><img src="{{ $data['back_page']->img_4->file_path_large  ?? ''}}" /></div>
                  <div class="tile-img" style="margin-top: 0.18in;"><img src="{{ $data['back_page']->img_5->file_path_large  ?? ''}}" /></div>
               </div>
               <div class="main-details-wrap" style="position:absolute;left:4.2in;">
                  <div class="details-master-wrap">
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
                  <div class="main-details-tile-wrap">
                     <div style="position: relative;">
                        <div class="main-details-tile">
                           <img src="{{ $data['back_page']->img_6->file_path_large  ?? ''}}" />
                        </div>
                        <div class="main-details-tile" style="position:absolute;top:0;right:0;border:none"></div>
                     </div>
                     <div style="position: relative;margin-top:0.1;width:3.95in;margin-top:0.122in;">
                        <div class="main-details-tile">
                           <img src="{{ $data['back_page']->img_7->file_path_large  ?? ''}}" />
                        </div>
                        <div class="main-details-tile" style="position:absolute;top:0;right:0;">
                           <img src="{{ $data['back_page']->img_8->file_path_large  ?? ''}}" />
                        </div>
                     </div>
                     <div class="clearfix"></div>
                  </div>

               </div>

            </div>
            
            <div class="right-bottom-img-wrap" style="margin-left:-0.06in;">
               <div class="right-bottom-img">
                  <div class="right-bottom-description">
                     {{ $data['back_page']->main_description_2  ?? ''}}
                  </div>
                  <!--  hard code zoom value-->
                  <img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}" />
                   <!--     <img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}" style="transform: translate({{ $data['back_page']->main_img_2_x ?? 0}}px, {{ $data['back_page']->main_img_2_y ?? 0}}px) scale( {{ $data['back_page']->main_img_2_scale?? 0}} );"  /> -->



               </div>
            </div>
        
      </div> 

   </div>

 
</body>

</html>
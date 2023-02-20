<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <?php
         $theme = $data['theme'];
         $bodyBackGroundImg =    public_path("storage/images/ftemplate-7-front-". $theme . ".jpg");
         
         $bodyBackImg =    public_path("storage/images/ftemplate-7-back-". $theme . ".jpg");
         $defaultImg =    public_path("storage/images/default.png");
         ?>
      <style>
         @charset "utf-8";
         /* CSS Document */
         html {
         -webkit-print-color-adjust: exact;
         -webkit-filter: opacity(1);
         }
         body {
         padding: 0;
         }
         @page {
         size: 17in 11in;
         margin: 0;
         padding: 0;
         }
         .front-page-print {
         box-sizing: border-box;
         background-repeat: no-repeat;
         padding:0.5in;
         width: 15.9789in;
         position: relative;
         }
         .breakPage {
         page-break-after: always;
         }
         #bodyBackGroundImg {
         position: fixed;
         width: 17in;
         height: 11in;
         z-index: -5;
         }
         .main-wrap {
         width: 8in;
         /* height:9.7777in; */
         }
         .header-banner-wrap {
         width: 100%;
         color: #231F20;
         }
         .header-banner-wrap div {
         text-align: center;
         }
         .header-banner-wrap div:nth-child(1) {
         font-family: TrajanPro-Bold;
         font-size: 0.2778in;
         }
         .header-banner-wrap div:nth-child(2) {
         font-family: Century-Gothic-Regular;
         font-size: 0.1944in;
         text-transform: uppercase;
         }
         .header-banner-wrap div:nth-child(3) {
         font-family: TrajanPro-Bold;
         font-size: 0.4167in;
         text-transform: uppercase;
         margin-top: 0.1in;
         }
         .header-banner-logo {
         position: absolute;
         left: 2.4in;
         top:4in;
         }
         .header-banner-logo td {
         width: 2.1222in;
         height: 1.3669in;
         bottom: 21px;
         text-align: center;
         background: #ccc;
         }
         .header-banner-logo img {
         width: 1.7338in !important;
         height: 0.9467in !important;
         }
         .main-image {
         width: 6.8845in;
         height: 4.7722in;
         border: 0.0278in solid #fff;
         }
         .main-image img {
         width: 6.8845in;
         height: 4.7722in;
         }
         .tile-images {
         width: 100%;
         height: 1.611in;
         margin-top: 0.74in;
         }
         .tile-images img {
         width: 2.2101in;
         height: 1.4679in;
         border: 0.0278in solid #fff;
         margin-right: 0.04in;
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
         width: 6.8845in;
         height: 4.7722in;
         position: relative;
         top:-1.2in;
         border: 0.0278in solid #fff;
         }
         .front-pg-footer-img img {
         width: 6.8845in;
         height: 4.7722in;
         }
         .floorplan-img-wrap {
         width: 6.5in;
         height: 7.9711in;
         margin-right: 0.4931in;
         box-sizing: border-box;
         margin-left: 0.4931in;
         margin-top: 0.5in;
         background: #ccc;
         position:absolute;
         top:0.5in;
         left:0.5in;
         }

         .floorplan-img-wrap img{
            width:100%;
         }
         .leftpanel-logo {
         width: 1.6129in;
         height: 0.9675in;
         margin-top: 0.5in;
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
         font-size: 0.1528in;
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
         color: #231f20;
         font-size: 0.08in;
         text-align: left;
         position: relative;
         bottom: -0.2in;
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
            width:3.5in;
            margin:auto;
            margin-top:1.2in;
         }
         .main-logo {
         position: absolute;
         width: 1.78in;
         height: 0.97in;
         top: 9px;
         left: 77px;
         }
         .main-logo img {
         width: 100%;
         height: 0.97in;
         }



         /* Back page css */
         .back-page-print {
   padding: 0.4976in 0.4976in 0 0.4976in;
   width: 16in;
   box-sizing: border-box;
   background-repeat: no-repeat;
   position: relative;
   }
.main-img-back {
  width: 7.8577in;
  height: 5.2422in;
  border: 0.0278in solid #fff;
  position: relative;
  overflow: hidden;
}

.main-img-back img{
   width: 100%;
}
.main-wrap-back {
  position: relative;
  width: 7.875in;
}
.main-description {
  width: 4.3in;
  position: absolute;
  top: 5.3in;
  right: 0.03in;
  text-align: justify;
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
  font-size: 0.1806in;
  color: #231F20;
  line-height: 0.18in;
}
.description-footer-img {
  width: 3.3009in;
  height: 2.2in;
  /* border: 0.0278in solid #ff0000; */
  margin-top: 0.1115in;
  box-sizing:border-box;
}
.description-footer-img img {
  width: 3.3009in;
  height: 2.2in;
}
.tile-img {
  width: 3.7326in;
  height: 2.3745in;
  margin-bottom: 0.1115in;
  border: 0.0278in solid #fff;
}
.tile-img img {
  width: 3.7326in;
  height: 2.3745in;
}
.details-master-wrap {
  right: 0;
}
.details-master-wrap-top {
  color: #fff;
  text-align: center;
}
.details-master-wrap-top div:nth-child(1) {
  font-size: 0.3194in;
}
.details-master-wrap-top div:nth-child(2) {
  font-size: 0.3194in;
}
.details-master-wrap-top div:nth-child(3) {
  font-size: 0.1667in;
}
.main-details-wrap {
  width: 3.1in;
  margin-left: 0.1654in;
  box-sizing: border-box;
  position: absolute;
  top: 0;
  right: 0in;
}
.right-panel-header {
  margin-bottom: 0.2971in;
}
.right-panel-header div {
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}
.right-panel-header div:nth-child(1), .right-panel-header div:nth-child(2) {
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
  margin-top: 0.1957in;
}
.main-details-header {
  color: #fff;
  font-family: TrajanPro-Bold;
  font-size: 0.1528in;font-weight:bold;
  text-transform: uppercase;
  text-align: center;
}
.main-details-description {
  font-family: Century-Gothic-Regular;
  text-align: center;
  font-size: 0.1389in;
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
  height: 7.1in;
  margin-top: 0.2in;
  overflow: hidden;
}
.right-main-img img {
  width: 3.0522in;
  height: 1.9516in;
  border: 0.0278in solid #fff;
  margin-bottom: 0.2138in;
}
.tile-img-wrap {
  position: relative;
}
         /* Back page css End */
      </style>
      <title>Untitled Document</title>
   </head>
   <body>
      <!-- Front -->
      <div class="front-page-print breakPage">
      <img src="{{$bodyBackGroundImg}}" id="bodyBackGroundImg" />
      <!--Left Panel -->
      <div class="main-wrap">
         <div class="floorplan-img-wrap" style="overflow:hidden">
         <img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />
         <!-- <img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate(27px, -2px) scale(1.6);" /> -->

         </div>
         <div style="position:absolute;width:100%;bottom:0.6in;left:1.5in;">
            <div style="font-size:0.1667in;color:#231F20;text-transform: uppercase;margin-bottom: 0.03in;width:2in;box-sizing:border-box;padding-left:1.5in"></div>
            <div style="font-size:0.1667in;color:#231F20;text-transform: uppercase;margin-bottom: 0.03in;width:2in;box-sizing:border-box;padding-left:1.5in"> </div>
            <div style="font-size:0.1667in;color:#231F20;text-transform: uppercase;margin-bottom: 0.03in;width:2in;box-sizing:border-box;padding-left:1.5in"> </div>
            <div style="font-size: 0.08in;color: #231F20;width: 3.9in;">
               <!-- All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless -->
            </div>
         </div>
         <div style="width:100%;position:absolute;width:7.5in;box-sizing: border-box;padding:0 0.1306in;height: 2.04in;bottom:0.13in;">
            <div style="position:relative; bottom: 30px">
               <div class="leftpanel-logo"> <img src="{{ $data['company_logo'] ?? '' }}" /> </div>
               <div style="position: absolute;left:1in;top:0;left:1.8in;">
                  <div class="footer-name" style="text-transform:uppercase;"> <span>{{$data['front_page']->contact_value ?? '' }}</span> </div>
                  <div class="contact-details" style="margin-top:0;"><span>{{$data['front_page']->company_value ?? '' }}</span></div>
                  <div class="contact-details"> <span class="phone-lbl">{{ $data['front_page']->phone_title?? '' }}</span>&nbsp; <span class="phone-numb">{{ $data['front_page']->phone_value?? '' }}</span>&nbsp;&nbsp; </div>
                  <div class="contact-details"> <span class="phone-lbl">{{ $data['front_page']->email_title?? '' }}</span> <span class="phone-numb">{{ $data['front_page']->email_value?? '' }}</span> </div>
               </div>
               <div class="fsheets-copyright" style=""> All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal.  <br>
               Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless. 
               </div>
            </div>
         </div>
      </div>
         <!--Left Panel End--> 
         <!--Right Panel-->
          <div class="main-wrap" style="box-sizing:border-box;position:absolute;width:7.477in;right:0.5in;top:0;padding-top: 0.56in;"> 
            
         <div style="position:relative;box-sizing:border-box;padding-left:0.3in;">
               <div class="front-pg-footer-img" style="top:0.3in;">
                  <img src="{{ $data['front_page']->main_img_2->file_path_large  ?? ''}}" style="position:absolute;top:0in transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />
                  <table class="header-banner-logo">
                     <tr>
                        <td valign="middle">	   <img src="{{ $data['company_logo'] ?? '' }}" />
</td>
                     </tr>
                  </table>
               </div>
               <div class="header-wrap">
                  <div class="header-banner-wrap">
                     <div>{{$data['front_page']->header ?? '' }}</div>
                     <div>{{$data['front_page']->sub_header ?? '' }}</div>
                     <div>${{$data['front_page']->amount ?? '' }}</div>
                  </div>
               </div>
               <div class="tile-images"> 
                  <img src="{{ $data['front_page']->img_1->file_path_large  ?? ''}}" style="margin-top:0.05in;margin-bottom:0.09in;" /> 
                  <img src="{{ $data['front_page']->img_2->file_path_large  ?? ''}}" style="margin-top:0.05in;margin-bottom:0.09in;" /> 
                  <img src="{{ $data['front_page']->img_3->file_path_large  ?? ''}}" style="margin-top:0.05in;margin-bottom:0.09in;" /> 
               </div>
               <div style="color:#231F20;font-size:0.2083in;text-align:left;margin-top:-0.3in"> {{$data['front_page']->description_header ?? '' }}</div>
            </div>
         <!--Right Panel End--> 
</div>
      </div>
      <!-- Front End -->



      <!-- Back -->
      
         <div class="back-page-print">
         
         <img src="{{$bodyBackImg}}" id="bodyBackGroundImg" />
         
         <!--Left Panel-->
         <div class="main-wrap-back" style="padding-right:0.1687in;box-sizing:border-box">
            <div class="main-img-back">
            <img src="{{ $data['back_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['back_page']->main_img_1_x}}px, {{ $data['back_page']->main_img_1_y}}px) scale( {{ $data['back_page']->main_img_1_scale}} );" />

            </div>
            <div style="width:3.34in;">
               <div class="description-footer-img"><img  src="{{ $data['back_page']->img_1->file_path_large  ?? ''}}"></div>
               <div class="description-footer-img"> <img src="{{ $data['back_page']->img_2->file_path_large  ?? ''}}" ></div>
            </div>
            <div class="main-description">
               <div class="description">
                  <p> {{ $data['back_page']->main_description  ?? ''}}
                  </p>

                  <p> {{ $data['back_page']->main_description_2  ?? ''}}
                  </p>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <!--Left Panel End--> 

         <!--Right Panel-->
         <div class="main-wrap-back" style="padding-left:0.1687in;box-sizing:border-box;position: absolute;right:0.4976in;top: 0.4976in;">
            <div class="tile-img-wrap">
               <div class="main-tile-img" style="position:relative;left:0.3in;">
                  <div class="tile-img"><img src="{{ $data['back_page']->img_3->file_path_large  ?? ''}}" /></div>
                  <div class="tile-img"><img src="{{ $data['back_page']->img_4->file_path_large  ?? ''}}" /></div>
                  <div class="tile-img"><img src="{{ $data['back_page']->img_5->file_path_large  ?? ''}}" /></div>
                  <div class="tile-img"><img src="{{ $data['back_page']->img_6->file_path_large  ?? ''}}" /></div>
               </div>
               <div class="main-details-wrap">
                  <div class="details-master-wrap-top">
                     <div>{{$data['back_page']->sub_header ?? '' }}</div>
                     <div>{{$data['back_page']->address_2 ?? '' }}</div>
                   
                  </div>
                  <div class="details-master-wrap">
                     <div style="height: 4.4in;">
                        <div class="main-details">
                           <div class="main-details-header"> 	{{ $data['back_page']->law_restrictions_title ?? '' }}: </div>
                           <div class="main-details-description"> 	{{ $data['back_page']->law_restrictions_value ?? '' }}: </div>
                        </div>
                        <div class="main-details">
                           <div class="main-details-header"> MAINTENANCE FEES: </div>
                           <div class="main-details-description"> $000.00 </div>
                        </div>
                        <div class="main-details">
                           <div class="main-details-header"> {{ $data['back_page']->main_fees_title ?? '' }}: </div>
                           <div class="main-details-description">   {{ $data['back_page']->main_fees_value ?? '' }} 
                           
                           </div>
                        </div>
                        <div class="main-details">
                           <div class="main-details-header">  {{ $data['back_page']->main_fees_include_title ?? '' }}: </div>
                           <div class="main-details-description">  {{ $data['back_page']->main_fees_include_value ?? '' }} </div>
                        </div>
                        <div class="main-details">
                           <div class="main-details-header"> {{ $data['back_page']->features_include_title ?? '' }} </div>
                           <div class="main-details-description"> {{ $data['back_page']->features_include_value ?? '' }} </div>
                    
                        </div>
                        <div class="main-details">
                           <div class="main-details-header">   {{ $data['back_page']->amenities_title ?? '' }}: </div>
                           <div class="main-details-description"> {{ $data['back_page']->amenities_value ?? '' }} </div>
                              <div class="main-details-header"> {{ $data['back_page']->view_title ?? '' }}: </div>
                              <div class="main-details-description"> {{ $data['back_page']->view_value ?? '' }} </div>
                           </div>
                        </div>
                     </div>
                  <div class="right-main-img" style="position: relative; bottom:40px"> <img  src="{{ $data['back_page']->img_7->file_path_large  ?? ''}}" /> <img src="{{ $data['back_page']->img_8->file_path_large  ?? ''}}"/> </div>

                  </div>
                  <!-- <div class="clearfix"></div> -->
                  <!--  not displaying this two images --fyi thridu   -->
         
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
         </div>
		 <!--Right Panel End-->
         
         </div>
      <!-- Back End-->
   </body>
</html>
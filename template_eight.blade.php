<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <?php
         $theme = $data['theme'];
         $bodyBackGroundImg =    public_path("storage/images/ftemplate-8-front-". $theme . ".jpg");
         
         $bodyBackImg =    public_path("storage/images/ftemplate-8-back-". $theme . ".jpg");
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
         padding:0.78in;
         width: 15.444in;
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
         .main-wrap{
         width:8in;
         position: relative;
         }
         .header-banner-wrap{
         height: 0.7in;
         margin-top: 0.25in;
         color:#fff;
         box-sizing: border-box;
         }
         .header-banner-wrap div{
         text-align: center;
         }
         .header-banner-wrap div:nth-child(1){
         font-family:TrajanPro-Bold;
         font-size:0.25in;
         }
         .header-banner-wrap div:nth-child(2){
         font-family:Century-Gothic-Regular;
         font-size:0.1667in;
         text-transform:uppercase;
         }
         .header-banner-wrap div:nth-child(3){
         font-family:TrajanPro-Bold;
         font-size:0.3333in;
         text-transform:uppercase;
         }
         .header-banner-logo{
         position: absolute;
         bottom: 21px;
         text-align: center;
         width: 100%;
         }
         .header-banner-logo img{
         width:1.7338in !important;
         height:0.9467in !important;
         }
         .main-image{
         width:6.7762in;
         height:4.5541in;
         border:0.0278in solid #fff;
         position:relative;
         margin:auto;
         }
         .main-image img{
         width:6.7762in;
         height:4.5541in;
         }
         .tile-images{
         width: 5.6014in;
         height: 3.7971in;
         position: relative;
         margin:auto;
         }
         .tile-img{
         border:0.0278in solid #fff;
         width:2.7088in;
         height:1.8011in; 
         margin-bottom:0.1162in;
         }
         .tile-img img{
         width:2.7088in;
         height: 1.8011in; 
         }
         .image-zoom-btn-wrap{
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
         .front-pg-footer-img{
         width:4.8522in;
         height:3.2336in;
         position:relative;
         margin: auto;
         top: 21px;
         border:0.0278in solid #fff;
         }
         .front-pg-footer-img img{
         width:4.8522in;
         height:3.2336in;
         }
         .floorplan-img-wrap{
         width:6.804in;
         height:8.3in;
         background:#ccc;
         position:relative;
         }
         .floorplan-img-wrap img{
            width:100%;
         }
         .leftpanel-logo{
         width:1.7478in;
         height:0.9675in;
         }
         .leftpanel-logo img{
         width:100%;
         height:0.9675in;
         }
         .footer-name{
         color:#B6AF93;
         margin-top:0.1875in;
         text-transform:uppercase;
         font-weight:600;
         }
         .footer-name span{
         text-transform: uppercase;
         }
         .footer-name span:nth-child(1){
         font-family:TrajanPro-Bold;
         font-size:0.125in;
         color:#fff;
         }
         .footer-name span:nth-child(2){
         font-family:Century-Gothic-Bold;
         font-size:0.1389in;
         }
         .contact-details{
         color:#231F20;
         }
         .phone-lbl{
         font-family:Century-Gothic-Bold;
         font-size:0.1389in;
         }
         .phone-numb{
         font-family:Century-Gothic-Regular;
         font-size:0.1389in;
         }
         .text-center{
         text-align:center;
         }
         .fsheets-copyright{
         font-size:0.08in;
         color:#fff;
         text-align:left;
         padding-right:15px;
         position:relative;
         }
         .fsheets-copyright img{
         height: 0.84in;
         position: absolute;
         top: 0;
         left: -0.2in;
         }
         .footer-mark{
         font-family:Arial-Bold;
         font-size:0.1333in;margin-top:0.1in;
         color:#ffffff;
         }
         .clearfix{
         clear:both;
         }
         .main-logo{
         position: absolute;
         width: 1.78in;
         height: 0.97in;
         top: 9px;
         left: 77px;
         }
         .main-logo img{
         width:100%;
         height:0.97in;
         }
         .bottom-price{
         width:75%;
         text-align:center;
         margin:auto;
         margin-top:0.2in;
         }
         .bottom-price div:nth-child(1){
         text-transform: capitalize;
         font-size:0.1389in;
         color:#fff;
         font-weight:600;
         margin-bottom: 0.1in;
         }
         .bottom-price div:nth-child(2){
         color:#B6AF93;
         font-weight:600;
         font-size:0.3472in;
         }
         .bottom-logo-img{
         width:1.8in;
         height:1.2in;
         text-align:center;
         }
         .bottom-logo-img img{
         height:1in;
         }
         /* Back page css */
         .back-page-print {
         padding:0.4931in 0.4931in 0 0.4931in;
         width: 16in;
         box-sizing: border-box;
         background-repeat: no-repeat;
         position: relative;
         }
         .main-img-back {
         width: 7.8577in;
         height: 5.2422in;
         position: relative;
         overflow: hidden;
         border: 0.0278in solid #fff;
         }

         .main-img-back img{
            width:100%;
         }
         .main-wrap-front {
         width: 7.9in;
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
         height:1.7in;
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
         border: 0.0278in solid #fff;
         }
         .description-footer-img img {
         width: 3.7578in;
         height: 2.5022in;
         }
         .main-tile-img {
         width: 5.9in;
         }
         .tile-img {
         width: 2.7088in;
         height: 1.8012in;
         margin-bottom: 0.1202in;
         border: 0.0278in solid #fff;
         }
         .tile-img img {
         width: 2.7088in;
         height: 1.8012in;
         }
         .details-master-wrap {
         right: 0;
         }
         .main-details-wrap {
         width: 5.569in;
         position: relative;
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
         margin-top: 0.1196in;
         }
         .main-details-header {
         color: #B6AF93;
         font-family: TrajanPro-Bold;
         font-size:0.125in;
         text-transform: uppercase;
         font-weight: 600;
         }
         .main-details-description {
         font-family: Century-Gothic-Regular;
         text-align: justify;
         font-size: 0.125in;
         color: #231F20;
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
         width: 5.569in;
         height: 3.7109in;
         overflow: hidden;
         border: 0.0278in solid #fff;
         }
         .right-main-img img {
         width: 5.569in;
         height: 3.7109in;
         }
         .tile-img-wrap {
         position: relative;
         width: 5.7in;
         }
         .tile-images-main-wrap {
         position: relative;
         }
         .right-panel2 {
         width: 1.7in;
         position: absolute;
         top:0.78in;
         right: 0.5in;
         box-sizing: border-box;
         line-height: 0.17in;
         }
         /* Back page css End */
      </style>
      <title>Untitled Document</title>
   </head>
   <body>
      <!-- Front -->
      <div class="front-page-print breakPage">
         <img src="{{$bodyBackGroundImg}}" id="bodyBackGroundImg" />
         <!--Left Panel-->
         <div class="main-wrap">
            <div class="floorplan-img-wrap" style="overflow:hidden">
               
      		
             <!-- uncomment this image    -->
            <img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="position: relative; bottom:20px; transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />

               <div style="position:absolute;bottom:1.7in;right:0.6in;width:1.8in;height:0.7in;">
                  <div style="font-size:0.1667in;color:#231F20;text-transform: uppercase;margin-bottom: 0.03in;"></div>
                  <div style="font-size:0.1667in;color:#231F20;text-transform: uppercase;margin-bottom: 0.03in;"> </div>
                  <div style="font-size:0.1667in;color:#231F20;text-transform: uppercase;margin-bottom: 0.03in;"> </div>
               </div>
               <div style="font-size: 0.08in;color: #231F20;width: 3in;position:absolute;bottom:0.2in;right:0.7in;">
                  All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless
               </div>
            </div>
            <div style="position:absolute;bottom:-0.2in;left:0;width:5in;">
               <table width="100%" >
                  <tr>
                     <td class="fsheets-copyright" valign="middle" style="text-align:left">
                     <img src="{{$data['company_logo'] ?? '' }}" />
                     </td>
                     <td style="width:80%;position:relative" valign="top">
                     <div style="margin-top:-0.2in;margin-left:-0.2in;">
                        <div class="footer-name"> <span>{{$data['front_page']->contact_title ?? '' }}</span></div>
                        <div class="footer-name" style="margin-top:0;"><span>{{$data['front_page']->contact_value ?? '' }}</span></div>
                        <div class="contact-details"> <span class="phone-lbl">{{$data['front_page']->company_value ?? '' }}</span>&nbsp; </div>
                        <div class="contact-details"> <span class="phone-lbl">{{$data['front_page']->phone_title ?? '' }}</span>&nbsp; <span class="phone-numb">{{$data['front_page']->phone_value ?? '' }}</span>&nbsp;&nbsp; </div>
                        <div class="contact-details"> <span class="phone-lbl">{{$data['front_page']->email_title ?? '' }}</span> <span class="phone-numb">{{$data['front_page']->email_value ?? '' }}</span> </div>
                     </div>
                           
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2" style="position:relative;">
                        <div style="position:absolute;top:0;left:-0.2in;">
                           <div class="fsheets-copyright"> All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. 
                              Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless 
                           </div>
                           <div class="footer-mark" style="margin-top:0;">DESIGNED AND PRINTED BY BC FLOOR PLANS</div>
                        </div>
                     </td>
                  </tr>
               </table>
            </div>
         </div>
         <!--Left Panel End--> 
         <!--Right Panel-->
         <div class="main-wrap" style="box-sizing:border-box;position:absolute;width:8.2in;right:0;top:0.78in;">
            <div style="position:relative;">
               <div class="main-image" style=" overflow:hidden"> 
               <img src="{{ $data['front_page']->main_img_2->file_path_large  ?? ''}}"  style="  transform: translate({{ $data['front_page']->main_img_2_x}}px, {{ $data['front_page']->main_img_2_y}}px) scale( {{ $data['front_page']->main_img_2_scale}} );" />

               </div>
            </div>
            <div class="header-wrap">
               <div class="header-banner-wrap">
                  <div>	{{$data['front_page']->header ?? '' }}</div>
                  <div>{{$data['front_page']->sub_header ?? '' }}</div>
               </div>
            </div>
            <div class="tile-images">
               <div>
                  <div class="tile-img"><img src="{{ $data['front_page']->img_1->file_path  ?? ''}}" /></div>
                  <div class="tile-img"><img src="{{ $data['front_page']->img_2->file_path  ?? ''}}" /></div>
               </div>
               <div style="position: absolute;top: 0;right: 0;">
               <div class="tile-img"><img src="{{ $data['front_page']->img_3->file_path  ?? ''}}" /></div>
               <div class="tile-img"><img src="{{ $data['front_page']->img_4->file_path  ?? ''}}" /></div>
               </div>
               <table style="position:absolute;top:1.3in;left:1.9in">
                  <tr>
                     <td class="bottom-logo-img" valign="middle">
                     <img src="{{$data['company_logo'] ?? '' }}" />
                     </td>
                  </tr>
               </table>
            </div>
            <div class="bottom-price">
               <div>
               {{ $data['back_page']->description_header  ?? ''}}
               </div>
            </div>
         </div>
         <!--Right Panel End--> 
      </div>
      <!-- Front End -->
      <!-- Back -->
      <div class="back-page-print">
         <img src="{{$bodyBackImg}}" id="bodyBackGroundImg" />
         <!--Left Panel-->
         <div class="main-wrap-front" style="padding-right:0.1687in;box-sizing:border-box">
            <div class="main-img-back">
               <div style="font-size:0.1944in;width:60%;top:0.2in;left:1in;text-align:center;position:absolute;color:#fff;">
               {{ $data['back_page']->main_description_center  ?? ''}}
               </div>
               
             <!-- uncomment this image   -->
               <img src="{{ $data['back_page']->main_img_1->file_path_large  ?? ''}}"  style=" transform: translate({{ $data['back_page']->main_img_1_x}}px, {{ $data['back_page']->main_img_1_y}}px) scale( {{ $data['back_page']->main_img_1_scale}} );" />
             
            </div>
            <div class="main-description">
               <div class="description">
                  <p> {{ $data['back_page']->main_description  ?? ''}} 
                  </p>
               </div>
            </div>
            <div style="position:relative;margin-top:0.28in">
               <div class="description-footer-img"><img src="{{ $data['back_page']->img_1->file_path  ?? ''}}"  /></div>
               <div class="description-footer-img" style="position:absolute;top:0;margin:0;right:0in;"> <img src="{{ $data['back_page']->img_2->file_path  ?? ''}}"  /></div>
            </div>
         </div>
         <!--Left Panel End--> 
         <!--Right Panel-->
         <div class="main-wrap-front" style="padding-left:0.1687in;box-sizing:border-box;position:absolute;right: 2.7in;width: 5.6in;top:0.4931in">
            <div class="tile-img-wrap">
               <div class="main-tile-img">
                  <div class="tile-images-main-wrap">
                     <div class="tile-img"><img src="{{ $data['back_page']->img_3->file_path  ?? ''}}"  /></div>
                     <div class="tile-img" style="position: absolute;top: 0;right: 0.27in;"><img src="{{ $data['back_page']->img_4->file_path  ?? ''}}"  /></div>
                  </div>
                  <div class="tile-images-main-wrap">
                     <div class="tile-img"><img src="{{ $data['back_page']->img_5->file_path  ?? ''}}"  /></div>
                     <div class="tile-img" style="position: absolute;top: 0;right: 0.27in;"><img src="{{ $data['back_page']->img_6->file_path  ?? ''}}"  /></div>
                  </div>
                  <div class="tile-images-main-wrap">
                     <div class="tile-img"><img src="{{ $data['back_page']->img_7->file_path  ?? ''}}"  /></div>
                     <div class="tile-img" style="position: absolute;top: 0;right: 0.27in;"><img src="{{ $data['back_page']->img_8->file_path  ?? ''}}"  /></div>
                  </div>
               </div>
               <div class="main-details-wrap" style="position: relative; top: 37px; ">
                  <div class="details-master-wrap">
                     <div class="right-main-img">
                     <img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}"  style="transform: translate({{ $data['back_page']->main_img_2_x}}px, {{ $data['back_page']->main_img_2_y}}px) scale( {{ $data['back_page']->main_img_2_scale}} ); "/>
						
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="right-panel2">
            <div>
               <div>
                  <div class="main-details">
                     <div style="font-size:0.3472in;color:#B6AF93;margin-bottom:0.1736in;"></div>
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
               <div>
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
         </div>
      </div>
      
      <!--Right Panel End--> 
      <!-- </div> -->
      <!-- Back End-->
   </body>
</html>
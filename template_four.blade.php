<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <?php
         $theme = $data['theme'];
         $bodyBackGroundImg =    public_path("storage/images/ftemplate-4-front-" . $theme . ".png");
         
         $bodyBackImg =    public_path("storage/images/ftemplate-4-back-"  . $theme . ".jpg");
         $defaultImg =  public_path("storage/images/HQ/default.png");

 
         ?>
      <style>main-wrap
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
         padding: 0.4931in 0 0in 0.4931in;
         width: 17in;
         position: relative;
         /* height:5in; */
         /* overflow: hidden; */
         }
         .front-page-print.green{
         background: url($bodyBackGroundImg );
         }
         #bodyBackGroundImg {
         position: fixed;
         width: 17in;
         height: 11in;
         z-index: -5;
         }
         .main-wrap {
         width: 8in;
         }
         .header-banner-wrap {
         width: 100%;
         color: #FFF;
         line-height:0.4in;
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
         font-size: 0.3472in;
         text-transform: uppercase;
         line-height: 0.2522in;
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
         width: 8.5111in;
         height: 8.7666in;
         overflow: hidden;
         /*border:0.0278in solid #fff;*/
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
         width: 7.4722in;
         height: 7.9711in;
         /* padding-right: 0.4931in; */
         box-sizing: border-box;
         background: #ccc;
         position:relative;
         }

         .floorplan-img-wrap img{
            position:absolute;
            top:0;
            left:0;
            width: 100%;
         }

         .main-logo-tbl {
         margin-top: 0.0888in;
         margin: auto;
         }
         .leftpanel-logo {
         width: 1.7478in;
         height: 0.9675in;
         text-align: center;
         }
         .leftpanel-logo img {
         height: 0.9675in;
         }
         .footer-name {
         color: #ffffff;
         text-align: center;
         }
         .footer-name span {
         text-transform: uppercase;
         }
         .footer-name span:nth-child(1) {
         font-family: TrajanPro-Bold;
         font-size: 0.1667in;
         font-weight: 600;
         }
         .footer-name span:nth-child(2) {
         font-family: Century-Gothic-Bold;
         font-size: 0.1389in;
         }
         .contact-details {
         color: #ffffff;
         text-align: center;
         }
         .phone-lbl {
         font-family: Century-Gothic-Bold;
         text-transform: uppercase;
         font-size: 0.1389in;
         font-weight: 600;
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
         margin-top: 0.1in !important;
         color: #ffffff;
         font-size: 0.08in;
         margin-bottom: 0.0336in;
         text-align: left;
         }
         .footer-mark {
         font-family: Arial-Bold;
         font-size: 0.1333in;
         color: #ffffff;
         font-weight: 600;
         margin-top: 0.0777in;
         }
         .clearfix {
         clear: both;
         }
         .main-logo {
         position: absolute;
         width: 1.78in;
         height: 0.97in;
         top: -0.7in;
         left: 0.2in;
         text-align: center;
         }
         .main-logo img {
         height: 0.97in;
         }
         .clearfix {
         clear: both;
         }
         /* Back page css */
         .back-page-print{
         padding:0.4931in 0.4931in 0 0.4931in;
         width:17in;
         box-sizing: border-box;
         position:relative;
         }
         .main-img-back{
         width:7.8577in;
         height:5.2422in;
         position: relative;
         overflow: hidden;
         border:0.0278in solid #fff;
         }

         .main-img-back img{
            width:100%
         }
         .main-wrap-front{
         width:8.0069in;
         }
         .image-zoom-btn-wrap{
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
         .description{
         border:0 !important;
         margin-left: 0.2974in;
         font-size:0.125in;
         color:#fff;
         text-align:justify;
         }
         p{
         font-family:Century-Gothic-Regular;
         font-size:0.125in;
         color:#fff;
         line-height: 0.18in;
         }
         .description-footer-img{
         width:3.7578in;
         height:2.5022in;
         border:0.0278in solid #fff;
         }
         .description-footer-img img{
         width:3.7578in;
         height:2.5022in;
         }
         .description-next-img{
         width:3.75in;
         height:1.8014in;
         border:0.0278in solid #fff;
         }
         .description-next-img img{
         width:3.75in;
         height:1.8014in;
         }
         .main-tile-img{
         width:3.2527in;
         }
         .tile-img{
         width:3.4872in;
         height:2.3214in;
         border:0.0278in solid #fff;
         margin-bottom:0.1793in;
         }
         .tile-img img {
         width:3.4872in;
         height:2.3214in;
         }
         .details-master-wrap{
         height:3.4293in;
         }
         .main-details-wrap{
         width: 4.3in;
         margin-left: 0.1654in;
         position: absolute;
         padding-left: 0.1in;
         box-sizing: border-box;
         top: 0;
         right: 0;
         }
         .tile-img-wrap{
         position:relative;
         }
         .right-panel-header{
         margin-bottom:0.2971in;
         }
         .right-panel-header div{
         text-align:center;
         text-transform: uppercase;
         color:#fff;
         }
         .right-panel-header div:nth-child(1), .right-panel-header div:nth-child(2){
         font-family:TrajanPro-Bold;
         font-size:0.3333in;
         }
         .right-panel-header div:nth-child(2){
         font-size:0.2639in;
         }
         .right-panel-header div:nth-child(3){
         font-family:Century-Gothic-Regular;
         font-size:0.1389in;
         }
         .right-panel-header div:nth-child{
         font-family:TrajanPro-Bold;
         font-size:0.3333in;
         }
         .main-details{
         margin-bottom:0.1196in;
         text-align:right;
         }
         .main-details-header{
         color:#fff;
         font-family:TrajanPro-Bold;
         font-size:0.1528in;
         text-transform:uppercase;
         font-weight:600;
         }
         .main-details-description{
         font-family:Century-Gothic-Regular;
         text-align:right;
         font-size:0.125in;
         color:#fff;
         }
         .right-bottom-img-wrap{
         margin-top: 0.188in;
         } 
         .right-bottom-img{
         border:0.0278in solid #fff;
         width:4.9572in;
         height:6.3422in;
         position: relative;
         }
         .right-bottom-img img{
         width:100%;
         height:6.3422in;
         }
         .right-main-img{
         width:4.1273in;
         height:6.3859in;
         margin-left:0.12in;
         margin-top:0.16in;
         overflow:hidden;
         border:0.0278in solid #fff;
         }

         .right-main-img img{
            width:100%;
         }

         .breakPage {
         page-break-after: always;
      }

      .front-left-msk img{
         width: 100%;
         height:100%:
      }

      .bck-left-tp-desc{
         position: absolute;
         width: 100%;
      }

      .bck-left-tp-desc h5{
         font-size:1.2em;
         text-align:center;
         margin: 0;
         color: #393939;

      }
      .bck-left-tp-desc p{
         font-size:1.2em;

         text-align:center;
         color: #393939;
      }


      </style>
      <title>Untitled Document</title>
   </head>
   <body>
      <!-- Front -->
      <div class="front-page-print breakPage">
         <!-- <div style="right:0in;top:1.6in;width:8.5in;z-index:-6;width: 8.5111in;height: 8.7666in;"  id="bodyBackGroundImg"><img src="{{ $data['front_page']->main_img_2->file_path_large  ?? ''}}"></div> -->
        
            <div style="right:0in;top:1.6in;width:8.5in;z-index:-6;width: 8.5111in;height: 8.7666in;" id="bodyBackGroundImg" class="front-left-msk">
               <img src="{{ $data['front_page']->main_img_2->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_2_x}}px, {{ $data['front_page']->main_img_2_y}}px) scale( {{ $data['front_page']->main_img_2_scale}} );" >
            </div>
      
         <img src="{{$bodyBackGroundImg}}" id="bodyBackGroundImg" />
         <!--Left Panel-->
         <div class="main-wrap">
            <div class="floorplan-img-wrap" style="overflow: hidden;">
         
            <img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" /> 
            <!-- <img src="{{$defaultImg}}" style="transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />  -->
               
            
            <div style="position:absolute;bottom:0.8in;left:5.2in;">
                  <div style="font-size:0.2639in;color:#029DB5;text-transform: uppercase;margin-bottom: 0.03in;"></div>
                  <div style="font-size:0.1667in;color:#029DB5;text-transform: uppercase;margin-bottom: 0.03in;"> </div>
                  <div style="font-size:0.1667in;color:#029DB5;text-transform: uppercase;margin-bottom: 0.03in;"> </div>
               </div>
               <div style="font-size: 0.08in;color: #029DB5;width: 3.9in;position:absolute;bottom:0.4in;left:3in;">
                  All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless
               </div>
            </div>
            <div>
               <table class="main-logo-tbl">
                  <tr>
                     <td valign="middle" class="leftpanel-logo"> <img src="{{$data['company_logo'] ?? '' }}" />  </td>
                  </tr>
               </table>
               <div class="footer-name"> <span>{{$data['front_page']->contact_value ?? '' }}   {{$data['front_page']->company_value ?? '' }} </span> </div>
               <table style="margin: auto;">
                  <tr>
                     <td valign="top" style="width:2in;">
                        <div class="footer-name">
                           <div class="footer-name"> <span >{{$data['front_page']->phone_title ?? '' }}</span> <span> {{$data['front_page']->phone_value ?? '' }}</span> </div>
                        </div>
                     </td>
                     <td style="width:2in;"  valign="top">
                        <div class="footer-name"> <span >{{$data['front_page']->email_title ?? '' }}</span> <span>{{$data['front_page']->email_value ?? '' }}</span> </div>
                     </td>
                  </tr>
               </table>
               <div class="contact-details"> <span class="phone-lbl">{{$data['front_page']->mls_title ?? '' }}</span> <span class="phone-lbl">{{$data['front_page']->mls_value ?? '' }}</span> </div>
               <div class="fsheets-copyright" style="margin-top:0;"> All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. 
                  Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless 
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="footer-mark">DESIGNED AND PRINTED BY BC FLOOR PLANS</div>
         </div>
         <!--Left Panel End-->

                  <!--Right Panel-->
         <div class="main-wrap" style="box-sizing:border-box;position:absolute;width:8.5in;top:0.4931in;right:0.4931in;">
            <div style="position:relative;">
               <div class="header-wrap">
                  <div class="header-banner-wrap">
                     <div>{{$data['front_page']->header ?? '' }}</div>
                     <div>{{$data['front_page']->sub_header ?? '' }}</div>
                     <div>${{$data['front_page']->amount ?? '' }}</div>
                  </div>
                  <div class="clearfix"></div>
               </div>
               
               <div style="position: absolute;bottom:0.6in;left:0.3in">
                  <div class="main-logo">	<img src="{{$data['company_logo'] ?? '' }}" /></div>
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
        <div class="main-wrap-front" >
          <div class="main-img-back" style="position: relative;">
               <div class="bck-left-tp-desc">
                  <p>On top of it all beautiful sub-penthouse in the well appointed CENTRO building.</p>
                  <h5>{{ $data['back_page']->description_header  ?? ''}}</h5>

               </div>
               <img src="{{ $data['back_page']->main_img_1->file_path_large  ?? ''}}"  style=" transform: translate({{ $data['back_page']->main_img_1_x}}px, {{ $data['back_page']->main_img_1_y}}px) scale( {{ $data['back_page']->main_img_1_scale}} );" />
               <!-- <img src="{{$defaultImg}}"  style=" transform: translate({{ $data['back_page']->main_img_1_x}}px, {{ $data['back_page']->main_img_1_y}}px) scale( {{ $data['back_page']->main_img_1_scale}} );" /> -->
	
            </div>
         <div style="position:relative;margin-top:0.1848in;">
                  <div class="description-footer-img">
                  <img src="{{ $data['back_page']->img_1->file_path  ?? ''}}"  />
                  </div>
                  <div class="description-footer-img" style="position:absolute;top:0;right:0.1in;">
                  <img src="{{ $data['back_page']->img_2->file_path  ?? ''}}"  />
                  </div>
         </div>

            <div style="position:relative;margin-top:0.1848in">
               <div class="description-next-img description" style="position:absolute;top:0;right:0.1in;color:#000">
                {{ $data['back_page']->main_description  ?? ''}}
               </div>
                <div class="description-next-img">
                <img src="{{ $data['back_page']->img_3->file_path  ?? ''}}"  />
                </div>
                
            </div>
</div> 

         <!--Left Panel End-->
         <!--Right Panel-->
       <div class="main-wrap-front" style="padding-left: 0.1687in; box-sizing: border-box; position:absolute;top:0.4931in;right:1.5iin;">
            <div class="tile-img-wrap" style="position:relative;">
               <div class="main-tile-img" style="position:relative;left:0.1555in;">
                  <div class="tile-img">    <img src="{{ $data['back_page']->img_4->file_path  ?? ''}}"  /></div>
                  <div class="tile-img">  <img src="{{ $data['back_page']->img_5->file_path  ?? ''}}"  /></div>
                  <div class="tile-img"> <img src="{{ $data['back_page']->img_6->file_path  ?? ''}}"  /></div>
                  <div class="tile-img">   <img src="{{ $data['back_page']->img_7->file_path  ?? ''}}"  /></div>
               </div>
               <div class="main-details-wrap">
                  <div class="details-master-wrap">
                     
                  <div class="main-details">
                        <div class="main-details-header">
                        {{ $data['back_page']->law_restrictions_title  ?? ''}}:
                        </div>
                        <div class="main-details-description">
                        {{ $data['back_page']->law_restrictions_value  ?? ''}}:
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
                        {{ $data['back_page']->amenities_title  ?? ''}}'}}
                        </div>
                        <div class="main-details-description">
                        {{ $data['back_page']->amenities_value  ?? ''}}
                        </div>
                     </div>

                     <div class="main-details">
                        <div class="main-details-header">
                        {{ $data['back_page']->view_title  ?? ''}}'}}
                        </div>
                        <div class="main-details-description">
                        {{ $data['back_page']->view_value  ?? ''}}
                        </div>
                     </div>
                     
                     
                    
                
                   
                     <div class="clearfix"></div>
                  </div>
                  <div class="right-main-img" style="border:none">
               
                    <img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}"  style=" transform: translate({{ $data['back_page']->main_img_2_x}}px, {{ $data['back_page']->main_img_2_y}}px) scale( {{ $data['back_page']->main_img_2_scale}} ); "/>
					
                  </div>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
         <!--Right Panel End-->
        </div> 

<!-- Back End -->
   </body>


   </html>
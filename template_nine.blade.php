<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <?php
         $theme = $data['theme'];
         $bodyBackGroundImg =    public_path("storage/images/ftemplate-9-front-". $theme . ".jpg");
         $bodyBackImg =    public_path("storage/images/ftemplate-9-back-". $theme . ".jpg");
         $headerBanner= 	public_path("storage/images/ftemplate-9-front-head-". $theme . ".png");
         $headerLine= 	public_path("storage/images/ftemplate-9-front-head-line-". $theme . ".png");

         $defaultImg =    public_path("storage/images/HQ/default.png");
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
         padding:0.4861in 0 0in 0.5in;
         width:17in;
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
		width:1.7971in;
	height:1.9783in;
color:#2F4F25;
	box-sizing: border-box;
	padding-top:0.15in;
	position: relative;

}

.header-banner-wrap img{
	width:1.7971in !important;
	height:1.9783in !important;
	border:0 !important;
}

.header-banner-wrap div{
	text-align: center;
}

.header-banner-wrap div:nth-child(1){
	font-family:TrajanPro-Bold;
	font-size:0.2778in;
}

.header-banner-wrap div:nth-child(2){
	font-family: Century-Gothic-Regular;
	font-size:0.2778in;
	text-transform: uppercase;
	position: absolute;
	top: 0.3in;
	color:#fff;
   left:0;
	width:100%;
	text-align:center;
	 
}

.header-banner-wrap div:nth-child(3){
	font-family:TrajanPro-Bold;
	position: absolute;
	top: 0.65in;
	width:100%;
	color:#fff;
	font-size:0.1944in;
	text-transform:uppercase;
}

.header-banner-wrap div:nth-child(4){
	font-family:TrajanPro-Bold;
	position: absolute;
	top: 1.15in;
	width:100%;
	color:#fff;
	font-size:0.1667in;
	text-transform:uppercase;
}

.header-banner-wrap div:nth-child(5){
	font-family:TrajanPro-Bold;
	position: absolute;
	top: 1.68in;
	width:100%;
	color:#fff;
	font-size:0.4306in;
	font-weight: bold;
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
	width:8.4861in;
    height:6.7156in;
overflow:hidden;
	position:relative;	
   border-top:0.0278in solid #fff;
	border-bottom:0.0278in solid #fff;
}

.main-image img{

}

.bedrooms{
	position: absolute;
    text-transform: uppercase;
    bottom: 0.9555in;
    right: 0;
    z-index: 2;
    font-size: 0.1389in;
    color: #B6AF93;
    font-weight: bold;
    text-align: right;
}

.bedrooms img{
	width: 6.0767in;
    height: 0.33in;
    border: 0;
    top: 0;
    position: absolute;
    right: 0in;
}

.tile-images{
	width: 5.6014in;
    height: 3.7971in;
    position: relative;
    left: 2.2in;
    top: 1.1in;
}

.tile-img{
	
	width:2.7088in;
	height:1.8303in; 
	margin-bottom:0.1162in;
}

.tile-img img{
	width:2.7088in;
	height:1.8303in; 
	border:0.0278in solid #fff;
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
	width:7.5013in;
	height:7.6in;
	background:#ccc;
	margin-top: 1.5in;
	position: relative;
   overflow:hidden;
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
	text-transeform:uppercase;
	font-weight:600;
}


.footer-name span{
	text-transform: uppercase;
}

.footer-name span:nth-child(1){
	font-family:TrajanPro-Bold;
	font-size:0.13in;
	
}

.footer-name span:nth-child(2){
	font-family:Century-Gothic-Bold;
	font-size:0.1389in;
	
}

.contact-details{
	color:#ffffff;
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
	font-size: 0.08in;
	margin-top: 0.69in;
	color: #B6AF93;
	width: 5.5in;
	position: absolute;
	right: 0.2in;
}



.fsheets-copyright img{
	height:1.2in;
}

.footer-mark{
	font-family:Arial-Bold;
	font-size:0.1333in;margin-top:0.1in;
	color:#B5AF94;
}

.clearfix{
	clear:both;
}

.header-wrap{


position: absolute;
top: -0.14in;
	left: 0.5103in;
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

.bottom-logo-img{
	width:1.8in;
	height:1.2in;
	text-align:center;
}

.bottom-logo-img img{
	height:1in;
}

.left-bottom-logo{
   position:absolute;
   bottom:0.3947in;
   width:1.9in;
   height:0.84in;
   text-align:center;
}
.left-bottom-logo img{
   height:0.84in;
}
       
         /* Back page css  */

         .back-page-print{
    padding:0.5064in 0.5064in 0 0.5064in;
    width:15.97in;
    height:10in;
    box-sizing: border-box;
    background-repeat: no-repeat;
/*     zoom:90%;
	background:url("ftemplate-9-back-green.jpg"); */
	background-size:100%;
	position: relative;
}

.main-img-back{
	position: relative;
	overflow: hidden;
   width:7.7697in;
   border: 0.0278in solid #fff;
   width:7.7697in;
	height:4.4144in;
}

.main-img-back img{
	
	
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

.main-description{
	width:3.7579in;
	height:5.2947in;
}

.description{
	box-sizing:border-box;
	font-size:0.125in;
}

.description-head1{
	font-size:0.3056in;
	font-weight:bold;
	color:#B6AF93;
	text-align: center;
}

.description-head2{
	font-size:0.2222in;
	font-weight:bold;
	color:#B6AF93;
	text-align: center;
}



p{
	font-family:Century-Gothic-Regular;
	font-size:0.125in;
	color:#fff;
	line-height: 0.14in;
	
}

.description-footer-img{
	width:3.7853in;
	height:2.5206in;
}

.description-footer-img img{
	width:3.7853in;
	height:2.5206in;
	border:0.0278in solid #fff;
}

/*.tile-img{
	width:3.7853in;
	height:2.1646in;
	margin-bottom:0.3in;
	border:0.0278in solid #fff;
	float:left;
}*/

.back-tile-img {
	width:3.7853in;
	height:2.5235in;
	border: 0.0278in solid #fff;
}


.main-details-wrap{
	width:7.7706in;
    position: relative;
    box-sizing: border-box;
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
	margin-top:0.06in;
}

.main-details-header{
	color:#B6AF93;
	font-family:TrajanPro-Bold;
	font-size:0.14in;
	text-transform:uppercase;
}
.main-details-description{
	font-family:Century-Gothic-Regular;
	text-align:justify;
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
	width:7.7706in;
	height:4.4144in;
	margin-top: 0.2in;
	overflow:hidden;
	border:0.0278in solid #fff;
}

.right-main-img img{
	
}


.clearfix{
	clear:both;
}


         /* Back page css  */


      </style>
      <title>Untitled Document</title>
   </head>
   <body>
      <!-- Front -->
      <div class="front-page-print breakPage ">
      <img src="{{$bodyBackGroundImg}}" id="bodyBackGroundImg" /> 
         <!--Left Panel-->
         <table width="100%" style="position:absolute;top:0.4in;">
            <tr>
               <td style="padding-left:0.1389in">
                  <div class="footer-name"> <span>{{$data['front_page']->contact_title ?? '' }}:</span> </div>
                  <div class="footer-name" style="margin-top:0;"><span>{{$data['front_page']->contact_value ?? '' }}</span></div>
                  <div class="contact-details"> <span class="phone-lbl">{{$data['front_page']->company_value ?? '' }}</span>&nbsp; </div>
                  <div class="contact-details" style="margin-top:0.2in;"> <span class="phone-lbl">{{ $data['front_page']->phone_title?? '' }}</span>&nbsp; <span class="phone-numb">{{ $data['front_page']->phone_value?? '' }}</span>&nbsp;&nbsp; </div>
                  <div class="contact-details"> <span class="phone-lbl">{{ $data['front_page']->email_title?? '' }}</span> <span class="phone-numb">{{ $data['front_page']->email_value?? '' }}</span> </div>
               </td>
            </tr>
         </table>
         <div class="main-wrap">
            <div class="floorplan-img-wrap">
            <img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style=" transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />

               <div style="position:absolute;bottom:0.8in;right:0.8in;">
                  <div style="font-size:0.2639in;color:#049647;text-transform: uppercase;margin-bottom: 0.03in;">Totals</div>
                  <div style="font-size:0.1667in;color:#049647;text-transform: uppercase;margin-bottom: 0.03in;">Main Level {{ $data['front_page']->sqft_value  ?? ''}} SQ.FT  </div>
                  <div style="font-size:0.1667in;color:#049647;text-transform: uppercase;margin-bottom: 0.03in;">deck:00 sq ft. </div>
               </div>
               <div style="font-size: 0.08in;color: #049647;position: absolute;bottom: 0.4in;right: 0.2in;width: 3.9in;">
                  All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless
               </div>
            </div>
            <div class="clearfix"></div>
            <div class="left-bottom-logo">
            <img src="{{ $data['company_logo'] ?? '' }}" />
            </div>
            <div class="fsheets-copyright">
               All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. 
               Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless 
               <div class="footer-mark">DESIGNED AND PRINTED BY BC FLOOR PLANS</div>
            </div>
         </div>
         <!--Left Panel End--> 
         <!--Right Panel-->
<div class="main-wrap" style="box-sizing:border-box;position:absolute;width:8.5in;top: 0.5187in;right:0.5in;">
            <div style="position:relative;height:5.16in;">
               <div class="main-image" style="position:absolute;top: 0.5187in:border:1px solid #000;left:0in;">
               <img src="{{ $data['front_page']->main_img_2->file_path_large  ?? ''}}" style=" transform: translate({{ $data['front_page']->main_img_2_x}}px, {{ $data['front_page']->main_img_2_y}}px) scale( {{ $data['front_page']->main_img_2_scale}} );" />


				  <div class="bedrooms">
					  <div style="position: relative">
                     <img src="{{$headerLine}}" />
					  		<div style="position: relative;z-index:2;top:0.0888in;right: 0.9in;"> {{$data['front_page']->description_header ?? '' }}</div>
					  </div>
				   </div> 
                  <div class="header-wrap">
                     <div class="header-banner-wrap">
                        <img src="{{$headerBanner}}"  />
                        <div> {{$data['front_page']->sub_header ?? '' }}</div>
                        <div> {{$data['front_page']->sub_header ?? '' }}</div>
                   
                        <div>${{$data['front_page']->amount ?? '' }}</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tile-images">
               <div>
                  <div class="tile-img"><img src="{{ $data['front_page']->img_1->file_path_large  ?? ''}}" /></div>
                  <div class="tile-img"><img src="{{ $data['front_page']->img_2->file_path_large  ?? ''}}" /></div>
               </div>
               <div style="position: absolute;top:0;right: 0;">
                  <div class="tile-img"><img src="{{ $data['front_page']->img_3->file_path_large  ?? ''}}"/></div>
                  <div class="tile-img"><img src="{{ $data['front_page']->img_4->file_path_large  ?? ''}}" /></div>
               </div>
               <table style="position:absolute;top:1.3in;left:1.9in">
                  <tr>
                     <td class="bottom-logo-img" valign="middle">
                     
                  <img src="{{ $data['company_logo'] ?? '' }}" />

                     </td>
                  </tr>
               </table>
            </div>
         </div> 
         <!--Right Panel End--> 
   </div>
<!-- Front Page End -->



<!-- Back Page -->

<div class="back-page-print" style="background:#000;">

<img src="{{$bodyBackImg}}" id="bodyBackGroundImg" />

         <!--Left Panel-->
         <div class="main-wrap-front" style="padding-right:0.1687in;box-sizing:border-box">
            <div style="position:relative;height:5.7in;">
               <div class="main-description">
                  <div class="description">
                     <div class="description-head1">{{ $data['back_page']->main_description_center  ?? ''}} </div>
                     <div class="description-head2"></div>
                     <p style="height:1.5in;">
                     {{ $data['back_page']->main_description  ?? ''}} 
                  </p>
                     <div class="main-details-wrap">
                        <div class="details-master-wrap">
                           <div style="width:1.6842in;">
                              <div class="main-details">
                                 <div class="main-details-header">
                                 {{ $data['back_page']->law_restrictions_title ?? '' }}
                                 </div>
                                 <div class="main-details-description">
                                 {{ $data['back_page']->law_restrictions_value ?? '' }}
                                 </div>
                              </div>
							   
                              <div class="main-details">
                                 <div class="main-details-header">
                                 {{ $data['back_page']->main_fees_title ?? '' }}
                                 </div>
                                 <div class="main-details-description">
                                    ${{ $data['back_page']->main_fees_value ?? '' }}
                                 </div>
                              </div>
							   
							   <div class="main-details">
                                 <div class="main-details-header">
                                 {{ $data['back_page']->main_fees_include_title ?? '' }}
                                 </div>
                                 <div class="main-details-description">
                                 {{ $data['back_page']->main_fees_include_value ?? '' }}
                                 </div>
                              </div>
							   
                              <div class="main-details">
                                 <div class="main-details-header">
                                 {{ $data['back_page']->features_include_title ?? '' }}
                                 </div>
                                 <div class="main-details-description">
                                 {{ $data['back_page']->features_include_value?? '' }}
                                 </div>
                              </div>
                           </div>
							
							
                           <div style="position:absolute;top:0;right:0;box-sizing: border-box;width:1.6842in;">
                              <div class="main-details">
                                 <div class="main-details-header">
                                 {{ $data['back_page']->site_influences_title ?? '' }}
                                 </div>
                                 <div class="main-details-description">
                                 {{ $data['back_page']->site_influences_value ?? '' }}
                                 </div>
                              </div>
                              <div class="main-details">
                                 <div class="main-details-header">
                                 {{ $data['back_page']->amenities_title ?? '' }}
                                 </div>
                                 <div class="main-details-description">
                                 {{ $data['back_page']->amenities_value ?? '' }}
                                 </div>
                              </div>
                              <div class="main-details">
                                 <div class="main-details-header">
                                 {{ $data['back_page']->view_title ?? '' }}
                                 </div>
                                 <div class="main-details-description">
                                 {{ $data['back_page']->view_value ?? '' }}
                                 </div>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     
                  </div>
               </div>
               <div style="position: absolute;top:0;right: 0.2in;">
                  <div class="description-footer-img" style="margin-bottom:0.34in;">
                  <img src="{{ $data['back_page']->img_1->file_path_large  ?? ''}}"  />
                  </div>
                  <div class="description-footer-img">
                  <img src="{{ $data['back_page']->img_2->file_path_large  ?? ''}}"  />
                  </div>
               </div>
            </div>
            <div class="main-img-back">
               <!--- issue: replace this img
      <img src++++="{{ $data['back_page']->main_img_1->file_path_large  ?? ''}}" style="position: relative;left:10px; transform: translate({{ $data['back_page']->main_img_1_x}}px, {{ $data['back_page']->main_img_1_y}}px) scale( {{ $data['back_page']->main_img_1_scale}} ); max-height:5.155in;" />
                 -->
            <img src="{{$defaultImg}}" />
            </div>
         </div>
         <!--Left Panel End-->
         <!--Right Panel-->
          <div class="main-wrap-front" style="width:8in;height:10.2in;padding-left:2in;box-sizing:border-box;position:absolute;top:0.5064in;right:0.5064in;">
               <div class="tile-img-wrap-1" style="position:relative;">
                  <div class="main-tile-img" style="position:relative;right:-0.18in;top:0.5064in;position:relative;">
                     <img  src="{{ $data['back_page']->img_3->file_path_large  ?? ''}}" class="back-tile-img" style="postion:relative;" />
                     <img src="{{ $data['back_page']->img_4->file_path_large  ?? ''}}" class="back-tile-img"  style="margin-left:0.115in;postion:relative;" />
                  </div>
                 <div style="position:absolute;right:-0.18in;top:0.8in;in;position:relative;">
                     <img  src="{{ $data['back_page']->img_5->file_path_large  ?? ''}}" class="back-tile-img" />
                     <img src="{{ $data['back_page']->img_6->file_path_large  ?? ''}}"class="back-tile-img" style="margin-left:0.115in;" />
                  </div> 
               </div>
               <div class="main-details-wrap" style="position:relative;top:0.35in;left:0.188in">
                  <div class="details-master-wrap">
                     <div class="right-main-img">
                     <img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}" style="transform: translate({{ $data['back_page']->main_img_2_x}}px, {{ $data['back_page']->main_img_2_y}}px) scale( {{ $data['back_page']->main_img_2_scale}} );" /> 
				


                     </div>
                  </div>
               </div>
           </div>
        <!--  </div>  -->
         <!--Right Panel End-->
</div>

<!-- Back Page End -->
   </body>
</html>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <?php
           $theme = $data['theme'];
         $bodyBackGroundImg =    public_path("storage/images/ftemplate-6-front-". $theme . ".jpg");
         $bodyBackImg =    public_path("storage/images/ftemplate-6-back-". $theme . ".jpg");
         $defaultImg =    public_path("storage/HQ/images/default.png");
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
         padding:0.5in 0 0in 0.5in;
         width: 17in;
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
    top:0;
}

.header-banner-wrap{
	width:100%;
    margin-top: 0.25in;
    color: #FFF;
	padding-right:0.3865in;
	box-sizing:border-box;
}

.header-banner-wrap div{
	text-align: right;
	font-size:0.375in;
}

.header-banner-wrap div:nth-child(1){
	font-family:TrajanPro-Bold;
	
	
}

.header-banner-wrap div:nth-child(2){
	font-family:Century-Gothic-Regular;

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
	width:8.4555in;
    height:5.8437in;
	position:relative;
	/*border:0.0278in solid #fff;*/
}

.main-image img{
	width:8.4984in;
    height:5.8437in;
}

.tile-images{
	background-color:#ffffff;	
	width:100%;
	height:1.69in;
   position:relative;
}

.tile-images img{
	height:1.6205in;
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
	height:8.0789in;
	box-sizing:border-box;
	background:#ccc;
	margin-left: 0.35in;
	position:relative;
}

.leftpanel-logo{
	width:1.7478in;
	height:0.9675in;
	text-align: center;
}

.leftpanel-logo img{
	height:0.9675in;
}

.leftpanel-logo{
	position: absolute;
right: 0.8in;
}


.footer-name{
	color:#231f20;
}


.footer-name span{
	text-transform: uppercase;
}

.footer-name span:nth-child(1){
	font-family:TrajanPro-Bold;
	font-size:0.1667in;
	
}

.footer-name span:nth-child(2){
	font-family:Century-Gothic-Bold;
	font-size:0.1667in;
	
}

.contact-details{
	margin-bottom: 0.7in;
	color:#231f20;
}

.phone-lbl{
	font-family:Century-Gothic-Bold;
	text-transform: uppercase;
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
	font-family:Arial-Bold;
    margin-top: 1.2in;
	color:#fff;
    font-size:0.08in;
	margin-bottom:0.0336in;
	text-align:left;
	margin-left: 0.1in;
}

.footer-mark{
	font-family:Arial-Bold;
	font-size:0.1333in;
	color:#fff;
	margin-left: 0.1in;
}

.clearfix{
	clear:both;
}

.header-wrap{
	margin-top: 0.8in;	
}

.main-logo{
	position: absolute;
	top: 9px;
	left: 77px;
}

.main-logo td{
	width: 1.78in;
	height: 0.97in;
	text-align:center;
}

.main-logo img{
	height:0.97in;
}

.main-pg-main-img{
	height: 0.4278in;
background: #fff;
font-size: 0.2222in;
color: #414042;
text-align: center;
box-sizing: border-box;
padding-top: 0.1in;
opacity: 0.7;
position: absolute;
bottom: 0;
	width:100%
}

.left-logo-main{
    position: absolute;
    right:1.5in;
    top:0;
}



         /* Back page css */


         .back-page-print{
         padding:0.5227in;
         width:17in;
         box-sizing: border-box;
         position: absolute;
         }
   
         .main-img-back{
	width:7.8577in;
	height:5.155in;
	position: relative;
	overflow: hidden;
	border: 0.0278in solid #fff;
}

.main-wrap-back{
width:7.8577in;

	box-sizing:border-box;
	position:relative;
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
	margin-top:0.2391in;
}

.description{
	box-sizing:border-box;
}


h1{
	font-size: 0.3889in;
    color: #fff;
    font-family: TrajanPro-Bold;
    margin: 0;
    letter-spacing: 0.09in;
    text-align: center;
}

p{
	font-family:Century-Gothic-Regular;
	font-size:0.125in;
	color:#fff;
	line-height: 0.18in;
	
}

.description-footer-img{
	width:3.2437in;
	height:2.1586in;
	margin-bottom: 0.178in;
	border:0.0278in solid #fff;

}

.description-footer-img img{
	width:3.2437in;
	height:2.1586in
}

.main-tile-img{
	width:3.2527in;
}

.tile-img{
	width:3.4722in;
	height:2.2888in;
	margin-bottom: 0.2in;
	border:0.0278in solid #fff;
}

.tile-img img {
	width:3.4722in;
	height:2.2888in;
}

.details-master-wrap{
    right: 0;
	position:relative;
}

.main-details-wrap{
	width:3.5in;
margin-left: 0.1654in;
position: absolute;
padding-left: 0.1in;
box-sizing: border-box;
right: 0.1in;
top: 0in;
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
	color:#58595B;
	font-family:TrajanPro-Bold;
	font-size:0.1528in;
	text-transform:uppercase;
	font-weight:600;
}
.main-details-description{
	font-family:Century-Gothic-Regular;
	text-align:justify;
	font-size:0.125in;
	color:#58595B;
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
	width:3.4316in;
	height:4.4744in;
	margin-top: 0.23in;
	border: 0.0278in solid #fff;
	overflow:hidden;
}

.fnt-top-imgwrap{
	position:relative;
}

.fnt-img-left{
	width:3.2437in;
}

.main-intro-top-wrap{
	width:4.3587in;
	height:4.5598in;
	position:absolute;
	top:0;
	right:0;
	
}

.main-intro-top-wrap h1{
	margin:0;
	padding:0;
	text-transform: capitalize;
	font-size:0.3333in;
	color:#fff;
	text-align: left;
	line-height: 27px;
	margin-bottom:0.1in;
	padding-left:0.2777in;
	
}

.main-intro-top-wrap p{
	padding:0;
	margin:0;
	text-align: justify;
	color:#fff;
	font-size:0.125in;
	font-style:italic;
	padding-left:0.2777in;
}

.tile-img-wrap{
	padding-left:0.2in;
	box-sizing: border-box;
	position: relative;
}

.bck-right-top-img{
	width:3.4722in;
	height:2.3401in;
	border: 0.0278in solid #fff;
	margin-bottom: 0.07in;
}

.bck-right-top-img img{
	width:3.4722in;
	height:2.3401in;
}


.clearfix{
	clear:both;
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
         
         <div class="main-wrap" style="position:absolute;left:0.5in;top:0.5in;">
            <div style="position:relative;">
          
            <div class="contact-details">
               <div class="footer-name">
				   <span>{{$data['front_page']->contact_title ?? '' }}</span>&nbsp;
                  <span style="font-weight:600">{{$data['front_page']->contact_value ?? '' }}</span>
               </div>
               <div class="footer-name" style="margin-top:0;"><span>{{$data['front_page']->company_value ?? '' }}</span></div>
               <div>
                  <span class="phone-lbl" style="font-weight:600">{{ $data['front_page']->phone_title?? '' }}</span>&nbsp;
                  <span class="phone-numb">{{ $data['front_page']->phone_value?? '' }}</span>&nbsp;&nbsp;
                  <span class="phone-lbl" style="font-weight:600">{{ $data['front_page']->email_title?? '' }}</span>
                  <span class="phone-numb" style="font-weight:600">{{ $data['front_page']->email_value?? '' }}</span>
               </div>
            </div>
            <table class="left-logo-main">
               <tr>
                  <td class="leftpanel-logo" valign="middle"><img src="{{ $data['company_logo'] ?? '' }}" /></td>
               </tr>
            </table>
            </div>
            
            <div class="floorplan-img-wrap" style="overflow:hidden">
          	<!-- uncomment this image	 -->
						
					<img src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />



				
				<div style="position:absolute;bottom:1.5in;left:5in;">
					<div style="font-size:0.1667in;color:#414042;text-transform: uppercase;margin-bottom: 0.03in;">Totals</div>
					<div style="font-size:0.1667in;color:#414042;text-transform: uppercase;margin-bottom: 0.03in;">Main Level {{ $data['front_page']->sqft_value  ?? ''}} SQ.FT </div>
					<div style="font-size:0.1667in;color:#414042;text-transform: uppercase;margin-bottom: 0.03in;">Deck:00 sq ft </div>

				</div>
                <div style="font-size: 0.08in;color: #414042;position: absolute;bottom: 1.2in;right: 0.2in;width: 3.9in;">
                    All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless
                </div>
            </div>
            <div style="width:69%;margin-top:0.17777in;">
               <div class="fsheets-copyright" style="margin-top:0;">
                  All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. 
                  Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless
               </div>
            </div>
            <div class="footer-mark">DESIGNED AND PRINTED BY BC FLOOR PLANS</div>
         </div>

         <!--Left Panel End--> 



         <!--Right Panel-->

         <div class="main-wrap" style="box-sizing:border-box;position:absolute;width:8.5in;top:0.486in;right:0.4888in;">
            <div class="tile-images">
               <div style="position:absolute;top:0.3444in;">
                  <img src="{{ $data['front_page']->img_1->file_path_large  ?? ''}}" style="width:24.95%;height:1.6205in;" />
                  <img src="{{ $data['front_page']->img_2->file_path_large  ?? ''}}" style="width:24.95%;height:1.6205in;" />
                  <img src="{{ $data['front_page']->img_3->file_path_large  ?? ''}}" style="width:24.25%;height:1.6205in;" />
                  <img src="{{ $data['front_page']->img_4->file_path_large  ?? ''}}" style="width:24.25%;height:1.6205in;" />
               </div>
               
            </div>
            <div style="position:relative;height:5.16in;">
               <div class="main-image" style="overflow:hidden">
			   <img src="{{ $data['front_page']->main_img_2->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_2_x}}px, {{ $data['front_page']->main_img_2_y}}px) scale( {{ $data['front_page']->main_img_2_scale}} );" />

                  <div class="main-pg-main-img">
				  {{$data['front_page']->description_header ?? '' }}
                  </div>
               </div>
               <div style="position:absolute;top:-47px;z-index:4;left: 2.6in;">
                  <div style="position: relative;">
                     <table class="main-logo">
                        <tr>
                           <td valign="middle">
                           <img src="{{$data['company_logo'] ?? '' }}"/> 
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
            <div class="header-wrap">
               <div class="header-banner-wrap">
                  <div>{{$data['front_page']->header ?? '' }}</div>
                  <div>{{$data['front_page']->sub_header ?? '' }}</div>
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
  
  <div class="main-wrap-back" style="padding-right:0.1687in;box-sizing:border-box">


	
	  <div class="fnt-top-imgwrap">
		  <div class="fnt-img-left">
		  <div class="description-footer-img">
		  	<img src="{{ $data['back_page']->img_1->file_path_large  ?? ''}}"  />
		  </div>
		  <div class="description-footer-img" >
		  	<img src="{{ $data['back_page']->img_2->file_path_large  ?? ''}}"  />
		  </div>
		  </div>
		  
			<div style="position: absolute; top:0; color: #fff; width: 4.2in; left: 3.6in">
				<div style="margin-bottom: 0.3in;  font-size:1.2rem">ON TOP OF IT ALL! BEAUTIFULL SUB-PENTHHOUSE IN THE WELL APPOINTED CENTERO BUILDING</div>
				<div style="text-align: justify; margin-bottom: 0.2in">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque et reiciendis asperiores aliquid molestiae quisquam ad recusandae veniam illo vel.Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque et reiciendis asperiores aliquid molestiae quisquam ad recusandae veniam illo vel.Lorem ipsum dolor sit amet consectetiae quisquam riores aliquid molestiae quisquam ad recusandae veniam illo vel.Lorem ipsum dolor sit amet consectetiae quisquam riores aliquid molestiae quisquam ad recusandae veniam illo vel.Lorem ipsum dolor sit amet consectetiae quisquam ad recusandae veniam illo vel.
				</div>

				
				<div style="text-align: justify;">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque et reiciendis asperiores aliquid molestiae quisquam ad recusandae veniam illo vel.Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque et reiciendis asperiores aliquid molestiae quisquam ad recusandae veniam illo vel.Lorem
				</div>




			</div>


	  </div>
		
	  <div class="main-img-back">
	  <img src="{{ $data['back_page']->main_img_1->file_path_large  ?? ''}}" style=" transform: translate({{ $data['back_page']->main_img_1_x}}px, {{ $data['back_page']->main_img_1_y}}px) scale( {{ $data['back_page']->main_img_1_scale}} ); max-height:5.155in;" />

	  </div>
  </div>
  
  <!--Left Panel End-->


<!--Right Panel-->
<div class="main-wrap-back" style="padding-left:0.1687in;box-sizing:border-box;position:absolute;top:0.5227in;right:1.5in">
	  <div class="tile-img-wrap">
		  <div class="main-tile-img">
			  <div class="tile-img"><img src="{{ $data['back_page']->img_3->file_path_large  ?? ''}}"  /></div>
			  <div class="tile-img"><img src="{{ $data['back_page']->img_4->file_path_large  ?? ''}}" /></div>
			  <div class="tile-img"><img src="{{ $data['back_page']->img_5->file_path_large  ?? ''}}" /></div>
			  <div class="tile-img"><img src="{{ $data['back_page']->img_6->file_path_large  ?? ''}}" /></div>
		  </div>
		  <div class="main-details-wrap">
			  <div class="bck-right-top-img"><img src="{{ $data['back_page']->img_7->file_path_large  ?? ''}}" /></div>
			  <div class="details-master-wrap">
				  <div style="width:50%;">
					  <div class="main-details">
					  <div class="main-details-header">
					{{ $data['back_page']->law_restrictions_title ?? '' }}:
					  </div>
					  <div class="main-details-description">
					  {{ $data['back_page']->law_restrictions_value ?? '' }}
					  </div>
				  </div>
				  <div class="main-details">
					  <div class="main-details-header">
					  {{ $data['back_page']->main_fees_title ?? '' }}:
					  </div>
					  <div class="main-details-description">
					  {{ $data['back_page']->main_fees_value ?? '' }}
					  </div>
				  </div>
				  <div class="main-details">
					  <div class="main-details-header">
					 {{ $data['back_page']->main_fees_include_title ?? '' }}:
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
					  {{ $data['back_page']->features_include_value ?? '' }}
					  </div>
				  </div>
				  </div>
				  <div style="width: 50%;padding-left: 0.4in;box-sizing: border-box;position: absolute;right: 0;top:0;">
					  <div class="main-details">
					  <div class="main-details-header">
						{{ $data['back_page']->site_influences_title ?? '' }}:
					  </div>
					  <div class="main-details-description">
					  {{ $data['back_page']->site_influences_value ?? '' }}
					  </div>
				  </div>
				  <div class="main-details">
					  <div class="main-details-header">
					  {{ $data['back_page']->amenities_title ?? '' }}:
					  </div>
					  <div class="main-details-description">
					  {{ $data['back_page']->amenities_value ?? '' }}
					  </div>
				  </div>
				  <div class="main-details">
					  <div class="main-details-header">
					  {{ $data['back_page']->view_title ?? '' }}:
					  </div>
					  <div class="main-details-description">
					  {{ $data['back_page']->view_value ?? '' }}
					  </div>
						
						<!-- <h3>{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}</h3> -->
				  </div>
				  </div> 
					
				  <div class="clearfix"></div>
				  <div class="right-main-img">
					
				  	<!-- <img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}" style=" opacity: 0.9;transform: translate({{ $data['back_page']->main_img_2_x}}px, {{ $data['back_page']->main_img_2_y}}px) scale( {{ $data['back_page']->main_img_2_scale}} );" />  -->
				  	<img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}" style=" opacity: 0.9; position: relative; left: 22px; top: -25px; transform: translate({{ $data['back_page']->main_img_2_x}}px, {{ $data['back_page']->main_img_2_y}}px) scale({{ $data['back_page']->main_img_2_scale}});  max-height:4.4744in;" /> 
				

				 <!-- <img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}" style="position: relative; top:-150px; opacity: 0.5;transform: translate(7px, 6px) scale( 1 );" />  -->
				 
				  </div>
				  
			  </div>
		  </div>
	  </div>
	  
  </div>
<!--Right Panel End-->

</div>

      <!-- Back End-->
   </body>
</html>
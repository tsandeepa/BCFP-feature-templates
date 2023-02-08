<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <?php
         $theme = $data['theme'];
         $bodyBackGroundImg = public_path("storage/images/ftemplate-5-frontback-". $theme .".jpg");
         
         $bodyBackImg = public_path("storage/images/ftemplate-5-frontback-". $theme .".jpg");
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
         padding:0.4861in 0 0in 0.4861in;
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
}

.header-banner-wrap{
	width: 8in;
height: 0.8956in;
margin-top: 0.25in;

padding-top:1in;
color:#2F4F25;
background: #fff;
opacity: 0.5;
	box-sizing: border-box;
	padding-top:0.15in;

}

.header-banner-wrap div{
   
	text-align: center;
}

.header-banner-wrap div:nth-child(1){
   margin-top:0.0666in;
	font-family:TrajanPro-Bold;
	font-size:0.3333in;
	
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
	width:8.0022in;
    height:5.4514in;
	border:0.0278in solid #fff;
	position:relative;
}

.main-image img{
	width:8.0022in;
    height:5.4514in;
}

.tile-images{
	width: 5.6014in;
	height: 3.7971in;
	position: relative;
	left: 1.3555in;
	
}

.tile-img{
	border:0.0278in solid #fff;
	width:2.7088in;
	height:1.8011in; 
	margin-bottom:0.1162in;
}

.tile-img img{
	width:2.7088in;
	height:1.8011in; 
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
	height:8.0322in;
	background:#ccc;
	position: relative;
	
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
	text-transeform:uppercase;
	font-weight:600;
}


.footer-name span{
	text-transform: uppercase;
}

.footer-name span:nth-child(1){
	font-family:TrajanPro-Bold;
	font-size:0.1389in;
	
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
	font-size:0.08in;
	margin-top:0.1in;
	color:#B6AF93;
}



.fsheets-copyright img{
	height:1.2in;
}

.footer-mark{
	font-family:Arial-Bold;
	font-size:0.1333in;margin-top:0.1in;
	color:#ffffff;
}

.clearfix{
	clear:both;
}

.header-wrap{
left:0;
position: absolute;
top: -0.26in;
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
	width:66%;
	text-align:center;
	margin:auto;
	margin-top:0.2in;
   position: relative;
}

.bottom-price div:nth-child(1){
	text-transform: capitalize;
	font-size:0.1528in;
	color:#B6AF93;
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


/* Front Page End  */


/* Back page css */

.back-page-print{
    padding:0.4931in 0.4931in 0.4931in 0.4931in;
    width:17in;
    box-sizing: border-box;
	position:relative;
}

.main-wrap-back{
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

.main-img-back{
    height:4.528in;
    overflow: hidden;
    width:7.9in;
}

.main-description{
	margin-top:0.2391in;
}

.description{
	box-sizing:border-box;
	height: 2.4in;
}

.sub-topics{
	font-size:0.125in;
	color:#B6AF93;
	text-traseform:uppercase;
}

.sub-description{
	font-size:0.1667in;
	color:#fff;
	margin-bottom:0.0999in;
	line-height:0.19in;
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
	width:3.7578in;
	height:2.5022in;
}

.description-footer-img img{
	width:3.7578in;
	height:2.5022in;
	border: 0.0278in solid #fff;
}


.main-tile-img img{
	width:3.7325in;
	height:2.5022in;
	border: 0.0278in solid #fff;
}

.back-tile-img{
	width:3.7325in;
	height:2.4841in;
	margin-bottom:0.3in;
	border:0.0278in solid #fff;
}

.back-tile-img img {
	width:3.7325in;
	height:2.4841in;
}


.main-details-wrap{
	margin:0;
    top:-0.233in;
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
	color:#fff;
	font-family:TrajanPro-Bold;
	font-size:0.1667in;
	text-transform:uppercase;
}
.main-details-description{
	font-family:Century-Gothic-Regular;
	text-align:justify;
	font-size:0.125in;
	color:#fff;
	position:relative;
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
	width:7.9in;
	overflow:hidden;
}

.right-main-img img{
	width: 7.7888in;
height: 4.3in;
	border:0.0278in solid #fff;
}


.clearfix{
	clear:both;
}

.img-shadow-border{
    border: 5px solid #222;
    border-top: none;
    border-left: none;
}

      
      </style>
      <title>Untitled Document</title>
   </head>
   <body>

<!-- Front -->
<div class="front-page-print">
            <!--Left Panel-->
           <img src="{{$bodyBackGroundImg}}" id="bodyBackGroundImg" />
            <div class="main-wrap-front" style="width: 8in">
                <div class="floorplan-img-wrap img-shadow-border" style="overflow:hidden">
                <!-- <img src="{{$defaultImg}}" /> -->
               <img  src="{{ $data['front_page']->main_img_1->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_1_x}}px, {{ $data['front_page']->main_img_1_y}}px) scale( {{ $data['front_page']->main_img_1_scale}} );" />

					<div style="position:absolute;bottom:3in;left:5.4in;">
						<div style="font-size:0.1667in;color:#2F4F25;text-transform: uppercase;margin-bottom: 0.03in;font-weight:bold;">TOTALS</div>
						<div style="font-size:0.1667in;color:#2F4F25;text-transform: uppercase;margin-bottom: 0.03in;">MAIN LEVEL:   {{ $data['back_page']->sqft_value  ?? ''}}  SQ.FT. </div>
						<div style="font-size:0.1667in;color:#2F4F25;text-transform: uppercase;margin-bottom: 0.03in;">DECK  </div>

					</div>
					<div style="font-size: 0.08in;color: #2F4F25;position:absolute;bottom:2.7in;left:3.4in;width: 3.6in;">
						All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless
					</div>
				</div>
                <table  style="width:7.9555in;">
                    <tr>
                        <td>
                            <div class="footer-name"><span>{{$data['front_page']->contact_title ?? '' }}</span></div>
                            <div class="footer-name" style="margin-top: 0;"><span>{{$data['front_page']->contact_value ?? '' }}</span></div>
                            <div class="contact-details"><span class="phone-lbl">{{$data['front_page']->phone_title ?? '' }}</span>&nbsp; <span class="phone-numb">{{$data['front_page']->phone_value ?? '' }}</span>&nbsp;&nbsp;</div>
                            <div class="contact-details"><span class="phone-lbl">{{$data['front_page']->email_title ?? '' }}</span> <span class="phone-numb">{{$data['front_page']->email_value ?? '' }}</span></div>
                            <div class="fsheets-copyright">
                                All information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor Plans shall be
                                responsible for any typographical errors, misinformation, misprints and shall be held totally harmless
                            </div>
                            <div class="footer-mark">DESIGNED AND PRINTED BY BC FLOOR PLANS</div>
                        </td>
                        <td class="fsheets-copyright" valign="bottom" style="text-align: center;">
                        <img src="{{$data['company_logo'] ?? '' }}"/>
                        </td>
                    </tr>
                </table>

                <div class="clearfix"></div>
            </div>

            <!--Left Panel End-->

            <!--Right Panel-->
<div style="position:absolute;top:0.4861in;right:0.4861in;">
				<div class="main-wrap" style="box-sizing: border-box; position: relative; width: 8.5in;">
                <div style="position: relative; height: 5.16in; margin-left: 0.1666in;">
                    <div class="main-image">
                 
                    <img src="{{ $data['front_page']->main_img_2->file_path_large  ?? ''}}" style="transform: translate({{ $data['front_page']->main_img_2_x}}px, {{ $data['front_page']->main_img_2_y}}px) scale( {{ $data['front_page']->main_img_2_scale}} );" />
	

                        <div class="header-wrap">
                            <div class="header-banner-wrap">
                                <div> {{$data['header'] ?? '' }},</div>
                                <div>{{$data['sub_header'] ?? '' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tile-images">
                    <div>
                        <div class="tile-img">

                        <img src="{{ $data['front_page']->img_1->file_path_large  ?? ''}}"  />
	
                        </div>
                        <div class="tile-img"><img src="{{ $data['front_page']->img_2->file_path_large  ?? ''}}"  /></div>
                    </div>
                    <div style="position: absolute; top: 0;left:2.955in;">
                        <div class="tile-img"><img src="{{ $data['front_page']->img_3->file_path_large  ?? ''}}"  /></div>
                        <div class="tile-img"><img src="{{ $data['front_page']->img_4->file_path_large  ?? ''}}"  /> /></div>
                    </div>
                    <table style="position: absolute; top: 1.3in; left: 1.9in;">
                        <tr>
                            <td class="bottom-logo-img" valign="middle">
                            <img src="{{$data['company_logo'] ?? '' }}" />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="bottom-price">
                  <div style="margin-top:0.1in;">
                  {{$data['main_description_center'] ?? '' }}
                    </div>
                    <div style="position:absolute;bottom:0.2555in;width:100%;text-align:center;">${{$data['amount'] ?? '' }}</div>
                </div>
            </div>
			</div>
    

            <!--Right Panel End-->
</div> 


<!-- Front End -->


<!-- Back -->

<!-- <div class="back-page-print"> -->
      <img src="{{$bodyBackImg}}" id="bodyBackGroundImg" />
         <!-- Left Panel-->
         <div class="main-wrap-back" style="padding-right:0.1687in; padding-left:0.5in; box-sizing:border-box;position:relative; ">
            
            <div class="description-footer-img">
            <img src="{{ $data['back_page']->img_1->file_path_large  ?? ''}}" />
        
            </div>
            <div class="description-footer-img" style="margin-left:0.322in;position:absolute;top:0;right:0.3in;">
            <img src="{{ $data['back_page']->img_2->file_path_large  ?? ''}}" />
            </div>
            <div class="main-description">
               <div class="description">
                  <p>
                  {{ $data['back_page']->main_description  ?? ''}} 
                  </p>
				   <div style="position:relative;width:100%">
					   <div style="width:33.3%;box-sizing: border-box;padding-right:0.2in;text-align:left;">
                       <div class="sub-topics"> {{ $data['back_page']->law_restrictions_title  ?? ''}}:</div>
						   <div class="sub-description">{{ $data['back_page']->law_restrictions_value  ?? ''}}</div>
						   <div class="sub-topics"> {{ $data['back_page']->main_fees_title  ?? ''}}: </div>
						   <div class="sub-description"> ${{ $data['back_page']->main_fees_value  ?? ''}}</div>
						   <div class="sub-topics"> {{ $data['back_page']->view_title  ?? ''}}:</div>
						   <div class="sub-description"> {{ $data['back_page']->view_value  ?? ''}}: </div>
					   </div>
					   <div style="width:30%;position:absolute;top:0;left:32%;box-sizing:border-box;padding-left:0.3in;padding-right:2in;text-align:left;">
					   	<div class="sub-topics">{{ $data['back_page']->main_fees_include_title  ?? ''}}:</div>
						   <div class="sub-description">{{ $data['back_page']->main_fees_include_title  ?? ''}}:</div>
						   <div class="sub-topics">  {{ $data['back_page']->features_include_title  ?? ''}}:  </div>
						   <div class="sub-description">{{ $data['back_page']->features_include_value  ?? ''}} </div>
					   </div>
					   <div style="width:33%;position:absolute;top:0;right:-0.3in;box-sizing: border-box;padding-left:0.4in;padding-right:0.38888in;text-align:left;">
					   	<div class="sub-topics">{{ $data['back_page']->site_influences_title  ?? ''}}:</div>
						   <div class="sub-description"> {{ $data['back_page']->site_influences_value  ?? ''}} </div>
						   <div class="sub-topics"> {{ $data['back_page']->amenities_title  ?? ''}}: </div>
						   <div class="sub-description">Exercise Centre, Garden, In Suite Laundry, Sauna/Steam Room</div>
				        </div>
				   </div>
				   
               </div>
            </div>
			 <div class="main-img-back" style="border:1px solid #ff0000;position:absolute;bottom:0.1in;">
				 <div style="position:absolute;top:0.27777in;width:100%;text-align: center;font-size:0.1806in;color:#2F4F25;font-weight:600;">2 BEDROOM  |  2 BATHROOM  |  837 SQ FT   |   BUILT IN 2009</div>
                 <img src="{{ $data['back_page']->main_img_1->file_path_large  ?? ''}}" />
            </div>
         </div>
         <!--Left Panel End-->
         <!--Right Panel-->
         <div class="main-wrap-back" style="padding-left:0.1687in;box-sizing:border-box;position:absolute;top:1in;right:0.1in;">
            <div class="tile-img-wrap" >
               <div class="main-tile-img">
                      <img src="{{ $data['back_page']->img_3->file_path_large  ?? ''}}" />
                  <img src="{{ $data['back_page']->img_4->file_path_large  ?? ''}}" style="margin-left: 0.24444in;" />
                  
               </div>
               <div class="main-details-wrap">
                     <div class="right-main-img">
                     <img src="{{ $data['back_page']->main_img_2->file_path_large  ?? ''}}"  style="transform: translate({{ $data['back_page']->main_img_2_x ?? 0}}px, {{ $data['back_page']->main_img_2_y ?? 0}}px) scale( {{ $data['back_page']->main_img_2_scale?? 0}} );"  />
                     </div>
               </div>
				
				<div class="main-tile-img" style="position:relative; top:0.555in;">
                <img src="{{ $data['back_page']->img_5->file_path_large  ?? ''}}" />
                  <img src="{{ $data['back_page']->img_6->file_path_large  ?? ''}}" style="margin-left: 0.24444in;" />
               </div>
            </div>
         </div>
         
</div>

<!-- Back End-->


   </body>
</html>
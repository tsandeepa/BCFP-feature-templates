<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <?php
        $theme = $data['theme'];
        $bodyBackGroundImg =    public_path("storage/images/ftemplate-4-front-" . $theme . ".png");
        $bodyBackImg =    public_path("storage/images/ftemplate-4-back-"  . $theme . ".jpg");
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
         padding:0.4861in 0 0in 0.5in;
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

	position:relative;
}

.main-image img{
	width:8.4861in;
    height:6.7156in;
	border-top:0.0278in solid #fff;
	border-bottom:0.0278in solid #fff;
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
    top: 1.5in;
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

/* Front Page End */
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
         <table width="100%" style="position:absolute;top:in;">
            <tr>
               <td style="padding-left:0.1389in">
                  <div class="footer-name"> <span>CONTACT:</span> </div>
                  <div class="footer-name" style="margin-top:0;"><span>FIRSTNAME LASTNAME</span></div>
                  <div class="contact-details"> <span class="phone-lbl">Macdonald Realty</span>&nbsp; </div>
                  <div class="contact-details" style="margin-top:0.2in;"> <span class="phone-lbl">Phone</span>&nbsp; <span class="phone-numb">604.000.0000</span>&nbsp;&nbsp; </div>
                  <div class="contact-details"> <span class="phone-lbl">Email</span> <span class="phone-numb">FIRST@LAST.COM</span> </div>
               </td>
            </tr>
         </table>
         <div class="main-wrap" style="border:1px solid #ff0000">
            <div class="floorplan-img-wrap">

            <table cellpadding="0" cellspacing="0">
               <tr>
                  <td style="font-size:0.2639in;color:#049647;text-transform: uppercase;margin-bottom: 0.03in;">Totals</td>
               </tr>
               <tr>
                  <td style="font-size:0.2639in;color:#049647;text-transform: uppercase;margin-bottom: 0.03in;">main level: sq.ft.</td>
               </tr>
               <tr>
                  <td style="font-size:0.2639in;color:#049647;text-transform: uppercase;margin-bottom: 0.03in;">deck:00 sq ft.</td>
               </tr>
            </table>
               <!-- <div style="position:absolute;bottom:2in;left:1in;">
                  <div style="font-size:0.2639in;color:#049647;text-transform: uppercase;margin-bottom: 0.03in;">Totals</div>
                  <div style="font-size:0.1667in;color:#049647;text-transform: uppercase;margin-bottom: 0.03in;">main level: sq.ft. </div>
                  <div style="font-size:0.1667in;color:#049647;text-transform: uppercase;margin-bottom: 0.03in;">deck:00 sq ft. </div>
               </div> -->
               <div style="font-size: 0.08in;color: #049647;position: absolute;bottom: 0.4in;right: 0.2in;width: 3.9in;">
                  ll information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless
               </div>
            </div>
            <div class="fsheets-copyright">
               ll information deemed reliable but not guaranteed and should be independently verified. All properties are subject to prior sale, change or withdrawal. 
               Neither listing broker(s) nor BC Floor Plans shall be responsible for any typographical errors, misinformation, misprints and shall be held totally harmless 
               <div class="footer-mark">DESIGNED AND PRINTED BY BC FLOOR PLANS</div>
            </div>
         </div>
         <!--Left Panel End-->

                  <!--Right Panel-->
                  <!-- <div class="main-wrap" style="box-sizing:border-box;position:absolute;width:8.5in;top:0;right:0">
            <div style="position:relative;height:5.16in;">
               <div class="main-image" style="position: relative;top: 0.5187in">
               <img src="{{$defaultImg}}" />
				  <div class="bedrooms">
					  <div style="position: relative">
					  	<img src="ftemplate-9-front-head-line-green.png" />
					  		<div style="position: relative;z-index:2;top:0.0888in;right: 0.9in;">0 BEDROOM | 0 BATHROOM | 000 SQ FT | BUILT IN 000</div>
					  </div>
					  
				   </div> 
                  <div class="header-wrap">
                     <div class="header-banner-wrap">
                        <img src="ftemplate-9-front-head-green.png" />
                        <div>0000-000</div>
                        <div>NUMBER 0 ROAD</div>
                        <div>BRIGHOUSE SOUTH, RICHMOND</div>
                        <div>$ 100000</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tile-images">
               <div>
                  <div class="tile-img"><img src="{{$defaultImg}}" /></div>
                  <div class="tile-img"><img src="{{$defaultImg}}" /></div>
               </div>
               <div style="position: absolute;top: 0;right: 0;">
                  <div class="tile-img"><img src="{{$defaultImg}}" /></div>
                  <div class="tile-img"><img src="{{$defaultImg}}" /></div>
               </div>
               <table style="position:absolute;top:1.3in;left:1.9in">
                  <tr>
                     <td class="bottom-logo-img" valign="middle">
                     <img src="{{$defaultImg}}" />
                     </td>
                  </tr>
               </table>
            </div> 
         </div> -->
         <!--Right Panel End--> 

      </div>
      <!-- Front End -->
      <!-- Back -->
      <!-- <div class="back-page-print">
         <img src="{{$bodyBackImg}}" id="bodyBackGroundImg" />
         
      </div> -->
      
      <!--Right Panel End--> 
      <!-- </div> -->
      <!-- Back End-->
   </body>
</html>
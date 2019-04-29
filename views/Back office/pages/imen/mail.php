<?php

include "../../../../entities/imen/abonne.php";
include "../../../../core/imen/abonneC.php";

$abonne=new abonneC();
$total=$abonne->long();
$result=$abonne->recupererabonne();

foreach ($result as $ab) {
  

$to = $ab['adresse_mail'];
$subject = 'promotion';
$from = 'imenmanai877@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message.= ' <style type="text/css">
         /* Client-specific Styles */
         #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
         body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
         /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
         .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing.  */
         #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 10px !important;}
         img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
         a img {border:none;}
         .image_fix {display:block;}
         p {margin: 0px 0px !important;}
         table td {border-collapse: collapse;}
         table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
         a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
         /*STYLES*/
         table[class=full] { width: 100%; clear: both; }
         /*IPAD STYLES*/
         @media only screen and (max-width: 640px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #33b9ff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #33b9ff !important;
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 440px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
         img[class=banner] {width: 440px!important;height:110px!important;}
         img[class=colimg2] {width: 440px!important;height:220px!important;}
         
         
         }
         /*IPHONE STYLES*/
         @media only screen and (max-width: 480px) {
         a[href^="tel"], a[href^="sms"] {
         text-decoration: none;
         color: #ffffff; /* or whatever your want */
         pointer-events: none;
         cursor: default;
         }
         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
         text-decoration: default;
         color: #ffffff !important; 
         pointer-events: auto;
         cursor: default;
         }
         table[class=devicewidth] {width: 280px!important;text-align:center!important;}
         table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
         img[class=banner] {width: 280px!important;height:140px!important;}
         img[class=colimg2] {width: 280px!important;height:140px!important;}
         td[class="padding-top15"]{padding-top:50px!important;}
         
        
         }
      </style>
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="preheader" >
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="10"></td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td>
                                    <table width="48%" align="left" border="0" cellpadding="0" cellspacing="0">
                                       <tbody>
                                          <tr>
                                             <td align="left" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 13px;color: #282828" st-content="viewonline">
                                                <a href="#" style="text-decoration: none; color: #ffffff">Ouerghemi Optique </a> 
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <table width="48%" align="right" border="0" cellpadding="0" cellspacing="0">
                                       <tbody>
                                          <tr>
                                             <td align="right" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 13px;color: #282828" st-content="forward">
                                                <a href="#" style="text-decoration: none; color: #ffffff">Forward to Friend </a> 
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="10"></td>
                              </tr>
                              <!-- Spacing -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of preheader -->       
<!-- Start of header -->
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="header">
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#d41b29" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td height="5" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td>
                                    <!-- logo -->
                                    <table width="140" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                       <tbody>
                                          <tr>
                                             <td width="140" height="60" align="center">
                                                <div class="imgpop">
                                                   <a target="_blank" href="#">
                                                   <img src="img/logo.png" alt="" border="0" width="118" height="60" style="display:block; border:none; outline:none; text-decoration:none;">
                                                   </a>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- end of logo -->
                                    <!-- start of menu -->
                                    <table width="250" border="0" align="right" valign="middle" cellpadding="0" cellspacing="0" border="0" class="devicewidth">
                                       <tbody>
                                          <tr>
                                             <td align="center" style="font-family: Helvetica, arial, sans-serif; font-size: 20px;color: #ffffff" st-content="phone"  height="60">
                                                Bienvenue
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- end of menu -->
                                 </td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td height="5" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                              </tr>
                              <!-- Spacing -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of Header -->
<!-- Start of main-banner -->
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="banner">
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                           <tbody>
                              <tr>
                                 <!-- start of image -->
                                 <td align="center" st-image="banner-image">
                                    <div class="imgpop">
                                       <a target="_blank" href="#"><img width="600" border="0" height="300" alt="" border="0" style="display:block; border:none; outline:none; text-decoration:none;" src="https://scontent.ftun3-1.fna.fbcdn.net/v/t1.0-9/12189107_1017497648300482_8053096364065743230_n.jpg?_nc_cat=110&_nc_ht=scontent.ftun3-1.fna&oh=dc5464b7b758ab6c32e3054cd4055db8&oe=5D4C3126" class="banner"></a>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <!-- end of image -->
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of main-banner -->  
<!-- Start of seperator -->
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
   <tbody>
      <tr>
         <td>
            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
               <tbody>
                  <tr>
                     <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of seperator -->   
<!-- Start of heading -->
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                           <tbody>
                              <tr>
                                 <td align="center" style="font-family: Helvetica, arial, sans-serif; font-size: 24px; color: #ffffff; padding: 15px 0;" st-content="heading" bgcolor="#d41b29" align="center">
Nos produits                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of heading --> 
<!-- 2columns -->
<table width="100%" bgcolor="#272a2d" cellpadding="0" cellspacing="0" border="0" id="backgroundTable">
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <tr>
                                 <td>
                                    <table width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                       <tbody>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="20"></td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td>
                                                <!-- start of text content table -->
                                                <table width="270" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                   <tbody>
                                                      <!-- image -->
                                                      <tr>
                                                         <td width="270" align="center" class="devicewidth">
                                                           <a href="http://localhost/projet/views/frontoffice/index.html"> <img src="https://fac.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Ffac.2F2018.2F09.2F17.2Ff384b9bb-dc54-4560-b4f2-7e7a71b0e205.2Ejpeg/748x372/quality/90/crop-from/center/lentilles-de-contact-10-regles-d-hygiene-a-respecter-pour-eviter-les-mauvaises-surprises.jpeg" alt="" border="0" width="270" height="150" style="display:block; border:none; outline:none; text-decoration:none;" class="colimg2"></a>
                                                         </td>
                                                      </tr>
                                                      <!-- title -->
                                                      <tr>
                                                         <td width="270" bgcolor="#d41b29" height="50">
                                                            <table width="218" align="left" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #d41b29;">
                                                               <tbody>
                                                                  <tr>
                                                                     <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #ffffff; padding-left: 10px;" align="left" height="50">
                                                                        Lentilles
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                            

                                                         </td>
                                                      </tr>
                                                      <!-- end of title -->
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                          <!-- end of text content table -->
                                       </tbody>
                                    </table>
                                    <!-- end of left column -->
                                    <!-- start of right column -->
                                    <table width="290" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                       <tbody>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="20"></td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td>
                                                <!-- start of text content table -->
                                                <table width="270" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                   <tbody>
                                                      <!-- image -->
                                                      <tr>
                                                         <td width="270" align="center" class="devicewidth">
                                                         <a href="http://localhost/projet/views/frontoffice/index.html">   <img src=https://img.static-rmg.be/a/view/q75/w1092/h615/2080975/screen-shot-2018-01-09-at-13-41-51-png.png" alt="" border="0" width="270" height="150" style="display:block; border:none; outline:none; text-decoration:none;" class="colimg2"></a>
                                                         </td>
                                                      </tr>
                                                      <!-- title -->
                                                      <tr>
                                                         <td width="270" bgcolor="#d41b29" height="50">
                                                            <table width="218" align="left" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #d41b29;">
                                                               <tbody>
                                                                  <tr>
                                                                     <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #ffffff; padding-left: 10px;" height="50" align="left">
                                                                        Montres
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                            
                                                         </td>
                                                      </tr>
                                                      <!-- end of title -->
                                                      <!-- end of content -->
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                          <!-- end of text content table -->
                                       </tbody>
                                    </table>
                                    <!-- end of right column -->
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- end of 2 columns -->
<!-- 2columns -->
<table width="100%" bgcolor="#272a2d" cellpadding="0" cellspacing="0" border="0" id="backgroundTable">
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <tr>
                                 <td>
                                    <table width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                       <tbody>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="10"></td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td>
                                                <!-- start of text content table -->
                                                <table width="270" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                   <tbody>
                                                      <!-- image -->
                                                      <tr>
                                                         <td width="270" align="center" class="devicewidth">
                                                            <a href="http://localhost/projet/views/frontoffice/index.html"><img src="https://www.axebo.fr/wp-content/uploads/2017/08/1870773-choisir-ses-lunettes-de-vue-selon-son-visage.jpg" alt="" border="0" width="270" height="150" style="display:block; border:none; outline:none; text-decoration:none;" class="colimg2"></a>
                                                         </td>
                                                      </tr>
                                                      <!-- title -->
                                                      <tr>
                                                         <td width="270" bgcolor="#d41b29" height="50">
                                                            <table width="218" align="left" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #d41b29;">
                                                               <tbody>
                                                                  <tr>
                                                                     <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #ffffff; padding-left: 10px;" align="left" height="50">
                                                                        Lunette femme
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                           
                                                         </td>
                                                      </tr>
                                                      <!-- end of title -->
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                          <!-- end of text content table -->
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="10"></td>
                                          </tr>
                                          <!-- Spacing -->
                                       </tbody>
                                    </table>
                                    <!-- end of left column -->
                                    <!-- start of right column -->
                                    <table width="290" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                       <tbody>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="10"></td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td>
                                                <!-- start of text content table -->
                                                <table width="270" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                                   <tbody>
                                                      <!-- image -->
                                                      <tr>
                                                         <td width="270" align="center" class="devicewidth">
                                                            <a href="http://localhost/projet/views/frontoffice/index.html"><img src="http://morgansladephotography.com/wp-content/uploads/1008/coupe-pompadour-avec-barbe-hipster-lunettes-ray-ban.jpg" alt="" border="0" width="270" height="150" style="display:block; border:none; outline:none; text-decoration:none;" class="colimg2"></a> 
                                                         </td>
                                                      </tr>
                                                      <!-- title -->
                                                      <tr>
                                                         <td width="270" bgcolor="#d41b29" height="50">
                                                            <table width="218" align="left" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #d41b29;">
                                                               <tbody>
                                                                  <tr>
                                                                     <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #ffffff; padding-left: 10px;" height="50" align="left">
                                                                        Lunette homme
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                            
                                                         </td>
                                                      </tr>
                                                      <!-- end of title -->
                                                      <!-- end of content -->
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                          <!-- end of text content table -->
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="20"></td>
                                          </tr>
                                          <!-- Spacing -->
                                       </tbody>
                                    </table>
                                    <!-- end of right column -->
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- end of 2 columns -->
<!-- Start of seperator -->
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
   <tbody>
      <tr>
         <td>
            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
               <tbody>
                  <tr>
                     <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of seperator --> 
<!-- Start of heading -->
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#d41b29" width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
                           <tbody>
                              <tr>
                                 <td align="center" style="font-family: Helvetica, arial, sans-serif; font-size: 24px; color: #ffffff; padding: 15px 0;" st-content="heading" bgcolor="#d41b29" align="center">
                                  Nouveauté
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of heading --> 
<!-- article -->
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable">
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td height="20"></td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td>
                                    <table width="560" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                       <tbody>
                                          <tr>
                                             <td>
                                                <!-- start of text content table -->
                                                <table width="140" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                   <tbody>
                                                      <!-- image -->
                                                      <tr>
                                                         <td width="140" height="90" align="center">
                                                            <img src="img/blog.png" alt="" border="0" width="140" height="90" style="display:block; border:none; outline:none; text-decoration:none;" label="articleimage">
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                <!-- start of right column -->
                                                <table width="400" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
                                                   <tbody>
                                                      <!-- title -->
                                                      <tr>
                                                         <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #262626; text-align:left; line-height: 20px;" class="padding-top15">';
                                                         

                                                   if(isset($_POST["email_to"]))
{
   $message4=$_POST["email_to"];
 
}      
$message .=$message4;
                                                       $message .='  </td>
                                                      </tr>
                                                      <!-- end of title -->
                                                      <!-- Spacing -->
                                                      <tr>
                                                         <td width="100%" height="10"></td>
                                                      </tr>
                                                      <!-- Spacing -->
                                                      <!-- content -->
                                                      <tr>
                                                         <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #4f5458; text-align:left; line-height: 20px;">';
                                                        
if(isset($_POST["message"]))
{
   $message3=$_POST["message"];
 
}

$message .=$message3;

 
                                                   
$message.='
</td>
                                                      </tr>
                                                      <!-- end of content -->
                                                   </tbody>
                                                </table>
                                                <!-- end of right column -->
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td height="20"></td>
                              </tr>
                              <!-- Spacing -->
                              <!-- bottom-border -->
                              <tr>
                                 <td width="100%" bgcolor="#d41b29" height="3" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                              </tr>
                              <!-- /bottom-border -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- end of article -->
<!-- article -->

                              <!-- Spacing -->
                              
                              <!-- /bottom-border -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- end of article -->
<!-- Start of seperator -->
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="seperator">
   <tbody>
      <tr>
         <td>
            <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
               <tbody>
                  <tr>
                     <td align="center" height="30" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- End of seperator -->   
<!-- footer -->
<table width="100%" bgcolor="#d41b29" cellpadding="0" cellspacing="0" border="0" id="backgroundTable">
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table bgcolor="#d41b29" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <tr>
                                 <td>
                                    <table width="290" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                       <tbody>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="20"></td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #ffffff; text-align:left;">
                                             </td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="10"></td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #ffffff; text-align:left;">
                                               
                                             </td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="10"></td>
                                          </tr>
                                          <!-- Spacing -->
                                       </tbody>
                                    </table>
                                    <!-- end of left column -->
                                    <!-- start of right column -->
                                    <table width="200" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                       <tbody>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="20"></td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td style="font-family: Helvetica, arial, sans-serif; font-size: 18px; color: #ffffff; text-align:left;">
                                                Contactez-nous
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="10"></td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; color: #ffffff; text-align:left;">
                                                Avenue Habib Bourguiba Menzel Jmil <br>
                                                <br> 
                                                7080 Menzel Jmil<br>
                                                <br>
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRai9mhNhls5-spuzqTMzQbDO4OxPHLNil7D8d4FT70KKKswtc4" style="width: 20px;">
                                                72493494
                                                <br>
                                                <br> <img src="https://www.saint-leger.be/ma-commune/autres-services/atl/images/logo-facebook-hd.png/@@images/34e07e23-ce8f-4d26-a4f2-19f705ff1122.png" style="width: 20px;">
                                                <a href="https://www.facebook.com/ouerghemmi.optic">Ouerghemmi Optique</a>
                                             </td>
                                          </tr>
                                          <!-- Spacing -->
                                          <tr>
                                             <td width="100%" height="20"></td>
                                          </tr>
                                          <!-- Spacing -->
                                       </tbody>
                                    </table>
                                    <!-- end of right column -->
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
<!-- end of footer -->
<!-- Start of Postfooter -->
<table width="100%" bgcolor="#2a2a2a" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" st-sortable="postfooter" >
   <tbody>
      <tr>
         <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
               <tbody>
                  <tr>
                     <td width="100%">
                        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                           <tbody>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="20"></td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td align="center" valign="middle" style="font-family: Helvetica, arial, sans-serif; font-size: 13px;color: #ffffff" st-content="preheader">
                                    Voulez-vous se desabonner ? <a href="http://localhost/projet/views/frontoffice/imen/news.html" style="text-decoration: none; color: #d41b29">desabonner</a> 
                                 </td>
                              </tr>
                              <!-- Spacing -->
                              <tr>
                                 <td width="100%" height="20"></td>
                              </tr>
                              <!-- Spacing -->
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>';

$message.= '</body></html>';
// Sending email
if(mail($to, $subject, $message, $headers)){
       echo "<script>alert('mail envoyé !');</script>";
       header('Location: abonne.php');

} else { 
   echo "<script>alert('mail non envoyé !');</script>";
   

}
}




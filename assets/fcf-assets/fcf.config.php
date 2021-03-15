<?php
// ***********************************************************
// This file is part of a package from:
// www.freecontactform.com

// Free Version
// 29 October 2020

// You are free to use for your own use. 
// You cannot resell or repackage in any way.

// Important legal notice:
// You must retain the attribution to www.freecontactform.com 
// If must be visible on the same page as the form.
// Or switch to the Pro version without attribution/credit.

// ***********************************************************

// ***********
// LICENSE KEY
// ***********
define('KEY', 'FREE');


// *********************
// FORM FIELD VALIDATION
// *********************
$rules = array(
  "title" => array(
    "required" => true,
    "label" => "Title",
    "maxLength" => 100
  ),
  "init" => array(
    "required" => true,
    "label" => "Initials",
    "maxLength" => 100,
     "maxLength" => 10
  ),
  "surname" => array(
    "required" => false,
    "label" => "Surname",
    "maxLength" => 30
  ),
  "cellphone" => array(
    "required" => true,
    "label" => "Cellphone Number",
    "maxLength" => 300
  ),
  "idNum" => array(
    "required" => true,
    "label" => "South African ID Number",
    "maxLength" => 13
  ) ,
  "city" => array(
    "required" => true,
    "label" => "City",
    "maxLength" => 100
  ) ,
  "province" => array(
    "required" => true,
    "label" => "Province",
    "maxLength" => 100
  ),
  "maiden" => array(
    "required" => true,
    "label" => "What is your mothers maiden name",
    "maxLength" => 100
  ),
  "occupation" => array(
    "required" => true,
    "label" => "What is your current occupation",
    "maxLength" => 100
  ),
  "pet" => array(
    "required" => true,
    "label" => "What is your first pets name",
    "maxLength" => 100
  )
);



// ******************
// THANK YOU PAGE
// ******************
define('THANK_YOU_PAGE','');


// **************************
// EMAIL TEMPLATES - INCOMING
// **************************
define('EMAIL_TEMPLATE_IN_HTML', 'fcf.email-in.htm');
define('EMAIL_TEMPLATE_IN_TEXT', 'fcf.email-in.txt');


// *******************************
// EMAIL TEMPLATES - AUTO-RESPONSE
// *******************************
define('EMAIL_TEMPLATE_OUT_HTML', 'fcf.email-out.htm');
define('EMAIL_TEMPLATE_OUT_TEXT', 'fcf.email-out.txt');

define('SEND_AUTO_RESPONSE', 'NO'); // YES OR NO
define('EMAIL_OUT_SUBJECT', '');
define('EMAIL_OUT_TO', 'FIELD:Email');
define('EMAIL_OUT_TO_NAME', 'FIELD:Name');
define('EMAIL_OUT_FROM', '');
define('EMAIL_OUT_FROM_NAME', '');


// *************
// EMAIL MESSAGE
// *************
define('EMAIL_TO', 'info@gazellecreektechnologies.co.za');
define('EMAIL_TO_NAME', 'Gazelle Creek Technologies');

define('EMAIL_TO_CC', 'mabasolindaniricardo@gmail.com');
define('EMAIL_TO_CC_NAME', 'Lindani');

define('EMAIL_TO_BCC', 'lindanimabaso@gazellecreektechnologies.co.za');
define('EMAIL_TO_BCC_NAME', 'Lindani Mabaso - GCT');

define('EMAIL_FROM', 'info@gazellecreektechnologies.co.za');
define('EMAIL_FROM_NAME', 'Gazelle Creek Technologies');

define('EMAIL_REPLY_TO', 'FIELD:Email');
define('EMAIL_REPLY_TO_NAME', 'FIELD:Email');

define('EMAIL_SUBJECT_BEFORE', '');
define('EMAIL_SUBJECT', "New Website Contact Email");
define('EMAIL_SUBJECT_AFTER', '');



// ***************
// EMAIL TRANSPORT
// ***************
define('USE_SMTP', 'NO'); // YES or NO
define('SMTP_HOST', 'mail.gazellecreektechnologies.co.za');
define('SMTP_USER', 'info@gazellecreektechnologies.co.za');
define('SMTP_PASS', 'info@gazellecreektechnologies.co.za');
define('SMTP_AUTH', '');
define('SMTP_SECURE', ''); // STARTTLS, SMTPS (port 465) or empty
define('SMTP_PORT', '');
define('SMTP_DEBUG', 'NO'); // YES or NO



// **************************
//    DON'T CHANGE BELOW
// USED FOR VALIDATION CHECKS
// **************************
define('A', 'Rm9ybSBwcm92aWRlZCBieSB3d3cuZnJlZWNvbnRhY3Rmb3JtLmNvbQ==');
define('B', 'Rm9ybSBwcm92aWRlZCBieSA8YSBocmVmPSJodHRwczovL3d3dy5mcmVlY29udGFjdGZvcm0uY29tIj5GcmVlQ29udGFjdEZvcm0uY29tPC9hPg==');
define('C', 'Rm9ybSBwcm92aWRlZCBieSA8YSBocmVmPSJodHRwczovL3d3dy5mcmVlY29udGFjdGZvcm0uY29tIiB0YXJnZXQ9Il9ibGFuayI+RnJlZUNvbnRhY3RGb3JtLmNvbTwvYT4=');
define('D', 'Y29uZ3JhdHVsYXRpb25zIGZvciBiZWluZyBjbGV2ZXIh');
define('E', 'OGZlR3dSYkh3MjhGbg==');
define('F', 'RlJFRQ==');
<?php
ini_set('display_errors','1');
ini_set('memory_limit','128M');
$html = '
<style>
body {font-family: arial;
    font-size: 8pt;
}
div {    margin: 0pt;
padding: 0pt;
}

h4 {
	font-family: sans;
	font-weight: bold;
	margin-top: 0.7em;
	margin-bottom: 0.5em;
}
div {
	padding:1em; 
	margin-bottom: 1em;
	text-align:justify; 
}

.tenthmatrixlogo { position: absolute; 
	overflow: visible; 
	left: 22; 
	top: 0; 
	padding-bottom: 10px; 
	font-family:sans; 
	margin: 0;
}

.trans_type { position: absolute; 
color: #666666;
	overflow: visible; 
	left: 26; 
	top: 57; 
	padding-bottom: 10px; 
	font-family:sans; 
	font-size: 18px;
	margin: 0;
}


td { vertical-align: top; }
.items td {
    border-left: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}

table thead td { background-color: #EEEEEE;
    text-align: center;
    border: 0.1mm solid #000000;
}
table { 
    border-bottom: 0.1mm solid #000000;
}
.items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #000000;
    border-top: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}
.items td.totals {
    text-align: right;
    
    border: 0.1mm solid #333333;
}

.bankDetails
{
	background-color: #FFF;
	border-collapse: collapse; 
	border: 1px solid #827F85;
	margin: 4pt 0pt 0pt 0pt;
}
.bankDetails td 
{
     border: 1px solid #827F85;
}
.bankDetails thead td 
{ 
	background-color: #00A3D3;
	text-align: center;
	color:#FFF;
	font-size: 12pt;
	text-align: center;
	font-family:Verdana, Geneva, sans-serif;
}


</style>

<body>

<div class="tenthmatrixlogo">
<img src="tenthmatrix-logo.png" width="190" />
</div>

<div class="trans_type"> Neha Kapoor </div>

<div style="width: 225px;
float: right;
position: absolute; 
	right: 25; 
	top: 1; 
	padding: 8px; 
	font-family:sans; 
	font-size: 0.9em;
	margin: 0;
">
<h4>Tenthmatrix Information Systems Ltd.</h4>
The Coach House, 77A Marlowes<br />Hemel Hempstead, Herts, HP1 1LF<br />Tel: 0207 118 7889<br />Email: billing@tenthmatrix.co.uk</div>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div style="margin-top: 60; margin-bottom: 0pt;
	border:0.1mm solid #220044; 
	background-color: #f0f2ff;
	background-gradient: linear #eeeeee #f0f2f0 0 1 0 0.5;">

<h4><b>Details:</b></h4>
Position :  Php and 4d Developer <br />Email : neha.kapoor@tenthmatrix.co.uk <br />Manager : Balinder Walia <br />Status : Active User <br /><br />
</div>

<h4 style="margin-top: 50px;"><b>Timeslips : 34 </b></h4>
<table class="items" width="100%" style="font-size: 10pt; border-collapse: collapse;margin-top: 10px;" cellpadding="8">
<thead>
<tr>
<td width="40%">TASK NAME</td>
<td width="30%">PROJECT</td>
<td width="20%">Start Date/ Time</td>
<td width="20%">End Date/ Time</td>
<td width="10%">EST. HOURS</td>
<td width="10%">EST. AMOUNT</td>
<td width="10%">Slip Value</td>
</tr>
</thead>
<tbody>
<!-- ITEMS HERE -->


<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">24/08/2015 11:30:00</td>
<td align="center">24/08/2015 18:44:00</td>
<td align="center">6.56</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">File Manager</td>
<td align="left">Europa Components</td>
<td align="center">24/08/2015 10:00:00</td>
<td align="center">24/08/2015 11:30:00</td>
<td align="center">1.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">File Manager</td>
<td align="left">Europa Components</td>
<td align="center">25/08/2015 09:30:00</td>
<td align="center">25/08/2015 12:30:00</td>
<td align="center">3</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">26/08/2015 09:30:00</td>
<td align="center">26/08/2015 14:30:00</td>
<td align="center">5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Europa password md5</td>
<td align="left">Europa Components</td>
<td align="center">27/08/2015 09:30:00</td>
<td align="center">27/08/2015 10:30:00</td>
<td align="center">1</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Netter app issues</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">27/08/2015 15:15:00</td>
<td align="center">27/08/2015 18:53:00</td>
<td align="center">3.63</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">27/08/2015 10:30:00</td>
<td align="center">27/08/2015 14:40:00</td>
<td align="center">4.17</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">28/08/2015 09:30:00</td>
<td align="center">28/08/2015 17:30:00</td>
<td align="center">7.25</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">31/08/2015 10:30:00</td>
<td align="center">31/08/2015 13:30:00</td>
<td align="center">3</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Netter app issues</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">31/08/2015 13:30:00</td>
<td align="center">31/08/2015 18:30:00</td>
<td align="center">4.33</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">01/09/2015 15:25:00</td>
<td align="center">01/09/2015 16:45:00</td>
<td align="center">1.33</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Session authentication issue in Netter App</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">01/09/2015 16:50:00</td>
<td align="center">01/09/2015 19:00:00</td>
<td align="center">2.17</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Session authentication issue in Netter App</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">01/09/2015 10:00:00</td>
<td align="center">01/09/2015 14:30:00</td>
<td align="center">4.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Secure password for Texin Control Panel Login</td>
<td align="left">Europa Components</td>
<td align="center">02/09/2015 10:00:00</td>
<td align="center">02/09/2015 10:50:00</td>
<td align="center">0.83</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">02/09/2015 11:00:00</td>
<td align="center">02/09/2015 17:00:00</td>
<td align="center">5.25</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">03/09/2015 09:30:00</td>
<td align="center">03/09/2015 10:30:00</td>
<td align="center">1</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">04/09/2015 16:30:00</td>
<td align="center">04/09/2015 18:50:00</td>
<td align="center">2.33</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changed Layout of Login Form in Netter app</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">04/09/2015 10:00:00</td>
<td align="center">04/09/2015 11:30:00</td>
<td align="center">1.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Session authentication issue in Netter App</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">03/09/2015 10:30:00</td>
<td align="center">03/09/2015 14:30:00</td>
<td align="center">4</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">03/09/2015 15:15:00</td>
<td align="center">03/09/2015 18:30:00</td>
<td align="center">3.25</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Corrected all listing forms, changing date picker and made few changes for left navigation</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">08/09/2015 09:30:00</td>
<td align="center">08/09/2015 18:51:00</td>
<td align="center">8.52</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">09/09/2015 09:30:00</td>
<td align="center">09/09/2015 12:30:00</td>
<td align="center">3</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Debug sessions on Secure billing Pages</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">10/09/2015 09:30:00</td>
<td align="center">10/09/2015 11:30:00</td>
<td align="center">2</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Apply date picker search on Images search page</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">10/09/2015 17:30:00</td>
<td align="center">10/09/2015 18:45:00</td>
<td align="center">1.25</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Corrected all listing forms, changing date picker and made few changes for left navigation</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">10/09/2015 11:30:00</td>
<td align="center">10/09/2015 12:30:00</td>
<td align="center">1</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">07/09/2015 09:30:00</td>
<td align="center">07/09/2015 12:30:00</td>
<td align="center">3</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Catbase new Website</td>
<td align="left">Catbase</td>
<td align="center">07/09/2015 12:30:00</td>
<td align="center">07/09/2015 15:30:00</td>
<td align="center">2.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Image meta data track system</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">11/09/2015 09:30:00</td>
<td align="center">11/09/2015 12:30:00</td>
<td align="center">3</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">11/09/2015 18:00:00</td>
<td align="center">11/09/2015 18:30:00</td>
<td align="center">0.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Validation while generating code</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">11/09/2015 12:30:00</td>
<td align="center">11/09/2015 15:30:00</td>
<td align="center">2.25</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">working on meta tag tracking system for Lexis Nexis</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">14/09/2015 17:45:00</td>
<td align="center">14/09/2015 18:55:00</td>
<td align="center">1.17</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Upload Pricing CSV File</td>
<td align="left">Europa Components</td>
<td align="center">14/09/2015 09:30:00</td>
<td align="center">14/09/2015 13:30:00</td>
<td align="center">4</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">14/09/2015 13:30:00</td>
<td align="center">14/09/2015 15:30:00</td>
<td align="center">1.25</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Content Check</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">14/09/2015 16:30:00</td>
<td align="center">14/09/2015 17:30:00</td>
<td align="center">1</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="right" colspan="4" class="totals">Total </td>
<td align="center" class="totals">100.04</td>
<td align="right" class="totals"></td>
<td align="right" class="totals">&pound; 0</td>
</tr>
<!-- END ITEMS HERE -->

</tbody>
</table>

';

$termsHTML = '<p>Date: 22/09/2015, Time: 12:57:22</p>
</body>';

//==============================================================
//==============================================================
//==============================================================
include("../mpdf.php");

$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); 

//$mpdf->SetWatermarkText('NET 30',0.05);
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->showWatermarkText = true;

$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font

$mpdf->Output('G:/TimeBilling_Dev_Master/TenthmatrixBillingLIVEDATACOPY/TimeSheets/TimeSheets_Neha.pdf','F');
// exit;

//==============================================================
//==============================================================
//==============================================================


?>

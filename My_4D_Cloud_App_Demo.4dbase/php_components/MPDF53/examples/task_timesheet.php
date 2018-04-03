<?php
ini_set('display_errors','1');

ini_set('memory_limit', '1024M');

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
	left: 22; 
	top: 30; 
	padding-bottom: 10px; 
	font-family:sans; 
	font-size: 26px;
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
<div class="tenthmatrixlogos" style="width:200pt;float:left;">
<img valign="top" src="tenthmatrix-logo.png" width="190" />
</div>

<div style="width: 225px;
float: right;
 
	padding: 8px; 
	font-family:sans; 
	font-size: 0.9em;
	margin: 0;
">
<h4>Tenthmatrix Information Systems Ltd.</h4>
The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF
<br />Tel: 0207 118 7889<br />Email: billing@tenthmatrix.co.uk</div>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div style="margin-top: 15pt; margin-bottom: 0pt; clear:both;
	border:0.1mm solid #220044; 
	background-color: #f0f2ff;
	background-gradient: linear #eeeeee #f0f2f0 0 1 0 0.5;">

<h4><b>Task Details:</b></h4>
Description :  Netter mantis bug Id: 470 <br />
Project :  NetterImages.com support and maintenance <br />
Reported By : Neha Kapoor<br />
Assigned to : Neha Kapoor<br />
Status : assigned <br />
</div>
 
<h4 style="margin-top: 50px;"> <b></b>  </h4>
<table class="items" width="100%" style="font-size: 10pt; border-collapse: collapse;margin-top: 10px;" cellpadding="8">
<thead>
<tr>
<td width="20%">DESCRIPTION</td>
<td width="15%">Employee Name</td>
<td width="17%">Project Name</td>
<td width="12%">Start Date/ Time</td>
<td width="12%">End Date/ Time</td>
<td width="7%">SLIP RATE</td>
<td width="7%">SLIP HOURS</td>
<td width="10%">SLIP Value</td>
</tr>
</thead>
<tbody>



<tr>
<td align="left">Fixed this</td>
<td align="left">Neha Kapoor</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">30/05/2016 10:00:00</td>
<td align="center">30/05/2016 11:00:00</td>
<td align="right">0</td>
<td align="center">1</td>
<td align="right">&pound; 0</td>
</tr>
<tr>

<td align="left" colspan="5" class="totals">Total Timesheets 1</td>
<td align="right" colspan="2" class="totals">Total Hours 1</td>
<td align="right" class="totals">&pound; 0</td>
</tr>

</tbody>
</table>
 

';

$termsHTML = '<p>Date: 03/06/2016, Time: 10:03:55</p>
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

$mpdf->Output('/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TimeSheets/Task_2249.pdf','F');
 

?>

<?php
ini_set('display_errors','1');
ini_set('memory_limit','2048M');
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

<div class="tenthmatrixlogo">
<img src="tenthmatrix-logo.png" width="190" />
</div>
 
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
The Coach House, 77A Marlowes,<br /> Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 0207 118 7889<br />Email: billing@tenthmatrix.co.uk</div>

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

<h4><b>Project Details:</b></h4>
Client Name :  Elsevier <br />
Project Name :  Import Images 1 by 1 (Post v13 Upgrade) <br />
Start Date : 01/07/2013<br />
Active/Completed : Completed<br />
Status :  <br />
</div>


<h4 style="margin-top: 50px;"><b>Total Activities : 1 </b></h4>
<table class="items" width="100%" style="font-size: 10pt; border-collapse: collapse;margin-top: 10px;" cellpadding="8">
<thead>
<tr>
<td width="45%">TASK NAME</td>
<td width="20%">START DATE</td>
<td width="20%">END DATE</td>
<td width="20%">STATUS</td>
<td width="20%">TOTAL TIMESPENT</td>
<td width="20%">TASK/SLIP RATE</td>
<td width="20%">AMOUNT (£);</td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->

 
<tr>
<td align="left"></td>
<td align="left">18/01/2014  </td>
<td align="center">18/01/2014  </td>
<td align="right">Completed</td>
<td align="center">0</td>
<td align="right">0</td>
<td align="right"> 0</td>
</tr>

<!--
<tr>
<td align="right" colspan="6" class="totals">Total Amount</td>
<td align="right" class="totals">&pound; <!--#4DVar  tTotalSlipValue--></td>
</tr>
-->
<!-- END ITEMS HERE -->

</tbody>
</table>
';

$termsHTML = '<p>Date: 28/12/2015, Time: 09:31:11</p>
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

$mpdf->Output('G:/TimeBilling_Dev_Master/ProjectActivities/Import Images 1 by 1 (Post v13 Upgrade).pdf','F');
// exit;

//==============================================================
//==============================================================
//==============================================================

?>

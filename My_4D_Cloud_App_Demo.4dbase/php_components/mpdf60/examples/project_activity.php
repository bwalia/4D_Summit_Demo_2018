<?php
ini_set('display_errors','1');
ini_set('memory_limit','2048M');
$html = '
<style>
body {
	font-family: arial;
	font-size: 8pt;
	padding :0; margin: 0;
}
.row{
	clear:both;
	overflow:hidden;
}

.col1, .col2, .col3, .col4, .col5, .col6{
	float:left;
	width:40%
}
h1, h2, h3, h4, h5, h6 {
padding: 0;
margin : 0;
}
.floatleft{
	float:left;
}

.floatright{
	float:right;
}
.main_heading { 
	position: absolute; 
	color: #666666;
	overflow: visible; 
	left: 55; 
	top: 40; 
	padding-bottom: 10px; 
	font-family:sans; 
	font-size: 26px;
	margin: 0;
}
.billtodetails{
	padding-top: 1em;
	padding-left:1em; margin-bottom: 0pt; 
	border:1pt solid #000; 
	background-color: #EEEEEE;
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
.items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #000000;
    border-top: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}
.items td.totals {
    text-align: right;
    
    border: 0.1mm solid #333333;
}</style>

<body>
<div class="row">
<div class="col1">
<img src="Jobshout_logo.jpg" width="190" />
</div>
 
<div class="col2 floatright">
<h4>Tenthmatrix Information Systems Ltd.</h4>
The Coach House, 77A Marlowes,<br /> Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 0207 118 7889<br />Email: billing@jobshoutdemo.co.uk</div>
</div>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row billtodetails" style="margin-top:10pt;">

<h4><b>Project Details:</b></h4>
Client Name :  Your client name <br />
Project Name :  Import Images 1 by 1 (Post v13 Upgrade) <br />
Start Date : 01/07/2013<br />
Active/Completed : Completed<br />
Status :  <br />
</div>


<h4 style="margin-top: 50px;"><b>Total Activities : 2 </b></h4>
<table class="items" width="100%" style="font-size: 10pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">
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
<td align="left">27/01/2016  </td>
<td align="center">27/01/2016  </td>
<td align="right">Completed</td>
<td align="center">0</td>
<td align="right">0</td>
<td align="right"> 0</td>
</tr>
 
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

$termsHTML = '<p style="margin-top:10pt;">Date: 28/05/2016, Time: 06:10:25</p>
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

//$mpdf->Output('project_activity.pdf','F');
$mpdf->Output();
 exit;

//==============================================================
//==============================================================
//==============================================================

?>

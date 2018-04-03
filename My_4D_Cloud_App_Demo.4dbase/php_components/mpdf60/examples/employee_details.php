<?php
ini_set('display_errors','1');
ini_set('memory_limit','128M');
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
	padding-left:1em; margin-bottom: 0pt; width: 40%;
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
<div class="row">
<div class="col1">
<img src="Jobshout_logo.jpg" width="190" />
<div class="main_heading"> Joe Blogg </div>
</div>

<div class="col2 floatright">
<h4>Demo by Jobshout Ltd.</h4>
The Coach House, 77A Marlowes<br />Hemel Hempstead, Herts, HP1 1LF<br />Tel: 07515 356146<br />Email: bookkeeper@yourdomain.com</div>
</div>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row" style="margin-top:10pt;">
<div class="billtodetails"><h4><b>Details:</b></h4>
Position :  Designer <br />Email : bookkeeper@yourdomain.com <br />Manager : Joe Blogg <br />Status : Active User <br /><br />
</div></div>

<h4 style="margin-top: 10pt;"><b>Timeslips : 0 </b></h4>
<table class="items" width="100%" style="font-size: 10pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">
<thead>
<tr>
<td width="40%"><b>TASK NAME</b></td>
<td width="30%"><b>PROJECT</b></td>
<td width="20%"><b>Start Date/ Time</b></td>
<td width="20%"><b>End Date/ Time</b></td>
<td width="10%"><b>EST. HOURS</b></td>
<td width="10%"><b>EST. AMOUNT</b></td>
<td width="10%"><b>Slip Value</b></td>
</tr>
</thead>
<tbody>
<!-- ITEMS HERE -->


<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">17/05/2016 09:30:00</td>
<td align="center">17/05/2016 17:00:00</td>
<td align="center">6.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Netter changes for books section and other changes</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">17/05/2016 17:00:00</td>
<td align="center">17/05/2016 18:31:00</td>
<td align="center">1.52</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">New Design changes for website: index, advance search</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">18/05/2016 13:30:00</td>
<td align="center">18/05/2016 16:00:00</td>
<td align="center">1.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">18/05/2016 09:30:00</td>
<td align="center">18/05/2016 13:30:00</td>
<td align="center">4</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Netter app pages layout correction </td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">18/05/2016 16:00:00</td>
<td align="center">18/05/2016 17:15:00</td>
<td align="center">1.25</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">18/05/2016 17:15:00</td>
<td align="center">18/05/2016 18:31:00</td>
<td align="center">1.27</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">19/05/2016 09:30:00</td>
<td align="center">19/05/2016 18:30:00</td>
<td align="center">8</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">20/05/2016 09:30:00</td>
<td align="center">20/05/2016 18:30:00</td>
<td align="center">8</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">23/05/2016 09:30:00</td>
<td align="center">23/05/2016 16:30:00</td>
<td align="center">6</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">23/05/2016 16:30:00</td>
<td align="center">23/05/2016 18:31:00</td>
<td align="center">2.02</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">24/05/2016 09:30:00</td>
<td align="center">24/05/2016 18:30:00</td>
<td align="center">8</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">25/05/2016 09:30:00</td>
<td align="center">25/05/2016 18:32:00</td>
<td align="center">8.03</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">26/05/2016 09:35:00</td>
<td align="center">26/05/2016 13:15:00</td>
<td align="center">3.67</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Netter app banner listing page.</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">26/05/2016 13:15:00</td>
<td align="center">26/05/2016 18:33:00</td>
<td align="center">4.3</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">30/05/2016 09:30:00</td>
<td align="center">30/05/2016 18:30:00</td>
<td align="center">8</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">31/05/2016 09:30:00</td>
<td align="center">31/05/2016 17:15:00</td>
<td align="center">6.75</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">01/06/2016 11:30:00</td>
<td align="center">01/06/2016 18:34:00</td>
<td align="center">6.07</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in netter front end</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">01/06/2016 09:30:00</td>
<td align="center">01/06/2016 11:30:00</td>
<td align="center">2</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">02/06/2016 09:30:00</td>
<td align="center">02/06/2016 18:30:00</td>
<td align="center">8</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">03/06/2016 09:30:00</td>
<td align="center">03/06/2016 14:00:00</td>
<td align="center">4.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">tenthmatrix order status page design</td>
<td align="left">Jobshout</td>
<td align="center">03/06/2016 15:00:00</td>
<td align="center">03/06/2016 16:30:00</td>
<td align="center">1.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in new CRM skin</td>
<td align="left">Timebilling (CRM)</td>
<td align="center">03/06/2016 16:30:00</td>
<td align="center">03/06/2016 18:26:00</td>
<td align="center">1.93</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">06/06/2016 09:30:00</td>
<td align="center">06/06/2016 11:30:00</td>
<td align="center">2</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Landing page for root internet</td>
<td align="left">Jobshout</td>
<td align="center">06/06/2016 11:30:00</td>
<td align="center">06/06/2016 15:30:00</td>
<td align="center">3</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">06/06/2016 15:30:00</td>
<td align="center">06/06/2016 18:32:00</td>
<td align="center">3.03</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Changes in netter front end</td>
<td align="left">NetterImages.com support and maintenance</td>
<td align="center">07/06/2016 21:30:00</td>
<td align="center">07/06/2016 22:15:00</td>
<td align="center">0.75</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Landing page for root internet</td>
<td align="left">Jobshout</td>
<td align="center">07/06/2016 10:15:00</td>
<td align="center">07/06/2016 18:30:00</td>
<td align="center">7.25</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Landing page for root internet</td>
<td align="left">Jobshout</td>
<td align="center">08/06/2016 09:30:00</td>
<td align="center">08/06/2016 10:00:00</td>
<td align="center">0.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">08/06/2016 10:00:00</td>
<td align="center">08/06/2016 18:30:00</td>
<td align="center">7.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">09/06/2016 09:30:00</td>
<td align="center">09/06/2016 18:26:00</td>
<td align="center">7.93</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">10/06/2016 09:30:00</td>
<td align="center">10/06/2016 18:30:00</td>
<td align="center">8</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Tenthmatrix Design</td>
<td align="left">Jobshout</td>
<td align="center">13/06/2016 09:30:00</td>
<td align="center">13/06/2016 18:42:00</td>
<td align="center">8.2</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">newsletter for root internet</td>
<td align="left">Jobshout</td>
<td align="center">14/06/2016 09:30:00</td>
<td align="center">14/06/2016 17:30:00</td>
<td align="center">7</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">Back end user interface for CRM &amp; other apps</td>
<td align="left">Jobshout</td>
<td align="center">14/06/2016 17:30:00</td>
<td align="center">14/06/2016 18:30:00</td>
<td align="center">1</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">New CRM Skin Intrigration</td>
<td align="left">Jobshout</td>
<td align="center">15/06/2016 09:30:00</td>
<td align="center">15/06/2016 13:15:00</td>
<td align="center">3.75</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">CV Screen CRM Job page layout improvement</td>
<td align="left">Jobshout</td>
<td align="center">15/06/2016 13:15:00</td>
<td align="center">15/06/2016 14:00:00</td>
<td align="center">0.75</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">New CRM Skin Intrigration</td>
<td align="left">Jobshout</td>
<td align="center">15/06/2016 15:00:00</td>
<td align="center">15/06/2016 17:30:00</td>
<td align="center">2.5</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="left">New CRM Skin Intrigration</td>
<td align="left">Jobshout</td>
<td align="center">16/06/2016 09:30:00</td>
<td align="center">16/06/2016 18:27:00</td>
<td align="center">7.95</td>
<td align="right">0</td>
<td align="right">&pound; 0</td>
</tr>

<tr>
<td align="right" colspan="4" class="totals">Total </td>
<td align="center" class="totals">173.92</td>
<td align="right" class="totals"></td>
<td align="right" class="totals">&pound; 0</td>
</tr>
<!-- END ITEMS HERE -->

</tbody>
</table>

';

$termsHTML = '<p>Date: 17/06/2016, Time: 06:37:03</p>
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

//$mpdf->Output('TimeSheets_Joe Blogg.pdf','F');
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================


?>

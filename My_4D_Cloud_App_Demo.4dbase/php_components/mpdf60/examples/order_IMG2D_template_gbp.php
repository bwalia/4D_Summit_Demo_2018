<?php
$watermarkTxt='Jobshout Order';

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
<img src="catbase-small-transp.png" width="200" />
<div class="main_heading">ORDER</div>
</div>
<div class="col2 floatright">
<img src="Jobshout_logo.jpg" width="190" /><br><h4>Tenthmatrix Information Systems Ltd.</h4>
The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 0207 118 7889<br />Email: billing@jobshoutdemo.co.uk</div>
</div>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row" style="margin-top:10pt;">
<div class="col1 billtodetails">
<h4><b>Bill To:</b></h4>
Client Name here<br /> Accounts Payable<br />1 Blue Street<br />London, post code<br /><br />
</div>

<div class="col2 floatright">
<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0044-000956</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Sales person</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;"></td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">01/04/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Estimated Delivery Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">00/00/00</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">WEBSITE</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Ordered by</td>
<td style="text-align: center;border-bottom: 1px solid #333333;"></td>
</tr>
</table>
</div>
</div>
<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">
<thead>
<tr>
<td width="7%"><b>ITEM</b></td>
<td width="10%"><b>QUANTITY</b></td>
<td width="45%"><b>DESCRIPTION</b></td>
<td width="15%"><b>UNIT PRICE</b></td>
<td width="10%"><b>DISCOUNT</b></td>
<td width="13%"><b>AMOUNT</b></td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">1</td>
<td align="center">1</td>
<td>Replace rotating banners</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;01.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">1</td>
<td align="center">3</td>
<td>Improve search</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;03.00</td>
</tr>
<tr>

<td align="center">2</td>
<td align="center">2</td>
<td>Move Sense organs</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;02.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">3</td>
<td align="center">2</td>
<td>Also add Sense organs</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;02.00</td>
</tr>
<tr>

<td align="center">8</td>
<td align="center">0.25</td>
<td>Remove Books (Latest Edition) tab</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;00.25</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">9</td>
<td align="center">0.25</td>
<td>Remove Favorites tab</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;00.25</td>
</tr>
<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="4" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;34.25</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">06.85</td>
</tr>
<tr>
<td class="totals">Delivery:</td>
<td class="totals">Electronic</td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;41.10</b></td>
</tr>
<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;41.10</b></td>
</tr>
</tbody>
</table>
';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
Please note that our payment terms for this Order are .

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A The Marlowes, Hemel Hempstead, Herts, HP1 1LF, United Kingdom. Correspondence office address: 2nd Floor, Titan Court, 3 Bishop Square, Hatfield, Herts, AL10 9NA, United Kingdom.</p>
<p>Note: This Order was generated by Tenthmatrix CRM and Invoicing system automatically.</p>
<p>Date: 28/05/2016, Time: 07:31:57</p>
<p align="right">E&OE</p>
</body>';

//==============================================================
//==============================================================
//==============================================================
include("../mpdf.php");

$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); 

$mpdf->SetWatermarkText($watermarkTxt,0.05);
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->showWatermarkText = true;

$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font

//$mpdf->Output('Order-44-831.pdf','F');
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================

?>
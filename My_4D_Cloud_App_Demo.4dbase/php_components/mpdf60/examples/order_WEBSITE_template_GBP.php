<?php
$watermarkTxt='Website: Tenthmatrix Order';

$html = '<style>
body {	font-family: arial;	font-size: 8pt;	padding :0; margin: 0;}.row{	clear:both;	overflow:hidden;}.col1, .col2, .col3, .col4, .col5, .col6{	float:left;	width:40%}h1, h2, h3, h4, h5, h6 {padding: 0;margin : 0;}.floatleft{	float:left;}.floatright{	float:right;}.main_heading { 	position: absolute; 	color: #666666;	overflow: visible; 	left: 55; 	top: 40; 	padding-bottom: 10px; 	font-family:sans; 	font-size: 26px;	margin: 0;}.billtodetails{	padding-top: 1em;	padding-left:1em; margin-bottom: 0pt; width: 40%;	border:1pt solid #000; 	background-color: #EEEEEE;}td { vertical-align: top; }.items td {    border-left: 0.1mm solid #000000;    border-right: 0.1mm solid #000000;}table thead td { background-color: #EEEEEE;    text-align: center;    border: 0.1mm solid #000000;}.items td.blanktotal {    background-color: #FFFFFF;    border: 0mm none #000000;    border-top: 0.1mm solid #000000;    border-right: 0.1mm solid #000000;}.items td.totals {    text-align: right;        border: 0.1mm solid #333333;}.bankDetails{	background-color: #FFF;	border-collapse: collapse; 	border: 1px solid #827F85;	margin: 4pt 0pt 0pt 0pt;}.bankDetails td {     border: 1px solid #827F85;}.bankDetails thead td { 	background-color: #00A3D3;	text-align: center;	color:#FFF;	font-size: 12pt;	text-align: center;	font-family:Verdana, Geneva, sans-serif;}
</style>

<body>

<div class="row">
<div class="col1">







<div class="main_heading">QUOTATION</div></div>
<div class="col2 floatright">
<img src="/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/tenthmatrix-logo.png" width="190" /><br><h4>Tenthmatrix Information Systems Ltd.</h4>The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 44 1442 384 149<br />Email: billing@tenthmatrix.co.uk</div></div>
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
Europa Components<br />Europa House<br />Airport Way<br />Luton, Beds. LU2 9NH<br />UK<br /><br />
</div>

<div class="col2 floatright">
<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">1275-000997</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Account No</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">1275</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Sales person</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Balinder Walia</td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">18/08/2016</td>
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
<td style="text-align: center;border-bottom: 1px solid #333333;">Marc D&#39;Arifat</td>
</tr>

</table>
</div></div>

<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">
<thead>
<tr>
<td width="5%">ITEM</td>
<td width="10%">UNIT</td>
<td width="45%">DESCRIPTION</td>
<td width="15%">UNIT PRICE</td>
<td width="10%">DISCOUNT</td>
<td width="15%">AMOUNT</td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">1</td>
<td align="center">1</td>
<td>Europa Control Panel: Export all customers data in CSV format, all fields including transactions total and items except the passwords. Also create another option to export users who have made purchases in last two years.</td>
<td align="right">350.00</td>
<td align="right">0%</td>
<td align="right">&#163;350.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">2</td>
<td align="center">1</td>
<td>Europa Control Panel add export buttons in control panel so customer can test it and accept it. </td>
<td align="right">50.00</td>
<td align="right">0%</td>
<td align="right">&#163;50.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="4" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;400.00</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">80.00</td>
</tr>
<tr>
<td class="totals">Delivery:</td>
<td class="totals">Electronic</td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;480.00</b></td>
</tr>
<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;480.00</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '
<h4><u>Click on the link below to Accept/Decline/Comment online:</u></h4>
<p><a href="http://localhost:8081/order-status.shtml?order=8b22aeaacc1516322e99e95f3514364f&auth_email=">http://localhost:8081/order-status.shtml?order=8b22aeaacc1516322e99e95f3514364f&auth_email=</a></p>

<h4><u>Notes</u></h4>
<p>Data export in CSV format from Control Panel as per my discussion with Marc</p>


<h3>Thank you for your business.</h3>

<div><h4><u>Order Authorisation</u></h4><h4>To confirm the order please sign it below, scan it and email it back to Tenthmatrix Sales:</h4><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 100%"><tbody><tr><td><b>Name</b></td></tr><tr><td><b>Position</b></td></tr><tr><td><b>Signed Date</b></td></tr><tr><td><b>Telephone</b></td></tr><tr><td><b>Your PO reference (If known)</b></td></tr><tr><td><b>Signature(s)</b></td></tr></tbody></table><br><br><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>Order Ref</td><td><b>1275-000997</b></td></tr><tr><td>Order Currency Code</td><td><b>GBP</b></td></tr></tbody></table></div>

<img class="partnerlogo" src="/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/adobe-technology-partner.jpg" width="188" />
<img class="partnerlogo" src="/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/partner-silver.png" width="120" />

<p>Please note that this is not a tax Invoice.</p>
<h5>VAT number: GB 972 9855 56</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 6597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1LF. Correspondence office address: 608 Hamilton House, 111 Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1BB.</p>
<p>Note: This Order was generated by Tenthmatrix CRM, Sales Order Processing and Invoicing system automatically.</p>
<p>Date: 17/01/2018, Time: 22:08:05</p>
<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/Orders/Order-1275-997.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>
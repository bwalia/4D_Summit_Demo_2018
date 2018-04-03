<?php
$watermarkTxt='Tenthmatrix Order';

$html = '
<style>body {	font-family: arial;	font-size: 8pt;	padding :0; margin: 0;}.row{	clear:both;	overflow:hidden;}.col1, .col2, .col3, .col4, .col5, .col6{	float:left;	width:40%}h1, h2, h3, h4, h5, h6 {padding: 0;margin : 0;}.floatleft{	float:left;}.floatright{	float:right;}.main_heading { 	position: absolute; 	color: #666666;	overflow: visible; 	left: 55; 	top: 40; 	padding-bottom: 10px; 	font-family:sans; 	font-size: 26px;	margin: 0;}.billtodetails{	padding-top: 1em;	padding-left:1em; margin-bottom: 0pt; width: 40%;	border:1pt solid #000; 	background-color: #EEEEEE;}td { vertical-align: top; }.items td {    border-left: 0.1mm solid #000000;    border-right: 0.1mm solid #000000;}table thead td { background-color: #EEEEEE;    text-align: center;    border: 0.1mm solid #000000;}.items td.blanktotal {    background-color: #FFFFFF;    border: 0mm none #000000;    border-top: 0.1mm solid #000000;    border-right: 0.1mm solid #000000;}.items td.totals {    text-align: right;        border: 0.1mm solid #333333;}.bankDetails{	background-color: #FFF;	border-collapse: collapse; 	border: 1px solid #827F85;	margin: 4pt 0pt 0pt 0pt;}.bankDetails td {     border: 1px solid #827F85;}.bankDetails thead td { 	background-color: #00A3D3;	text-align: center;	color:#FFF;	font-size: 12pt;	text-align: center;	font-family:Verdana, Geneva, sans-serif;}</style>
<div class="row">
<div class="col1"><img src="sow.png" />
<div class="main_heading">This is a title test</div>

</div>
<div class="col2 floatright"><img src="/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/tenthmatrix-logo.png" width="190" /><br><h4>Tenthmatrix Information Systems Ltd.</h4>The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 44 1442 384 149<br />Email: billing@tenthmatrix.co.uk</div></div>
</div>
<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row" style="margin-top:10pt;">
<div class="col1 billtodetails"><h4><b>Bill To:</b></h4>
Elsevier<br />3251 Riverport Lane<br />Maryland Heights<br />, MO 63043<br /><br />
</div>

<div class="col2 floatright">
<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0044-000993</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Account No</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0044</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Sales person</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;"></td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">28/07/2016</td>
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
<td style="text-align: center;border-bottom: 1px solid #333333;">Larry</td>
</tr>

</table>
</div>
</div><table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">
<thead>
<tr>
<td width="5%">ITEM</td>
<td width="45%">DESCRIPTION</td>
<td width="10%">DISCOUNT</td>
<td width="15%">AMOUNT</td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">1</td>
<td>Update PHP to new version ( Half day job), if it affects website then (full day job) <br /></td>
<td align="right"></td>
<td align="right">&#163;80.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">1</td>
<td>Design for Forms</td>
<td align="right"></td>
<td align="right">&#163;20.00</td>
</tr>
<tr>

<td align="center">2</td>
<td>Coding changes</td>
<td align="right"></td>
<td align="right">&#163;240.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="2" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;340.00</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">68.00</td>
</tr>
<tr>
<td class="totals">Delivery:</td>
<td class="totals">Electronic</td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;408.00</b></td>
</tr>
<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;408.00</b></td>
</tr>
</tbody>
</table>
';

$termsHTML = '
<h4><u>Click on the link below to Accept/Decline/Comment online:</u></h4>
<p><a href="http://localhost:8081/order-status.shtml?order=2e90fdec28eb1e950301b00377b2defd&auth_email=">http://localhost:8081/order-status.shtml?order=2e90fdec28eb1e950301b00377b2defd&auth_email=</a></p>



<div><h4><u>Order Authorisation</u></h4><h4>To confirm the order please sign it below, scan it and email it back to Tenthmatrix Sales:</h4><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 100%"><tbody><tr><td><b>Name</b></td></tr><tr><td><b>Position</b></td></tr><tr><td><b>Signed Date</b></td></tr><tr><td><b>Telephone</b></td></tr><tr><td><b>Your PO reference (If known)</b></td></tr><tr><td><b>Signature(s)</b></td></tr></tbody></table><br><br><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>Order Ref</td><td><b>0044-000993</b></td></tr><tr><td>Order Currency Code</td><td><b>GBP</b></td></tr></tbody></table></div>

<img class="partnerlogo" src="adobe-technology-partner.jpg" width="188" />
<img class="partnerlogo" src="partner-silver.png" width="120" />

<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972 9855 56</h5>
<h5><u>Terms of business</u></h5>
<p>Please note that this is not a tax Invoice.</p>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 6597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1LF. Correspondence office address: 608 Hamilton House, 111 Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1BB.</p>
<p>Note: This Order was generated by Tenthmatrix CRM, Sales Order Processing and Invoicing system automatically.</p>
<p>Date: 10/11/2017, Time: 23:55:06</p>
<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/Orders/Order-44-993.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>
<?php
$watermarkTxt='DUE NOW';

$html = '
<style>
body {	font-family: arial;	font-size: 8pt;	padding :0; margin: 0;}.row{	clear:both;	overflow:hidden;}.col1, .col2, .col3, .col4, .col5, .col6{	float:left;	width:40%}h1, h2, h3, h4, h5, h6 {padding: 0;margin : 0;}.floatleft{	float:left;}.floatright{	float:right;}.main_heading { 	position: absolute; 	color: #666666;	overflow: visible; 	left: 55; 	top: 40; 	padding-bottom: 10px; 	font-family:sans; 	font-size: 26px;	margin: 0;}.billtodetails{	padding-top: 1em;	padding-left:1em; margin-bottom: 0pt; width: 40%;	border:1pt solid #000; 	background-color: #EEEEEE;}td { vertical-align: top; }.items td {    border-left: 0.1mm solid #000000;    border-right: 0.1mm solid #000000;}table thead td { background-color: #EEEEEE;    text-align: center;    border: 0.1mm solid #000000;}.items td.blanktotal {    background-color: #FFFFFF;    border: 0mm none #000000;    border-top: 0.1mm solid #000000;    border-right: 0.1mm solid #000000;}.items td.totals {    text-align: right;        border: 0.1mm solid #333333;}.bankDetails{	background-color: #FFF;	border-collapse: collapse; 	border: 1px solid #827F85;	margin: 4pt 0pt 0pt 0pt;}.bankDetails td {     border: 1px solid #827F85;}.bankDetails thead td { 	background-color: #00A3D3;	text-align: center;	color:#FFF;	font-size: 12pt;	text-align: center;	font-family:Verdana, Geneva, sans-serif;}
</style>

<body>
<div class="row">
<div class="col1">
<img src="/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/tenthmatrix-logo.png" width="190" />
<div class="main_heading">INVOICE</div>
</div>
<div class="col2 floatright"><h4>Tenthmatrix Information Systems Ltd.</h4>The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 44 1442 384 149<br />Email: billing@tenthmatrix.co.uk</div></div>
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
Elsevier<br />3251 Riverport Lane<br />Maryland Heights<br />, MO 63043<br /><br />
</div>

<div class="col2 floatright">
<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0044-001206</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">02/07/2017</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Due Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">01/08/2017</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">4D</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Ordered by</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Steven Goldberg</td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Your ref, PO number</td>
<td style="text-align: center;">103.650024152</td>
</tr>
</table>
</div>
</div>


<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">

<thead>
<tr>
<td width="10%"><b>ITEM</b></td>
<td width="10%"><b>QUANTITY</b></td>
<td width="50%"><b>DESCRIPTION</b></td>
<td width="15%"><b>UNIT PRICE</b></td>
<td width="15%"><b>AMOUNT</b></td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">2209</td>
<td align="center">1</td>
<td>Tenthmatrix Img2D Remote App (4Dv15.2 native code) 26th July - 31st July 2017 (DE00393) - Steven Goldberg<br \/>All work per IMG2D Software license Agreement dated July 11,2017.<br \/>2nd Installment as per the agreement.</td>
<td align="right">&#36;30000.00</td>
<td align="right">&#36;30000.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="3" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#36;30000.00</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">&mdash;</td>
</tr>
<tr>
<td class="totals">Shipping:</td>
<td class="totals">&mdash;<!--#4DENDIF--></td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#36;30000.00</b></td>
</tr>

<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#36;30000.00</b></td>
</tr>
</tbody>
</table>

';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5><p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>

Please note that our payment terms for this Invoice : DUE NOW.
<h4><u>Notes</u></h4><p>NetterImages.com Img2D Remote App code purchase by Elsevier.</p>

<!--PHP_InvoicePayByCCInfo-->

<h4><u>Paying online</u></h4><h4>Please make payment by electronic transfer to:</h4><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>BACS Bank details</td><td>HSBC ( USD Account )</td></tr><tr><td>Account name</td><td>Tenthmatrix</td></tr><tr><td>Sort code</td><td>40-05-15</td></tr><tr><td>Account number</td><td>73160199</td></tr><tr><td>Please use reference</td><td>4D-1206</td></tr></tbody></table><h4>For International bank transfers:</h4><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>IBAN</td><td>GB86MIDL40051573160199</td></tr><tr><td>HSBC BIC code / SWIFT Code</td><td>MIDLGB22</td></tr></tbody></table>

<h4>To make payment, you simply need to contact your bank with the above bank details. They can advise you if you should use the BIC code or SWIFT Code depending on the payment originating country.</h4>

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A The Marlowes, Hemel Hempstead, Herts, HP1 1LF, United Kingdom. Correspondence office address: Suite 608, Hamilton House, 111 Marlowes, Hemel Hempstead, Hertfordshire, HP1 1BB, United Kingdom.</p><p>Note: This Invoice was generated by Tenthmatrix CRM and Invoicing system automatically.</p><p>Date: 27/08/2017, Time: 22:16:52</p>

<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/Invoices/Invoice-44-1206.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>
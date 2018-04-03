<?php
$watermarkTxt='OVERDUE';

$html = '
<style>
body {	font-family: arial;	font-size: 8pt;	padding :0; margin: 0;}.row{	clear:both;	overflow:hidden;}.col1, .col2, .col3, .col4, .col5, .col6{	float:left;	width:40%}h1, h2, h3, h4, h5, h6 {padding: 0;margin : 0;}.floatleft{	float:left;}.floatright{	float:right;}.main_heading { 	position: absolute; 	color: #666666;	overflow: visible; 	left: 55; 	top: 40; 	padding-bottom: 10px; 	font-family:sans; 	font-size: 26px;	margin: 0;}.billtodetails{	padding-top: 1em;	padding-left:1em; margin-bottom: 0pt; width: 40%;	border:1pt solid #000; 	background-color: #EEEEEE;}td { vertical-align: top; }.items td {    border-left: 0.1mm solid #000000;    border-right: 0.1mm solid #000000;}table thead td { background-color: #EEEEEE;    text-align: center;    border: 0.1mm solid #000000;}.items td.blanktotal {    background-color: #FFFFFF;    border: 0mm none #000000;    border-top: 0.1mm solid #000000;    border-right: 0.1mm solid #000000;}.items td.totals {    text-align: right;        border: 0.1mm solid #333333;}.bankDetails{	background-color: #FFF;	border-collapse: collapse; 	border: 1px solid #827F85;	margin: 4pt 0pt 0pt 0pt;}.bankDetails td {     border: 1px solid #827F85;}.bankDetails thead td { 	background-color: #00A3D3;	text-align: center;	color:#FFF;	font-size: 12pt;	text-align: center;	font-family:Verdana, Geneva, sans-serif;}
</style>

<body>

<div class="row">
<div class="col1">
<img src="/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/jobshout_logo.jpg" width="180" />
<div class="main_heading">INVOICE</div>
</div>
<div class="col2 floatright">The Coach House,<br />77A Marlowes,<br />Hemel Hempstead<br />Herts,<br />HP1 1LF<br />Tel: 44 1442 255 285<br />Email: billing@jobshout.com</div>
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
Lorien Resourcing<br />West One<br />114 Wellington Street<br />Leeds LS1 1BA<br />UNITED KINGDOM<br /><br />
</div>
<div class="col2 floatright">
<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">4221-001219</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">02/10/2017</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Due Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">01/11/2017</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">JOBSHOUT</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Ordered by</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;"></td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Your ref, PO number</td>
<td style="text-align: center;"></td>
</tr>
</table>
</div>
</div>

<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">
<thead>
<tr>
<td width="10%">ITEM</td>
<td width="10%">QUANTITY</td>
<td width="50%">DESCRIPTION</td>
<td width="15%">UNIT PRICE</td>
<td width="15%">AMOUNT</td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">2232</td>
<td align="center">4</td>
<td>Week ending 3 Sept 2017</td>
<td align="right">&#163;530.00</td>
<td align="right">&#163;2120.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">2233</td>
<td align="center">5</td>
<td>Week ending 10 Sept 2017</td>
<td align="right">&#163;530.00</td>
<td align="right">&#163;2650.00</td>
</tr>
<tr>

<td align="center">2234</td>
<td align="center">5</td>
<td>Week ending 17 Sept 2017</td>
<td align="right">&#163;530.00</td>
<td align="right">&#163;2650.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">2235</td>
<td align="center">5</td>
<td>Week ending 24 Sept 2017</td>
<td align="right">&#163;530.00</td>
<td align="right">&#163;2650.00</td>
</tr>
<tr>

<td align="center">2236</td>
<td align="center">5</td>
<td>Week ending 1st Oct 2017</td>
<td align="right">&#163;530.00</td>
<td align="right">&#163;2650.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="3" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;12720.00</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">2544.00</td>
</tr>
<tr>
<td class="totals">Shipping:</td>
<td class="totals">&mdash;<!--#4DENDIF--></td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;15264.00</b></td>
</tr>

<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;15264.00</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 268 9971 26</h5>
<h5><u>Terms of business</u></h5>
<p><a href="https://jobshout.com/terms">https://jobshout.com/terms</a></p>
<p>Please note that our payment terms for this Invoice are OVERDUE days from the date of Invoice. Interest will be charged on all Invoice that are not paid on time.</p>


<h4><u>PAYING BY DIRECT DEBIT OR STANDING ORDER</u></h4><h4>If you pay by direct debit or standing order, this invoice is for reference only - you do not need to make an additional payment.</h4>

https://jobshout.com/terms
<h4><u>Paying online by BACS or Internet Banking</u></h4>
<h4>Please make payment by electronic transfer to:</h4>
<table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>BACS Bank details</td><td>HSBC London Southwark Branch (UK)</td></tr><tr><td>Account name</td><td>Jobshout Limited</td></tr><tr><td>Sort code</td><td>40-06-21</td></tr><tr><td>Account number</td><td>42664194</td></tr><tr><td>Please use reference</td><td>JOBSHOUT-1219</td></tr></tbody></table>

<h4 style="padding-top:10pt;">To make payment via Internet Banking, you simply need to contact your bank with the above bank details. They can advise you if you should use the SWIFT Code or BIC code depending on the payment originating country.</h4>

<p>Jobshout Limited. also trading as Jobshout, is a registered company number: 10693978. VAT number: GB 268 9971 26. Registered in England and Wales. <h5>Registered office address:</h5> The Coach House,<br />77A Marlowes,<br />Hemel Hempstead<br />Herts,<br />HP1 1LF<br />Tel: 44 1442 255 285<br />Email: billing@jobshout.com<br/><br/>
<h5>Correspondence office address:</h5> The Coach House,<br />77A Marlowes,<br />Hemel Hempstead<br />Herts,<br />HP1 1LF<br />Tel: 44 1442 255 285<br />Email: billing@jobshout.com</p>
<p>Note: This Invoice was generated by Jobshout CRM and Invoicing system automatically.</p>
<p>Date: 07/12/2017, Time: 17:06:14</p>

<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/Invoices/Invoice-4221-1219.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>

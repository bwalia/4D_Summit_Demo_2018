<?php
$watermarkTxt='Tenthmatrix Order';

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

.partnerlogo {
	margin-right: 20px; 
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
	top: 60; 
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

<img src="/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/examples/catbase-small-transp.png" width="200" />


</div>


<div class="trans_type">ESTIMATE</div>

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
<img src="/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/examples/tenthmatrix-logo.png" width="190" /><br><h4>Tenthmatrix Information Systems Ltd.</h4>The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 44 1442 384 149<br />Email: billing@tenthmatrix.co.uk</div>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div style="margin-top: 90; margin-bottom: 0pt; width: 40%;
	border:0.1mm solid #220044; 
	background-color: #f0f2ff;
	background-gradient: linear #eeeeee #f0f2f0 0 1 0 0.5;">

<h4><b>To:</b></h4>
Xtra Mile Marketing <br /><br />Tennessee<br />USA<br /><br />
</div>

<div style="position: absolute; 
	overflow: visible; 
	right: 30; 
	top: 120; 
	padding-bottom: 10px; 
	font-family:sans; width: 300px;">

<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">4125-000942</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Account No</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">4125</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Sales person</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Simon Jones</td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">24/02/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Estimated Delivery Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">00/00/00</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">CatBase</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Ordered by</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Stephanie Waddell</td>
</tr>

</table>
</div>

<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 100px;" cellpadding="8">
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
<td>CatBase EE Single-User (Mac)</td>
<td align="right">595.00</td>
<td align="right">0%</td>
<td align="right">&#163;595.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">1</td>
<td align="center">1</td>
<td>Xtags</td>
<td align="right">276.00</td>
<td align="right">0%</td>
<td align="right">&#163;276.00</td>
</tr>
<tr>

<td align="center">2</td>
<td align="center">1</td>
<td>Database Set-up</td>
<td align="right">400.00</td>
<td align="right">0%</td>
<td align="right">&#163;400.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">3</td>
<td align="center">1</td>
<td>InDesign Set-up</td>
<td align="right">300.00</td>
<td align="right">0%</td>
<td align="right">&#163;300.00</td>
</tr>
<tr>

<td align="center">4</td>
<td align="center">1</td>
<td>Tech Support </td>
<td align="right">100.00</td>
<td align="right">0%</td>
<td align="right">&#163;100.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="4" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;1671.00</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals"></td>
</tr>
<tr>
<td class="totals">Delivery:</td>
<td class="totals">Electronic</td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;1671.00</b></td>
</tr>
<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;1671.00</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '
<h4><u>Click on the link below to Accept/Decline/Comment online:</u></h4>
<p><a href="http://192.168.0.10:8081/order-status.shtml?order=8e003f4cf8fe5ee637f019ecc8dad880&auth_email=">http://192.168.0.10:8081/order-status.shtml?order=8e003f4cf8fe5ee637f019ecc8dad880&auth_email=</a></p>

<h4><u>Notes</u></h4>
<p>Please Note: <br />Database Set-up and InDesign Set-up are optional <br />Xtags Plug In for InDesign is required for importing images<br />and creation of text frames.<br />Tech Support is Optional at &pound;100 per year which includes all CatBase Software Updates. </p>


<div><h4><u>Order Authorisation</u></h4><h4>To confirm the order please sign it below, scan it and email it back to Tenthmatrix Sales:</h4><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 100%"><tbody><tr><td><b>Name</b></td></tr><tr><td><b>Position</b></td></tr><tr><td><b>Signed Date</b></td></tr><tr><td><b>Telephone</b></td></tr><tr><td><b>Your PO reference (If known)</b></td></tr><tr><td><b>Signature(s)</b></td></tr></tbody></table><br><br><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>Order Ref</td><td><b>4125-000942</b></td></tr><tr><td>Order Currency Code</td><td><b>GBP</b></td></tr></tbody></table></div>

<img class="partnerlogo" src="/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/examples/adobe-technology-partner.jpg" width="188" />
<img class="partnerlogo" src="/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/examples/partner-silver.png" width="120" />

<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5>
<p>Please note that this is not a tax Invoice.</p>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1LF. Correspondence office address: 608 Hamilton House, 111 Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1BB.</p>
<p>Note: This Order was generated by Tenthmatrix CRM, Sales Order Processing and Invoicing system automatically.</p>
<p>Date: 26/08/2016, Time: 08:34:15</p>
<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/Orders/Order-4125-942.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>
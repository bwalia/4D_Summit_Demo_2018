<?php

$watermarkTxt='STATEMENT';

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
    border-left: 0.1mm solid #eeeeee;
    border-bottom: 0.1mm solid #eeeeee;
}

table thead td { background-color: #EEEEEE;
    text-align: center;
    border: 0.1mm solid #000000;
}
.items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #000000;
    border-top: 0.1mm solid #000000;
    border-right: 0.1mm solid #eeeeee;
}

.items td.totals {
    text-align: right;
	border: 0.1mm solid #333333;
}

.items td.payments {
    text-align: right;
    font-size: 5pt;
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
<img src="/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/TenthmatrixCRMv16/TENTHMATRIX_CRM_DATA/php_components/MPDF53/examples/tenthmatrix-logo.png" width="190" />
</div>

<div class="trans_type">STATEMENT</div>

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

<h4>Tenthmatrix Information Systems Ltd.</h4>The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 44 1442 384 149<br />Email: billing@tenthmatrix.co.uk</div>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div style="margin-top: 60; margin-bottom: 0pt; width: 40%;
	border:0.1mm solid #220044; 
	background-color: #f0f2ff;
	background-gradient: linear #eeeeee #f0f2f0 0 1 0 0.5;">

<h4><b>Attn:</b></h4>';

$addressStr = 'CV Screen Ltd<br /> Accounts Payable<br />Unit A12, Boughton Business Park, Bell L<br />Amersham, Buckinghamshire HP6 6GL<br /><br />';

$html .= $addressStr;

$html .= '</div>

<div style="position: absolute; 
	overflow: visible; 
	right: 30; 
	top: 90; 
	padding-bottom: 10px; 
	font-family:sans; width: 300px;">

<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Statement#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0009-2017210</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Statement Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">10/02/2017</td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Customer No</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0009</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Contact name</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Matt Iveson</td>
</tr>
</table>
</div>


<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 50px;" cellpadding="8">
<thead>
<tr>
<td width="10%">INVOICE#</td>
<td width="10%">AGE</td>
<td width="20%">PROJECT</td>
<td width="20%">TERMS</td>
<td width="15%">STATUS</td>
<td width="10%">DATE</td>
<td width="15%">AMOUNT</td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">1169</td>
<td>> 90</td>
<td align="right">JOBSHOUT</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">07/10/2016</td>
<td align="right">&#163;300.00</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1188</td>
<td>> 30</td>
<td align="right">JOBSHOUT</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">02/01/2017</td>
<td align="right">&#163;300.00</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="5" rowspan="6"></td>
<td class="totals">Sub Total:</td>
<td class="totals">&#163;500.00</td>
</tr>

<tr>
<td class="totals">Tax:</td>
<td class="totals">&#163;100.00</td>
</tr>


<tr>
<td class="totals">Total Invoiced:</td>
<td class="totals">&#163;600.00</td>
</tr>

<tr>
<td class="totals"><b>Balance:</b></td>
<td class="totals"><b>&#163;600.00</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
<p>Please note that our payment terms for the Invoices are written on Invoice itself. Interest will be charged on all Invoice that are not paid on time.</p>


<h4><u>Paying online</u></h4>
<h4>Please make payment by electronic transfer to:</h4>
<table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%">
<tbody>
<tr>
<td>BACS Bank details</td>
<td>HSBC Hemel Hempstead Branch (UK)</td>
</tr>
<tr>
<td>Account name</td>
<td>Tenthmatrix</td>
</tr>
<tr>
<td>Sort code</td>
<td>40-24-07</td>
</tr>
<tr>
<td>Account number</td>
<td>91565850</td>
</tr>
<tr>
<td>Please use reference</td>
<td>JOBSHOUT-0009</td>
</tr>
</tbody>
</table>

<h4>For International bank transfers:</h4>
<table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%">
<tbody>
<tr>
<td>IBAN</td>
<td>GB65MIDL40240791565850</td>
</tr>
<tr>
<td>HSBC International SWIFT Code</td>
<td>MIDLGB22</td>
</tr>

<tr>
<td>Hemel Hempstead Branch (UK) Branch BIC code</td>
<td>MIDLGB2115F</td>
</tr>

</tbody>
</table>

<h4>To make payment, you simply need to contact your bank with the above bank details. They can advise you if you should use the SWIFT Code or BIC code depending on the payment originating country.</h4>

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A The Marlowes, Hemel Hempstead, Herts, HP1 1LF, United Kingdom. Correspondence office address: Suite 608, Hamilton House, 111 Marlowes, Hemel Hempstead, Hertfordshire, HP1 1BB, United Kingdom.</p>

<p>Note: This Statement was generated by Tenthmatrix CRM and Invoicing system automatically.</p>
<p>Date: 10/02/2017, Time: 23:44:08</p>
<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/TenthmatrixCRMv16/TENTHMATRIX_CRM_DATA/php_components/MPDF53/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/TenthmatrixCRMv16/Statements/Statement-9-2017210.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>

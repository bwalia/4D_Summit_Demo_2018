<?php
$watermarkTxt='DUE NOW';

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
<img src="C:/4d_Databases/TimeBilling_Dev_Master/TenthmatrixBillingLIVEDATACOPY/php_components/MPDF53/examples/catbase-small-transp.png" width="200" />
</div>

<div class="trans_type">INVOICE</div>

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

<img src="C:/4d_Databases/TimeBilling_Dev_Master/TenthmatrixBillingLIVEDATACOPY/php_components/MPDF53/examples/tenthmatrix-logo.png" width="190" /><br><h4>Tenthmatrix Information Systems Ltd.</h4>The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 0207 118 7889<br />Email: billing@tenthmatrix.co.uk</div>

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

<h4><b>Bill To:</b></h4>
Strem Chemicals<br />7 Mulliken Way<br />Newburyport, MA 01950-4098<br />US<br /><br />
</div>


<div style="position: absolute; 
	overflow: visible; 
	right: 30; 
	top: 120; 
	padding-bottom: 10px; 
	font-family:sans; width: 300px;">

<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">4105-001080</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">05/01/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Due Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">05/01/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Project</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">CATBASE</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Ordered by</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Vince Tan</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>PO number</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">795947</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Account number</b></td>
<td style="text-align: center;">4105</td>
</tr>

</table>
</div>

<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 130px;" cellpadding="8">
<thead>
<tr>
<td width="10%"><b>ITEM</td>
<td width="10%"><b>QUANTITY</b></td>
<td width="50%"><b>DESCRIPTION</b></td>
<td width="15%"><b>UNIT PRICE</b></td>
<td width="15%"><b>AMOUNT</b></td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">1935</td>
<td align="center">1</td>
<td>CatBase Multi-User (2)</td>
<td align="right">&#36;10655.00</td>
<td align="right">&#36;10655.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="3" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#36;10655.00</td>
</tr>
<tr>
<td class="totals">VAT Rate:</td>
<td class="totals">&mdash;</td>
</tr>
&lt;!--4DIF ([Invoices]inv_shipping>0)--&gt; : 4DENDIF expected
<tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">&mdash;</td>
</tr>

<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#36;10655.00</b></td>
</tr>

<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#36;10655.00</b></td>
</tr>
</tbody>
</table>

';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5><p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>

<p>Please note that our payment terms for this Invoice are DUE NOW days from the date of Invoice. Interest will be charged on all Invoice that are not paid on time.</p>
<h4><u>Notes</u></h4><p>30% deposit on the project.<br />Please note that this is due on receipt.</p>

<img class="partnerlogo" src="C:/4d_Databases/TimeBilling_Dev_Master/TenthmatrixBillingLIVEDATACOPY/php_components/MPDF53/examples/adobe-technology-partner.jpg" width="188" />
<img class="partnerlogo" src="C:/4d_Databases/TimeBilling_Dev_Master/TenthmatrixBillingLIVEDATACOPY/php_components/MPDF53/examples/partner-silver.png" width="120" />




<h4><u>Paying online</u></h4><h4>Please make payment by electronic transfer to:</h4><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>BACS Bank details</td><td>HSBC ( USD Account )</td></tr><tr><td>Account name</td><td>Tenthmatrix</td></tr><tr><td>Sort code</td><td>40-05-15</td></tr><tr><td>Account number</td><td>73160199</td></tr><tr><td>Please use reference</td><td>CATBASE-1080</td></tr></tbody></table><h4>For International bank transfers:</h4><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>IBAN</td><td>GB86MIDL40051573160199</td></tr><tr><td>HSBC BIC code / SWIFT Code</td><td>MIDLGB22</td></tr></tbody></table>

<h4>To make payment via international banking, you simply need to contact your bank with the above bank details. They can advise you if you should use the BIC code or SWIFT Code depending on the payment originating country.</h4>

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A The Marlowes, Hemel Hempstead, Herts, HP1 1LF, United Kingdom. Correspondence office address: Suite 608, Hamilton House, 111 Marlowes, Hemel Hempstead, Hertfordshire, HP1 1BB, United Kingdom.</p><p>Note: This Invoice was generated by Tenthmatrix CRM and Invoicing system automatically.</p><p>Date: 14/01/2016, Time: 01:10:13</p>

<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("C:/4d_Databases/TimeBilling_Dev_Master/TenthmatrixBillingLIVEDATACOPY/php_components/MPDF53/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('C:/4d_Databases/TimeBilling_Dev_Master/TenthmatrixBillingLIVEDATACOPY/Invoices/Invoice-4105-1080.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>

<?php
$watermarkTxt='OVERDUE';

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
<img src="/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/examples/catbase-small-transp.png" width="200" />
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

<h4><b>Bill To:</b></h4>
Management Concepts, Inc.<br />8230 Leesburg Pike<br />Tysons Corner, VA 22182<br />USA<br /><br />
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
<td style="text-align: center;border-bottom: 1px solid #333333;">4102-001114</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">16/05/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Due Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">16/05/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">CATBASE</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Ordered by</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Alexis Whitehouse</td>
</tr>

</table>
</div>


<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 50px;" cellpadding="8">
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

<td align="center">1995</td>
<td align="center">0.5</td>
<td>CatBase Multi-User (2)</td>
<td align="right">&#163;2495.00</td>
<td align="right">&#163;1247.50</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">1996</td>
<td align="center">0.5</td>
<td>Scripting</td>
<td align="right">&#163;750.00</td>
<td align="right">&#163;375.00</td>
</tr>
<tr>

<td align="center">1997</td>
<td align="center">0.5</td>
<td>Technical Support, Multi-User</td>
<td align="right">&#163;600.00</td>
<td align="right">&#163;300.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">1998</td>
<td align="center">0.5</td>
<td>Database setup</td>
<td align="right">&#163;2500.00</td>
<td align="right">&#163;1250.00</td>
</tr>
<tr>

<td align="center">1999</td>
<td align="center">0.5</td>
<td>Xtags</td>
<td align="right">&#163;276.00</td>
<td align="right">&#163;138.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">2000</td>
<td align="center">1</td>
<td>Xtags</td>
<td align="right">&#163;276.00</td>
<td align="right">&#163;276.00</td>
</tr>
<tr>

<td align="center">2001</td>
<td align="center">1</td>
<td>Scripting</td>
<td align="right">&#163;3000.00</td>
<td align="right">&#163;3000.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="3" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;6586.50</td>
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
<td class="totals"><b>&#163;6586.50</b></td>
</tr>

<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;6586.50</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
<p>Please note that our payment terms for this Invoice are OVERDUE days from the date of Invoice. Interest will be charged on all Invoice that are not paid on time.</p>
<h4><u>Notes</u></h4>
<p>1. CatBase Multi-User: Application software to install on your server and client machines. Two client licences are included. This is a one-time perpetual license.<br />2. Scripting: This is an estimate based on our discussions. Scripting will be required to perform certain calculations, such as how to organise the information in the various text boxes on the layout according to specified rules. As we have not yet received the detailed project specification, we do not know how complex those rules are, so this is an estimated cost.<br />3. Technical Support: Basic support for 1 year. This includes support via our online ticketing system and email, and all CatBase program updates, both minor and major.<br />4. Database setup: Set up a CatBase database for the project, including the tables, fields, and data entry and list forms; and publishing stylesheets to work with your InDesign templates and is a one off payment.<br />5. Xtags: Plugin for InDesign - required for import of images and  creation of text frames.<br /><br /><br />This invoice represents the balance due on the original contract, plus one additional Xtags licence and additional work required in creating scriupts etc. to handle the complex rules and formatting requirements of the project.</p>



<h4><u>Paying online by BACS or Internet Banking</u></h4>
<h4>Please make payment by electronic transfer to:</h4>
<table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>BACS Bank details</td><td>HSBC Hemel Hempstead Branch (UK)</td></tr><tr><td>Account name</td><td>Tenthmatrix</td></tr><tr><td>Sort code</td><td>40-24-07</td></tr><tr><td>Account number</td><td>91565850</td></tr><tr><td>Please use reference</td><td>CATBASE-1114</td></tr></tbody></table><table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%"><tbody><tr><td>IBAN</td><td>GB65MIDL40240791565850</td></tr><tr><td>HSBC International SWIFT Code</td><td>MIDLGB22</td></tr><tr><td>Hemel Hempstead Branch (UK) Branch BIC code</td><td>MIDLGB2115F</td></tr></tbody></table>

<h4>To make payment via Internet Banking, you simply need to contact your bank with the above bank details. They can advise you if you should use the SWIFT Code or BIC code depending on the payment originating country.</h4>

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1LF. Correspondence office address: 608 Hamilton House, 111 Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1BB.</p>
<p>Note: This Invoice was generated by Tenthmatrix CRM and Invoicing system automatically.</p>
<p>Date: 14/10/2016, Time: 22:31:20</p>
<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/Invoices/Invoice-4102-1114.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>

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

<h4><b>Bill To:</b></h4>
Management Concepts, Inc.<br />8230 Leesburg Pike<br />Tysons Corner, VA 22182<br />USA<br /><br />
</div>


<div style="position: absolute; 
	overflow: visible; 
	right: 30; 
	top: 90; 
	padding-bottom: 10px; 
	font-family:sans; width: 300px;">

<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">4102-001114</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">16/05/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Due Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">16/05/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">CATBASE</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Ordered by</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Alexis Whitehouse</td>
</tr>

</table>
</div>


<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 50px;" cellpadding="8">
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

<td align="center">1</td>
<td align="center">0.5</td>
<td>CatBase Multi-User (2)</td>
<td align="right">&#163;2495.00</td>
<td align="right">&#163;1247.50</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">2</td>
<td align="center">0.5</td>
<td>Scripting</td>
<td align="right">&#163;750.00</td>
<td align="right">&#163;375.00</td>
</tr>
<tr>

<td align="center">3</td>
<td align="center">0.5</td>
<td>Technical Support, Multi-User</td>
<td align="right">&#163;600.00</td>
<td align="right">&#163;300.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">4</td>
<td align="center">0.5</td>
<td>Database setup</td>
<td align="right">&#163;2500.00</td>
<td align="right">&#163;1250.00</td>
</tr>
<tr>

<td align="center">5</td>
<td align="center">0.5</td>
<td>Xtags</td>
<td align="right">&#163;276.00</td>
<td align="right">&#163;138.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">6</td>
<td align="center">1</td>
<td>Xtags</td>
<td align="right">&#163;276.00</td>
<td align="right">&#163;276.00</td>
</tr>
<tr>

<td align="center">7</td>
<td align="center">1</td>
<td>Scripting</td>
<td align="right">&#163;3000.00</td>
<td align="right">&#163;3000.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="3" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;6586.50</td>
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
<td class="totals"><b>&#163;6586.50</b></td>
</tr>

<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;6586.50</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
<p>Please note that our payment terms for this Invoice are OVERDUE days from the date of Invoice. Interest will be charged on all Invoice that are not paid on time.</p>
<h4><u>Notes</u></h4>
<p>1. CatBase Multi-User: Application software to install on your server and client machines. Two client licences are included. This is a one-time perpetual license.<br />2. Scripting: This is an estimate based on our discussions. Scripting will be required to perform certain calculations, such as how to organise the information in the various text boxes on the layout according to specified rules. As we have not yet received the detailed project specification, we do not know how complex those rules are, so this is an estimated cost.<br />3. Technical Support: Basic support for 1 year. This includes support via our online ticketing system and email, and all CatBase program updates, both minor and major.<br />4. Database setup: Set up a CatBase database for the project, including the tables, fields, and data entry and list forms; and publishing stylesheets to work with your InDesign templates and is a one off payment.<br />5. Xtags: Plugin for InDesign - required for import of images and  creation of text frames.<br /><br /><br />This invoice represents the balance due on the original contract, plus one additional Xtags licence and additional work required in creating scriupts etc. to handle the complex rules and formatting requirements of the project.</p>


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
<td>CATBASE-1114</td>
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

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1LF. Correspondence office address: 608 Hamilton House, 111 Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1BB.</p>
<p>Note: This Invoice was generated by Tenthmatrix CRM and Invoicing system automatically.</p>
<p>Date: 14/10/2016, Time: 22:31:20</p>
<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/Invoices/Invoice-4102-1114.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>

<?php
$watermarkTxt='DUE NOW';

$html = '
<style>
body {
</style>

<body>
<div class="row">
<div class="col1">
<img src="/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/WebCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/tenthmatrix-logo.png" width="190" />
<div class="main_heading">INVOICE</div>
</div>
<div class="col2 floatright"><h4>Tenthmatrix Information Systems Ltd.</h4>
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
<h5><u>Terms of business</u></h5>

Please note that our payment terms for this Invoice : DUE NOW.
<h4><u>Notes</u></h4>

<!--PHP_InvoicePayByCCInfo-->

<h4><u>Paying online</u></h4>

<h4>To make payment, you simply need to contact your bank with the above bank details. They can advise you if you should use the BIC code or SWIFT Code depending on the payment originating country.</h4>

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A The Marlowes, Hemel Hempstead, Herts, HP1 1LF, United Kingdom. Correspondence office address: Suite 608, Hamilton House, 111 Marlowes, Hemel Hempstead, Hertfordshire, HP1 1BB, United Kingdom.</p>

<p align="right">E&OE</p>
</body>';

//==============================================================

?>
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
<img src="catbase-small-transp.png" width="200" />
</div>

<div class="trans_type">ORDER</div>

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
<img src="/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/examples/tenthmatrix-logo.png" width="190" /><br><h4>Tenthmatrix Information Systems Ltd.</h4>The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 0207 118 7889<br />Email: billing@tenthmatrix.co.uk</div>

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
CV Screen <br />Unit A12, Boughton Business Park, Bell L<br />Amersham, Buckinghamshire HP6 6GL<br /><br />
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
<td style="text-align: center;border-bottom: 1px solid #333333;">0009-000818</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Sales person</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Balinder Walia</td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">23/12/2014</td>
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

<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 130px;" cellpadding="8">
<thead>
<tr>
<td width="5%">ITEM</td>
<td width="10%">QUANTITY</td>
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
<td>Interspire</td>
<td align="right">200.00</td>
<td align="right">0%</td>
<td align="right">&#163;200.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">1</td>
<td align="center">150</td>
<td>Migration of all sites to Rackspace Dedicated server as per agreement on 23rd Dec 2014 (Total Qty 150 hrs). Existing bugs with vmware type sites will also be rectified.</td>
<td align="right">30.00</td>
<td align="right">30%</td>
<td align="right">&#163;3150.00</td>
</tr>
<tr>

<td align="center">2</td>
<td align="center">12</td>
<td>Jobshout Basic billed 12 equal installments of &#163;250 each month. Min 12 months terms apply.</td>
<td align="right">250.00</td>
<td align="right">0%</td>
<td align="right">&#163;3000.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">3</td>
<td align="center">1</td>
<td>Analytics off all sites and cvscreen footer changes</td>
<td align="right">600.00</td>
<td align="right">0%</td>
<td align="right">&#163;600.00</td>
</tr>
<tr>

<td align="center">4</td>
<td align="center">1</td>
<td>JavaScript and CSS compression as per Page Insights for all sites</td>
<td align="right">650.00</td>
<td align="right">0%</td>
<td align="right">&#163;650.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">5</td>
<td align="center">1</td>
<td>Image sliders with different phone numbers for each location.</td>
<td align="right">1500.00</td>
<td align="right">30%</td>
<td align="right">&#163;1050.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="4" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;8650.00</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">1730.00</td>
</tr>
<tr>
<td class="totals">Delivery:</td>
<td class="totals">Electronic</td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;10380.00</b></td>
</tr>
<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;10380.00</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
Please note that our payment terms for this Order are Net 30.
<h4><u>Notes</u></h4>
<p>Billed as: 1) &pound;3000 + VAT at the time of commencement of the work.<br />2) &pound;2650 when work is finished<br />3) &pound;250 x 12 installments after migrated to new server (Old server billing will stop at this point)<br /><br />After first report of any incident regarding interspire system a Technician will try to solve the issue within 15 minutes and if the issues is NOT resolved our rate to fix the issue is &pound;75 per hour.<br /><br />Basic Jobshout CMS usage and cost will go down  to &pound;250 + VAT each month after old the servers have been switched off.<br /><br />Rackspace will be responsible for setting up server including LAMP stack and maintenance of the apps. MySQL Backup and Site Back up as well will be done by Rackspace.<br /><br />Domain Renewals are charged separately and Jobshout will Invoice for domain renewals on adhoc basis when domains expire.</p>

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A The Marlowes, Hemel Hempstead, Herts, HP1 1LF, United Kingdom. Correspondence office address: 2nd Floor, Titan Court, 3 Bishop Square, Hatfield, Herts, AL10 9NA, United Kingdom.</p>
<p>Note: This Order was generated by Tenthmatrix CRM and Invoicing system automatically.</p>
<p>Date: 02/06/2016, Time: 10:59:52</p>
<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/Orders/Order-9-818.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>
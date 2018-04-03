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
Elsevier<br />3251 Riverport Lane<br />Maryland Heights<br />, MO 63043<br /><br />
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
<td style="text-align: center;border-bottom: 1px solid #333333;">0044-000956</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Sales person</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;"></td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">01/04/2016</td>
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
<td>Replace rotating banners on home page by stationary banner</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;01.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">1</td>
<td align="center">3</td>
<td>Improve search to allow use of compound phrases without having to go to Advanced Search</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;03.00</td>
</tr>
<tr>

<td align="center">2</td>
<td align="center">2</td>
<td>Move Sense organs; Systems; Body regions closer to SEARCH bar</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;02.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">3</td>
<td align="center">2</td>
<td>Also add Sense organs; Systems; Body regions to Advanced Search<br /></td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;02.00</td>
</tr>
<tr>

<td align="center">4</td>
<td align="center">0.5</td>
<td>Edit Registration copy; change h.licensing to new contactEdit Registration copy; change h.licensing to new contact email(NetterLicensing@Elsevier.com)<br /></td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;00.50</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">5</td>
<td align="center">0.5</td>
<td>Replace copy in “Why Register” https://www.netterimages.com/register.htm</td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;00.50</td>
</tr>
<tr>

<td align="center">6</td>
<td align="center">0.5</td>
<td>Reorder the topics on the Help page</td>
<td align="right">10.00</td>
<td align="right">0%</td>
<td align="right">&#163;05.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">7</td>
<td align="center">1</td>
<td>Reorder Books on Books tab (top nav bar on Home page) so they are sorted on most current edition vs. alphabetical</td>
<td align="right">20.00</td>
<td align="right">0%</td>
<td align="right">&#163;20.00</td>
</tr>
<tr>

<td align="center">8</td>
<td align="center">0.25</td>
<td>Remove Books (Latest Edition) tab from center of the page—not useful—Books tab is at the top nav on Home page<br /></td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;00.25</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">9</td>
<td align="center">0.25</td>
<td>Remove “Favorites” tab from center of the page – not useful<br /></td>
<td align="right">01.00</td>
<td align="right">0%</td>
<td align="right">&#163;00.25</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="4" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;34.50</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">06.90</td>
</tr>
<tr>
<td class="totals">Delivery:</td>
<td class="totals">Electronic</td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;41.40</b></td>
</tr>
<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;41.40</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
Please note that our payment terms for this Order are .

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A The Marlowes, Hemel Hempstead, Herts, HP1 1LF, United Kingdom. Correspondence office address: 2nd Floor, Titan Court, 3 Bishop Square, Hatfield, Herts, AL10 9NA, United Kingdom.</p>
<p>Note: This Order was generated by Tenthmatrix CRM and Invoicing system automatically.</p>
<p>Date: 02/06/2016, Time: 00:22:39</p>
<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/TENTHMATRIX_CRM_DATA/php_components/MPDF53/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4D Databases/4Dv15_Dev/TenthmatrixCRMv15/Orders/Order-44-956.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>
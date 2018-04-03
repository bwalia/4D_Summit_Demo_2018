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
<img src="/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/TenthmatrixCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/examples/tenthmatrix-logo.png" width="190" />
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

$addressStr = 'Elsevier<br /> Accounts Payable<br />3251 Riverport Lane<br />, MO 63043<br /><br />';

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
<td style="text-align: center;border-bottom: 1px solid #333333;">0044-2017623</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Statement Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">23/06/2017</td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Customer No</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0044</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Contact name</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Gardler Robert</td>
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

<td align="center">279</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 15</td>
<td align="right">Paid</td>
<td align="right">25/01/2012</td>
<td align="right">&#36;6898.65</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">27/04/2012</td>
<td class="payments" colspan="2">&#36;3877.24</td>

</tr>

<tr>

<td class="payments">2</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">22/05/2012</td>
<td class="payments" colspan="2">&#36;302.41</td>

</tr>

<tr>

<td class="payments">3</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">22/05/2012</td>
<td class="payments" colspan="2">&#36;2719.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">318</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">08/03/2012</td>
<td align="right">&#36;4689.71</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">08/05/2012</td>
<td class="payments" colspan="2">&#36;2723.32</td>

</tr>

<tr style="background-color: #EEEEEE;">

<td class="payments">2</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">08/05/2012</td>
<td class="payments" colspan="2">&#36;196.23</td>

</tr>

<tr style="background-color: #EEEEEE;">

<td class="payments">3</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">22/05/2012</td>
<td class="payments" colspan="2">&#36;1770.15</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">336</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">20/04/2012</td>
<td align="right">&#36;4044.77</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">22/05/2012</td>
<td class="payments" colspan="2">&#36;1564.75</td>

</tr>

<tr>

<td class="payments">2</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">22/05/2012</td>
<td class="payments" colspan="2">&#36;1462.93</td>

</tr>

<tr>

<td class="payments">3</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">22/05/2012</td>
<td class="payments" colspan="2">&#36;1017.08</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">384</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">17/07/2012</td>
<td align="right">&#36;1665.83</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">04/09/2012</td>
<td class="payments" colspan="2">&#36;1665.83</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">385</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">17/07/2012</td>
<td align="right">&#36;1765.83</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">04/09/2012</td>
<td class="payments" colspan="2">&#36;1765.83</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">386</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">17/07/2012</td>
<td align="right">&#36;4131.33</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">04/09/2012</td>
<td class="payments" colspan="2">&#36;4131.33</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">388</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">17/07/2012</td>
<td align="right">&#36;6885.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">01/08/2012</td>
<td class="payments" colspan="2">&#36;6885.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">391</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">17/07/2012</td>
<td align="right">&#36;2800.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">22/05/2012</td>
<td class="payments" colspan="2">&#36;105.43</td>

</tr>

<tr style="background-color: #EEEEEE;">

<td class="payments">2</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">04/09/2012</td>
<td class="payments" colspan="2">&#36;2694.57</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">387</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">31/07/2012</td>
<td align="right">&#36;1665.83</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">18/12/2012</td>
<td class="payments" colspan="2">&#36;1665.83</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">393</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">09/08/2012</td>
<td align="right">&#36;2800.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">22/05/2012</td>
<td class="payments" colspan="2">&#36;13.01</td>

</tr>

<tr style="background-color: #EEEEEE;">

<td class="payments">2</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">28/08/2012</td>
<td class="payments" colspan="2">&#36;2786.99</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">424</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">11/10/2012</td>
<td align="right">&#36;10429.15</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">04/01/2013</td>
<td class="payments" colspan="2">&#36;10429.15</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">480</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">20/12/2012</td>
<td align="right">&#36;150.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">19/02/2013</td>
<td class="payments" colspan="2">&#36;150.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">494</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">UPON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">15/01/2013</td>
<td align="right">&#36;3750.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">07/03/2013</td>
<td class="payments" colspan="2">&#36;3750.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">483</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 15</td>
<td align="right">Paid</td>
<td align="right">15/01/2013</td>
<td align="right">&#36;2000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">07/03/2013</td>
<td class="payments" colspan="2">&#36;2000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">511</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">UPON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">08/02/2013</td>
<td align="right">&#36;3750.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">BACS</td>
<td class="payments" colspan="2">27/03/2013</td>
<td class="payments" colspan="2">&#36;3750.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">514</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">12/02/2013</td>
<td align="right">&#36;724.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">29/05/2013</td>
<td class="payments" colspan="2">&#36;724.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">522</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">UPON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">05/03/2013</td>
<td align="right">&#36;3750.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">29/05/2013</td>
<td class="payments" colspan="2">&#36;3750.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">539</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">UPON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">05/04/2013</td>
<td align="right">&#36;3750.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">29/05/2013</td>
<td class="payments" colspan="2">&#36;3750.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">526</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">UPON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">25/04/2013</td>
<td align="right">&#36;1958.18</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">29/05/2013</td>
<td class="payments" colspan="2">&#36;1958.18</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">554</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">02/05/2013</td>
<td align="right">&#36;3750.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">21/06/2013</td>
<td class="payments" colspan="2">&#36;3750.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">559</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 15</td>
<td align="right">Paid</td>
<td align="right">23/05/2013</td>
<td align="right">&#36;26250.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">16/07/2013</td>
<td class="payments" colspan="2">&#36;26250.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">568</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">02/07/2013</td>
<td align="right">&#36;1500.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">06/09/2013</td>
<td class="payments" colspan="2">&#36;1500.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">613</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">06/09/2013</td>
<td align="right">&#36;5500.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">06/11/2013</td>
<td class="payments" colspan="2">&#36;5500.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">630</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">14/10/2013</td>
<td align="right">&#36;9000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">26/11/2013</td>
<td class="payments" colspan="2">&#36;9000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">638</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">05/11/2013</td>
<td align="right">&#36;1671.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">03/01/2014</td>
<td class="payments" colspan="2">&#36;1671.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">672</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">04/12/2013</td>
<td align="right">&#36;50000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">27/01/2014</td>
<td class="payments" colspan="2">&#36;50000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">677</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">16/12/2013</td>
<td align="right">&#36;7000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">29/01/2014</td>
<td class="payments" colspan="2">&#36;7000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">681</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">31/01/2014</td>
<td align="right">&#36;9889.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">28/06/2014</td>
<td class="payments" colspan="2">&#36;9889.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">690</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">31/01/2014</td>
<td align="right">&#36;25000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">14/03/2014</td>
<td class="payments" colspan="2">&#36;25000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">708</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">28/02/2014</td>
<td align="right">&#36;25000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">14/03/2014</td>
<td class="payments" colspan="2">&#36;25000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">709</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">03/03/2014</td>
<td align="right">&#36;25000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">15/04/2014</td>
<td class="payments" colspan="2">&#36;25000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">720</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">12/03/2014</td>
<td align="right">&#36;1348.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">28/04/2014</td>
<td class="payments" colspan="2">&#36;1348.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">738</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">01/04/2014</td>
<td align="right">&#36;25000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">15/04/2014</td>
<td class="payments" colspan="2">&#36;25000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">744</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">28/04/2014</td>
<td align="right">&#36;25000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">19/05/2014</td>
<td class="payments" colspan="2">&#36;25000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">743</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">28/04/2014</td>
<td align="right">&#36;1600.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">28/06/2007</td>
<td class="payments" colspan="2">&#36;743.00</td>

</tr>

<tr>

<td class="payments">2</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">28/06/2014</td>
<td class="payments" colspan="2">&#36;857.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">760</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">03/06/2014</td>
<td align="right">&#36;15000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">28/06/2014</td>
<td class="payments" colspan="2">&#36;15000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">856</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 15</td>
<td align="right">Paid</td>
<td align="right">11/11/2014</td>
<td align="right">&#36;1800.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">17/03/2015</td>
<td class="payments" colspan="2">&#36;1800.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">857</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">11/11/2014</td>
<td align="right">&#36;10000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">06/01/2015</td>
<td class="payments" colspan="2">&#36;10000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">858</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">11/11/2014</td>
<td align="right">&#36;10000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">23/01/2015</td>
<td class="payments" colspan="2">&#36;10000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">860</td>
<td>> 90</td>
<td align="right">IMG2D</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">17/11/2014</td>
<td align="right">&#36;900.00</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr>

<td align="center">898</td>
<td>&mdash;</td>
<td align="right">4D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">15/01/2015</td>
<td align="right">&#36;30000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">17/03/2015</td>
<td class="payments" colspan="2">&#36;30000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">927</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">03/03/2015</td>
<td align="right">&#36;9000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">Internet Banking</td>
<td class="payments" colspan="2">24/04/2015</td>
<td class="payments" colspan="2">&#36;9000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">928</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">03/03/2015</td>
<td align="right">&#36;4000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">Internet Banking</td>
<td class="payments" colspan="2">24/04/2015</td>
<td class="payments" colspan="2">&#36;4000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">958</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">15/05/2015</td>
<td align="right">&#36;8700.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">02/09/2015</td>
<td class="payments" colspan="2">&#36;8700.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">964</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">28/05/2015</td>
<td align="right">&#36;14700.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">02/09/2015</td>
<td class="payments" colspan="2">&#36;14700.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">976</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">26/06/2015</td>
<td align="right">&#36;9000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">02/09/2015</td>
<td class="payments" colspan="2">&#36;9000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">977</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">26/06/2015</td>
<td align="right">&#36;6000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">02/09/2015</td>
<td class="payments" colspan="2">&#36;6000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">978</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">26/06/2015</td>
<td align="right">&#36;2821.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">02/09/2015</td>
<td class="payments" colspan="2">&#36;2821.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">979</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">26/06/2015</td>
<td align="right">&#36;9200.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">02/09/2015</td>
<td class="payments" colspan="2">&#36;9200.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">980</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">26/06/2015</td>
<td align="right">&#36;5400.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">02/09/2015</td>
<td class="payments" colspan="2">&#36;5400.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">997</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">30/07/2015</td>
<td align="right">&#36;14115.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">09/10/2015</td>
<td class="payments" colspan="2">&#36;14115.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1042</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">13/10/2015</td>
<td align="right">&#36;15557.30</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">Cheque</td>
<td class="payments" colspan="2">18/02/2016</td>
<td class="payments" colspan="2">&#36;15557.30</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">1068</td>
<td>&mdash;</td>
<td align="right">4D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">08/12/2015</td>
<td align="right">&#36;30000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">04/05/2016</td>
<td class="payments" colspan="2">&#36;30000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1069</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">11/12/2015</td>
<td align="right">&#36;6042.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">22/01/2016</td>
<td class="payments" colspan="2">&#36;6042.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">1070</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">14/12/2015</td>
<td align="right">&#36;2788.20</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">07/03/2016</td>
<td class="payments" colspan="2">&#36;2788.20</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1112</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">04/03/2016</td>
<td align="right">&#36;4250.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">04/05/2016</td>
<td class="payments" colspan="2">&#36;4250.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">1150</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">26/07/2016</td>
<td align="right">&#36;2300.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">09/09/2016</td>
<td class="payments" colspan="2">&#36;2300.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1151</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">26/07/2016</td>
<td align="right">&#36;500.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">07/10/2016</td>
<td class="payments" colspan="2">&#36;500.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">1155</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">NET 30</td>
<td align="right">Paid</td>
<td align="right">04/08/2016</td>
<td align="right">&#36;4000.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr>
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr>

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">03/11/2016</td>
<td class="payments" colspan="2">&#36;4000.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1160</td>
<td>&mdash;</td>
<td align="right">IMG2D</td>
<td align="right">DUE ON RECEIPT</td>
<td align="right">Paid</td>
<td align="right">12/08/2016</td>
<td align="right">&#36;5500.00</td>
</tr>

<!-- PAYMENTS STARTS HERE -->

<tr style="background-color: #EEEEEE;">
<td class="payments">Payment(s)</td>
<td class="payments" colspan="2">Mode of Payment</td>
<td class="payments" colspan="2">Date Received</td>
<td class="payments" colspan="2">Amount Received</td>
</tr>


<tr style="background-color: #EEEEEE;">

<td class="payments">1</td>
<td class="payments" colspan="2">International Banking</td>
<td class="payments" colspan="2">26/09/2016</td>
<td class="payments" colspan="2">&#36;5500.00</td>

</tr>


<!-- PAYMENTS END HERE -->


<tr>

<td align="center">1181</td>
<td>> 90</td>
<td align="right">IMG2D</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">01/12/2016</td>
<td align="right">&#36;1825.00</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="5" rowspan="6"></td>
<td class="totals">Sub Total:</td>
<td class="totals">&#36;533514.78</td>
</tr>



<tr>
<td class="totals">Total Invoiced:</td>
<td class="totals">&#36;533514.78</td>
</tr>
<tr>
<td class="totals">Total PAID:</td>
<td class="totals">&#36;530789.78</td>
</tr>
<tr>
<td class="totals"><b>Balance:</b></td>
<td class="totals"><b>&#36;2725.00</b></td>
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
<td>IMG2D-0044</td>
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
<p>Date: 23/06/2017, Time: 14:28:48</p>
<p align="right">E&OE</p>
</body>';

//==============================================================//==============================================================//==============================================================include("/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/TenthmatrixCRMv16/TENTHMATRIX_CRM_DATA/php_components/mpdf60/mpdf.php");$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); $mpdf->SetWatermarkText($watermarkTxt,0.05);$mpdf->watermark_font = 'DejaVuSansCondensed';$mpdf->showWatermarkText = true;$mpdf->SetDisplayMode('fullpage');$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font$mpdf->Output('/Users/balinderwalia/Documents/4DApplications/4Dv16_Databases/TenthmatrixCRMv16/Statements/Statement-44-2017623.pdf','F');exit;//==============================================================//==============================================================//==============================================================

?>

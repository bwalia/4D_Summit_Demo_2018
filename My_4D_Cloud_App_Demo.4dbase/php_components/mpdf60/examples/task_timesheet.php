<?php
ini_set('display_errors','1');

ini_set('memory_limit', '1024M');

$html = '
<style>
body {
	font-family: arial;
	font-size: 8pt;
	padding :0; margin: 0;
}
.row{
	clear:both;
	overflow:hidden;
}

.col1, .col2, .col3, .col4, .col5, .col6{
	float:left;
	width:40%
}
h1, h2, h3, h4, h5, h6 {
padding: 0;
margin : 0;
}
.floatleft{
	float:left;
}

.floatright{
	float:right;
}
.main_heading { 
	position: absolute; 
	color: #666666;
	overflow: visible; 
	left: 55; 
	top: 40; 
	padding-bottom: 10px; 
	font-family:sans; 
	font-size: 26px;
	margin: 0;
}
.billtodetails{
	padding-top: 1em;
	padding-left:1em; margin-bottom: 0pt; 
	border:1pt solid #000; 
	background-color: #EEEEEE;
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
<div class="row">
<div class="col1">
<img valign="top" src="Jobshout_logo.jpg" width="190" />
</div>
<div class="col2 floatright">
<h4>Tenthmatrix Information Systems Ltd.</h4>
The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF
<br />Tel: 1212 118 7889<br />Email: billing@jobshoutdemo.org</div>
</div>
<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row billtodetails" style="margin-top:10pt;">

<h4><b>Task Details:</b></h4>
Description :  Making Changes for PDFs options <br />
Project :  PDF R&D <br />
Reported By : Joe Blogg<br />
Assigned to : Joe Blogg<br />
Status : assigned <br />
</div>
 
<h4 style="margin-top: 10pt;"> <b></b>  </h4>
<table class="items" width="100%" style="border-collapse: collapse;margin-top: 10px;" cellpadding="8">
<thead>
<tr>
<td width="20%"><b>DESCRIPTION</b></td>
<td width="15%"><b>Employee Name</b></td>
<td width="17%"><b>Project Name</b></td>
<td width="12%"><b>Start Date/ Time</b></td>
<td width="12%"><b>End Date/ Time</b></td>
<td width="7%"><b>SLIP RATE</b></td>
<td width="7%"><b>SLIP HOURS</b></td>
<td width="10%"><b>SLIP Value</b></td>
</tr>
</thead>
<tbody>



<tr>
<td align="left">Working with Pat on PDF</td>
<td align="left">Joe Blogg</td>
<td align="left">PDF R&amp;D</td>
<td align="center">30/10/2015 10:30:00</td>
<td align="center">30/10/2015 17:00:00</td>
<td align="right">0</td>
<td align="center">6</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">Working locally on Catbase TCPDF, preparing samples to make changes in Catbase</td>
<td align="left">Joe Blogg</td>
<td align="left">PDF R&amp;D</td>
<td align="center">10/11/2015 09:30:00</td>
<td align="center">10/11/2015 17:30:00</td>
<td align="right">0</td>
<td align="center">7.25</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">Working locally on TCPDF changes on catbase and testing on browser by creating sample pdfs .</td>
<td align="left">Joe Blogg</td>
<td align="left">PDF R&amp;D</td>
<td align="center">12/11/2015 09:30:00</td>
<td align="center">12/11/2015 15:50:00</td>
<td align="right">0</td>
<td align="center">5.66</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">Discussed issues of catbase PDF with Pat and working locally on the changes</td>
<td align="left">Joe Blogg</td>
<td align="left">PDF R&amp;D</td>
<td align="center">18/11/2015 16:30:00</td>
<td align="center">18/11/2015 18:45:00</td>
<td align="right">0</td>
<td align="center">2.25</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">added more options of printing End matter, Cover, back  Cover, etc in PDF
Added Header and footer section for different sections</td>
<td align="left">Joe Blogg</td>
<td align="left">PDF R&amp;D</td>
<td align="center">19/11/2015 10:30:00</td>
<td align="center">19/11/2015 18:00:00</td>
<td align="right">0</td>
<td align="center">7</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">Added multiple static content and images and add inline styling.</td>
<td align="left">Joe Blogg</td>
<td align="left">PDF R&amp;D</td>
<td align="center">20/11/2015 11:30:00</td>
<td align="center">20/11/2015 17:30:00</td>
<td align="right">0</td>
<td align="center">5.17</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">pdf design changes reported by neha</td>
<td align="left">Pankaj Joshi</td>
<td align="left">PDF R&amp;D</td>
<td align="center">23/11/2015 09:30:00</td>
<td align="center">23/11/2015 13:00:00</td>
<td align="right">0</td>
<td align="center">3.5</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">1. Fixed existing Font issue in Catbase. It is due to some invalid entities arise during file_get_contents()
2. Working on to add new Fonts if they don&#39;t exist in tcpdf/fonts folder.</td>
<td align="left">Joe Blogg</td>
<td align="left">PDF R&amp;D</td>
<td align="center">24/11/2015 10:00:00</td>
<td align="center">24/11/2015 13:40:00</td>
<td align="right">0</td>
<td align="center">3.67</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">Added all styles options both as Inline and in css.
Added options to add header/footers in all sections with all given options</td>
<td align="left">Joe Blogg</td>
<td align="left">PDF R&amp;D</td>
<td align="center">23/11/2015 09:30:00</td>
<td align="center">23/11/2015 17:30:00</td>
<td align="right">0</td>
<td align="center">7.25</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">Discussed about fonts, fonts styles options. The fonts were not coming fine in  PDF. Discussed with Neha.</td>
<td align="left">Pankaj Joshi</td>
<td align="left">PDF R&amp;D</td>
<td align="center">24/11/2015 17:45:00</td>
<td align="center">24/11/2015 18:30:00</td>
<td align="right">0</td>
<td align="center">0.75</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">Generated required fonts only needed while generating PDF. And uploaded the changes in Dropbox</td>
<td align="left">Joe Blogg</td>
<td align="left">PDF R&amp;D</td>
<td align="center">02/12/2015 11:30:00</td>
<td align="center">02/12/2015 13:30:00</td>
<td align="right">0</td>
<td align="center">2</td>
<td align="right">&pound; 0</td>
</tr>
<tr>


<tr>
<td align="left">pdf design table, text align  design changes. reported by neha.</td>
<td align="left">Pankaj Joshi</td>
<td align="left">PDF R&amp;D</td>
<td align="center">10/11/2015 11:00:00</td>
<td align="center">10/11/2015 16:00:00</td>
<td align="right">0</td>
<td align="center">5</td>
<td align="right">&pound; 0</td>
</tr>
<tr>

<tr>
<td align="left">Making Changes for PDF&#39;s options . and study  styling section for pdf.</td>
<td align="left">Pankaj Joshi</td>
<td align="left">PDF R&amp;D</td>
<td align="center">30/11/2015 09:30:00</td>
<td align="center">30/11/2015 17:00:00</td>
<td align="right">0</td>
<td align="center">7</td>
<td align="right">&pound; 0</td>
</tr>
<tr>

<td align="left" colspan="5" class="totals"><b>Total Timesheets 13<b></td>
<td align="right" colspan="2" class="totals"><b>Total Hours 62.5<b></td>
<td align="right" class="totals">&pound; 0</td>
</tr>

</tbody>
</table>';

$termsHTML = '<p>Date: 28/05/2016, Time: 07:28:09</p>
</body>';

//==============================================================
//==============================================================
//==============================================================
include("../mpdf.php");

$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); 

//$mpdf->SetWatermarkText('NET 30',0.05);
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->showWatermarkText = true;

$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font

//$mpdf->Output('task_timesheets.pdf','F');
 $mpdf->Output();

?>

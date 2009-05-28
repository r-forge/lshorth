
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body leftmargin="0" topmargin="0" link="#0076d5" marginheight="0" marginwidth="0" text="#000000" vlink="#6a76d5">
    <!--Top fragment-->

<!-- line 1: logo & search -->
<table border="0" cellpadding="0" cellspacing="0" width="100%"><!-- table 1 --><tbody>
	<tr><td width="40">&nbsp;</td>
      
	<tr>
	<td><!--- R-Forge Logo -->
	<a href="http://r-forge.r-project.org/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /></a> 
	</td>

	<td nowrap="nowrap">
         <div align="center">
           
	<form action="/search/" method="get">
	<table border="0" cellpadding="0" cellspacing="0"><!--search -->
	<tbody><tr><td>
	<div style="font-size: smaller;" align="center"><select name="type_of_search">
		<option value="full">Search the entire project</option>
		<option value="trackers">This project's trackers</option>
		<option value="forums">This project's forums</option>
		<option value="news">This project's news</option>
		<option value="soft">Software/Group</option>
		<option value="people">People</option>
	</select></div></td>
	<td>&nbsp;<input value="54" name="group_id" type="hidden"></td>
	<td><input size="12" name="words" value="" type="text"></td>
	<td>&nbsp;</td><td><input name="Search" value="Search" type="submit"></td>
	<td width="10">&nbsp;</td>
	<td><b><a href="http://r-forge.r-project.org/search/advanced_search.php?group_id=54"> Advanced search</a></b></td>
	</tr></tbody></table><!--search -->
	</form>          
	
	</div>
       </td>
        <td class="normal" align="right" nowrap="nowrap" valign="middle">
          <div align="right">
            
            <p><strong><a href="http://r-forge.r-project.org/account/logout.php">Log Out</a></strong><br>

             <strong><a href="http://r-forge.r-project.org/account/">My Account</a></strong></p>
                      </div>
        </td>

        <td width="40">&nbsp;</td>

	</tr>
</tbody></table><!-- table 1 -->

  
<table border="0" cellpadding="0" cellspacing="0" width="100%"><!-- table 2 --><tbody>
<tr>
<td>&nbsp;</td>

<td colspan="3">
<table class="tableTab" border="0" cellpadding="0" cellspacing="0" height="34" width="100%"><!-- table 3 -->
<tbody>
<tr align="center" valign="top">
<td class="tabLeft" height="34" width="5%">&nbsp;</td>

<td class="normalTab" height="34" width="22%">
<table border="0" cellpadding="0" cellspacing="0" height="27" width="100%"><!-- table 4 -->
  <tbody><tr>
    <td align="center" nowrap="nowrap" valign="middle"><a href="http://r-forge.r-project.org/">Home</a></td>
  </tr>
</tbody></table>		<!-- table 4 -->
</td>

<td class="normalTab" height="34" width="22%">
<table border="0" cellpadding="0" cellspacing="0" height="27" width="100%"><!-- table 5 -->
  <tbody><tr>
    <td align="center" nowrap="nowrap" valign="middle"><a href="http://r-forge.r-project.org/my/">My&nbsp;Page</a></td>
  </tr>
</tbody></table>	<!-- table 5 -->
</td>

<td class="normalTab" height="34" width="22%">
<table border="0" cellpadding="0" cellspacing="0" height="27" width="100%"><!-- table 6 -->
  <tbody><tr>
    <td align="center" nowrap="nowrap" valign="middle"><a href="http://r-forge.r-project.org/softwaremap/">Project&nbsp;Tree</a></td>
  </tr>
</tbody></table><!-- table 6 -->
</td>

<td class="selectedTab" height="34" width="22%">
<table border="0" cellpadding="0" cellspacing="0" height="27" width="100%"><!-- table 7 -->
  <tbody><tr>
    <td align="center" nowrap="nowrap" valign="middle"><a href="http://r-forge.r-project.org/projects/lshorth/">lshorth</a></td>
  </tr>
</tbody></table><!-- table 7 -->
</td><td class="tabRight" height="34" width="5%">&nbsp;</td></tr></tbody></table><!-- table 3 -->
</td>

<td>&nbsp;</td>
</tr>

<tr>
<!-- Outer body row -->
<td>&nbsp;</td>


<td colspan="3" valign="top" width="99%">
<!-- Inner Tabs / Shell -->

<table border="0" cellpadding="0" cellspacing="0" width="100%"><!-- table 8 -->
 <tbody><tr>
    <td>&nbsp;</td>
    <td>

<!-- start tabs -->

<table border="0" cellpadding="0" cellspacing="0" width="100%"><!-- table 9 -->
<tbody><tr>
<td background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-end-selected.png" valign="top" width="10"><img src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" alt="" height="25" width="10"></td><td align="center" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-selected-bg.png" width="16%"><a class="tabsellink" href="http://r-forge.r-project.org/projects/lshorth/">Summary</a></td>
<td colspan="2" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-selected-notselected.png" valign="top" width="20"><img src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" alt="" height="2" width="20"></td><td align="center" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-bg.png" width="16%"><a class="tablink" href="http://r-forge.r-project.org/forum/?group_id=54">Forums</a></td>
<td colspan="2" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-notselected.png" valign="top" width="20"><img src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" alt="" height="2" width="20"></td><td align="center" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-bg.png" width="16%"><a class="tablink" href="http://r-forge.r-project.org/tracker/?group_id=54">Tracker</a></td>
<td colspan="2" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-notselected.png" valign="top" width="20"><img src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" alt="" height="2" width="20"></td><td align="center" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-bg.png" width="16%"><a class="tablink" href="http://r-forge.r-project.org/mail/?group_id=54">Lists</a></td>
<td colspan="2" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-notselected.png" valign="top" width="20"><img src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" alt="" height="2" width="20"></td><td align="center" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-bg.png" width="16%"><a class="tablink" href="http://r-forge.r-project.org/news/?group_id=54">News</a></td>
<td colspan="2" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-notselected.png" valign="top" width="20"><img src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" alt="" height="2" width="20"></td><td align="center" background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-bg.png" width="16%"><a class="tablink" href="http://r-forge.r-project.org/scm/?group_id=54">SCM</a></td>
<td background="R-Forge_%20lshorth_%20Project%20Info_files/theme-bottomtab-notselected-end.png" valign="top" width="10"><img src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" alt="" height="2" width="10"></td></tr><tr><td colspan="3" bgcolor="white" height="1"><img src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" height="1" width="10"></td><td colspan="15" bgcolor="#909090" height="1"><img src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" height="1" width="10"></td></tr>
</tbody></table> <!-- table 9 -->

<!-- end tabs -->
</td></tr>
</tbody><!-- table 8 --></table>
</tbody><!-- table 2 --></table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<div style="margin:20px">
<!-- end of project description -->
<div style="margin-top:40px; margin-bottom:40px; ">
<strong>To install this package directly within R type </strong><br>
&nbsp;&nbsp;&nbsp;<code>install.packages("<i>lshorth</i>",repos="http://r-forge.r-project.org")</code></p>
<p><strong>To install the recent package from source directly within R type </strong><br>
&nbsp;&nbsp;&nbsp;<code>install.packages("<i>lshorth</i>",repos="http://r-forge.r-project.org",type="source")</code></p>
</div>

<div style="margin-top:40px; margin-bottom:40px; ">
Technical notes describing the shorth plot and its statistical background are in
<dl>
<dt>G. Sawitzki: <a href="http://lshorth.r-forge.r-project.org/TheShorthPlot.pdf">The Shorth Plot.</a> </dt><dd>Technical notes. StatLab Heidelberg 1992 (rev. 2007).<br>
</dd>
</dl>
The technical notes will be installed as doc/TheShorthPlot.pdf along with the package.
</div>

<div style="margin-top:40px; margin-bottom:40px; ">
The statistical theory is in
<dl>
<dt>J. Einmahl, M. Gantner, G. Sawitzki: <a href="http://arno.uvt.nl/show.cgi?fid=71221">The Shorth Plot.</a> </dt><dd>Tilburg University CentER Discussion Papers. 2008.<br>
</dd>
</dl>
</div>


</p>
<p>
See also:
<dl>
<dt> G. Sawitzki: <ahref="http://statlab.uni-heidelberg.de/reports/by.series/report.08.pdf">DiagnosticPlots for One-Dimensional Data.</a> </dt><dd>in: Computational Statistics. Papers collected on the Occasion of the25th Conference<br> on Statistical Computing at Schloss Reisensburg.<br>(Edited by P.Dirschedl &amp; R.Ostermann for the Working Groups ... ...)<br> Heidelberg, Physica, 1994, ISBN 3-7908-0813-x, p. 237-258. </dd>
</dl>
<br>
</p>
<p>The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>
</div>
php
</body>
</html>

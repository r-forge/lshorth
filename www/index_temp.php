
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

    <table border="0" cellpadding="0" cellspacing="0" width="100%"><!-- table 1 -->
      <tbody><tr>
      
      
        <td width="40">&nbsp;</td>
<! --- R-Forge Logo --- >
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td>

        <td nowrap="nowrap">
          <div align="center">
            
		<form action="/search/" method="get">
		<table border="0" cellpadding="0" cellspacing="0">
		<tbody><tr><td>
		<div style="font-size: smaller;" align="center"><select name="type_of_search"><option value="full">Search the entire project</option>
<option value="trackers">This project's trackers</option>
<option value="forums">This project's forums</option>
<option value="news">This project's news</option>
<option value="soft">Software/Group</option>
<option value="people">People</option>
</select></div></td><td>&nbsp;<input value="54" name="group_id" type="hidden"></td><td><input size="12" name="words" value="" type="text"></td><td>&nbsp;</td><td><input name="Search" value="Search" type="submit"></td>
					<td width="10">&nbsp;</td>
					<td><b><a href="http://r-forge.r-project.org/search/advanced_search.php?group_id=54"> Advanced search</a></b></td></tr></tbody></table></form>          </div>
        </td>


 </tr>
</tbody>
</table><!-- table 1 -->

  
    <table border="0" cellpadding="0" cellspacing="0" width="100%"><!-- table 2 -->
	   <!-- jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh             -->
	   <!--  Los tabs. Hemos copiado las funciones necesarias en esta clase para sobreescribirlas  -->
	   <!-- jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh jh              -->
      <tbody><tr>
        <td>&nbsp;</td>

        <td colspan="3">
			<table class="tableTab" border="0" cellpadding="0" cellspacing="0" height="34" width="100%"><!-- table 3 -->
			  <tbody><tr align="center" valign="top">
			  <td class="tabLeft" height="34" width="5%">&nbsp;</td>
				<td class="normalTab" height="34" width="22%">
					<table border="0" cellpadding="0" cellspacing="0" height="27" width="100%"><!-- table 4 -->
				        <tbody><tr> 
				          <td align="center" nowrap="nowrap" valign="middle">
				          	<a href="http://r-forge.r-project.org/">Home</a></td>
				        </tr>
				      </tbody></table>		<!-- table 4 -->		
				</td>
				<td class="normalTab" height="34" width="22%">
					<table border="0" cellpadding="0" cellspacing="0" height="27" width="100%"><!-- table 5 -->
				        <tbody><tr> 
				          <td align="center" nowrap="nowrap" valign="middle">
				          	<a href="http://r-forge.r-project.org/my/">My&nbsp;Page</a></td>
				        </tr>
				      </tbody></table>	<!-- table 5 -->			
				</td>
				<td class="normalTab" height="34" width="22%">
					<table border="0" cellpadding="0" cellspacing="0" height="27" width="100%"><!-- table 6 -->
				        <tbody><tr> 
				          <td align="center" nowrap="nowrap" valign="middle">
				          	<a href="http://r-forge.r-project.org/softwaremap/">Project&nbsp;Tree</a></td>
				        </tr>
				      </tbody></table><!-- table 6 -->				
				</td>
				<td class="selectedTab" height="34" width="22%">
					<table border="0" cellpadding="0" cellspacing="0" height="27" width="100%"><!-- table 7 -->
				        <tbody><tr> 
				          <td align="center" nowrap="nowrap" valign="middle">
				          	<a href="http://r-forge.r-project.org/projects/lshorth/">lshorth</a></td>
				        </tr>
				      </tbody></table><!-- table 7 -->				
				</td><td class="tabRight" height="34" width="5%">&nbsp;</td></tr></tbody></table><!-- table 3 -->
				</td>

        <td>&nbsp;</td>
      </tr>

      <tr>
        <!-- Outer body row -->
        <td><img alt="alt" src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" height="1" width="10"></td>

		
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
</td>

              <td>&nbsp;</td>
            </tr>
                        <!--  Quitamos estas imï¿½genes del anterior theme (rincones superiores
                  debajo de la barra de menï¿½). En el de javaHispano no tienen
                  que salir
            -->
            
            <!--
            <tr>
              <td align="LEFT"
              width="10"><img alt="alt"
              src="/themes/gforge/images/tabs/topleft-inner.png"
              height="9" width="9" /></td>

              <td><img alt="alt"
              src="/themes/gforge/images/clear.png" width="1"
              height="1" /></td>

              <td align="RIGHT"
              width="10"><img alt="alt"
              src="/themes/gforge/images/tabs/topright-inner.png"
              height="9" width="9" /></td>
            </tr>
            -->
            
            <tr>
              <td><img alt="alt" src="R-Forge_%20lshorth_%20Project%20Info_files/clear.png" height="1" width="10"></td>

              <td valign="top" width="99%">
<table border="0" width="100%"><!-- table 10 -->
	<tbody><tr>
		<td valign="top" width="80%">
		<p>Distribution
diagnostics based on the lenght of the shorth, the shortest interval
containing a specified fraction of the distribution. The diagnostics
can be used to detect qualitative features, such as the modality or
skewness of a distribution.</p><a href="http://r-forge.r-project.org/scm/?group_id=54"><img src="R-Forge_%20lshorth_%20Project%20Info_files/downloadbar.gif" alt="DOWNLOAD" border="0"></a><br>
<ul><li> Development Status: <a href="http://r-forge.r-project.org/softwaremap/trove_list.php?form_cat=9">3 - Alpha</a></li>
<li> Intended Audience: <a href="http://r-forge.r-project.org/softwaremap/trove_list.php?form_cat=2">End Users/Desktop</a></li>
<li> License: <a href="http://r-forge.r-project.org/softwaremap/trove_list.php?form_cat=16">GNU Lesser General Public License (LGPL)</a></li>
<li> Operating System: <a href="http://r-forge.r-project.org/softwaremap/trove_list.php?form_cat=235">OS Independent</a></li>
<li> Programming Language: <a href="http://r-forge.r-project.org/softwaremap/trove_list.php?form_cat=307">R</a></li>
<li> Topic: <a href="http://r-forge.r-project.org/softwaremap/trove_list.php?form_cat=80">Cluster Analysis</a>, <a href="http://r-forge.r-project.org/softwaremap/trove_list.php?form_cat=106">Plotting</a></li></ul>Registered:&nbsp;2007-08-10 14:33<br>Activity Percentile:&nbsp;0%<br>View project activity <a href="http://r-forge.r-project.org/project/stats/?group_id=54">statistics</a>.<br>View list of <a href="http://r-forge.r-project.org/export/rss_project.php?group_id=54">RSS feeds</a> available for this project&nbsp;<img src="R-Forge_%20lshorth_%20Project%20Info_files/rss.png" alt="" border="0" height="16" width="16"><p><strong>To install packages directly within R type <code>install.packages("<i>packagename</i>",repos="http://r-forge.r-project.org")</code></strong>		</p></td>
		<td nowrap="nowrap" valign="top" width="20%">


		<table id="toptableOne" border="0" cellpadding="0" cellspacing="10" width="100%"><!-- table 11 -->
		<tbody><tr><td>
			<table id="toptableTwo" border="0" cellpadding="0" cellspacing="0" width="100%"><!-- table 12 -->
			
				<tbody><tr>
                    	<td background="R-Forge_%20lshorth_%20Project%20Info_files/esquinaIZazul.jpg" height="26" width="12">
                    	&nbsp;</td>
                    	<td class="top" align="left" height="26" nowrap="nowrap">
              			Developer Info
              			</td>
		              <td background="R-Forge_%20lshorth_%20Project%20Info_files/esquinaDEazul.jpg" height="26" width="12">
              			&nbsp;</td>              			
              		</tr>
			
				<tr align="left">
		              <td background="R-Forge_%20lshorth_%20Project%20Info_files/lateralDEblanco.gif" width="12">
		              &nbsp;</td>				
					<td>
                        <table border="0" cellpadding="0" cellspacing="10" width="100%"><!-- table 13 -->
                        <tbody><tr><td>	<span class="develtitle">Project Admins:</span><br>
	<span class="develtitle">Developers:</span><br><a href="http://r-forge.r-project.org/users/gsawitzki/">GÃ¼nther Sawitzki</a><br>	<hr size="1" width="100%">
	
<p><a href="http://r-forge.r-project.org/project/memberlist.php?group_id=54">[View Members]</a></p>
<p><a href="http://r-forge.r-project.org/project/request.php?group_id=54">[Request to join]</a></p>

                        </td></tr>
                        </tbody></table><!-- table 13 -->
		              </td><td background="R-Forge_%20lshorth_%20Project%20Info_files/lateralIZblanco.gif" width="12">
		              &nbsp;</td>		
					
				</tr>
				<tr>
				  <td align="left" nowrap="nowrap" valign="top"><img alt="alt" src="R-Forge_%20lshorth_%20Project%20Info_files/esquinaIZblanca.jpg" align="top" height="14" hspace="0" vspace="0" width="12"></td>				
				<td class="normal" background="R-Forge_%20lshorth_%20Project%20Info_files/centroBlanco.gif" height="14">&nbsp;</td>
              <td align="right" valign="top"><img alt="alt" src="R-Forge_%20lshorth_%20Project%20Info_files/esquinaDEblanca.gif" height="14" width="12"></td>
              </tr>
            </tbody></table><!-- table 8 -->
		</td></tr>
		</tbody></table><!-- table 2 -->


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->
<p>
<strong>To install this package directly within R type </strong><br>
&nbsp;&nbsp;&nbsp;<code>install.packages("<i>lshorth</i>",repos="http://r-forge.r-project.org")</code></p>
<p><strong>To install the recent package from source directly within R type </strong><br>
&nbsp;&nbsp;&nbsp;<code>install.packages("<i>lshorth</i>",repos="http://r-forge.r-project.org",type="source")</code></p>

<p>
Technical notes with statistical background information are in
<dl>
  <dt> G. Sawitzki: <a href="http://lshorth.r-forge.r-project.org/TheShorthPlot.pdf">The Shorth Plot.</a> </dt>  <dd>Technical notes. StatLab Heidelberg 1992 (rev. 2007).</dd>
</dl>


&nbsp;&nbsp;&nbsp;<a href="http://lshorth.r-forge.r-project.org/TheShorthPlot.pdf">TheShorthPlot.pdf</>.
They will be installed as doc/TheShorthPlot.pdf.
</p>
<p>
See also:
<dl>
  <dt> G. Sawitzki: <a href="http://statlab.uni-heidelberg.de/reports/by.series/report.08.pdf">DiagnosticPlots for One-Dimensional Data.</a> </dt>  <dd>in: Computational Statistics. Papers collected on the Occasion of the25th Conference on Statistical Computing at Schloss Reisensburg.(Edited by P.Dirschedl &amp; R.Ostermann for the Working Groups ... ...) Heidelberg, Physica, 1994, ISBN 3-7908-0813-x, p. 237-258. </dd>
</dl>
<br>
</p>		<td nowrap="nowrap" valign="top" width="20%">
<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

</body>
</html>

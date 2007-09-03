
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

<body>

<! --- R-Forge Logo --- >
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


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
</p>		<td nowrap="nowrap" valign="top" width="20%">
<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

</body>
</html>

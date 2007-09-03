
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


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>
<p>
Technical notes with statistical background information will be installed as doc/TheShorthPlot.pdf or can be accessed 
<a href="http://lshorth.r-forge.r-project.org/TheShorthPlot.pdf">from rforge</a>.
</p>

<!-- end of project description -->
<p>
<strong>To install this package directly within R type </strong><br>
&nbsp;&nbsp;&nbsp;<code>install.packages("<i>lshorth</i>",repos="http://r-forge.r-project.org")</code></p>
<p><strong>To install the recent package from source directly within R type </strong><br>
&nbsp;&nbsp;&nbsp;<code>install.packages("<i>lshorth</i>",repos="http://r-forge.r-project.org",type="source")</code></p>
		<td nowrap="nowrap" valign="top" width="20%">
<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

</body>
</html>

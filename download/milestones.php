<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Glyn Normington
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini Web - Milestone Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Glyn Normington";
	
	$geminiWebVersions = array("2.1.0.M02", "2.1.0.M01", "2.0.0.RC2", "2.0.0.RC1", "2.0.0.M02", "2.0.0.M01", "1.2.0.M04", "1.2.0.M03", "1.2.0.M01");
	
	ob_start();
?>

	<script type="text/javascript">
            window.addEvent('domready', function() {
                    new Accordion('h4.toggle', 'div.accordion', {initialDisplayFx: false});
            });
	</script>
	
	<div id="midcolumn">
		<h2>Milestone Downloads</h2>
		<p>
			All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> 
			unless otherwise specified.
		</p>
		
		<p>
			The following are development milestones. You may prefer to <a href="http://www.eclipse.org/gemini/web/download/">download</a> an official release.
		</p>
	
	<?
	$first = true;
	foreach ($geminiWebVersions as $version){
		echo "<h4 class='toggle'>$version";
		if ($first) {
			echo " - Latest</h4>";
		} else {
			echo "</h4>";
		}
		echo "<div class='accordion'>";
		echo "	<ul>";
		echo "		<li><a href='http://www.eclipse.org/gemini/web/download/release-notes/$version.php' target='_self'>View Release Notes</a></li>";
		echo "		<li><strong>Gemini Web</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/gemini/web/milestone/GW/$version/gemini-web-$version.zip' target='_self'>Download</a></li>";
		echo "	</ul>";
		echo "</div>";
		$first = false;
	}
	?>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
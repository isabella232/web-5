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
 * Contributors: Christopher Frost
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini OSGi Runtime - Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Christopher Frost";
	
	$geminiWebVersions = array("1.1.0.RC1-incubation", "1.1.0.M04-incubation", "1.1.0.M03-incubation", "1.1.0.M02-incubation", "1.1.0.M01");
	
	ob_start();
?>

	<script type="text/javascript">
            window.addEvent('domready', function() {
                    new Accordion('h4.toggle', 'div.accordion', {initialDisplayFx: false});
            });
	</script>
	
	<div id="midcolumn">
		<h2>Downloads.</h2>
		<p>
			All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> 
			unless otherwise specified.
		</p>
		
	<h4 class='toggle'>1.1.0.RELEASE - Latest</h4>
	<div class='accordion'>
		<ul>
			<li><a href='http://www.eclipse.org/gemini/web/download/release-notes/1.1.0.RELEASE.php' target='_self'>View Release Notes</a> (<a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=179879">Download approved IP log</a>)</li>
			<li><strong>Gemini Web</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/gemini.web/release/GW/1.1.0.RELEASE/gemini-web-1.1.0.RELEASE.zip' target='_self'>Download</a> (Updated on 2 November 2010 to fix <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=329264">bug 329264</a>)</li>
		</ul>
	</div>
	
		
	<?
	$first = true;
	foreach ($geminiWebVersions as $version){
		echo "<h4 class='toggle'>$version";
		/*if ($first) {
			echo " - Latest</h4>";
		} else { */
			echo "</h4>";
		/*}*/
		echo "<div class='accordion'>";
		echo "	<ul>";
		echo "		<li><a href='http://www.eclipse.org/gemini/web/download/release-notes/$version.php' target='_self'>View Release Notes</a></li>";
		echo "		<li><strong>Gemini Web</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/gemini.web/milestone/GW/$version/gemini-web-$version.zip' target='_self'>Download</a></li>";
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
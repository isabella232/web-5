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
	$pageTitle 		= "Virgo OSGi Runtime - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>

<div id="midcolumn">

<h3>1.1.0.M04-incubation - Release Notes</h3>
<p>The blog post is available <a href="http://blog.springsource.com/2010/09/08/gemini-web-milestone-4/" target="_self">here</a>.</p>

<p>Notable improvements:</p>
<ul>
	<li>Upgrade to Tomcat 6.0.29 (plus SpringSource mods) to close some <a href="http://tomcat.apache.org/security-6.html#Fixed_in_Apache_Tomcat_6.0.28">security vulnerabilities</a></li>
	<li>Restructure Tomcat bundles to enable clustering to work &#8211; see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=322983">bug 322983</a></li>
	<li>Various test and build improvements</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
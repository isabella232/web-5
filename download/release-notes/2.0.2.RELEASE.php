<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2012 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Violeta Georgieva
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini Web - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Chris Frost";
		
	ob_start();
?>

<div id="midcolumn">

<h3>2.0.2.RELEASE - Release Notes</h3>

<p>The <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Maya</a> (2.0.2) release of Gemini Web
upgrades Gemini Web to pick up Apache Tomcat 7.0.26 which includes a fix for a serious security issue. You can read 
more about it <a href="http://tomcat.apache.org/tomcat-7.0-doc/changelog.html">here</a>.</p>
<p>
<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Gemini.Web&query_format=advanced&target_milestone=2.0.2.RELEASE&order=bug_severity,assigned_to%20DESC,changeddate,bug_status,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
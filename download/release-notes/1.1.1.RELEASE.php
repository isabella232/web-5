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
	$pageTitle 		= "Gemini Web - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>

<div id="midcolumn">

<h3>1.1.1.RELEASE - Release Notes</h3>

<p>The 1.1.1 release is a security and bug fix update release of the first formal release of Gemini Web and is aimed at migrating applications and users from the SpringSource OSGi Web Container,
which is the Reference Implementation of the OSGi Web Applications specification.</p>

<h4>Highlights</h4>

<p>Dependency upgrades:</p>
<ul>
    <li>Upgrade Tomcat to 6.0.32 (plus modifications to support embedding) - closes off some security vulnerabilities, see <a href="http://tomcat.apache.org/tomcat-6.0-doc/changelog.html">Tomcat 6.0.32</a></li>
    <li>Upgrade SpringSource dm Server utilities to Virgo 2.1.1.RELEASE utilities</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Gemini.Web&query_format=advanced&target_milestone=1.1.1.RELEASE&order=bug_severity,assigned_to%20DESC,changeddate,bug_status,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
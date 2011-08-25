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

<h3>2.0.0.RELEASE - Release Notes</h3>

<p>The <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Maya</a> (2.0) release of Gemini Web
upgrades Gemini Web to pick up Tomcat 7 and Servlet 3.0 support
and delivers several smaller enhancements and bug fixes.</p>
<p>
<p>
Since Tomcat was upgraded by a major version number, the major version number of Gemini Web has been incremented.
</p>

<h4>Acknowledgements</h4>

<p>A new committer, Violeta Georgieva who works for SAP AG, joined during this release and is now a prolific contributor.
</p>

<h4>Notable Improvements</h4>

<ul>
	<li>Upgrade to Tomcat 7.0.12</li>
	<li>Support latest Java Servlet, JavaServer Pages and Expression Language specifications</li>
	<li>Provide a new <a href="http://www.eclipse.org/gemini/web/documentation/gemini-web-documentation-2.0.0.RELEASE/gemini-web-user-guide/htmlsingle/gemini-web-user-guide.html">user guide</a></li>
	<li>Enable default web.xml to be customised without having to modify org.eclipse.gemini.web.tomcat bundle</li>
	<li>Support strict OSGi resolver mode (when internal Equinox packages are not used)</li>
	<li>Improved decoding of web URL query strings</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Gemini.Web&query_format=advanced&target_milestone=1.2.0.M02;target_milestone=1.2.0.M03;target_milestone=1.2.0.M05;target_milestone=1.2.0.RELEASE;target_milestone=2.0.0.M01;target_milestone=2.0.0.M02;target_milestone=2.0.0.RC1;target_milestone=2.0.0.RC2;target_milestone=2.0.0.RELEASE&order=bug_severity,assigned_to%20DESC,changeddate,bug_status,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
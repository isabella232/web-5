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
	$pageAuthor		= "Violeta Georgieva";
		
	ob_start();
?>

<div id="midcolumn">

<h3>2.1.0.RELEASE - Release Notes</h3>

<p>The <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Bondi</a> (2.1.0) release of Gemini Web
provides OSGi JNDI integration, removal of Spring Framework dependency and Java 7 support.
Also it delivers several smaller enhancements and bug fixes.</p>
<p>
<h4>Notable Improvements</h4>

<ul>
	<li>OSGi JNDI integration</li>
	<li>Java 7 support</li>
	<li>Upgrads to Apache Tomcat 7.0.26</li>
	<li>Removal of Spring Framework dependency</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=2407161;classification=RT;query_format=advanced;component=unknown;target_milestone=2.1.0.M01;target_milestone=2.1.0.M02;target_milestone=2.1.0.M03;target_milestone=2.1.0.RC1;target_milestone=2.1.0.RELEASE;product=Gemini.Web" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
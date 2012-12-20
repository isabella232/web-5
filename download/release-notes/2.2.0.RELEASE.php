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

<h3>2.2.0.RELEASE - Release Notes</h3>

<p>The <a href="http://wiki.eclipse.org/Virgo/Future#Release_Branding">Sky</a> (2.2.0) release of Gemini Web
provides a newer Apache Tomcat version with web sockets support and upgrades all dependencies to newer versions.
Also it delivers several smaller enhancements and bug fixes.</p>
<p>
<h4>Notable Improvements</h4>

<ul>
	<li>Upgrade to Apache Tomcat 7.0.32 with web sockets support.</li>
	<li>All dependencies are upgraded to newer versions.</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=2407161;classification=RT;query_format=advanced;component=unknown;target_milestone=2.2.0.M01;target_milestone=2.2.0.M02;target_milestone=2.2.0.M03;target_milestone=2.2.0.RC1;target_milestone=2.2.0.RELEASE;product=Gemini.Web" target="_self">here</a>.</p>
<p>
<h4>Migration from Gemini Web 2.1.0 to Gemini Web 2.2.0</h4>
<h5>Removed Bundles</h5>
<ul>
	<li>com.springsource.javax.xml.bind</li>
	<li>com.springsource.javax.xml.stream</li>
</ul>
<p>
<h5>Bundles with changed symbolic names</h5>
<ul>
	<li>com.springsource.javax.ejb -> javax.ejb</li>
	<li>com.springsource.javax.mail -> javax.mail</li>
	<li>com.springsource.javax.persistence -> javax.persistence</li>
	<li>com.springsource.javax.transaction -> javax.transaction</li>
	<li>com.springsource.javax.xml.rpc -> javax.xml.rpc</li>
	<li>com.springsource.javax.xml.soap -> javax.xml.soap</li>
	<li>com.springsource.org.apache.catalina -> org.apache.catalina</li>
	<li>com.springsource.org.apache.catalina.ha -> org.apache.catalina.ha</li>
	<li>com.springsource.org.apache.catalina.tribes -> org.apache.catalina.tribes</li>
	<li>com.springsource.org.apache.coyote -> org.apache.coyote</li>
	<li>com.springsource.org.apache.el -> org.apache.el</li>
	<li>com.springsource.org.apache.jasper -> org.apache.jasper</li>
	<li>com.springsource.org.apache.juli.extras -> org.apache.juli.extras</li>
	<li>com.springsource.org.apache.tomcat.api -> org.apache.tomcat.api</li>
	<li>com.springsource.org.apache.tomcat.util -> org.apache.tomcat.util</li>
</ul>
</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
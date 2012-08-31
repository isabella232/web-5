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
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>

<div id="midcolumn">

<h3>2.2.0.M01 - Release Notes</h3>
<p>Bug list is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;classification=RT;product=Gemini.Web;target_milestone=2.2.0.M01" target="_self">here</a>.</p>
 
<h4>Notable improvements:</h4>

<ul>
	<li>Updated Apache Tomcat to version 7.0.29 with web sockets support.</li>
</ul>
<p><p>
<h4>Migration from Gemini Web 2.1.0 to Gemini Web 2.2.0.M01</h4>
<p>
<p>Removed Bundles</p>
<ul>
	<li>com.springsource.javax.xml.bind</li>
	<li>com.springsource.javax.xml.stream</li>
</ul>
<p>
<p>Bundles with changed symbolic names</p>
<ul>
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
<p>
<p>Bundles with changed version</p>
<ul>
	<li>All Apache Tomcat bundles 7.0.26 -> 7.0.29</li>
	<li>org.eclipse.jdt.core.compiler.batch 3.7.0.M20120208-0800 -> 3.8.0.I20120518-2145</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
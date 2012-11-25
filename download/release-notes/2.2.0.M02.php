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

<h3>2.2.0.M02 - Release Notes</h3>
<p>Bug list is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;classification=RT;product=Gemini.Web;target_milestone=2.2.0.M02" target="_self">here</a>.</p>
 
<h4>Notable improvements:</h4>

<ul>
	<li>Updated Apache Tomcat to version 7.0.32.</li>
</ul>
<p><p>
<h4>Migration from Gemini Web 2.2.0.M01 to Gemini Web 2.2.0.M02</h4>
<p>
<p>Bundles with changed symbolic names</p>
<ul>
	<li>com.springsource.javax.ejb -> javax.ejb</li>
	<li>com.springsource.javax.mail -> javax.mail</li>
	<li>com.springsource.javax.persistence -> javax.persistence</li>
	<li>com.springsource.javax.transaction -> javax.transaction</li>
	<li>com.springsource.javax.xml.rpc -> javax.xml.rpc</li>
	<li>com.springsource.javax.xml.soap -> javax.xml.soap</li>
</ul>
<p>
<p>Bundles with changed version</p>
<ul>
	<li>All Apache Tomcat bundles 7.0.29.x -> 7.0.32.x</li>
	<li>javax.ejb 3.0.0 -> 3.1.1.v201204261316</li>
	<li>javax.annotation 1.1.0.v201105051105 -> 1.1.0.v201108011116</li>
	<li>javax.el 2.2.0.v201105051105 -> 2.2.0.v201108011116</li>
	<li>javax.mail 1.4.0 -> 1.4.0.v201005080615</li>
	<li>javax.persistence 1.0.0 -> 2.0.3.v201010191057</li>
	<li>javax.servlet.jsp 2.2.0.v201103241009 -> 2.2.0.v201112011158</li>
	<li>javax.transaction 1.1.0 -> 1.1.0.v201205091237</li>
	<li>javax.xml.rpc 1.1.0.v20110517 -> 1.1.0.v201005080400</li>
	<li>javax.xml.soap 1.3.0 -> 1.3.0.v201105210645</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
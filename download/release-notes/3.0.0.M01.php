<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2015 Eclipse Foundation and others.
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

<h3>3.0.0.M01 - Release Notes</h3>
 
<h4>Notable improvements:</h4>

<ul>
	<li>Supported Java SE 7 or later.</li>
	<li>Embedded Apache Tomcat version 8.0.18.</li>
	<li>Compatible with Equinox version Luna.</li>
</ul>
<p><p>
<h4>Migration from Gemini Web 2.2.5 to Gemini Web 3.0.0.M01</h4>
<p>
<p>Bundles with changed version</p>
<ul>
	<li>All Apache Tomcat bundles 7.0.56.* -> 8.0.18</li>
	<li>All Virgo Util bundles 3.6.0.RELEASE -> 3.6.3.RELEASE</li>
	<li>org.eclipse.jdt.core.compiler.batch 3.10.0.v20140604-1726 -> 3.10.0.v20140902-0626</li>
	<li>javax.annotation 1.1.0.v201108011116 -> 1.2.0.v201401042248</li>
	<li>javax.el 2.2.0.v201108011116 -> 3.0.0</li>
	<li>javax.persistence 2.0.4.v201112161009 -> 2.1.0.v201304241213</li>
	<li>javax.servlet 3.0.0.v201103241009 -> 3.1.0</li>
	<li>javax.servlet.jsp 2.2.0.v201112011158 -> 2.3.0</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
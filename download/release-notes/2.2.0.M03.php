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

<h3>2.2.0.M03 - Release Notes</h3>
<p>Bug list is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;classification=RT;product=Gemini.Web;target_milestone=2.2.0.M03" target="_self">here</a>.</p>
 
<p><p>
<h4>Migration from Gemini Web 2.2.0.M02 to Gemini Web 2.2.0.M03</h4>
<p>
<p>Bundles with changed version</p>
<ul>
	<li>javax.persistence 2.0.3.v201010191057 -> 2.0.4.v201112161009</li>
	<li>org.slf4j.api 1.6.4.v20120130-2120 -> 1.7.2.v20121108-1250</li>
	<li>org.slf4j.nop 1.6.4.v201207191220 -> 1.7.2.v201212060727</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
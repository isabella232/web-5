<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2016, 2017 Eclipse Foundation and others.
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

<h3>3.0.0.RC2 - Release Notes</h3>

<h4>Notable improvements:</h4>

<ul>
	<li>Embedded Apache Tomcat version 8.5.5.</li>
</ul>
<p><p>
<h4>Migration from Gemini Web 3.0.0.RC1 to Gemini Web 3.0.0.RC2</h4>
<p>
<p>Bundles with changed version</p>
<ul>
	<li>All Apache Tomcat bundles 8.0.21 -> 8.5.5</li>
</ul>

<p>A full list of bugs included in this milestone is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=2407161;classification=RT;query_format=advanced;component=unknown;target_milestone=3.0.0.RC2;product=Gemini.Web" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
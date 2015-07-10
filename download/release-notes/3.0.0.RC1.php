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

<h3>3.0.0.RC1 - Release Notes</h3>

<h4>Notable improvements:</h4>

<ul>
	<li>Embedded Apache Tomcat version 8.0.21.</li>
	<li>Compatible with Equinox version Mars.</li>
</ul>
<p><p>
<h4>Migration from Gemini Web 3.0.0.M01 to Gemini Web 3.0.0.RC1</h4>
<p>
<p>Bundles with changed version</p>
<ul>
	<li>All Apache Tomcat bundles 8.0.18 -> 8.0.21</li>
	<li>org.eclipse.jdt.core.compiler.batch 3.10.0.v20140902-0626 -> 3.11.0.v20150602-1242</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
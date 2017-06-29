<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

/*******************************************************************************
 * Copyright (c) 2017 Eclipse Foundation and others.
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

<h3>3.0.3.RELEASE - Release Notes</h3>

<p>The 3.0.3 release of Gemini Web upgrades Gemini Web to pick up Apache Tomcat 8.5.16.</p>
<p>
<h4>Notable Improvements</h4>

<ul>
	<li>Upgrade to Apache Tomcat 8.5.16</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=2407161;classification=RT;query_format=advanced;component=unknown;target_milestone=3.0.3.RELEASE;product=Gemini.Web" target="_self">here</a>.</p>
<p>
<h4>Migration from Gemini Web 3.0.0 to Gemini Web 3.0.3</h4>
<h5>Bundles with upgraded version</h5>
<ul>
	<li>org.apache.catalina</li>
	<li>org.apache.catalina.ha</li>
	<li>org.apache.catalina.tribes</li>
	<li>org.apache.coyote</li>
	<li>org.apache.el</li>
	<li>org.apache.jasper</li>
	<li>org.apache.tomcat.api</li>
	<li>org.apache.tomcat.util</li>
	<li>org.apache.tomcat.websocket</li>
	<li>org.apache.juli</li>
	<li>org.apache.tomcat.jni</li>
	<li>org.apache.tomcat.util.scan</li>
</ul>
<p><a href="3.0.0.RELEASE.php" target="_self">3.0.0.RELEASE - Release Notes</a></p>
<p><a href="3.0.1.RELEASE.php" target="_self">3.0.1.RELEASE - Release Notes</a></p>
<p><a href="3.0.2.RELEASE.php" target="_self">3.0.2.RELEASE - Release Notes</a></p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
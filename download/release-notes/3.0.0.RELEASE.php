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

<h3>3.0.0.RELEASE - Release Notes</h3>

<p>The 3.0.0 release of Gemini Web
upgrades Gemini Web to pick up Apache Tomcat 8.5 and Servlet 3.1 support
and delivers several smaller enhancements and bug fixes.</p>
<p>
<p>
Since Apache Tomcat was upgraded by a major version number, the major version number of Gemini Web has been incremented.
</p>
<h4>Notable Improvements</h4>

<ul>
	<li>Upgrade to Apache Tomcat 8.5.11</li>
	<li>Support latest Java Servlet, JavaServer Pages, Expression Language and Websocket specifications</li>
	<li>Support JASPIC 1.1</li>
	<li>Support HTTP/2</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?list_id=2407161;classification=RT;query_format=advanced;component=unknown;target_milestone=3.0.0.M01;target_milestone=3.0.0.RC1;target_milestone=3.0.0.RC2;target_milestone=3.0.0.RC3;target_milestone=3.0.0.RC4;target_milestone=3.0.0.RC5;target_milestone=3.0.0.RC6;target_milestone=3.0.0.RELEASE;product=Gemini.Web" target="_self">here</a>.</p>
<p>
<h4>Migration from Gemini Web 2.2.x to Gemini Web 3.0.0</h4>
<h5>Bundles with upgraded version</h5>
<ul>
	<li>javax.annotation</li>
	<li>javax.el</li>
	<li>javax.persistence</li>
	<li>javax.servlet</li>
	<li>javax.servlet.jsp</li>
	<li>javax.websocket</li>
	<li>org.apache.catalina</li>
	<li>org.apache.catalina.ha</li>
	<li>org.apache.catalina.tribes</li>
	<li>org.apache.coyote</li>
	<li>org.apache.el</li>
	<li>org.apache.jasper</li>
	<li>org.apache.tomcat.api</li>
	<li>org.apache.tomcat.util</li>
	<li>org.apache.tomcat.websocket</li>
	<li>org.eclipse.jdt.core.compiler.batch</li>
	<li>org.eclipse.virgo.util.common</li>
	<li>org.eclipse.virgo.util.io</li>
	<li>org.eclipse.virgo.util.math</li>
	<li>org.eclipse.virgo.util.osgi</li>
	<li>org.eclipse.virgo.util.osgi.manifest</li>
	<li>org.eclipse.virgo.util.parser.manifest</li>
</ul>
<h5>New Bundles</h5>
<ul>
	<li>javax.security.auth.message</li>
	<li>org.apache.juli</li>
	<li>org.apache.tomcat.jni</li>
	<li>org.apache.tomcat.util.scan</li>
	<li>org.eclipse.gemini.web.jaspic.fragment</li>
</ul>
<h5>Removed Bundles</h5>
<ul>
	<li>org.apache.juli.extras</li>
</ul>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
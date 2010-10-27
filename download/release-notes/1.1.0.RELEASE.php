<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini Web - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, Downloads";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>

<div id="midcolumn">

<h3>1.1.0.RELEASE - Release Notes</h3>

<p>The 1.1.0 release is the first formal release of Gemini and is aimed at migrating applications and users from the SpringSource OSGi Web Container,
which is the Reference Implementation of the OSGi Web Applications specification.</p>

<h4>Acknowledgements</h4>

<p>Code contributions were gratefully received from:</p>
<ul>
    <li>Violeta Georgieva (SAP AG)</li>
    <li>David Savage (Paremus)</li>
</ul>

<p>Contributions in the form of bug reports and forum posts were gratefully received from a number of individuals.</p>

<h4>Highlights</h4>

<p>Code donations (<a href="http://wiki.eclipse.org/Virgo/Source">source code</a>), repackaged to the org.eclipse namespace and dual-licensed under the Eclipse Public License v1.0 and the Apache Software License v2.0:</p>
<ul>
    <li>Donate SpringSource OSGi Web Container to form Gemini Web Container</li>
    <li>Donate extensive unit and integration test suites</li>
</ul>
<p>Dependency upgrades:</p>
<ul>
    <li>Upgrade Tomcat to 6.0.29 (plus modifications to support embedding)</li>
    <li>Upgrade SpringSource dm Server utilities to Virgo 2.1.0.RELEASE utilities</li>
</ul>
<p>Other improvements and bug fixes:<p/>
<ul>
	<li>Support Tomcat context configuration</li>
	<li>EquinoxBundleFileResolver.canUse throws NoClassDefFoundError when BundleHost cannot be loaded</li>
	<li>Upgrade to Tomcat 6.0.29 (plus SpringSource mods) to close some <a href="http://tomcat.apache.org/security-6.html#Fixed_in_Apache_Tomcat_6.0.28">security vulnerabilities</a></li>
	<li>Restructure Tomcat bundles to enable clustering to work &#8211; see <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=322983">bug 322983</a></li>
	<li>WAR extraction when installing a web application</li>
	<li>Welcome file in a subdirectory is not invoked</li>
	<li>PackageInWarScannerTests finds lots more packages in simple-war than before</li>
	<li>Remove javax.xml.ws dependencies from test configurations and Ivy files</li>
	<li>Various test and build improvements</li>
</ul>

<p>A full list of bugs included in this release is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Gemini.Web&query_format=advanced&target_milestone=1.1.0.M02-incubation&target_milestone=1.1.0.M03-incubation&target_milestone=1.1.0.M04-incubation&target_milestone=1.1.0.M05-incubation&target_milestone=1.1.0.RC1-incubation&target_milestone=1.1.0.RELEASE&order=bug_severity,assigned_to%20DESC,changeddate,bug_status,bug_id&query_based_on=" target="_self">here</a>.</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009, 2012 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost
 * Contributors: Violeta Georgieva
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini Web OSGi Runtime - Documentation";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Documentation";
	$pageAuthor		= "Christopher Frost";
		
	$milestone = "2.2.0.x";
	$release = "2.1.0.RELEASE";
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Gemini Web Documentation</h2>
		<p>
			Gemini Web implements the Web Container defined by the Web Applications Specification chapter of the OSGi Service Platform Release 4 Version 4.2
			Enterprise Specification. This specification may be downloaded <a href="http://www.osgi.org/Download/Release4V42">here</a>.
		</p>
		
		<h2>Release Documentation</h2>
		<p>
			The documentation for the latest release of Gemini Web is browseable online below:
			<ul>
				<li>User Guide ( <a href="gemini-web-documentation-<?=$release ?>/gemini-web-user-guide/html/index.html">HTML</a> | <a href="gemini-web-documentation-<?=$release ?>/gemini-web-user-guide/htmlsingle/gemini-web-user-guide.html">HTML Single</a> )</li>
				<li>Programmer Guide ( <a href="gemini-web-documentation-<?=$release ?>/gemini-web-programmer-guide/html/index.html">HTML</a> | <a href="gemini-web-documentation-<?=$release ?>/gemini-web-programmer-guide/htmlsingle/gemini-web-programmer-guide.html">HTML Single</a> )</li>
			</ul>
		</p>
		
		<h2>Milestone Documentation</h2>
		<p>
			The documentation for the latest milestone of Gemini Web is browseable online below:
			<ul>
				<li>User Guide ( <a href="gemini-web-documentation-<?=$milestone ?>/gemini-web-user-guide/html/index.html">HTML</a> | <a href="gemini-web-documentation-<?=$milestone ?>/gemini-web-user-guide/htmlsingle/gemini-web-user-guide.html">HTML Single</a> )</li>
				<li>Programmer Guide ( <a href="gemini-web-documentation-<?=$milestone ?>/gemini-web-programmer-guide/html/index.html">HTML</a> | <a href="gemini-web-documentation-<?=$milestone ?>/gemini-web-programmer-guide/htmlsingle/gemini-web-programmer-guide.html">HTML Single</a> )</li>
			</ul>
		</p>
		
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
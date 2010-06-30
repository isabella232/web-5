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
	$pageTitle 		= "Gemini Web OSGi Runtime - Documentation";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Documentation";
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Gemini Web Documentation</h2>
		<p>
			Gemini Web implements the Web Container defined by the Web Applications
			Specification chapter of the OSGi Service Platform Release 4 Version 4.2
			Enterprise Specification. This specification may be downloaded
			<a href="http://www.osgi.org/Download/Release4V42">here</a>.
		</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
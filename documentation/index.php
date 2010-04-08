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
	$pageTitle 		= "Gemini OSGi Runtime - Documentation";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Documentation";
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Work in progress, Gemini docs coming soon</h2>
		<p>
			In the mean time you can view the docs for dm Server 2.0.1.RELEASE here which includes the OSGi web container;
			<ul>
				<li>User Guide ( <a href="http://static.springsource.org/s2-dmserver/2.0.x/user-guide/html/">HTML</a> | <a href="http://static.springsource.org/s2-dmserver/2.0.x/user-guide/htmlsingle/user-guide.html">HTML Single</a> | <a href="http://static.springsource.org/s2-dmserver/2.0.x/user-guide/pdf/user-guide.pdf">PDF</a> )</li>
				<li>Programmer Guide ( <a href="http://static.springsource.org/s2-dmserver/2.0.x/programmer-guide/html/">HTML</a> | <a href="http://static.springsource.org/s2-dmserver/2.0.x/programmer-guide/htmlsingle/programmer-guide.html">HTML Single</a> | <a href="http://static.springsource.org/s2-dmserver/2.0.x/programmer-guide/pdf/programmer-guide.pdf">PDF</a> )</li>
				<li>Creating an Application with dm Server ( <a href="http://static.springsource.org/s2-dmserver/2.0.x/getting-started/html/">HTML</a> | <a href="http://static.springsource.org/s2-dmserver/2.0.x/getting-started/htmlsingle/getting-started.html">HTML Single</a> | <a href="http://static.springsource.org/s2-dmserver/2.0.x/getting-started/pdf/getting-started.pdf">PDF</a> )</li>
			</ul>
		</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
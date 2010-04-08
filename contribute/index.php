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
	$pageTitle 		= "Gemini OSGi Runtime - Contribute";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Contribute, Developers, help";
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Developers, want to contribute...</h2>
		<p>
			Download Gemini and take it for a spin. Read the docs. Check out and build the code. Then tweet, blog, or post to the 
			<a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev"> developer mailing list</a> It's as simple as that. 
			Maybe later you'll want to file 
			<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;order=Importance;classification=RT;product=Gemini">
			bugs</a> or send in patches to the docs and code.
		</p>
		
		<p>
			All of our source code will be in Git repositories, if you are new to Git then you may want to try the following resources.
			<ul>
				<li><a href="http://git-scm.com/">The Git website</a></li>
				<li><a href="http://book.git-scm.com/">The Git community book</a> - an excellent online reference.</li>
			</ul>
		</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
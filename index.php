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
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini Web OSGi Runtime - Home";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Home";
	$pageAuthor		= "Christopher Frost";
			
	ob_start();
?>
	<div id="midcolumn">
		<div class="logo"><h1>Gemini Web Container</h1></div>
		<p>
			The Gemini Web Container is based on the Reference Implementation of RFC66 from the OSGi Alliance. To learn more about the Web 
			Container you can read this <a href="http://blog.springsource.com/2009/05/27/introduction-to-the-osgi-web-container/">
			Blog post</a> and the <a href="http://www.eclipse.org/gemini/web/documentation">documentation</a>.
		</p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/Gemini">Gemini Wiki</a></li>
				<li><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153&">Gemini Forum</a></li>  
				<li><a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">Developer Mailing List</a></li>
				<li><a href="http://www.eclipse.org/projects/project_summary.php?projectid=rt.gemini.web">Subproject Summary</a></li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;order=Importance;classification=RT;product=Gemini">Gemini Bugzilla</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Incubation</h6>
			<div id="incubation">
				<a href="/projects/what-is-incubation.php">
					<img align="center" src="/gemini/web/images/egg-incubation.png" border="0" alt="Incubation" />
				</a>
			</div>
		</div>		
		<!-- div class="sideitem">
			<h6>&lt;h6&gt; tag</h6>
				<div class="modal">
					Wrapping your content using a div.modal tag here will add the gradient background
				</div>
		</div -->
	</div>

	
<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
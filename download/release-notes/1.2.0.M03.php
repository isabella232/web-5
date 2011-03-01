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

<h3>1.2.0.M03 - Release Notes</h3>
 
	<p>
		The purpose of this milestone is to provide a consistent base for the 3.0.0.M03 release of Virgo.
	</p>
	<p>
		There were some build problems with 1.2.0.M02 release and there is no zip avaliable, a list of the issues resolve in both 1.2.0.M02 and 1.2.0.M03 are available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT&product=Gemini.web&query_format=advanced&target_milestone=1.2.0.M02,1.2.0.M03&order=bug_severity,changeddate,bug_status,priority,assigned_to,bug_id&query_based_on=">here</a>.
	</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
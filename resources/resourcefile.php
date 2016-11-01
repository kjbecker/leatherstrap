<?php
	function getResource($name){
		switch($name){
			case "header":
				$header = new lsContainer();
				$headerRow1 = new lsRow();
				$headerRow2 = new lsRow();
				$headerRow1->addChild(new lsText('h1', 'Leatherstrap Test Site'));
				$nav = new lsNavBar("inverse fixed-top collapse");
				$nav->addTab("Test Page", "#", true);
				$navDrop = new lsDropdown("Drop", "True");
				$navDrop->addOption("Test1");
				$navDrop->addOption("Test2");
				$nav->addDropdownTab($navDrop);
				$nav->addTab("Another Page");
				$nav->addRightLink("Contact Us");
				$headerRow2->addChild($nav);
				$header->addChild($headerRow1);	
				$header->addChild($headerRow2);	
				return $header;	
			case "footer":
				$footer = new lsContainer();
				$footerRow1 = new lsRow();
				$footerRow1->addChild(new lsText('p', 'Copyright 2016, Kyle James Becker'));
				$footer->addChild($footerRow1);
				return $footer;
		}

	
	}
?>

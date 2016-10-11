<?php
	function getResource($name){
		switch($name){
			case "header":
				$header = new lsContainer();
				$headerRow1 = new lsRow();
				$headerRow2 = new lsRow();
				$headerRow1->addChild(new lsText('h1', 'Leatherstrap Test Site'));
				$headerCol1 = new lsCol('sm', 2);
				$headerCol1->addChild(new lsText('p', 'Test1'));	
				$headerCol2 = new lsCol('sm', 2);	
				$headerCol2->addChild(new lsText('p', 'Test2'));	
				$headerCol3 = new lsCol('sm', 2);	
				$headerCol3->addChild(new lsText('p', 'Test3'));	
				$headerCol4 = new lsCol('sm', 2);
				$headerCol4->addChild(new lsText('p', 'Test4'));	
				$headerCol5 = new lsCol('sm', 2);	
				$headerCol5->addChild(new lsText('p', 'Test5'));	
				$headerCol6 = new lsCol('sm', 2);	
				$headerCol6->addChild(new lsText('p', 'Test6'));	
				$headerRow2->addChild($headerCol1);
				$headerRow2->addChild($headerCol2);
				$headerRow2->addChild($headerCol3);
				$headerRow2->addChild($headerCol4);
				$headerRow2->addChild($headerCol5);
				$headerRow2->addChild($headerCol6);
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

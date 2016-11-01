<?php
	class lsPills extends lsComponentBase{
		public function __construct($special){
			$this->htmlNodeBase = "ul";
			$this->addClass("nav");
			$this->addClass("nav-pills");
			if($special == "justified") $this->addClass("nav-justified");	
			if($special == "stacked") $this->addClass("nav-stacked");	
		}
		public function addTab($text, $href = "#", $active = false){
			$item = new lsComponentBase("li");
			if($active) $item->addClass("active");
			$item->addChild(new lsRawHtml('<a href="' . $href . '">' . $text . '</a>'));
		       $this->addChild($item);	
		}
		public function addDropdownTab($item){
			$this->addChild($item);
		}
		public function addDropdownPill($item){
			$this->addChild($item);
		}

	}
?>

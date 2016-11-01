<?php
	class lsTabs extends lsComponentBase{
		public function __construct($special){
			$this->htmlNodeBase = "ul";
			$this->addClass("nav");
			$this->addClass("nav-tabs");
			if($special == "justified") $this->addClass("nav-justified");	
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

<?php
	class lsNavBar extends lsComponentBase{
		private $innerDiv;
		private $list;
		private $collapse;
		private $collapseDiv;
		private $rightList;
		public function __construct($special = null, $headertext = "Website", $href = "#"){
			$this->innerDiv = new lsComponentBase("div");
			$this->innerDiv->addClass("container-fluid");
			$this->addChild($this->innerDiv);
			if(strpos($special, "collapse") !==false){
				$this->collapse = true;
				$this->collapseDiv = new lsComponentBase("div");
				$this->collapseDiv->addClass("collapse");
				$this->collapseDiv->addClass("navbar-collapse");
				$this->collapseDiv->addAttribute("id", "navbar");
			}
			$this->innerDiv->addChild(new lsRawHtml('<div class="navbar-header">'));
			if(strpos($special, "collapse") !== false) $this->innerDiv->addChild(new lsRawHtml('<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>'));
			$this->innerDiv->addChild(new lsRawHtml('<a class="navbar-brand" href="' . $href . '">' . $headertext . '</a></div>'));

			$this->list = new lsComponentBase("ul");
			$this->list->addClass("nav");
			$this->list->addClass("navbar-nav");
			$this->rightList = new lsComponentBase("ul");
			$this->rightList->addClass("nav");
			$this->rightList->addClass("navbar-nav");
			$this->rightList->addClass("navbar-right");
			if(strpos($special, "collapse") !==false){
				$this->innerDiv->addChild($this->collapseDiv);
				$this->collapseDiv->addChild($this->list);
				$this->collapseDiv->addChild($this->rightList);
			}
			else{
				$this->innerDiv->addChild($this->list);
				$this->innerDiv->addChild($this->rightList);
				
			}
			$this->htmlNodeBase = "nav";
			$this->addClass("navbar");
			if(strpos($special, "fixed-top") !== false) $this->addClass("navbar-fixed-top");
			if(strpos($special, "fixed-bottom") !== false) $this->addClass("navbar-fixed-bottom");
			if(strpos($special, "inverse") !== false) $this->addClass("navbar-inverse");
			else $this->addClass("navbar-default");
		}
		public function addLink($text, $href = "#", $active = false){
			$this->addLink($text, $href, $active);
		}
		public function addTab($text, $href = "#", $active = false){
			$item = new lsComponentBase("li");
			if($active) $item->addClass("active");
			$item->addChild(new lsRawHtml('<a href="' . $href . '">' . $text . '</a>'));
		       $this->list->addChild($item);	
		}
		public function addRightLink($text, $href = "#", $active = false){
			$item = new lsComponentBase("li");
			if($active) $item->addClass("active");
			$item->addChild(new lsRawHtml('<a href="' . $href . '">' . $text . '</a>'));
		       $this->rightList->addChild($item);	
		}
		public function addDropdownTab($item){
			$this->list->addChild($item);
		}
		public function addDropdownPill($item){
			$this->list->addChild($item);
		}

	}
?>

<?php
	class lsDropdown extends lsComponentBase{
		private $list;
		public function __construct($text){
			$this->htmlNodeBase = 'div';
			$this->addClass("dropdown");
			$button = new lsButton($text . '<span class="caret"></span>', "primary");
			$button->addAttribute("data-toggle", "dropdown");
			$button->addClass("dropdown-toggle");
			$this->addChild($button);
			$this->list = new lsComponentBase("ul");
			$this->list->addClass("dropdown-menu");
			$this->addChild($this->list);
		}
		public function addOption($text, $href = "#", $special = null){
			switch($special){
				case null:
					$this->list->addChild(new lsRawHtml('<li><a href="' . $href . '">' . $text . '</a></li>'));
					break;
				case "divider":
					$this->list->addChild(new lsRawHtml('<li class="divider"></li>'));
					break;
				case "header":
					$this->list->addChild(new lsRawHtml('<li class="dropdown-header">' . $text . '</li>'));
					break;
				case "disabled":
					$this->list->addChild(new lsRawHtml('<li class="disabled"><a href="' . $href . '">' . $text . '</a></li>'));
					break;
				default:
					$this->list->addChild(new lsRawHtml('<li><a href="' . $href . '">' . $text . '</a></li>'));
					break;
			}
		} 

	}
?>

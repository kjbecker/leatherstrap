<?php
	class lsListGroupItem extends lsComponentBase{
		private $href;
		public function __construct($href = "#", $contextual = null , $special = null){
			$this->href = $href;
			$this->htmlNodeBase = "li";
			$this->addClass('list-group-item');
			switch($contextual){
				case "success":
					$this->addClass("list-group-item-success");
					break;
				case "info":
					$this->addClass("list-group-item-info");
					break;
				case "warning":
					$this->addClass("list-group-item-warning");
					break;
				case "danger":
					$this->addClass("list-group-item-danger");
					break;
			}
			switch($special){
				case "active":	
					$this->addClass("active");
					break;
				case "disabled":
					$this->addClass("disabled");
					break;
			}
		}
		
		public function makeLink(){
			$this->htmlNodeBase = "a";
			$this->addAttribute("href", $this->href);
		}
	}
?>

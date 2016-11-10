<?php
	class lsListGroupItem extends lsComponentBase{
		private $href;
		public function __construct($href = "#", $special = null){
			$this->href = $href;
			$this->htmlNodeBase = "li";
			$this->addClass('list-group-item');
			if(strpos($special, "success") !== false) $this->addClass("list-group-item-success");
			if(strpos($special, "info") !== false) $this->addClass("list-group-item-info");
			if(strpos($special, "warning") !== false) $this->addClass("list-group-item-warning");
			if(strpos($special, "danger") !== false) $this->addClass("list-group-item-danger");
			if(strpos($special, "active") !== false) $this->addClass("active");
			if(strpos($special, "disabled") !== false) $this->addClass("disbaled");
		}
		
		public function makeLink(){
			$this->htmlNodeBase = "a";
			$this->addAttribute("href", $this->href);
		}
	}
?>

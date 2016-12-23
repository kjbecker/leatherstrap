<?php
	class lsButton extends lsComponentBase{
		public function __construct($text, $type="default", $special){
			$this->htmlNodeBase = "button";
			$this->addAttribute("type", "button");
			$this->addClass("btn");
			$this->addClass("btn-" . $type);
			if(strpos($special, "xs") !== false) $this->addClass("btn-xs");
			if(strpos($special, "extra-small") !== false) $this->addClass("btn-xs");
			if(strpos($special, "extra small") !== false) $this->addClass("btn-xs");
			if(strpos($special, "sm") !== false) $this->addClass("btn-sm");
			if(strpos($special, "small") !== false) $this->addClass("btn-sm");
			if(strpos($special, "lg") !== false) $this->addClass("btn-lg");
			if(strpos($special, "large") !== false) $this->addClass("btn-lg");
			if(strpos($special, "md") !== false) $this->addClass("btn-md");
			if(strpos($special, "medium") !== false) $this->addClass("btn-md");
			if(strpos($special, "block") !== false)  $this->addClass("btn-block");
			if(strpos($special, "active") !== false) $this->addClass('active');
			if(strpos($special, "disabled") !== false) $this->addClass('disabled');
			$this->addChild(new lsRawHTML($text));
		}	
	
	
	}
?>

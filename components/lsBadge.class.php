<?php
	class lsBadge extends lsComponentBase{
		public function __construct($value){
			$this->htmlNodeBase = "span";
			$this->addClass("badge");
			$this->addChild(new lsRawHtml($value));
		}
	
	
	}
?>

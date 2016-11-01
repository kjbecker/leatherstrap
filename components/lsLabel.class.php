<?php
	class lsLabel extends lsComponentBase{
		public function __construct($text, $class="default"){
			$this->htmlNodeBase = "span";
			$this->addClass("label");
			$this->addClass("label-" . $class);
		        $this->addChild(new lsRawHtml($text));	
		}
	}
?>

<?php
	class lsButtonGroup extends lsComponentBase{
		private $gptype;
		public function __construct($size = "md", $gptype= ""){
			$this->htmlNodeBase = "div";
			$this->addClass("btn-group");
			$this->gptype = $gptype;
			if($size != "none") $this->addClass("btn-group-" . $size);
			if($gptype == "verticle") $this->addClass("btn-group-verticle");
			if($gptype == "justified") $this->addClass("btn-group-justified");
		}	
		public function addButton($button){
			if($this->gptype == "justified") {
				$bGroup = new lsButtonGroup("none");
				$bGroup->addButton($button);
				$this->childrens[] = $bGroup;
			}
			else{
			$this->childrens[] = $button;
			
			}
		}
		public function addChild($button){
			$this->addButton($button);
		}
	}
?>

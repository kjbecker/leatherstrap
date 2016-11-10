<?php
	class lsCollapse extends lsComponentBase{
		private $button;
		private $div;
		public function __construct($id, $text, $type="default", $special){
			$this->button = new lsButton($text, $type, $special);
			$this->button->addAttribute("data-toggle", "collapse");
			$this->button->addAttribute("data-target", "#" . $id);
			if(strpos($special, "open") !== false) $this->div->addClass("in");
			$this->div = new lsComponentBase("div");
			$this->div->addAttribute("id", $id);
			$this->div->addClass("collapse");
		}
		public function makeDefaultOpen(){
			$this->div->addClass("in");
		}
		public function addChild($child){
			$this->div->addChild($child);
		}
		public function build(){
			return $this->button->build() . $this->div->build();
		}
	}
?>

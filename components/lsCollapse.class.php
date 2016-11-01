<?php
	class lsCollapse extends lsComponentBase{
		private $button;
		private $div;
		public function __construct($id, $text, $type="default", $size="md", $block=false, $active=null){
			$this->button = new lsButton($text, $type, $size, $block, $active);
			$this->button->addAttribute("data-toggle", "collapse");
			$this->button->addAttribute("data-target", "#" . $id);
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

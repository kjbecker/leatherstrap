<?php
	class lsPager extends lsComponentBase{
		public function __construct(){
			$this->htmlNodeBase = "ul";
			$this->addClass("pager");
			
		}
		public function addBlock($text, $href = '#', $special = null){
			$html = '<li';
			if($special == "previous"){
				$html .= ' class="previous"';
			}
			if($special =="next"){
				$html .= ' class="next"';
			}
			$html .= '><a href="' . $href . '">'. $text;
			$html .= '</a></li>';
			$this->addChild(new lsRawHtml($html));
		}
	}
?>

<?php
	class lsBreadcrumbs extends lsComponentBase{
		public function __construct(){
			$this->htmlNodeBase = "ul";
			$this->addClass("breadcrumb");
			
		}
		public function addBlock($text, $href = '#', $special = null){
			$html = '<li';
			if($special =="active"){
				$html .= ' class="active"';
			}
			$html .= '>';
			if($special != "active") $html .= '<a href="' . $href . '">';
			$html .= $text;
			if($special != "active") $html .= '</a>';
			$html .= '</li>';
			$this->childrens[] = new lsRawHtml($html);
		}
	}
?>

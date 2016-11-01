<?php
	class lsProgressBar extends lsComponentBase{
		public function __construct(){
			$this->htmlNodeBase = "div";
			$this->addClass("progress");
		}
		public function addProgress($percent, $type = "success", $style="default", $text = null){
			$html = '<div class="progress-bar progress-bar-' . $type;
			if($style == "striped"){
				$html .= ' progress-bar-striped';
			}
			if($style =="active"){
				$html .= ' progress-bar-striped active';
			}
			$html .= '" role="progressbar" style="width:' . $percent .'%">';
			$html .= $text;
			$html .= '</div>';
			$this->addChild(new lsRawHtml($html));
		}
	}
?>

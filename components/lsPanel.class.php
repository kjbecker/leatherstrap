<?php
	class lsPanel extends lsComponentBase{
		private $header;
		private $footer;
		private $collapsible;
		private $id;
		public function __construct($contextual = "default", $collapsible = false, $id = null){
			$this->htmlNodeBase = "div";
			$this->addClass("panel");
			$this->addClass("panel-" . $contextual);
			$this->collapsible = $collapsible;
			if($id != null) $this->id = $id;
		}	
		public function addHeader($header){
			if(gettype($header) == "string"){
				$this->header = new lsComponentBase("div", $header);
			}
			else{
				$this->header = $header;
			}
			$header->addClass("panel-heading");
			if($this->collapsible){
				$this->header->addAttribute("data-toggle", "collapse");
				$this->header->addAttribute("href", "#" . $this->id);
				$this->header->addAttribute("style", "cursor:pointer");
			}
		}
		public function addFooter($footer){
			$this->footer = $footer;
			$footer->addClass("panel-footer");
		}
		public function build(){
      			$html = '<';
		        $html .= $this->htmlNodeBase . ' class="';
   			foreach($this->classList as $class){
        			$html .= $class . " ";
      			}
      			$html .= '" ';
      			foreach($this->attributeList as $attribute){
        			$html .= $attribute['name'] . '="' . $attribute['value'] . '" ';
      			}
      			$html .= '>';
			$html .= $this->header->build();
			if($this->collapsible) $html .= '<div id="' . $this->id . '" class="panel-collapse collapse">';
			foreach($this->childrens as $child){
				if($child->htmlNodeBase == "div"){
				$child->addClass("panel-body");}
        			$html .= $child->build();
			}
			$html .= $this->footer->build();
			if($this->collapsible) $html .= '</div>';
      			$html .= '</' . $this->htmlNodeBase . '>';
      			return $html;
    		}
	
	}
?>

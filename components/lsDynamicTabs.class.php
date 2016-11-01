<?php
	class lsDynamicTabs extends lsComponentBase{
		private $contentDiv = [];
		public function __construct($special = null){
			$this->htmlNodeBase = "ul";
			$this->addClass("nav");
			$this->addClass("nav-tabs");
			if($special == "justified") $this->addClass("nav-justified");	
		}
		public function addTab($text, $active = false){
			$item = new lsComponentBase("li");
			$item->addChild(new lsRawHtml('<a data-toggle="tab" href="#' . $text . '">' . $text . '</a>'));
			$this->contentDiv[$text] = new lsComponentBase("div");
			$this->contentDiv[$text]->addAttribute('id', $text);
			$this->contentDiv[$text]->addClass('tab-pane');
			if($active){ 
				$item->addClass("active");
				$this->contentDiv[$text]->addClass('in');
				$this->contentDiv[$text]->addClass('active');
			}
		       	$this->addChild($item);	
		}
		public function addDropdownTab($item){
			$this->addChild($item);
		}
		public function addDropdownPill($item){
			$this->addChild($item);
		}
		public function addContent($text, $child){
			$this->contentDiv[$text]->addChild($child);
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

      foreach($this->childrens as $child){
        $html .= $child->build();
      }
      $html .= '</' . $this->htmlNodeBase . '>';
	$html .= '<div Class="tab-content">';
      foreach($this->contentDiv as $child){
        $html .= $child->build();
      }
 	$html .= '</div>';
      return $html;
		}
	}
?>

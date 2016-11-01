<?php
	class lsListGroup extends lsComponentBase{
		protected $links;	
		public function __construct($links = false){
			$this->htmlNodeBase = 'ul';
			$this->links = $links;
			if($links) $this->htmlNodeBase = 'div';
			$this->addClass('list-group');
		}	
    		public function addChild($child){
     			$this->childrens[] = $child;
			$child->makeLink();
		}
	
	}
?>

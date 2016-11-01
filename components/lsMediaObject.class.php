<?php
class lsMediaObject extends lsComponentBase{
	private $child;
	public function __construct($href, $location, $width){
		$this->htmlNodeBase = "div";
		$this->addClass('media');
		$mediaDiv = new lsComponentBase("div");
		if(strpos($location, "top")!== false) $mediaDiv->addClass("media-top");
		if(strpos($location, "middle")!== false) $mediaDiv->addClass("media-middle");
		if(strpos($location, "bottom")!== false) $mediaDiv->addClass("media-bottom");
		$mediaDiv->addChild(new lsImage($href, "Media Object", "", $width));
		$this->child = new lsComponentBase("div");
		$this->child->addClass("media-body");
		if(strpos($location, "right")!== false){
			$mediaDiv->addClass("media-right");
			$this->childrens[] = ($this->child);
			$this->childrens[] = ($mediaDiv);
		}
		else{
			$mediaDiv->addClass("media-left");
			$this->childrens[] = ($mediaDiv);
			$this->childrens[] = ($this->child);
		}
	
	}
	public function addChild($child){
		$this->child->addChild($child);
	}
	}

?>

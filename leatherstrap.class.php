<?php
include 'components/lsNodeBase.class.php';
include 'components/lsComponentBase.class.php';
include 'components/lsContainer.class.php';
include 'components/lsRow.class.php';
include 'components/lsCol.class.php';
include 'components/lsText.class.php';
include 'components/lsTable.class.php';
include 'components/lsTableRow.class.php';
include 'components/lsImage.class.php';
include 'components/lsJumbotron.class.php';
include 'components/lsForm.class.php';
include 'resources/resourcefile.php';
class Leatherstrap {
    //Public Variables (Debugging, ect)
    public $version = '0.01';
    public $here = __DIR__;
    public $where = '/include/leatherstrap';
    //Private Variables (Location info, version info, stuff that might change a lot)
    private $bootstrapVersion = '3.3.7';
    private $bootstrapLocation;

    //Private Variables (Page components to initialize)
    private $page;

    private $head;
   
    private $pageTitle;
    private $pageStyles = [];
    private $pageScripts = [];

    private $pageHeader;
    private $pageFooter;

    private $body;
    
    private $pageComponents = [];


    public function __construct($title = ''){
      $this->bootstrapLocation = $this->where . '/bootstrap-' . $this->bootstrapVersion .'-dist'; 
      $this->pageTitle = $title;
      $this->pageStyles[] = $this->bootstrapLocation . '/css/bootstrap.min.css';
      $this->pageScripts[] = $this->bootstrapLocation . '/js/bootstrap.min.js';
    }
    //Page addition functions
    
    public function addComponent($component){
      $this->pageComponents[] = $component;
    }	

    public function setHeader($header){
	    $this->pageHeader = getResource($header);
    }

    public function setFooter($footer){
    	$this->pageFooter = getResource($footer);
    }
    //Page construction functions

    private function makeHead(){
      $this->head = '<head>';
      $this->head .= '<meta name="viewport" content="width=device-width, initial-scale=1">';
      $this->head .= '<meta charset="utf-8">';
      $this->head .= '<title>' . $this->pageTitle . '</title>';
      foreach($this->pageStyles as $style){
        $this->head .= '<link href="' . $style . '" rel="stylesheet">';
      }
      foreach($this->pageScripts as $script){
        $this->head .= '<script scr="' . $script . '"></script>';
      }
      $this->head .= '</head>';
      return $this->head;
    }

    private function makeBody(){
	$this->body = '<body>';
	if(isset($this->pageHeader))$this->body .= $this->pageHeader->build();;
      foreach($this->pageComponents as $component){
        $this->body .= $component->build();
      }
	if(isset($this->pageFooter))$this->body .= $this->pageFooter->build();
      $this->body .= '</body>';
      return $this->body;
    }

    private function makePage(){
      $this->page = '<!DOCTYPE html>';
      $this->page .= '<html lang="en">';
      $this->page .= $this->makeHead();
      $this->page .= $this->makeBody();
      $this->page .= '</html>';
      return $this->page;
    }

    public function showPage(){
      echo $this->makePage();
    }

    public function test(){
      echo $this->bootstrapLocation;
    }
   

  } 
?>

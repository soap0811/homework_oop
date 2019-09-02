<?php

class MyListNode 
{
	public $data;
	public $next;
}

class MyList implements Iterator
{
	protected $start;
	protected $currentNode;

	public function append($data) {
		if (!$this->start) {
			$this->start = new MyListNode();
			$this->start->data = $data;
			return;
		}
		$newNode = new MyListNode();
		$newNode->data = $data;
		$lastNode = $this->getLastNode();
		$lastNode->next = $newNode;
	}

public function current() {
		// var_dump('current called');
		return $this->start[$this->currentNode]; 
	}
	public function getLastNode() {
		$result = $this->start;
		while($result->next) {
			$result = $result->next;
		}
		return $result;
	}
	public function key() {
		// var_dump('key called');
		return $this->currentNode;
	}

	public function valid() {
		return !empty($this->currentNode);
	}

	public function current() {
		$result = $this->currentNode;
		return $result;
	}

    public function next(){
    	$this->currentNode = $this->currentNode->next;
    }
	
	public function rewind() {
		$this->currentNode = $this->start;
	}
	
}

$myList = new MyList();

$myList->append(1);
$myList->append(2);
$myList->append(3);



foreach ($myList as $item) {
	var_dump($item); 
}
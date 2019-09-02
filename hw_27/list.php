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

	public function hasNext() {
		return !empty($this->currentNode);
	}

	public function getNext() {
		$result = $this->currentNode;
		$this->currentNode = $this->currentNode->next;
		return $result;
	}

	public function rewind() {
		$this->currentNode = $this->start;
	}
	public function valid() {
		// var_dump('valid called');
		return isset($this->currentNode[$this->start]);
	}
}

$myList = new MyList();

$myList->append(1);
$myList->append(2);
$myList->append(3);



foreach ($myList as $item) {
	var_dump($item); 
}
<?php
class Page
{
	public $text;
	public $padding;
}

class PageFactory
{
	if(Page::$text%2=0){Page::padding=right}
		else{Page::padding=left}
}

$pageFactory = new PageFactory();

$page1 = $pageFactory->create();
echo $page1->padding;//Выводит right

$page2 = $pageFactory->create();
echo $page2->padding;//Выводит left

$page3 = $pageFactory->create();
echo $page3->padding;//Выводит right 

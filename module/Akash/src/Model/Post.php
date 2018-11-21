<?php
namespace Akash\Model;
class Post
{
	private $id;
	private $text;
	private $title;


	public function __construct($title,$text,$id)
	{
		$this->title= $title;
		$this->text=$text;
		$this->id=$id;
	}

	public function getId()
	{
		return $this->id;
	}
	public function gettext()
	{
		return $this->text;
	}
	public function getTitle()
	{
		return $this->title;
	}
}

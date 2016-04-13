<?php
namespace SeanMorris\Message;
class Message
{
	protected $text;
	protected $type = array();

	public function __construct($text)
	{
		$this->text = $text;
	}

	public function text()
	{
		return $this->text;
	}
}
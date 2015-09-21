<?php
namespace SeanMorris\Message;
class Message
{
	protected $text;
	protected $icon;
	protected $type = array();

	public function __construct($text, $icon = NULL)
	{
		$this->text = $text;
		$this->icon = $icon;
	}

	public function text()
	{
		return $this->text;
	}
}
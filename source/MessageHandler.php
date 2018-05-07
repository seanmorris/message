<?php
namespace SeanMorris\Message;

class MessageHandler
{
	protected function __construct()
	{

	}

	public static function get()
	{
		static $instance;

		if(!$instance)
		{
			$instance = new static;
		}

		return $instance;
	}


	public function addFlash(\SeanMorris\Message\Message $message)
	{
		$session =& \SeanMorris\Ids\Meta::staticSession();

		$session['flashMessages'][] = $message;
	}

	public function flash()
	{
		$session =& \SeanMorris\Ids\Meta::staticSession();

		if(!isset($session['flashMessages']))
		{
			return [];
		}

		$messages = $session['flashMessages'];
		
		$session['flashMessages'] = [];

		// \SeanMorris\Ids\Log::logException(new \Exception());

		return $messages;
	}

	public function renderMessages($messages, $theme = [])
	{
		if(!$theme)
		{
			$theme = 'SeanMorris\Message\Theme\MessageTheme';
		}

		$renderedMessages = [];

		foreach($messages as $message)
		{
			$renderedMessages[] = $theme::render($message);
		}

		return $renderedMessages;
	}

	public function render($theme = null)
	{
		if(!$theme)
		{
			$theme = 'SeanMorris\Message\Theme\MessageTheme';
		}

		return $theme::render($this);
	}
}

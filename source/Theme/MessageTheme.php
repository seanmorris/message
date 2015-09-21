<?php
namespace SeanMorris\Message\Theme;
class MessageTheme extends \SeanMorris\Theme\Theme
{
	protected static
		$view = [
			'SeanMorris\Message\MessageHandler' => 'SeanMorris\Message\View\MessageContainer'
			, 'SeanMorris\Message\AlertMessage' => 'SeanMorris\Message\View\AlertMessage'
			, 'SeanMorris\Message\HighAlertMessage' => 'SeanMorris\Message\View\HighAlertMessage'
			, 'SeanMorris\Message\ErrorMessage' => 'SeanMorris\Message\View\ErrorMessage'
			, 'SeanMorris\Message\SuccessMessage' => 'SeanMorris\Message\View\SuccessMessage'
		];
}
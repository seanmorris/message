<?php
namespace SeanMorris\Message\View;
class MessageContainer extends \SeanMorris\Theme\View
{
	public function preprocess(&$vars)
	{
		$handler = $this->vars['object'];
		$this->vars['messages'] = $handler->renderMessages($handler->flash());
	}
}
__halt_compiler();
?>
<div class = "messageContainer">
	<?php foreach($messages as $message): ?>
		<?php echo $message; ?>
	<?php endforeach; ?>
</div>

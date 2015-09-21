<?php
namespace SeanMorris\Message\View;

class MessageView extends \SeanMorris\Ids\View
{
	protected $text;
	protected $icon;
	protected $type = [];

	public function preprocess()
	{
		$this->text = $this->vars['object']->text();
		$this->vars['icon'] = $this->icon;
	}
}
__halt_compiler();
?>
<div class = "message">
	<div class = "messageBox short <?php foreach((array)$this->type as $type){
		echo ' ' . $type;
	}?>">
		<div class = "messageIcon">&nbsp;</div>
		<div class = "messageText">
			<?php if($this->text !== NULL): ?>
				<?php echo $this->text ?>
			<?php endif; ?>
		</div>
	</div>
</div>

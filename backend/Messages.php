<?php
class Messages
{
	private $messages = [
		'success' => [],
	  'danger' => [],
	];

	public function show(){
		foreach ($this->messages as $type => $bag) {
			echo '<div class="flashes">';
			foreach ($bag as $message) {?>
				<div class="alert alert-<?php echo $type; ?>">
				<?php echo $message; ?>
				</div>
				<?php
				}
				echo '</div>';
			}
	}

	public function addAlert($message){
		$this->messages['danger'][] = $message;
	}

	public function addSuccess($message){
		$this->messages['success'][] = $message;
	}
}

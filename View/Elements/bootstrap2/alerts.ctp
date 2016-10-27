<?php
// View
echo $this->Session->flash();

// Controller
$this->Flash->set(__('Alert notice message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
));

$this->Flash->set(__('Alert success message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-success'
));

$this->Flash->set(__('Alert error message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-error'
));
?>
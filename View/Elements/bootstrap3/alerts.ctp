<?php
// View
echo $this->Session->flash();

// Controller
$this->Flash->set(__('Alert success message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-success'
));

$this->Flash->set(__('Alert info message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-info'
));

$this->Flash->set(__('Alert warning message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-warning'
));

$this->Flash->set(__('Alert danger message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-danger'
));
?>
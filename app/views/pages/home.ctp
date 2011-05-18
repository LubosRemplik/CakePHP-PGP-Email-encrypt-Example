<?php
echo $this->Form->create('Email', array('url'=>'/'.$this->params['url']['url'], 'type'=>'file'));
echo $this->Form->inputs(array(
	'from',
	'to',
	'subject',
	'message'=>array('type'=>'textarea'),
	'attachment'=>array('type'=>'file')
));
echo $this->Form->end('Send');
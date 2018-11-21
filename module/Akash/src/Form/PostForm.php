<?php
namespace Akash\Form;
use Zend\Form\Form;

class Form extends Form
{
	public function init()
	{
		$this->add([
			'name'=>'post',
			'type'=>PostFieldset::class,
			'options'=>[
				'use_as_base_fieldset'=>true,
			]
		]);
			$this->add([
				'type'=>'submit',
				'name'=>'submit',
				'attributes'=>[
					'value'=>'Insert New Post',
				]
			]);

			
	}

}
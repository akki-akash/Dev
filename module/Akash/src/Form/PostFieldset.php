<?php
namespace Akash\Form;
use Akash\Model\Post;
use Zend\Hydrator\Reflection as ReflectionHydrator;
use Zend\Form\Fieldset;

class PostFieldset extends Fieldset{
	public function init()
	{
		$this-setHydrator(new ReflectionHydrator());
		$this->setObject(new Post('',''));


		$this->add([
			'type'=>'hidden',
			'name'=>'id',
		]);

		$this->add([
			'type'=>'text',
			'name'=>'title',
			'option'=>[
				'label'=>'Post Title',
			]
		]);
	}
}

<?php
namespace Akash;
class Module
{
	public function getconfig()
	{
        return include __DIR__ . '/../config/module.config.php';
	}
}
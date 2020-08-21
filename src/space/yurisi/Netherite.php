<?php

namespace space\yurisi;

use pocketmine\plugin\PluginBase;
use space\yurisi\item\ItemFactory;

class Netherite extends PluginBase{
	public function onEnable() {
		ItemFactory::init();
	}
}
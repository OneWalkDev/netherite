<?php
namespace space\yurisi\item;

use pocketmine\item\Axe;
use pocketmine\item\Hoe;
use pocketmine\item\ItemFactory as PMItemFactory;
use pocketmine\item\Pickaxe;
use pocketmine\item\Shovel;
use pocketmine\item\Sword;
use pocketmine\item\TieredTool;

class ItemFactory extends PMItemFactory{
	public static function init(){
		self::registerItem(new Sword(ItemIds::NETHERITE_SWORD,0,"Netherite Sword",TieredTool::TIER_DIAMOND));
		self::registerItem(new Axe(ItemIds::NETHERITE_AXE,0,"Netherite Axe",TieredTool::TIER_DIAMOND));
		self::registerItem(new Hoe(ItemIds::NETHERITE_HOE,0,"Netherite Hoe",TieredTool::TIER_DIAMOND));
		self::registerItem(new Pickaxe(ItemIds::NETHERITE_PICKAXE,0,"Netherite Pickaxe",TieredTool::TIER_DIAMOND));
		self::registerItem(new Shovel(ItemIds::NETHERITE_SHOVEL,0,"Netherite Shovel",TieredTool::TIER_DIAMOND));
		self::registerItem(new NetheriteHelmet());
		self::registerItem(new NetheriteChestplate());
		self::registerItem(new NetheriteLeggings());
		self::registerItem(new NetheriteBoots());
	}
}
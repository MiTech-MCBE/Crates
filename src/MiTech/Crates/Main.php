<?php
/**
 * @Autor MiTech MCBE
 * @copyright 2022 - 2224
*/
namespace MiTech\Crates;

use MiTech\Crates\crate\CrateManager;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase
{
   use SingletonTrait;

   public function onLoad(): void
   {
      self::setInstance($this);
   }
   public function onEnable(): void
   {
      if (!is_dir($this->getDataFolder(). "/crates/")) @mkdir($this->getDataFolder(). "/crates/");

   }
   public function onDisable(): void
   {
      
   }
}

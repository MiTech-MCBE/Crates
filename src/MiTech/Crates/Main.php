<?php
/**
 * @Autor MiTech MCBE
 * @copyright 2022 - 2224
*/
namespace MiTech\Crates;

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

   }
   public function onDisable(): void
   {
      
   }
}

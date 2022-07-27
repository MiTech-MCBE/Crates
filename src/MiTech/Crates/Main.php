namespace MiTech\Crates; 
  
use pocketmine\plugin\PluginBase; 
use pocketmine\utils\SingletonTrait; 
  
class Main extends PluginBase { 
      
     use SingletonTrait; 
      
     public function onLoad(): void { 
         self::setInstance($this);  
     } 
 }

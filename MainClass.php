<?php

namespace: CommandPlugin;

use pocketmine/PluginBase
use pocketmine/command/Command
use pocketmine/command/CommandSender
 
class Main extends PluginBase
{
  public function onEnable()
  {
    $this->getLogger()->info("Plugin aktiviert")
  }
  
  public function onCommand(CommandSender,$sender,Command,$cmd,$label, array $args)
    


  

<?php

namespace Liveset1\Day;

use pocketmine\plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as c;
use pocketmine\Player;

class Main extends PluginBase {

    protected function onLoad(){
        $this->getLogger()->info("Enabling Day");
    }

    public function  onEnable(){
        $this->getLogger()->info("Day Enabled");
    }

    public function onDisable(){
        $this->getLogger()->info("Disabled Day");
    }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args){
       if (strtlower($cmd->getName()) == "day"){
	  if ($sender->hasPermission("day")){
		  $sender->sendMessage(c::BOLD.c::DARK_PURPLE."(!)".c::DARK_AQUA."Time set to day");
	  $sender->getLevel()->setTime(0);
	  }elseIf(!$sender->hasPermission("day")){
		  $sender->sendMessage(c::BOLD.c::DARK_RED."(!)".c::RESET.c::RED." Invaild Permission");
	  }
    } 

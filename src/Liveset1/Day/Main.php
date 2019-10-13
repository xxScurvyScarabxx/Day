<?php

namespace Liveset1\Day;

use pocketmine\network\mcpe\protocol\CommandBlockUpdatePacket;
use pocketmine\plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\utils\TextFormat as c;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\timings;

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

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
        if($cmd->getName() == "day"){
            if(!$sender instanceof Player){ // Basically this checks if the Command Sender is NOT a player
                $sender->sendMessage("This Command Only Works for players! Please perform this command IN GAME!"); // For Console Command Sender
            }else{ //if command sender is not a CONSOLE
                $sender->setTime(Day);
                $sender->sendMessage(c::BLACK."[".c::RED.".".c::BLACK."]".c::BLUE."Time set to Day!");
            }
        }
        return true;
    }


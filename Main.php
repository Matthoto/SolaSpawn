<?php

namespace Matthoto\SolaSpawn;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
    public function onEnable()
    {
        $this->getLogger()->info("Le plugin est activé");
    }
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        $cmdname = $command;
        if($cmdname == "spawn"){
            $p = $sender->getServer()->getPlayer($sender);
            $p->setPosition(new Vector3($p->getSpawn()->getX(), $p->getSpawn()->getY(), $p->getSpawn()->getZ()));
        }
        return true;
    }
}
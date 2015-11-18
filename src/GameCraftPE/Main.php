<?php
namespace TheDeibo\YourPlugin;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;

use TheDeibo\handlers\EventListener;

class Main extends PluginBase {
/* ENABLE ( IS NEEDED TO HELP START THE PLUGIN ) */    
    public function onEnable()
	{
    $this->saveDefaultConfig();
        $this->reloadConfig();
        $this->saveDefaultConfig();
        $this->getLogger()->info(TextFormat::RED . " Yayyy, GameCraftPE-Plugin is running on Version ".$this->getDescription()->getVersion());
    }
/* DISABLE (SAVE IS NEEDED FOR THE CONFIG */
    public function onDisable()
    {
        $this->saveDefaultConfig();
    }
/* ONCOMMAND IA NEEDED. */
    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
	{
        switch($command->getName()){
        case "gamecraftpe":
                $sender->sendMessage . $this->getConfig()->get("1");
                $sender->sendMessage . $this->getConfig()->get("2");
                $sender->sendMessage . $this->getConfig()->get("3");
                $sender->sendMessage . $this->getConfig()->get("4");
                $sender->sendMessage . $this->getConfig()->get("5");
                $sender->sendMessage . $this->getConfig()->get("6");
                $sender->sendMessage . $this->getConfig()->get("7");
                $sender->sendMessage . $this->getConfig()->get("8");
                    return true;
                }
                break;
            }
        }

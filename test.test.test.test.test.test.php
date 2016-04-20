<?php

namespace Prison;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerChatEvent;
use onebone\economyapi\EconomyAPI;
use onebone\economyapi\event\money\AddMoneyEvent;
use onebone\economyapi\event\money\ReduceMoneyEvent;

class Main extends PluginBase implements Listener {
	
	public $prefix = C::AQUA . "- ";
	
	public function onEnable() {
		if(!(is_dir($this->getDataFolder()))) {
            @mkdir($this->getDataFolder());
        }
        if(!(file_exists($this->getDataFolder() . "players.yml"))) {
            $this->saveDefaultConfig();
        }
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Prison Enabled!");
        $this->economy = $this->getServer()->getPluginManager()->getPlugin("EconomyAPI");
        if($this->economy == null) {
            $this->getLogger()->info("EconomyAPI not found.");
        } else {
            $this->getLogger()->info("EconomyAPI loaded!");
        }
	}
	
	public function onJoin(PlayerJoinEvent $event) {
		$config = new Config($this->getDataFolder() . "players.yml", Config::YAML);
		$player = $event->getPlayer();
		$name = $player->getName();
		if($config->get($name) == null) {
			$config->set($name, "A");
		}
		elseif($config->get($name) == "A") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "A" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "A" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "A" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "B") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "B" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "B" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "B" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "C") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "C" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "C" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "C" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "D") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "D" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "D" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "D" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "E") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "E" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "E" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "E" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "F") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "F" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "F" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "F" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "G") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "G" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "G" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "G" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "H") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "H" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "H" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "H" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "I") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "I" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "I" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "I" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "J") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "J" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "J" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "J" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "K") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "K" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "K" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "K" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "L") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "L" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "L" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "L" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "M") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "M" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "M" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "M" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "N") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "N" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "N" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "N" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "O") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "O" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "O" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "O" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "P") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "P" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "P" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "P" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "Q") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "Q" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "Q" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "Q" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "R") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "R" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "R" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "R" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "S") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "S" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "S" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "S" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "T") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "T" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "T" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "T" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "U") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "U" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "U" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "U" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "V") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "V" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "V" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "V" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "W") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "W" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "W" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "W" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "X") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "X" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "X" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "X" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "Y") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "Y" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "Y" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "Y" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		elseif($config->get($name) == "Z") {
			$player->sendMessage(C::AQUA . "- " . C::GRAY . "Welcome back, " . C::GREEN . $name . C::GRAY . " ! You are in Rank: " . C::GREEN . "Z" . C::GRAY . "!");
			$player->setNameTag(C::GRAY . "[ " . C::AQUA . "Z" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
			$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "Z" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
		}
		$config->save();
		$config->reload();
	}
	
	public function onCommand(CommandSender $player, Command $command, $label, array $args) {
        if($player instanceof Player) {
            $config = new Config($this->getDataFolder() . "players.yml", Config::YAML);
            $name = $player->getName();
            switch($command->getName()) {
                case "rankup":
                    //Rank A
                    if($config->get($name) == "A") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 5000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 5000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "B" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "B" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "B");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to B!");
                        } else {
							switch($reduce){
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
                    //Rank B
                    elseif($config->get($name) == "B") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 10000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 10000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "C" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "C" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "C");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to C!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
                    //Rank C
                    elseif($config->get($name) == "C") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 15000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 15000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "D" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "D" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "D");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to D!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
                    //Rank D
                    elseif($config->get($name) == "D") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 20000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 20000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "E" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "E" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "E");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to E!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank E
                    elseif($config->get($name) == "E") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 25000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 25000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "F" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "F" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "F");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to F!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank F
                    elseif($config->get($name) == "F") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 30000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 30000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "G" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "G" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "G");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to G!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank G
                    elseif($config->get($name) == "G") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 35000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 35000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "H" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "H" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "H");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to H!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank H
                    elseif($config->get($name) == "H") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 40000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 40000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "I" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "I" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "I");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to I!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank I
                    elseif($config->get($name) == "I") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 45000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 45000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "J" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "J" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "J");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to J!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank J
                    elseif($config->get($name) == "J") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 50000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 50000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "K" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "K" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "K");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to K!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank K
                    elseif($config->get($name) == "K") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 55000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 55000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "L" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "L" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "L");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to L!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank L
                    elseif($config->get($name) == "L") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 60000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 60000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "M" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "M" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "M");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to M!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank M
                    elseif($config->get($name) == "M") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 65000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 65000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "N" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "N" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "N");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to N!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank N
                    elseif($config->get($name) == "N") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 70000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 70000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "O" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "O" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "O");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to O!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank O
                    elseif($config->get($name) == "O") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 75000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 75000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "P" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "P" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "P");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to P!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank P
                    elseif($config->get($name) == "P") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 80000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 80000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "Q" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "Q" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "Q");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to Q!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank Q
                    elseif($config->get($name) == "Q") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 85000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 85000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "R" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "R" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "R");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to R!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank R
                    elseif($config->get($name) == "R") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 90000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 90000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "S" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "S" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "S");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to S!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank S
                    elseif($config->get($name) == "S") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 95000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 95000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "T" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "T" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "T");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to T!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank T
                    elseif($config->get($name) == "T") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 100000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 100000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "U" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "U" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "U");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to U!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank U
                    elseif($config->get($name) == "U") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 105000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 105000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "V" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "V" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "V");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to V!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank V
                    elseif($config->get($name) == "V") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 110000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 110000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "W" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "W" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "W");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to W!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank W
                    elseif($config->get($name) == "W") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 115000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 115000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "X" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "X" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "X");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to X!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank X
                    elseif($config->get($name) == "X") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 120000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 120000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "Y" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "Y" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "Y");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to Y!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank Y
                    elseif($config->get($name) == "Y") {
                        if($reduce = EconomyAPI::getInstance()->reduceMoney($player, 125000)) {
                            EconomyAPI::getInstance()->reduceMoney($player, 125000);
							$player->setNameTag(C::GRAY . "[ " . C::AQUA . "Z" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
							$player->setDisplayName(C::GRAY . "[ " . C::AQUA . "Z" . C::GRAY . " ] " . C::GREEN . $name . C::RESET);
                            $config->set($name, "Z");
                            $config->save();
                            $player->sendMessage($this->prefix . C::GREEN . "You have ranked up to Z!");
                        } else {
							switch($reduce) {
								case EconomyAPI::RET_INVALID:
									$player->sendMessage($this->prefix . C::RED . "You do not have enough money!");
								break;
							}
						}
                    }
					//Rank Z
                    elseif($config->get($name) == "Z") {
						$player->sendMessage($this->prefix . C::RED . "You have ranked to maximum rank!");
                    }
                break;
				case "warp":
					if(!(isset($args[0]))) {
						$player->sendMessage($this->prefix . C::GREEN . "Warps: A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z, Craft, Furnace, Enchant, Lab");
					}
					if($args[0] == "a") {
						$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine A!");
					}
					if($args[0] == "b") {
						if($config->get($name) == "A") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine B!");
						}
					}
					if($args[0] == "c") {
						if($config->get($name) == "A" or $config->get($name) == "B") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine C!");
						}
					}
					if($args[0] == "d") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine D!");
						}
					}
					if($args[0] == "e") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine E!");
						}
					}
					if($args[0] == "f") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine F!");
						}
					}
					if($args[0] == "g") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine G!");
						}
					}
					if($args[0] == "h") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine H!");
						}
					}
					if($args[0] == "i") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine I!");
						}
					}
					if($args[0] == "j") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine J!");
						}
					}
					if($args[0] == "k") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine K!");
						}
					}
					if($args[0] == "l") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine L!");
						}
					}
					if($args[0] == "m") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine M!");
						}
					}
					if($args[0] == "n") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine N!");
						}
					}
					if($args[0] == "o") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine O!");
						}
					}
					if($args[0] == "p") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine P!");
						}
					}
					if($args[0] == "q") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine Q!");
						}
					}
					if($args[0] == "r") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P" or $config->get($name) == "Q") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine R!");
						}
					}
					if($args[0] == "s") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P" or $config->get($name) == "Q" or $config->get($name) == "R") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine S!");
						}
					}
					if($args[0] == "t") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P" or $config->get($name) == "Q" or $config->get($name) == "R" or $config->get($name) == "S") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine T!");
						}
					}
					if($args[0] == "u") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P" or $config->get($name) == "Q" or $config->get($name) == "R" or $config->get($name) == "S" or $config->get($name) == "T") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine U!");
						}
					}
					if($args[0] == "v") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P" or $config->get($name) == "Q" or $config->get($name) == "R" or $config->get($name) == "S" or $config->get($name) == "T" or $config->get($name) == "U") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine V!");
						}
					}
					if($args[0] == "w") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P" or $config->get($name) == "Q" or $config->get($name) == "R" or $config->get($name) == "S" or $config->get($name) == "T" or $config->get($name) == "U" or $config->get($name) == "V") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine W!");
						}
					}
					if($args[0] == "x") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P" or $config->get($name) == "Q" or $config->get($name) == "R" or $config->get($name) == "S" or $config->get($name) == "T" or $config->get($name) == "U" or $config->get($name) == "V" or $config->get($name) == "w") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine X!");
						}
					}
					if($args[0] == "y") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P" or $config->get($name) == "Q" or $config->get($name) == "R" or $config->get($name) == "S" or $config->get($name) == "T" or $config->get($name) == "U" or $config->get($name) == "V" or $config->get($name) == "w" or $config->get($name) == "X") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine Y!");
						}
					}
					if($args[0] == "z") {
						if($config->get($name) == "A" or $config->get($name) == "B" or $config->get($name) == "C" or $config->get($name) == "D" or $config->get($name) == "E" or $config->get($name) == "F" or $config->get($name) == "G" or $config->get($name) == "H" or $config->get($name) == "I" or $config->get($name) == "J" or $config->get($name) == "K" or $config->get($name) == "L" or $config->get($name) == "M" or $config->get($name) == "N" or $config->get($name) == "O" or $config->get($name) == "P" or $config->get($name) == "Q" or $config->get($name) == "R" or $config->get($name) == "S" or $config->get($name) == "T" or $config->get($name) == "U" or $config->get($name) == "V" or $config->get($name) == "w" or $config->get($name) == "X" or $config->get($name) == "Y") {
							$player->sendMessage($this->prefix . C::RED . "You aren't in that rank yet!");
						}
						else {
							$player->sendMessage($this->prefix . C::GREEN . "Teleporting you to mine Z!");
						}
					}
				break;
            }
        } else {
            $player->sendMessage("Run command in-game.");
        }
		$config->save();
		$config->reload();
    }
	
	public function onChat(PlayerChatEvent $event){
		$event->setFormat("§a%s§7:§r §f%s");
	}
}

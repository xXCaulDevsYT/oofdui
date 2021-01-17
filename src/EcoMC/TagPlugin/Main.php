<?php

namespace EcoMC\TagPlugin;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

use onebone\economyapi\EconomyAPI;

class main extends PluginBase implements Listener {
    
    public function onEnable(){

    }

    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

        switch($cmd->getName()){
            case "tags":
                if($sender instanceof Player){
                    $this->tagui($sender);
                }
        }
    return true;
    }

    public function tagui($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                    if($player->hasPermission("bruh.tag")){
                        $player->setDisplayName("§7[§l§eBRUH§r§7] §r" . $player->getName());
                        $player->sendMessage("§l§8(§a!§8) §r§7You have equipped the [§l§eBRUH§r§7] tag!")
                    } else {
                        $this->bruhshop($player);
                        return true;
                    }
            }

            break;
            
            case 1;
                if($player->hasPermission("rainbow.tag")){
                    $player->setDisplayName("§7[§cR§6A§eI§aN§bB§pO§5W§7] §r" . $player->getName());
                    $player->sendMessage("§l§8(§a!§8) §r§7You have equipped the §7[§cR§6A§eI§aN§bB§pO§5W§7] tag!")
                } else {
                    $this->rainbowshop($player);
                    return true;
            }


             break;

            case 2;
            if($player->hasPermission("god.tag")){
                $player->setDisplayName("§7[§l§dGOD§r§7] §r" . $player->getName());
                $player->sendMessage("§l§8(§a!§8) §r§7You have equipped the [§l§dGOD§r§7] tag!")
            } else {
                $this->godshop($player);
                return true;
            }


             break;

            case 3;
            if($player->hasPermission("og.tag")){
                $player->setDisplayName("§7[§l§dOG§r§7] §r" . $player->getName());
                $player->sendMessage("§l§8(§a!§8) §r§7You have equipped the [§l§6OG§r§7] tag!")
            } else {
                $this->ogshop($player);
                return true;
            }


             break;

             case 4;
             if($player->hasPermission("trash.tag")){
                 $player->setDisplayName("§7[§l§0TRASH§r§7] §r" . $player->getName());
                 $player->sendMessage("§l§8(§a!§8) §r§7You have equipped the [§l§0TRASH§r§7] tag!")
            } else {
                $this->trashshop($player);
                return true;
            }


             break;

             case 5;
             if($player->hasPermission("slime.tag")){
                 $player->setDisplayName("§7[§l§aSLIME§r§7] §r" . $player->getName());
                 $player->sendMessage("§l§8(§a!§8) §r§7You have equipped the [§l§aSLIME§r§7] tag!")
            } else {
                $this->slimeshop($player);
                return true;
            }

            }
        });
        $form->setTittle("§cSuper §fCool §9TagShop");
        $form->setContent("§cSelect the super cool tag that you would like");
        $form->addButton("§7[§eBruh§7]");
        $form->addButton("§7[§cR§6A§eI§aN§bB§pO§5W§7]");
        $form->addButton("§7[§dGOD§7]");
        $form->addButton("§7[§6OG§7]");
        $form->addButton("§7[§0Trash§7]");
        $form->addButton("§7[§aSlime§7]");     
        $form->sendToPlayer($player);
        return $form; 
    }

    public function bruhshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 100000){
                       EconomyAPI::getInstance()->reduceMoney($player, 100000);
                       $player->addAttachment($this, "bruh.tag", true);
                   } else {
                       $player->sendMessage("§l§8(§a!§8) §r§7You cannot afford this tag!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§l§8Tag Shop");
        $form->setContent("§l§7* §r§bTag: §r§7Bruh\n§l§7* §r§bPrice: §7$100,000");
        $form->addButton("Purchase");
        $form->addButton("§cExit");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function rainbowshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 1000000){
                       EconomyAPI::getInstance()->reduceMoney($player, 1000000);
                       $player->addAttachment($this, "rainbow.tag", true);
                   } else {
                       $player->sendMessage("§l§8(§a!§8) §r§7You cannot afford this tag!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§l§8Tag Shop");
        $form->setContent("§l§7* §r§bTag: §r§7Rainbow\n§l§7* §r§bPrice: §7$1,000,000");
        $form->addButton("Purchase");
        $form->addButton("§cExit");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function godshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 200000){
                       EconomyAPI::getInstance()->reduceMoney($player, 200000);
                       $player->addAttachment($this, "god.tag", true);
                   } else {
                       $player->sendMessage("§l§8(§a!§8) §r§7You cannot afford this tag!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§l§8Tag Shop");
        $form->setContent("§l§7* §r§bTag: §r§7God\n§l§7* §r§bPrice: §7$200,000");
        $form->addButton("Purchase");
        $form->addButton("§cExit");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function ogshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 100000000){
                      EconomyAPI::getInstance()->reduceMoney($player, 100000000);
                       $player->addAttachment($this, "og.tag", true);
                   } else {
                       $player->sendMessage("§l§8(§a!§8) §r§7You cannot afford this tag!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§l§8Tag Shop");
        $form->setContent("§l§7* §r§bTag: §r§7OG\n§l§7* §r§bPrice: §7$100,000,000");
        $form->addButton("Purchase");
        $form->addButton("§cExit");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function trashshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 500000){
                       EconomyAPI::getInstance()->reduceMoney($player, 500000);
                       $player->addAttachment($this, "trash.tag", true);
                   } else {
                       $player->sendMessage("§l§8(§a!§8) §r§7You cannot afford this tag!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§l§8Tag Shop");
        $form->setContent("§l§7* §r§bTag: §r§7Trash\n§l§7* §r§bPrice: §7$500,000");
        $form->addButton("Purchase");
        $form->addButton("§cExit");    
        $form->sendToPlayer($player);
        return $form; 
    }

    public function slimeshop($player){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $player, int $data = null){
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0;
                   $money = EconomyAPI::getInstance()->myMoney($player)
                   if($money >= 10000){
                       EconomyAPI::getInstance()->reduceMoney($player, 10000);
                       $player->addAttachment($this, "slime.tag", true);
                   } else {
                       $player->sendMessage("§l§8(§a!§8) §r§7You cannot afford this tag!")
                   }
                break;
            
                case 1;

                break;

                case 2;

                break;

                case 3;
 
                break;

                case 4;
  
                break;

                case 5;

                break;
            }
        });
        $form->setTittle("§l§8Tag Shop");
        $form->setContent("§l§7* §r§bTag: §r§7Slime\n§l§7* §r§bPrice: §7$10,000");
        $form->addButton("Purchase");
        $form->addButton("§cExit");    
        $form->sendToPlayer($player);
        return $form; 
    }

}

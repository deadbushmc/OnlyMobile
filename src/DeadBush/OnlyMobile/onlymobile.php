<?php

declare(strict_types = 1);

namespace DeadBush\OnlyMobile;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\LoginPacket;

class onlymobile extends PluginBase implements Listener{

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function DataPacketReceive(DataPacketReceiveEvent $event){
        $player = $event->getPlayer();
        $os = $event->getPacket();
        if ($os instanceof LoginPacket){
            if ($os->clientData["DeviceOS"] == 7){
                $player->kick("§l§6You can only join this server with Mobile Devices\n§r§eYou are on Win10", false);
            }elseif($os->clientData["DeviceOS"] == 3){
                $player->kick("§l§6You can only join this server with Mobile Devices\n§r§eYou are on MacOs", false);
            }elseif($os->clientData["DeviceOS"] == 5){
                $player->kick("§l§6You can only join this server with Mobil Devicese Devices\n§r§eYou are on GearVR", false);
            }elseif($os->clientData["DeviceOS"] == 6){
                $player->kick("§l§6You can only join this server with Mobil Devicese Devices\n§r§eYou are on HoloLens", false);
            }elseif($os->clientData["DeviceOS"] == 8){
                $player->kick("§l§6You can only join this server with Mobile Devices\n§r§eYou are on Win32", false);
            }elseif($os->clientData["DeviceOS"] == 10){
                $player->kick("§l§6You can only join this server with Mobile Devices\n§r§eYou are on TVOS", false);
            }elseif($os->clientData["DeviceOS"] == 11){
                $player->kick("§l§6You can only join this server with Mobile Devices\n§r§eYou are on Console", false);
            }elseif($os->clientData["DeviceOS"] == 12){
                $player->kick("§l§6You can only join this server with Mobile Devices\n§r§eYou are on NXOS", false);
            }
        }
    }
}

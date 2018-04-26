<?php

namespace semteul\directauction\task;

use semteul\directauction\DirectAuction;

use pocketmine\scheduler\PluginTask;

class DirectAuctionTask extends PluginTask {
	function __construct(DirectAuction $owner) {
		parent::__construct($owner);
	}
	public function onRun(int $currentTick) {
		$owner = $this->getOwner();
		$owner->auctionTick();
	}
}

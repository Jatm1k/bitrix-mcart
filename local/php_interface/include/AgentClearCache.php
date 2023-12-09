<?php

$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'AgentOnAfterAdd', Array("Agent", "ClearCache"));
$eventManager->addEventHandler('', 'AgentOnAfterUpdate', Array("Agent", "ClearCache"));
$eventManager->addEventHandler('', 'AgentOnAfterDelete', Array("Agent", "ClearCache"));

class Agent {
		static function ClearCache(\Bitrix\Main\Entity\Event $event) {
				$entity = $event->getEntity();
				$tableName = $entity->getDBTableName();
				$taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
				$taggedCache->clearByTag('hlblock_table_name_' . $tableName);
	}
}

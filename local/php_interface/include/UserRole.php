<?php

AddEventHandler("main", "OnAfterUserAdd", Array("UserRole", "AfterUserAdd"));

class UserRole
{
	static function AfterUserAdd(&$arFields)
	{
		$userID = $arFields["ID"];
		$roleGroup[] = $arFields["UF_USER_ROLE"] ? 7 : 6;
		CUser::SetUserGroup($userID, array_merge(CUser::GetUserGroup($userID), $roleGroup));
	}
}
?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<div class="site-section">
	<div class="container">
		<div class="row">
		
			<div class="col-md-12 col-lg-12 mb-5">

<?
if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
{
	ShowMessage($arResult['ERROR_MESSAGE']);
}
?>

<?if($arResult["FORM_TYPE"] == "login"):?>


<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="p-5 bg-white border">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
<?foreach ($arResult["POST"] as $key => $value):?>
	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
<?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />

	<div class="row form-group">
		<div class="col-md-12 mb-3 mb-md-0">
			<label class="font-weight-bold" for="USER_LOGIN">
				<?=GetMessage("AUTH_LOGIN")?>
			</label>
			<input type="text" id="USER_LOGIN" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>" class="form-control">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-12 mb-3 mb-md-0">
			<label class="font-weight-bold" for="USER_PASSWORD">
				<?=GetMessage("AUTH_PASSWORD")?>
			</label>
			<input type="password" id="USER_PASSWORD" name="USER_PASSWORD" value="<?=$arResult["USER_PASSWORD"]?>" class="form-control">
		</div>
	</div>


<?if ($arResult["CAPTCHA_CODE"]):?>
			<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
			<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
			<input type="text" name="captcha_word" maxlength="50" value="" /></td>
<?endif?>
	<div class="row form-group">
		<div class="col-md-12">
			<input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" class="btn btn-primary  py-2 px-4 rounded-0">
		</div>
	</div>
<?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
	<noindex><a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a></noindex><br />

<?endif?>
	<!-- <noindex><a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a></noindex> -->

</form>


<?
else:
?>

<form action="<?=$arResult["AUTH_URL"]?>">
		<?=$arResult["USER_NAME"]?><br />
		[<?=$arResult["USER_LOGIN"]?>]<br />
		<!-- <a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a><br /> -->

	<?foreach ($arResult["GET"] as $key => $value):?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
	<?endforeach?>
	<?=bitrix_sessid_post()?>
	<input type="hidden" name="logout" value="yes" />
	<div class="row form-group">
		<div class="col-md-12">
			<input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" class="btn btn-primary  py-2 px-4 rounded-0">
		</div>
	</div>
</form>
<?endif?>
</div>
</div>
</div>

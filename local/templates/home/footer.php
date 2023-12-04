<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <?$APPLICATION->IncludeComponent(
          "bitrix:main.include", 
          ".default", 
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => SITE_TEMPLATE_PATH . "/components/footer/about.php"
          ),
          false
      );?>

      <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
          "ALLOW_MULTI_SELECT" => "N",
          "CHILD_MENU_TYPE" => "left",	
          "DELAY" => "N",	
          "MAX_LEVEL" => "1",	
          "MENU_CACHE_GET_VARS" => "",	
          "MENU_CACHE_TIME" => "36000000",	
          "MENU_CACHE_TYPE" => "A",	
          "MENU_CACHE_USE_GROUPS" => "Y",	
          "ROOT_MENU_TYPE" => "top",	
          "USE_EXT" => "N",	
          "COMPONENT_TEMPLATE" => ".default"
        ),
        false
      );?>

      <?$APPLICATION->IncludeComponent(
          "bitrix:main.include", 
          ".default", 
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => SITE_TEMPLATE_PATH . "/components/footer/socials.php"
          ),
          false
      );?>

    </div>
      <?$APPLICATION->IncludeComponent(
          "bitrix:main.include", 
          ".default", 
          array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "COMPONENT_TEMPLATE" => ".default",
            "PATH" => SITE_TEMPLATE_PATH . "/components/footer/copyright.php"
          ),
          false
      );?>
  </div>
</footer>

</div>
<?
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/popper.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/aos.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/main.js");
?>

</body>

</html>
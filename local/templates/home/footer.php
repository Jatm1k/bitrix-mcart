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
              "PATH" => "/local/templates/home/components/footer/about.php"
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
              "PATH" => "/local/templates/home/components/footer/socials.php"
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
              "PATH" => "/local/components/footer/copyright.php"
            ),
            false
        );?>
    </div>
  </footer>

  </div>
<?
	$APPLICATION->AddHeadScript("/local/templates/home/js/jquery-3.3.1.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/jquery-migrate-3.0.1.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/jquery-ui.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/popper.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/bootstrap.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/owl.carousel.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/mediaelement-and-player.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/jquery.stellar.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/jquery.countdown.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/jquery.magnific-popup.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/bootstrap-datepicker.min.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/aos.js");
	$APPLICATION->AddHeadScript("/local/templates/home/js/main.js");
?>

</body>

</html>
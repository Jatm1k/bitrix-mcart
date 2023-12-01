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
              "PATH" => "/local/components/footer/about.php"
            ),
            false
        );?>
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4">Navigations</h3>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Buy</a></li>
                <li><a href="#">Rent</a></li>
                <li><a href="#">Properties</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-6">
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Terms</a></li>
              </ul>
            </div>
          </div>


        </div>
        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	".default", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
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
              "PATH" => "/local/components/footer/socials.php"
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
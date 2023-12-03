<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowHead();?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

	<?
	
	$APPLICATION->SetAdditionalCSS("/local/templates/home/fonts/icomoon/style.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/bootstrap.min.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/magnific-popup.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/jquery-ui.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/owl.carousel.min.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/owl.theme.default.min.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/bootstrap-datepicker.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/mediaelementplayer.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/animate.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/fonts/flaticon/font/flaticon.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/fl-bigmug-line.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/aos.css");
	$APPLICATION->SetAdditionalCSS("/local/templates/home/css/style.css");
	?>

</head>

<body>
	<?$APPLICATION->ShowPanel();?>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">
                  <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include", 
                      ".default", 
                      array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => "/local/components/header/phone.php"
                      ),
                      false
                    );?>
                </span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2">
                <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include", 
                      ".default", 
                      array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => "/local/components/header/mail.php"
                      ),
                      false
                    );?>
                </span></a>
            </p>
          </div>
          <?$APPLICATION->IncludeComponent(
                "bitrix:main.include", 
                ".default", 
                array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "COMPONENT_TEMPLATE" => ".default",
                  "PATH" => "/local/components/header/socials.php"
                ),
                false
              );?>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class=""><a href="/" class="h5 text-uppercase text-black"><strong>
                    <?$APPLICATION->IncludeComponent(
                      "bitrix:main.include", 
                      ".default", 
                      array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => "/local/components/header/logo.php"
                      ),
                      false
                    );?></strong></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
              "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "3",
                "MENU_CACHE_GET_VARS" => "",
                "MENU_CACHE_TIME" => "36000000",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N",
                "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                "MENU_THEME" => "site"
              ),
              false
            );?>
          </div>
        </div>
      </div>
    </div>
  </div>
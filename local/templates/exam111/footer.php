<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
</div>
                </div>
                <!-- /content -->
                <!-- side -->
                <div class="side">
                    <!-- side menu -->
                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y"
	),
	false
);?>
                    <!-- /side menu -->
                    <!-- side anonse -->

                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "useful", Array(
                            "AREA_FILE_RECURSIVE" => "Y",	// Рекурсивное подключение включаемых областей разделов
                                "AREA_FILE_SHOW" => "sect",	// Показывать включаемую область
                                "AREA_FILE_SUFFIX" => "inc",	// Суффикс имени файла включаемой области
                                "EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
                            ),
                            false
                        );?>

                    <!-- /side anonse -->
                    <!-- side wrap -->
                    <div class="side-wrap">
                        <div class="item-wrap">
                            <!-- side action -->
                            <div class="side-block side-action">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action-bg.jpg" alt="" class="bg">
                                <div class="photo-block">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/side-action.jpg" alt="">
                                </div>
                                <div class="text-block">
                                    <div class="title">Акция!</div>
                                    <p>Мебельная полка всего за 560 <span class="r">a</span>
                                    </p>
                                </div>
                                <a href="" class="btn-more">подробнее</a>
                            </div>
                            <!-- /side action -->
                        </div>
                        
                       <!-- footer rew slider box -->
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.line",
                            "slider",
                            Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "CACHE_GROUPS" => "Y",
                                "CACHE_TIME" => "300",
                                "CACHE_TYPE" => "A",
                                "COMPONENT_TEMPLATE" => "slider",
                                "DETAIL_URL" => "",
                                "FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"PROPERTY_COMPANY",2=>"PROPERTY_POSITION",3=>"",),
                                "IBLOCKS" => array(0=>"12",),
                                "IBLOCK_TYPE" => "review",
                                "NEWS_COUNT" => "2",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_BY2" => "NAME",
                                "SORT_ORDER1" => "DESC",
                                "SORT_ORDER2" => "ASC"
                            )
                        );?>
						<!-- / footer rew slider box --> 
                        
                    </div>
                    <!-- /side wrap -->
                </div>
                <!-- /side -->
            </div>
            <!-- /content box -->
        </div>
        <!-- /page -->
        <div class="empty"></div>
    </div>
    <!-- /wrap -->
    <!-- footer -->
    <footer class="footer">
        <div class="inner-wrap">
            <nav class="main-menu">
                <div class="item">
                    <div class="title-block">О магазине</div>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "bottom",
                            Array(
                                "ALLOW_MULTI_SELECT" => "N",
                                "CHILD_MENU_TYPE" => "left",
                                "COMPONENT_TEMPLATE" => ".default",
                                "DELAY" => "N",
                                "MAX_LEVEL" => "1",
                                "MENU_CACHE_GET_VARS" => "",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "ROOT_MENU_TYPE" => "bottom_ex",
                                "USE_EXT" => "N"
                            )
                        );?>
                </div>
                <div class="item">
                    <div class="title-block">Каталог товаров</div>
                    <ul>
                        <li><a href="">Кухни</a>
                        </li>
                        <li><a href="">Гарнитуры</a>
                        </li>
                        <li><a href="">Спальни и матрасы</a>
                        </li>
                        <li><a href="">Столы и стулья</a>
                        </li>
                        <li><a href="">Раскладные диваны</a>
                        </li>
                        <li><a href="">Кресла</a>
                        </li>
                        <li><a href="">Кровати и кушетки</a>
                        </li>
                        <li><a href="">Тумобчки и прихожие</a>
                        </li>
                        <li><a href="">Аксессуары</a>
                        </li>
                        <li><a href="">Каталоги мебели</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="contacts-block">
                <div class="title-block"><?=GetMessage('FOOTER_TITLE_CONTACT_INFORMATION')?></div>
                <div class="loc-block">
                    <div class="address">ул. Летняя, стр.12, офис 512</div>
                    <div class="phone"><a href="tel:84952128506">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH . "/components/include_area/number.php"
                            )
                        );?>
                    </a>
                    </div>
                </div>
                <div class="main-soc-block">
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc01.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc02.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc03.png" alt="">
                    </a>
                    <a href="" class="soc-item">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/icons/soc04.png" alt="">
                    </a>
                </div>
                <div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
</body>

</html>
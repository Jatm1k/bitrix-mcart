<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
	<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);" data-aos="fade" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row align-items-center justify-content-center text-center">
				<div class="col-md-10">
					<span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?=GetMessage('HERO_SUPTITLE')?></span>
					<h1 class="mb-2"><?=$arResult["NAME"]?></h1>
					<p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong></p>
				</div>
			</div>
		</div>
	</div>
<?endif;?>
<div class="site-section site-section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-8" style="margin-top: -150px;">
				<?if(is_array($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"])):?>
					<div class="mb-5">
						<div class="slide-one-item home-slider owl-carousel">
							<?if(count($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["VALUE"]) > 1):?>
								<?foreach($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"] as $image):?>
								<div><img src="<?=$image['SRC']?>" alt="Image" class="img-fluid"></div>
								<?endforeach;?>
							<?else:?>
								<div><img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]['SRC']?>" alt="Image" class="img-fluid"></div>
							<?endif;?>
						</div>
					</div>
				<?endif;?>
				<div class="bg-white">
					<div class="row mb-5">
						<div class="col-md-6">
							<strong class="text-success h1 mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong>
						</div>
						<div class="col-md-6">
							<ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
							<li>
								<span class="property-specs"><?=GetMessage('UPDATED_TEXT')?></span>
								<span class="property-specs-number"><?= FormatDate('x', MakeTimeStamp($arResult["FIELDS"]["TIMESTAMP_X"])) ?></span>
								
							</li>
							<li>
								<span class="property-specs"><?=GetMessage('NUMBER_OF_FLOORS_TEXT')?></span>
								<span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_FLOORS"]["VALUE"]?></span>
								
							</li>
							<li>
								<span class="property-specs"><?=GetMessage('TOTAL_AREA_TEXT')?></span>
								<span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"]?></span>
								
							</li>
						</ul>
						</div>
					</div>
					<div class="row mb-5">
						<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
							<span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage('NUMBER_OF_BATHROOMS_TEXT')?></span>
							<strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_BATHROOMS"]["VALUE"]?></strong>
						</div>
						<div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
							<span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage('GARAGE_AVAILABILITY_TEXT')?></span>
							<strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["GARAGE_AVAILABILITY"]["VALUE"] ? 'Есть' : 'Нет'?></strong>
						</div>
					</div>
					<h2 class="h4 text-black"><?=GetMessage('MORE_INFO_TITLE')?></h2>
					<p><?=$arResult["DETAIL_TEXT"]?></p>
					<?if(is_array($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"])):?>
						<div class="row mt-5">
							<div class="col-12">
								<h2 class="h4 text-black mb-3"><?=GetMessage('GALLERY_TITLE')?></h2>
							</div>
							<?if(count($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["VALUE"]) > 1):?>
								<?foreach($arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"] as $image):?>
									<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
										<a href="<?=$image['SRC']?>" class="image-popup gal-item"><img src="<?=$image['SRC']?>" alt="Image" class="img-fluid"></a>
									</div>
								<?endforeach;?>
							<?else:?>
								<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
									<a href="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult["DISPLAY_PROPERTIES"]["IMAGE_GALLERY"]["FILE_VALUE"]['SRC']?>" alt="Image" class="img-fluid"></a>
								</div>
							<?endif;?>
						</div>
					<?endif;?>
				</div>
				<?if(is_array($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"])):?>
					<div class="row mt-5">
						<div class="col-12">
							<h2 class="h4 text-black mb-3"><?=GetMessage('ADDITIONAL_TITLE')?></h2>
						</div>
						<div class="additional col-sm-6 col-md-4 col-lg-3 mb-4">
							<?if(is_array($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["DISPLAY_VALUE"])):?>
								<?foreach($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["DISPLAY_VALUE"] as $file):?>
									<?= $file ?>
								<?endforeach;?>
							<?else:?>
								<?= $arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_MATERIALS"]["DISPLAY_VALUE"] ?>
							<?endif;?>
						</div>
					</div>
				<?endif;?>
			</div>
			<div class="col-lg-4 pl-md-5">

				<div class="bg-white widget border rounded">

					<h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
					<form action="" class="form-contact-agent">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" id="name" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="phone">Phone</label>
							<input type="text" id="phone" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" id="phone" class="btn btn-primary" value="Send Message">
						</div>
					</form>
				</div>

				<div class="bg-white widget border rounded">
					<h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
				</div>

			</div>
			
		</div>
	</div>
</div>

<div id="<?php awe_widget_id($weather); ?>" class="<?php echo $background_classes ?>" <?php echo $inline_style; ?>>

	<?php if ($weather->background_image) { ?>
		<div class="awesome-weather-up-cover" style="background-image: url(<?php echo $weather->background_image; ?>);">
			<div class="awesome-weather-up-darken">
			<?php } ?>

			<?php awe_change_weather_form($weather); ?>

			<div class="awesome-weather-up-header"><span><?php echo $header_title; ?><?php awe_change_weather_trigger($weather); ?></span></div>

			<div class="awesome-weather-up-showcase-padding">&nbsp;</div>

			<div class="awecf">

				<?php if (isset($weather->data['current'])) { ?>

					<?php if ($weather->show_stats) { ?>
						<div class="awesome-weather-up-todays-stats">
							<div class="awe_desc">
								<?php if ($weather->show_icons) { ?><i class="<?php echo $weather->data['current']['icon']; ?>"></i><?php } ?>
								<?php echo $weather->data['current']['description']; ?>
							</div>
						</div><!-- /.awesome-weather-up-todays-stats -->
					<?php } ?>

				<?php } ?>

				<?php if ($weather->forecast_days != "hide") { ?>

					<div class="awesome-weather-up-forecast awecf awe_days_<?php echo count($weather_forecast); ?>">


						<?php if (isset($weather->data['current'])) { ?>
							<div class="awesome-weather-up-forecast-day">
								<div class="awesome-weather-up-forecast-day-abbr"><?php echo $weather->t->now; ?></div>
								<div class="awesome-weather-up-forecast-day-temp"><?php echo $weather->data['current']['temp']; ?></div>
							</div>
						<?php } ?>

						<?php foreach ($weather_forecast as $forecast) { ?>
							<div class="awesome-weather-up-forecast-day">
								<div class="awesome-weather-up-forecast-day-abbr"><?php echo $forecast->day_of_week; ?></div>
								<div class="awesome-weather-up-forecast-day-temp"><?php echo $forecast->high; ?></div>
							</div>
						<?php } ?>

					</div><!-- /.awesome-weather-up-forecast -->

				<?php } ?>

			</div>

			<?php awe_extended_link($weather); ?>

			<?php awe_attribution($weather); ?>

			<?php if ($weather->background_image) { ?>
			</div><!-- /.awesome-weather-up-cover -->
		</div><!-- /.awesome-weather-up-darken -->
	<?php } ?>

</div><!-- /.awesome-weather-up-wrap: showcase -->
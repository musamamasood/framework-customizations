<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
$galleries = $atts['gallery_box'];
?>
		<div class="section-area">
			<ul id="filter" class="clearfix">
				<li><a href="" data-filter="*" class="current">ALL</a></li>
				<?php
					foreach($galleries as $gallery) :
					$tag = str_replace(' ', '',$gallery['tag']);
				?>
				<li><a href="" data-filter=".<?php echo esc_attr($tag); ?>"><?php echo esc_html($tag); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<!-- end section-area -->
		<div class="section-area">
			<div class="isotope-frame">
				<ul class="isotope-filter gallery list-unstyled">
					<?php
						foreach($galleries as $gallery) :
						$tag = str_replace(' ', '',$gallery['tag']);
						$count = count($gallery['gallery']) - 1;
						$i = 0;
							foreach($gallery['gallery'] as $gal) :
					?>
						<li class="isotope-item <?php echo esc_attr($tag); ?> gallery__item"> <img class="img-responsive" src="<?php echo esc_url($gal['url']); ?>" height="200" width="270" alt=<?php echo esc_attr__('Foto', 'my-theme'); ?>> </li>
							<?php endforeach; ?>
						<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<!-- end section-area -->
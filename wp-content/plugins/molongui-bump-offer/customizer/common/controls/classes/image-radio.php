<?php
defined( 'ABSPATH' ) or exit;
if ( !class_exists('WP_Customize_Control' ) ) include_once ABSPATH . 'wp-includes/class-wp-customize-control.php';
if ( !class_exists( 'Molongui_Customize_Image_Radio_Button_Control' ) )
{
	class Molongui_Customize_Image_Radio_Button_Control extends WP_Customize_Control
	{
		public $type = 'molongui-image-radio';
		public function enqueue()
		{
			wp_enqueue_style(
				'molongui-custom-controls',
				plugin_dir_url( dirname( __FILE__ ) ).'css/styles.min.css',
				array(),
				false,
				'all'
			);
		}
		public function render_content()
		{
			if ( empty( $this->choices ) ) return;
			$input_id         = '_customize-input-' . $this->id;
			$description_id   = '_customize-description-' . $this->id;
			$describedby_attr = ( ! empty( $this->description ) ) ? ' aria-describedby="' . esc_attr( $description_id ) . '" ' : '';
			$string  = 'molongui-compact-';
			$compact = ( substr( $this->type, 0, strlen( $string ) ) === $string ? true : false );

			?>
            <div class="molongui-image-radio-button-control">

			    <?php if ( !$compact ) : ?>

                    <?php if ( !empty( $this->label ) ) : ?>
                        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                    <?php endif; ?>

                    <?php if ( !empty( $this->description ) ) : ?>
                        <span id="<?php echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php echo $this->description; ?></span>
                    <?php endif; ?>

                <?php else : ?>

                    <div class="molongui-compact-setting">
                        <div class="molongui-compact-setting-label"><?php echo $this->label; ?></div>
                        <div class="molongui-compact-setting-input">

                <?php endif; ?>

				<?php foreach ( $this->choices as $key => $value ) : ?>
                    <label class="radio-button-label">
                        <input type="radio" name="<?php echo esc_attr( $this->id ); ?>" data-molongui-setting="<?php echo ( $value['premium'] ? 'premium' : 'free' ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php checked( esc_attr( $key ), $this->value() ); ?> <?php echo $describedby_attr; ?> <?php $this->link(); ?> />
                        <img src="<?php echo esc_attr( $value['image'] ); ?>" alt="<?php echo esc_attr( $value['label'] ); ?>" title="<?php echo esc_attr( $value['label'] ); ?>" />
			            <?php if ( $value['premium'] ) : ?><img class="molongui-premium-setting-label" src="<?php echo MOLONGUI_BUMP_OFFER_URL; ?>assets/img/common/lock.png" title="<?php _e( 'Premium option. Only preview available.', 'molongui-bump-offer' ); ?>" /><?php endif; ?>
                    </label>
				<?php endforeach; ?>

	            <?php if ( $compact ) : ?>

                        </div> <!-- !.molongui-compact-setting-input -->
                    </div> <!-- !.molongui-compact-setting -->

                <?php endif; ?>

            </div> <!-- !.molongui-image-radio-button-control -->
			<?php
		}
	}
}
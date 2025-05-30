<?php

if(!defined('ABSPATH')) die();

class GymFitness_Clases_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'gymfitness_widget',
			esc_html__( 'GymFitness Clases', 'gymfitness' ), 
			array( 'description' => esc_html__( 'Agrega las Clases como Widget', 'gymfitness' ), )
		);
	}

	public function widget( $args, $instance ) {
        ?>
		<ul class="clases-sidebar">
			<?php
			$args = array(
				'post_type' => 'gymfitness_clases',
				'posts_per_page' => $instance['cantidad'],
				'orderby' => 'rand'
			);
	
			$clases = new WP_Query($args);
			while ($clases->have_posts()) {
				$clases->the_post();
			?>
			<li>
				<div class="imagen">
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="contenido-clase">
				<a href="<?php the_permalink(); ?>">
                        <h3> <?php the_title(); ?> </h3>
                    </a>
                    <?php
                    $horainicio = get_field('hora_inicio');
                    $horafin = get_field('hora_fin');
                    ?>
                    <p>
                        <?php
                        the_field('dias_clase');
                        echo " - " . $horainicio . " a " . $horafin;
                        ?>
                    </p>
				</div>
			</li>
			<?php
			}
			wp_reset_postdata();
			?>
		</ul>
	    <?php
	}

    public function form( $instance ) {
        $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : esc_html('Cuantas clases deseas mostrar?');
        ?>
        <p>
            <label for="<?php echo esc_attr_e($this->get_field_id('cantidad')) ?>">
			<?php esc_attr_e('Cuantas clases deseas mostrar?')?>
			</label>

			<input 
			class="widefat"
			id="<?php echo esc_attr_e($this->get_field_id('cantidad')) ?>"
			name="<?php echo esc_attr_e($this->get_field_name('cantidad')) ?>"
			type="number"
			value="<?php echo esc_attr_e($cantidad) ?>"
			/>
        </p>
        <?php
   	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['cantidad'] = (!empty($new_instance['cantidad'])) ? sanitize_text_field($new_instance['cantidad']): " ";
		return $instance;
	}
} 

function gymfitness_registrar_widget() {
    register_widget( 'GymFitness_Clases_Widget' );
}
add_action( 'widgets_init', 'gymfitness_registrar_widget' );
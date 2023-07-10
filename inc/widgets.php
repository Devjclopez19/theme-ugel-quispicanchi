<?php
// WIDGET NOTICIAS
class Noticias_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'side_widget', // Base ID
			esc_html__( 'Noticias', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Lista de las últimas noticias', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
            echo '<div class="sidebar__widget"><div class="sidebar__title"><p>';
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
            echo "</p></div>";
        }
        if ( ! empty( $instance['cantidad'] ) ) {
			$cantidad = $instance['cantidad'];
        }
        echo '<div class="sidebar__content"><ul class="list-unstyled">';
        $args = array(
            'post_type' => 'noticias',
            'posts_per_page' => $cantidad
        );
        $noticias = new WP_Query($args);
        while($noticias->have_posts()): $noticias->the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-double-right"></i> <?php the_title(); ?> </a>
        </li>
        <?php
        endwhile;
        echo "</ul></div></div>";
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Titulo para widget', 'text_domain' );
        $cantidad = ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( '0', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"><?php esc_attr_e( '¿Cuántos noticias deseas mostrar?', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cantidad' ) ); ?>" type="number" value="<?php echo esc_attr( $cantidad ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';
		return $instance;
	}

}
// register Foo_Widget widget
function register_side_widget() {
    register_widget( 'Noticias_Widget' );
}
add_action( 'widgets_init', 'register_side_widget' );

// WIDGET COMUNICADOS
class Comunicados_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'side_widget2', // Base ID
			esc_html__( 'Comunicados', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Lista de las últimos comunicados', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
            echo '<div class="sidebar__widget"><div class="sidebar__title"><p>';
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
            echo "</p></div>";
        }
        if ( ! empty( $instance['cantidad'] ) ) {
			$cantidad = $instance['cantidad'];
        }
        echo '<div class="sidebar__content"><ul class="list-unstyled">';
        $args = array(
            'post_type' => 'comunicados',
            'posts_per_page' => $cantidad
        );
        $comunicados = new WP_Query($args);
        while($comunicados->have_posts()): $comunicados->the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-double-right"></i> <?php the_title(); ?> </a>
        </li>
        <?php
        endwhile;
        echo "</ul></div></div>";
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Titulo para widget', 'text_domain' );
        $cantidad = ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( '0', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"><?php esc_attr_e( '¿Cuántos comunicados deseas mostrar?', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cantidad' ) ); ?>" type="number" value="<?php echo esc_attr( $cantidad ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';
		return $instance;
	}

}
function register_side_widget2() {
    register_widget( 'Comunicados_Widget' );
}
add_action( 'widgets_init', 'register_side_widget2' );

// WIDGET CONVOCATORIAS
class Convocatorias_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'side_widget3', // Base ID
			esc_html__( 'Convocatorias', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Lista de las últimas convocatorias', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
            echo '<div class="sidebar__widget"><div class="sidebar__title"><p>';
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
            echo "</p></div>";
        }
        if ( ! empty( $instance['cantidad'] ) ) {
				$cantidad = $instance['cantidad'];
        }
        echo '<div class="sidebar__content"><ul class="list-unstyled">';
        $args = array(
            'post_type' => 'convocatorias',
            'posts_per_page' => $cantidad
        );
        $convocatorias = new WP_Query($args);
        while($convocatorias->have_posts()): $convocatorias->the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-double-right"></i> <?php the_title(); ?> </a>
        </li>
        <?php
        endwhile;
        echo "</ul></div></div>";
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Titulo para widget', 'text_domain' );
        $cantidad = ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( '0', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"><?php esc_attr_e( '¿Cuántas convocatorias deseas mostrar?', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cantidad' ) ); ?>" type="number" value="<?php echo esc_attr( $cantidad ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';
		return $instance;
	}

}
function register_side_widget3() {
    register_widget( 'Convocatorias_Widget' );
}
add_action( 'widgets_init', 'register_side_widget3' );

// WIDGET COTIZACIONES
class Cotizaciones_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'side_widget4', // Base ID
			esc_html__( 'Cotizaciones', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Lista de las últimas cotizaciones', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
            echo '<div class="sidebar__widget"><div class="sidebar__title"><p>';
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
            echo "</p></div>";
        }
        if ( ! empty( $instance['cantidad'] ) ) {
				$cantidad = $instance['cantidad'];
        }
        echo '<div class="sidebar__content"><ul class="list-unstyled">';
        $args = array(
            'post_type' => 'cotizaciones',
            'posts_per_page' => $cantidad
        );
        $cotizaciones = new WP_Query($args);
        while($cotizaciones->have_posts()): $cotizaciones->the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-double-right"></i> <?php the_title(); ?> </a>
        </li>
        <?php
        endwhile;
        echo "</ul></div></div>";
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Titulo para widget', 'text_domain' );
        $cantidad = ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( '0', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"><?php esc_attr_e( '¿Cuántas cotizaciones deseas mostrar?', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cantidad' ) ); ?>" type="number" value="<?php echo esc_attr( $cantidad ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';
		return $instance;
	}

}
function register_side_widget4() {
    register_widget( 'Cotizaciones_Widget' );
}
add_action( 'widgets_init', 'register_side_widget4' );

// WIDGET OFICIOS MULTIPLES
class Oficios_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'side_widget5', // Base ID
			esc_html__( 'Oficios Multiples', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Lista de los últimos Oficios Multiples', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
            echo '<div class="sidebar__widget"><div class="sidebar__title"><p>';
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
            echo "</p></div>";
        }
        if ( ! empty( $instance['cantidad'] ) ) {
			$cantidad = $instance['cantidad'];
        }
        echo '<div class="sidebar__content"><ul class="list-unstyled">';
        $args = array(
            'post_type' => 'oficios',
            'posts_per_page' => $cantidad
        );
        $comunicados = new WP_Query($args);
        while($comunicados->have_posts()): $comunicados->the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-double-right"></i> <?php the_title(); ?> </a>
        </li>
        <?php
        endwhile;
        echo "</ul></div></div>";
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Titulo para widget', 'text_domain' );
        $cantidad = ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( '0', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"><?php esc_attr_e( '¿Cuántos oficios deseas mostrar?', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cantidad' ) ); ?>" type="number" value="<?php echo esc_attr( $cantidad ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';
		return $instance;
	}

}
function register_side_widget5() {
    register_widget( 'Oficios_Widget' );
}
add_action( 'widgets_init', 'register_side_widget5' );
?>
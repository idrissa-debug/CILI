<?php

class ufbl_Widget extends WP_Widget {

	public function __construct() {
        $widget_ops = array(
            'classname' => 'ufbl_widget',
            'description' => 'Ultimate Form Builder Lite - Widget',
        );
        parent::__construct('ufbl_widget', 'Ultimate Form Builder Lite', $widget_ops);
    }

    public function form($instance) {

        // outputs the options form on admin

        $title = isset($instance['title'])?$instance['title']:'';

        $form_id = isset($instance['form_id'])?$instance['form_id']:'';

        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'ultimate-form-builder-lite'); ?></label>

            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">

            <label for="<?php echo esc_attr($this->get_field_id('form_id')); ?>"><?php esc_attr_e('Choose form:', 'ultimate-form-builder-lite'); ?></label>
            <br>

            <?php

            $args = array('post_type_page'=>'ufbl',
                'post_status'=>'publish',
                'posts_per_page'=>'25');
            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<select class="widefat" name="'.esc_attr($this->get_field_name('form_id')).'">';
                echo '<option value="">'.esc_html__('Select form','ufbl').'</option>';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<option';
                    if($form_id==get_the_ID()){
                        echo ' selected="selected"';
                    }
                    echo ' value="'.get_the_ID().'">' . get_the_title() . '</option>';
                }
                echo '</select>';
            }
            /* Restore original Post Data */
            wp_reset_postdata();

            ?>
        </p>


        <?php
    }

    public function widget($args, $instance) {
        // outputs the content of the widget
        echo $args[ 'before_widget' ];
        if ( !empty($instance[ 'title' ]) ) {
            echo $args[ 'before_title' ] . apply_filters('widget_title', $instance[ 'title' ]) . $args[ 'after_title' ];
        }        
        $tid = $instance[ 'form_id' ];
        $shtc = '[et id="'.$tid.'"]';
        if (!empty ($tid) ){
            echo do_shortcode($shtc);
        }
        echo $args[ 'after_widget' ];
        
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance[ 'title' ] = (!empty($new_instance[ 'title' ]) ) ? sanitize_text_field($new_instance[ 'title' ]) : '';
        $instance['form_id'] = (!empty($new_instance['form_id']) ) ? sanitize_text_field($new_instance['form_id']) : '';

        return $instance;
    }
}

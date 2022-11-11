<?php

/**
 * @package the launcher
 */
function the_launcher_widgets_show_widget_field($instance = '', $widget_field = '', $athm_field_value = '') {
    // Store Posts in array
    $the_launcher_postlist[0] = array(
        'value' => 0,
        'label' => '--choose--'
    );
    $arg = array('posts_per_page' => -1);
    $the_launcher_posts = get_posts($arg);
    foreach ($the_launcher_posts as $the_launcher_post) :
        $the_launcher_postlist[$the_launcher_post->ID] = array(
            'value' => $the_launcher_post->ID,
            'label' => $the_launcher_post->post_title
        );
    endforeach;

    extract($widget_field);

    switch ($the_launcher_widgets_field_type) {

        // Standard text field
        case 'text' :?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>"><?php echo esc_html($the_launcher_widgets_title); ?>:</label>
                <input class="widefat" id="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>" name="<?php echo esc_attr($instance->get_field_name($the_launcher_widgets_name)); ?>" type="text" value="<?php echo esc_html($athm_field_value); ?>" />

                <?php if (isset($the_launcher_widgets_description)) { ?>
                    <br />
                    <small><?php echo wp_kses_post($the_launcher_widgets_description); ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        // Textarea field
        case 'textarea' :
            ?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>"><?php echo esc_html($the_launcher_widgets_title); ?>:</label>
                <textarea class="widefat" rows="<?php echo esc_attr($the_launcher_widgets_row); ?>" id="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>" name="<?php echo esc_attr($instance->get_field_name($the_launcher_widgets_name)); ?>"><?php echo esc_textarea($athm_field_value); ?></textarea>
            </p>
            <?php
            break;

        // Checkbox field
        case 'checkbox' :
            ?>
            <p>
                <input id="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>" name="<?php echo esc_attr($instance->get_field_name($the_launcher_widgets_name)); ?>" type="checkbox" value="1" <?php checked('1', $athm_field_value); ?>/>
                <label for="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>"><?php echo esc_html($the_launcher_widgets_title); ?></label>

                <?php if (isset($the_launcher_widgets_description)) { ?>
                    <br />
                    <small><?php echo wp_kses_post($the_launcher_widgets_description); ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        // Select field
        case 'select' :
            ?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>"><?php echo esc_html($the_launcher_widgets_title); ?>:</label>
                <select name="<?php echo esc_attr($instance->get_field_name($the_launcher_widgets_name)); ?>" id="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>" class="widefat">
                    <?php foreach ($the_launcher_widgets_field_options as $athm_option_name => $athm_option_title) { ?>
                        <option value="<?php echo esc_attr($athm_option_name); ?>" id="<?php echo esc_attr($instance->get_field_id($athm_option_name)); ?>" <?php selected($athm_option_name, $athm_field_value); ?>><?php echo esc_html($athm_option_title); ?></option>
                    <?php } ?>
                </select>

                <?php if (isset($the_launcher_widgets_description)) { ?>
                    <br />
                    <small><?php echo wp_kses_post($the_launcher_widgets_description); ?></small>
                <?php } ?>
            </p>
            <?php
            break;

        case 'number' :
            ?>
            <p>
                <label for="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>"><?php echo esc_html($the_launcher_widgets_title); ?>:</label><br />
                <input name="<?php echo esc_attr($instance->get_field_name($the_launcher_widgets_name)); ?>" type="number" step="1" min="1" id="<?php echo esc_attr($instance->get_field_id($the_launcher_widgets_name)); ?>" value="<?php echo absint($athm_field_value); ?>" class="small-text" />

                <?php if (isset($the_launcher_widgets_description)) { ?>
                    <br />
                    <small><?php echo wp_kses_post($the_launcher_widgets_description); ?></small>
                <?php } ?>
            </p>
            <?php
            break;
    }
}

function the_launcher_widgets_updated_field_value($widget_field, $new_field_value) {

    extract($widget_field);

    // Allow only integers in number fields
    if ($the_launcher_widgets_field_type == 'number') {
        return absint($new_field_value);

        // Allow some tags in textareas
    } elseif ($the_launcher_widgets_field_type == 'textarea') {
        // Check if field array specifed allowed tags
        if (!isset($the_launcher_widgets_allowed_tags)) {
            // If not, fallback to default tags
            $the_launcher_widgets_allowed_tags = '<p><strong><em><a>';
        }
        return strip_tags($new_field_value, $the_launcher_widgets_allowed_tags);

        // No allowed tags for all other fields
    } elseif ($the_launcher_widgets_field_type == 'url') {
        return esc_url_raw($new_field_value);
    } else {
        return strip_tags($new_field_value);
    }
}
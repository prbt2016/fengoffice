<?php $hidden_field_name = array_var($options, 'hidden_field_name', 'members');?>
<div id='<?php echo $component_id ?>-container'>

    <input id='<?php echo $genid . $hidden_field_name ?>' name='<?php echo $hidden_field_name ?>' type='hidden' value="<?php echo str_replace('"', "'", $selected_members_json); ?>"></input>

    <?php

    $is_ie = isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false);

    $enabled_dimensions = config_option("enabled_dimensions");
    $dim_count = 0;
    $members_dimension = array();
    $sel_mem_ids = array();

    $original_options = $options;

    foreach ($dimensions as $dimension) :

        $dimension_id = $dimension['dimension_id'];
        if (isset($skipped_dimensions) && is_array($skipped_dimensions) && in_array($dimension_id, $skipped_dimensions) || !in_array($dimension_id, $enabled_dimensions)) continue;

        if ( is_array(array_var($options, 'allowedDimensions')) && array_search($dimension_id, $options['allowedDimensions']) === false ){
            continue;
        }

        if (!array_var($options, 'allow_non_manageable') && !$dimension['is_manageable']) continue;

        $options = $original_options;
        if (!isset($options['is_multiple'])) {
            $options['is_multiple'] = array_var($dimension, 'is_multiple');
        }

        $is_required = array_var($dimension, 'is_required');
        $dimension_name = array_var($dimension, 'dimension_name');
        Hook::fire("edit_dimension_name", array('dimension' => $dimension_id), $dimension_name);

        $custom_name = DimensionOptions::getOptionValue($dimension_id, 'custom_dimension_name');
        $dimension_name = $custom_name && trim($custom_name) != "" ? $custom_name : $dimension_name;

        if ($is_required) $dimension_name .= " *";

        if (isset($simulate_required) && is_array($simulate_required) && in_array($dimension_id, $simulate_required)) $is_required = true;

        $dimension_selected_members = array();
        foreach ($selected_members as $selected_member) {
            if ($selected_member->getDimensionId() == $dimension_id) $dimension_selected_members[] = $selected_member;
        }
        $autocomplete_options = array();
        
        $member_type_names = array();
        $member_type_ids = DimensionObjectTypes::getObjectTypeIdsByDimension($dimension_id);
        foreach ($member_type_ids as $member_type_id) {
        	$mem_type = ObjectTypes::findById($member_type_id);
        	if (in_array($mem_type->getName(), array('folder','project_folder','customer_folder'))) continue;
        	$member_type_names[] = $mem_type->getObjectTypeName();
        }
        $dimension_member_type_names = implode(' '.lang('or').' ', $member_type_names);

        $expgenid = gen_id();

        // Render view by obj type
        $container_id = $genid."member-seleector-dim".$dimension_id;
        //$search_placeholder = escape_character(lang('add new relation ' . $dimension['dimension_code']));
        $search_placeholder = escape_character(lang('type to select', $dimension_member_type_names));
        $search_function = "ogSearchSelector.searchMember";
        $result_limit = "5";
        $select_function = array_var($options, 'select_function', "");
        $search_minLength = 0;
        $search_delay = 500;
        $horizontal = array_var($options, 'horizontal', false);
        $extra_param = "$dimension_id";
        include get_template_path("components/bootstrap_view", "dimension");

        ?>


        <script>
            if (!member_selector['<?php echo $genid; ?>']) member_selector['<?php echo $genid; ?>'] = {};
            if (!member_selector['<?php echo $genid; ?>'].properties) member_selector['<?php echo $genid; ?>'].properties = {};
            member_selector['<?php echo $genid; ?>'].hiddenFieldName = '<?php echo $hidden_field_name; ?>';
            member_selector['<?php echo $genid; ?>'].otid = '<?php echo $content_object_type_id; ?>';

            <?php if (isset($dont_filter_this_selector)) { ?>
            member_selector['<?php echo $genid; ?>'].dontFilterThisSelector = <?php echo $dont_filter_this_selector ? '1' : '0'?>,
            <?php } ?>

            <?php if (isset($default_selection_checkboxes)) { ?>
                member_selector['<?php echo $genid; ?>'].defaultSelectionCheckboxes = <?php echo $default_selection_checkboxes ? '1' : '0'?>,
            <?php } ?>
            <?php

                $listeners_str = "{";
                foreach ($listeners as $event => $function) {
                    $listeners_str .= $event .' : \''. escape_single_quotes($function) .'\',';
                }
                if (str_ends_with($listeners_str, ",")) $listeners_str = substr($listeners_str, 0, -1);
                $listeners_str .= "}";

                $reloadDimensions = get_associated_dimensions_to_reload_json($dimension_id);

                ?>

            <?php if (isset($options['filter_by_ids']) && isset($options['filter_by_ids'][$dimension_id])) : ?>
                config.filter_by_ids = '<?php echo implode(',', $options['filter_by_ids'][$dimension_id]) ?>' ;
            <?php endif; ?>

            member_selector['<?php echo $genid; ?>'].properties['<?php echo $dimension_id ?>'] = {
                title: '<?php echo escape_character($dimension_name) ?>',
                dimensionId: <?php echo $dimension_id ?>,
                objectTypeId: '<?php echo $content_object_type_id ?>',
                required: <?php echo $is_required ? '1' : '0'?>,
                reloadDimensions: <?php echo $reloadDimensions ?>,
                isMultiple: <?php echo $dimension['is_multiple'] ? '1' : '0'?>,
                allowedMemberTypes: <?php echo json_encode($allowed_member_type_ids)?>,
                listeners: <?php echo $listeners_str ?>
            };

            if (member_selector['<?php echo $genid; ?>'].properties['<?php echo $dimension_id ?>'].listeners.after_render) {
                eval(member_selector['<?php echo $genid; ?>'].properties['<?php echo $dimension_id ?>'].listeners.after_render);
            }

        </script>
        <?php
        $dim_count++;
    endforeach;

    foreach ($listeners as $event => $function) {
        if ($event == 'after_render_all') {
            echo '<script>'.escape_single_quotes($function).';</script>';
        }
    }
    if ($default_view) {
        ?><div class="clear"></div><?php
    }
    ?>
</div>
<div class="clear"></div>
<script>
    <?php if ($dim_count > 0) { ?>
    member_selector['<?php echo $genid; ?>'].members_dimension = Ext.util.JSON.decode('<?php echo json_encode($members_dimension)?>');
    member_selector['<?php echo $genid; ?>'].context = og.contextManager.plainContext();

    member_selector.init('<?php echo $genid; ?>');
    <?php } ?>
</script>
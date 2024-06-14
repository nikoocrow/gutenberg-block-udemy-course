<?php
    $block_gap = create_custom_block_category($attributes['style']['spacing']['blockGap'] ?? 0);
    wp_send_json($block_gap);
    $block_wrapper_attributes =  get_block_wrapper_attributes();
?>/

<div>
        <?php echo $content; ?>
</div>
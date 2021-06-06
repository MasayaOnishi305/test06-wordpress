<div class="sidebar">
<?php if (is_active_sidebar('widget_area')) : ?>

<?php dynamic_sidebar('widget_area'); ?>

<?php endif; ?>
<?php if (is_active_sidebar('search_area')) : ?>

<?php dynamic_sidebar('search_area'); ?>

<?php endif; ?>
</div>
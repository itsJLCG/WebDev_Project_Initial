<?php if(filled(config('livewire-powergrid.plugins.flatpickr.css'))): ?>
    <link
        rel="stylesheet"
        href="<?php echo e(config('livewire-powergrid.plugins.flatpickr.css')); ?>"
    >
<?php endif; ?>

<?php if(isset($cssPath)): ?>
    <style>
        <?php echo file_get_contents($cssPath); ?>

    </style>
<?php endif; ?>
<?php /**PATH C:\xamppss\laravel\WebDev_Project\resources\views\vendor\livewire-powergrid\assets\styles.blade.php ENDPATH**/ ?>
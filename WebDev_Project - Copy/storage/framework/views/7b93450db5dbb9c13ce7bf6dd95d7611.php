<?php if(data_get($setUp, 'header.softDeletes')): ?>
    <div class="btn-group">
        <button
            class="btn btn-secondary btn-sm dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            <span>
                <?php if (isset($component)) { $__componentOriginalf86e8445c3b4b21e8fd571a52134e584 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf86e8445c3b4b21e8fd571a52134e584 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.icons.trash','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-powergrid::icons.trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf86e8445c3b4b21e8fd571a52134e584)): ?>
<?php $attributes = $__attributesOriginalf86e8445c3b4b21e8fd571a52134e584; ?>
<?php unset($__attributesOriginalf86e8445c3b4b21e8fd571a52134e584); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf86e8445c3b4b21e8fd571a52134e584)): ?>
<?php $component = $__componentOriginalf86e8445c3b4b21e8fd571a52134e584; ?>
<?php unset($__componentOriginalf86e8445c3b4b21e8fd571a52134e584); ?>
<?php endif; ?>
            </span>
        </button>
        <ul class="dropdown-menu">
            <li wire:click="$dispatch('pg:softDeletes-<?php echo e($tableName); ?>', {softDeletes: ''})">
                <a
                    class="dropdown-item"
                    href="#"
                >
                    <?php echo app('translator')->get('livewire-powergrid::datatable.soft_deletes.without_trashed'); ?>
                </a>
            </li>
            <li wire:click="$dispatch('pg:softDeletes-<?php echo e($tableName); ?>', {softDeletes: 'withTrashed'})">
                <a
                    class="dropdown-item"
                    href="#"
                >
                    <?php echo app('translator')->get('livewire-powergrid::datatable.soft_deletes.with_trashed'); ?>
                </a>
            </li>
            <li wire:click="$dispatch('pg:softDeletes-<?php echo e($tableName); ?>', {softDeletes: 'onlyTrashed'})">
                <a
                    class="dropdown-item"
                    href="#"
                >
                    <?php echo app('translator')->get('livewire-powergrid::datatable.soft_deletes.only_trashed'); ?>
                </a>
            </li>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH C:\xamppss\laravel\WebDev_Project\resources\views\vendor\livewire-powergrid\components\frameworks\bootstrap5\header\soft-deletes.blade.php ENDPATH**/ ?>
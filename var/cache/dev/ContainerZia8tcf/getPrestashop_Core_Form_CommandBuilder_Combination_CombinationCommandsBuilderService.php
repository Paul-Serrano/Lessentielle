<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.command_builder.combination.combination_commands_builder' shared service.

return $this->services['prestashop.core.form.command_builder.combination.combination_commands_builder'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationCommandsBuilder(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['prestashop.core.form.command_builder.product.combination.stock_command_builder']) ? $this->services['prestashop.core.form.command_builder.product.combination.stock_command_builder'] : ($this->services['prestashop.core.form.command_builder.product.combination.stock_command_builder'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationStockCommandsBuilder())) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['prestashop.core.form.command_builder.product.combination.price_command_builder']) ? $this->services['prestashop.core.form.command_builder.product.combination.price_command_builder'] : ($this->services['prestashop.core.form.command_builder.product.combination.price_command_builder'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationPriceCommandsBuilder())) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['prestashop.core.form.command_builder.product.combination.details_command_builder']) ? $this->services['prestashop.core.form.command_builder.product.combination.details_command_builder'] : ($this->services['prestashop.core.form.command_builder.product.combination.details_command_builder'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationDetailsCommandsBuilder())) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['prestashop.core.form.command_builder.product.combination.suppliers_command_builder']) ? $this->services['prestashop.core.form.command_builder.product.combination.suppliers_command_builder'] : ($this->services['prestashop.core.form.command_builder.product.combination.suppliers_command_builder'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationSuppliersCommandsBuilder())) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['prestashop.core.form.command_builder.product.combination.images_command_builder']) ? $this->services['prestashop.core.form.command_builder.product.combination.images_command_builder'] : ($this->services['prestashop.core.form.command_builder.product.combination.images_command_builder'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationImagesCommandsBuilder())) && false ?: '_'};
}, 5));

---
name: zeus-tabler-icons-enum
description: Use type-safe Tabler icon enum cases in Filament components and navigation via lara-zeus/tabler-icons-enum.
---

# Lara Zeus Tabler Icons Enum (`lara-zeus/tabler-icons-enum`)

## Overview & Requirements
- **Package**: `lara-zeus/tabler-icons-enum` (Free / MIT)
- **Requirements**: PHP `^8.1`, `filament/support` `^5.0`, `secondnetwork/blade-tabler-icons` `^3.30`, `spatie/laravel-package-tools` `^1.19`
- **Purpose**: Provides `LaraZeus\Tabler\Tabler`, a string-backed enum implementing `Filament\Support\Contracts\ScalableIcon` whose `getIconForSize(IconSize $size)` resolves `"tabler-{$this->value}"`.

## Installation
```bash
composer require lara-zeus/tabler-icons-enum
```
No configuration, migrations, or asset publishing required.

## Filament Panel Registration
Not a panel plugin; use `LaraZeus\Tabler\Tabler` directly wherever Filament accepts an icon (`string | \BackedEnum | null`).

## Core Usage & Examples
```php
use BackedEnum;
use LaraZeus\Tabler\Tabler;

class TicketResource extends Resource
{
    protected static string | BackedEnum | null $navigationIcon = Tabler::Ticket;
}
```
In actions, infolists, tables, or forms:
```php
use Filament\Actions\Action;
use LaraZeus\Tabler\Tabler;

Action::make('edit')
    ->icon(Tabler::Pencil);
```
You can also read the Blade icon name via `$icon->getIconForSize(IconSize::Medium)` (returns `'tabler-pencil'`) or `$icon->value` (`'pencil'`).

## Common Pitfalls & Anti-Patterns
- **Commenting out of filled variants**: Filled cases in `src/Tabler.php` (lines 11–954) are commented out; only outline cases are active. Always verify a case exists if unsure.
- **Do not prefix manually**: `Tabler::Ticket` already resolves to `'tabler-ticket'` via `ScalableIcon::getIconForSize()`; do not wrap it in `'tabler-' . Tabler::Ticket->value` when passing to Filament components.

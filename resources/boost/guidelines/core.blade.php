## Lara Zeus Tabler Icons Enum (`lara-zeus/tabler-icons-enum`)

PHP backed enum (`LaraZeus\Tabler\Tabler`) implementing Filament's `ScalableIcon` contract for `secondnetwork/blade-tabler-icons`.

### Key Classes
- Enum: `LaraZeus\Tabler\Tabler` (string-backed enum implementing `Filament\Support\Contracts\ScalableIcon`, returns `"tabler-{$this->value}"` from `getIconForSize(IconSize $size)`)
- ServiceProvider: `LaraZeus\Tabler\TablerServiceProvider` (package name `zeus-tabler`)

### Rules & Pitfalls
- Use `LaraZeus\Tabler\Tabler` cases directly in any Filament icon property/method accepting `string | \BackedEnum | null` (e.g. `$navigationIcon = Tabler::Ticket`, `->icon(Tabler::Home)`).
- Only outline Tabler icon cases are active on `Tabler`; the filled icon cases at the top of `src/Tabler.php` are commented out—do not reference a filled-only icon case without verifying it exists uncommented in `LaraZeus\Tabler\Tabler`.
- `composer.json` requires `filament/support: ^5.0` and `secondnetwork/blade-tabler-icons: ^3.30`.

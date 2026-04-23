---
title: Installation
weight: 1
---

## Prerequisites

This package is built for Laravel and Filament.

## Installation

```bash
composer require lara-zeus/tabler-icons-enum
```

## Usage

Use the enum values in Filament icon properties, for example:

```php
protected static string | \BackedEnum | null $navigationIcon = Tabler::Ticket;
```

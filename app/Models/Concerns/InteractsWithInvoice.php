<?php

declare(strict_types=1);

namespace App\Models\Concerns;

trait InteractsWithInvoice
{
    public static function bootInteractsWithInvoice(): void
    {
        self::creating(function ($model) {
            $model->invoice_no = date('d').rand(9999, 99999).date('m');
        });
    }
}

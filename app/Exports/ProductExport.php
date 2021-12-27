<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class ProductExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    protected $selections;

    public function __construct($selections)
    {
        $this->selections = $selections;
    }

    public function map($product): array
    {
        return [
            $product->id,
            $product->name,
            $product->status,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Status',
        ];
    }

    public function query()
    {
        return Product::whereIn('id', $this->selections);
    }
}

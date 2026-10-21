```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InformacaoTcc extends Model
{
    protected $fillable = [
        'categoria',
        'titulo',
        'descricao',
    ];
}
```
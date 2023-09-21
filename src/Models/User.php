<?php

namespace Usoft\Crud\Models;

use Usoft\Crud\Services\Merchant\Scopes\MerchantScope;
use Usoft\Crud\Abstracts\Model;

class User extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->connection = config('schema.user');
    }
    protected $table = 'users';

    protected $guarded = ['id'];

    public function upload()
    {
        return $this->belongsTo(Upload::class, 'upload_id');
    }
}

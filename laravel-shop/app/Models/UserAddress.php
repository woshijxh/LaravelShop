<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    // 可填充字段
    protected $fillable = ['province', 'city', 'district', 'address', 'zip', 'contact_name', 'contact_phone', 'last_used_at'];

    // 时间字段
    protected $dates = ['last_used_at'];

    // 关联 User 模型
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 输出收货地址
    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message',
        'amount'
    ];

    /**
     * Get the bank account that owns the transaction history.
     */
    public function bankAccount()
    {
        return $this->belongsTo('App\Models\BankAccount');
    }
}

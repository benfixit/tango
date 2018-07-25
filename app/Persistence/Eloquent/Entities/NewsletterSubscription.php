<?php

namespace App\Persistence\Eloquent\Entities;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscription extends Model
{
    public $table = "newsletter_subscriptions";

    public $timestamps = false;

    protected $fillable = [
        'email', 'created_on'
    ];
}

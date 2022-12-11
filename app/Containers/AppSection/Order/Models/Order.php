<?php

namespace App\Containers\AppSection\Order\Models;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends ParentModel
{

    public const USER_RELATION = 'user';

    public const PAID_COLUMN = 'is_paid';

    public const PAID_TRUE = 1;

    public const PAID_FALSE = 0;

    protected $fillable = ['user_id', 'price', 'description','comment',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function isPaid(): bool
    {
        return $this->is_paid;
    }

    public function setIsPaid(bool $isPaid): void
    {
        $this->is_paid = $isPaid;
    }

    public function getContactInfo() : string
    {
        $user = $this->user;

        return $user->getPhone() . ' ' . $user->getContactInfo();
    }

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Order';
}

<?php

namespace App\Containers\AppSection\User\Models;

use App\Containers\AppSection\Order\Models\Order;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends ParentModel
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'contact_info',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getContactInfo(): string
    {
        return $this->contact_info;
    }

    public function setContactInfo(string $contactInfo): void
    {
        $this->contact_info = $contactInfo;
    }
    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'User';
}

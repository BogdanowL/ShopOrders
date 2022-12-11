<?php

namespace App\Containers\AppSection\User\Data\Transporters;

use Spatie\LaravelData\Data;

class CreateUserTransporter extends Data
{
        public string $name;

        public string $email;

        public string $password;

        public string $phone;

        public string $contact_info;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->phone = $data['phone'];
        $this->contact_info = $data['contact_info'];
    }
}

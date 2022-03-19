<?php
namespace App\Services;

class UserService {
    public function encryptPassword(string $password): string{
        return bcrypt($password);
    }

    public function prepareData(array $data): array {
        $data['password'] = $this->encryptPassword($data['password']);
        return $data;
    }
}

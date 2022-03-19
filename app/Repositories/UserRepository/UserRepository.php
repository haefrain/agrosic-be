<?php
namespace App\Repositories\UserRepository;

class UserRepository implements UserRepositoryInterface {
    protected $model;

    public function __construct(User $user) {
        $this->model = $user;
    }

    public function all(): array
    {
        return $this->model->all();
    }

    public function create(array $data): object {
        return $this->model->create($data);
    }

    public function update(array $data, int $id): int {
        return $this->model->find($id)->update($data);
    }

    public function delete(int $id): int {
        return $this->model->destroy($id);
    }

    public function find(int $id): object {
        $user = $this->model->find($id);
        if (null == $user) {
            throw new ModelNotFoundException("User not found");
        }

        return $user;
    }
}

<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Core Repository
 *
 * @package App\Repositories
 *
 * Репозиторий работы с сущьностью.
 * Может выдавать наборы данных.
 * Не может создавать/изменять сущность.
 */
abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * CoreRepository constructor.
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }
    /**
     * @return Model|\Illuminate\Foundation\Application|mixed
     */
    protected function startConditions()
    {
        return clone $this->model;
    }
}

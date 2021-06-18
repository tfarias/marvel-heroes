<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface HerouRepository.
 *
 * @package namespace App\Repositories;
 */
interface HerouRepository extends RepositoryInterface
{
    /**
     * @return mixed
     */
    public function listaFavoritos();
    public function listaCharacter(int $id);
    public function listaHistorias(int $id, int $limit);
}

<?php

namespace App\Repositories;

use App\Services\MarvelService;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class HerouRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class HerouRepositoryEloquent extends BaseRepository implements HerouRepository
{
    /**
     * @var MarvelService
     */
    private $marvelService;

    /**
     * HerouRepositoryEloquent constructor.
     * @param MarvelService $marvelService
     */
    public function __construct(MarvelService $marvelService)
    {
        $this->marvelService = $marvelService;
    }


    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }


    public function listaFavoritos()
    {
        $favoritos = config('services.api.favorites');
        $result = collect();
        foreach ($favoritos as $favorito) {
            $res = $this->marvelService->execute(['name' => $favorito], 'characters');
            if ($res->data->total > 0) {
                $result->put($favorito, $res->data->results[0]);
            }
        }
        return $result;
    }

    public function listaCharacter(int $id)
    {
        $result = collect();
        $res = $this->marvelService->execute([], 'characters', $id);
        if ($res->data->total > 0) {
            $result->put($id, $res->data->results[0]);
        }
        return $result->first();
    }

    public function listaHistorias(int $id, int $limit)
    {
        $result = [];
        $res = $this->marvelService->execute(['characters' => $id,'orderBy'=> '-modified','limit'=> $limit], 'stories');
        if ($res->data->total > 0) {
            $result = collect($res->data->results);
        }
        return $result;
    }

}

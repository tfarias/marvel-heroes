<?php


namespace App\Http\Controllers;


use App\Http\Requests\HistoryRequest;
use App\Repositories\HerouRepository;

class HomeController extends Controller
{
    /**
     * @var HerouRepository
     */
    private $herouRepository;

    /**
     * HomeController constructor.
     * @param HerouRepository $herouRepository
     */
    public function __construct(HerouRepository $herouRepository)
    {
        $this->herouRepository = $herouRepository;
    }

    public function index()
    {
        $herous = collect();
        try {
            $herous = $this->herouRepository->listaFavoritos();
        }catch (\Exception $e){
            flash("Erro ao carregar herous!","danger");
        }

        return view('welcome', compact('herous'));
    }

    public function historias($id)
    {
        try {
            $heroi = $this->herouRepository->listaCharacter($id);
            $historias = $this->herouRepository->listaHistorias($id,5);
        }catch (\Exception $e){
            flash("Erro ao carregar herous!","danger");
            return redirect()->home();
        }

        return view('herou.history', compact('heroi', 'historias'));
    }


}

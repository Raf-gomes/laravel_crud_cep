<?php
namespace  App\Http\Controllers;

use App\Http\Requests\Endereco\SalvarRequest;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EnderecoController extends Controller
{
    public function index()
    {
        $enderecos = Endereco::all();
        return view('listagem')->with([
            'enderecos' => $enderecos,
        ]);
    }

    public function adicionar()
    {
        return view('busca');
    }

    public function buscar(
        Request $request
    ) {
            $cep = $request->input(key: 'cep');
            $response = Http::get(url: "https://viacep.com.br/ws/$cep/json/")->json();

            return view(view: 'adicionar')->with(
                [
                    'cep'        => $request->input(key: 'cep'),
                    'logradouro' => $response['logradouro'],
                    'bairro'     => $response['bairro'],
                    'cidade'     => $response['localidade'],
                    'estado'     => $response['uf'],
                ]
                );
            // dd($response);
    }

    public function salvar(SalvarRequest $request){
        $endereco = Endereco::where('cep', $request->input(key:'cep'))->first();
        
        if(!$endereco){
            Endereco::create(
                [
                    'cep'        => $request->cep,
                    'logradouro' => $request->logradouro,
                    'numero'     => $request->numero,
                    'bairro'     => $request->bairro,
                    'cidade'     => $request->cidade,
                    'estado'     => $request->estado
                ]
                );
                return redirect(to: '/')->withSucesso('Endereço salvo com sucesso!');
        }
        return redirect(to: '/')->withErro('O endereço já está cadastrado!');
    }

    // public function salvar()
    // {
    //     dd('$request->all()');
    // }
}

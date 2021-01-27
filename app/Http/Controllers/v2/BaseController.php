<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
 
    protected $abstractClass;

    protected $validationRules = [];

    public function index(Request $request)
    {
        if ($request->has('page') || $request->has('per_page')) {
            $paginator = $this->abstractClass::paginate($request->per_page);
            $per_page = $paginator->perPage();
            $self = $paginator->url($paginator->currentPage()) . ($per_page ? '&per_page=' . $per_page : '');
            $last = $paginator->url($paginator->lastPage()) . ($per_page ? '&per_page=' . $per_page : '');
            $next = $paginator->nextPageUrl() . ($per_page ? '&per_page=' . $per_page : '');
            $result['links'] = [
                "self" => $self ,
                "next" => ($self == $last  ? '' : $next ),
                "last" => ($self == $last ? '' : $last)
            ];
            $result['data'] =  $paginator->items();
            return response()->json($result, 200);
        }
        return response()->json($this->abstractClass::all(), 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->validationRules);

        return response()
            ->json($this->abstractClass::create($request->all()), 201);
    }

    public function show(int $id)
    {
        $resource = $this->abstractClass::find($id);
        $code = $resource ? 200 : 404;
        return response() -> json($resource, $code) ;
    }

    public function update(Request $request, int $id)
    {
        $resource = $this->abstractClass::find($id);
        if(! $resource) {
            return response()-> json(['error' => 'Recurso não encontrado !'], 404);
        } 
        $resource->fill($request->all());
        $resource->save();
        return response()-> json($resource, 200);
    }

    public function destroy(int $id)
    {
        if( $this->abstractClass::destroy($id) === 0) {
            return response()-> json(['error' => 'Recurso não encontrado'], 404);
        } 
        return response()-> json(['result' => 'Recurso removido com sucesso'], 200);
    }
}
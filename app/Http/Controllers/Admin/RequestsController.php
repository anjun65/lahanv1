<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Request;
use App\Http\Requests\Admin\RequestRequest;
use Yajra\DataTables\Facades\DataTables;


class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Request::query();
            return Datatables::of($query)
                ->addcolumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('request.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="'. route('request.destroy', $item->id) .'" method="POST">
                                        ' . method_field('delete') . csrf_field() .'    
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.request.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('pages.admin.request.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(RequestRequest $request)
    // {
        
    //     $data = $request->all();
    //     $data['password'] = bcrypt($request->password);
        

    //     Request::create($data);

    //     return redirect()->route('request.index');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $item = Request::findOrFail($id);

        return view('pages.admin.request.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestRequest $request, $id)
    {
        $catatan = $request->description;
        $status = $request->status;
        
        $item = Request::findOrFail($id);

        $item->update([
            'catatan_staf_muda' => $catatan,
            'status' => $status,
        ]);

        return redirect()->route('request.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Request::findOrFail($id);
        $item->delete();

        return redirect()->route('request.index');
    }
}

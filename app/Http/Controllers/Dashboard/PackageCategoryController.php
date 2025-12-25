<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StorePackageCategory;
use App\Models\PackageCategory;
use Illuminate\Http\Request;

class PackageCategoryController extends Controller
{

    protected $model ;

    public function __construct(PackageCategory $model){
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.package-categories.index', [
            'data' => $this->model->paginate(20)
        ]);
    }

     /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.package-categories.form' ,[
            'resource' => $this->model
        ]);
    }


      /**
     * Store a newly created resource in storage.
     * @param StorePackageCategory $request
     * @return Renderable
     */
    public function store(StorePackageCategory $request)
    {
        $inputs = $request->validated();
       
        // dd($inputs);
        $this->model->create($inputs);
        toast(__('lang.created') , 'success');
        return redirect()->route('admin.package.cat');
    }


      /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.package-categories.form' ,[
            'resource' => $this->model->findOrFail($id)
        ]);
    }



    /**
     * Update the specified resource in storage.
     * @param StorePackageCategory $request
     * @param int $id
     * @return Renderable
     */
    public function update(StorePackageCategory $request, $id)
    {
        $inputs = $request->validated();
        $resource = $this->model->findOrFail($id);
       
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.package.cat');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.package.cat');
    }


}

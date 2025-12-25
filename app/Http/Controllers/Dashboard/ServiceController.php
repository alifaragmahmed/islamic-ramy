<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreService;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    protected $model;

    public function __construct(Service $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text  = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.services.index', [
            'data' => $this->model->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.services.form', [
            'resource' => $this->model,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreService $request
     * @return Renderable
     */
    public function store(StoreService $request)
    {
        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SER_PATH'), $inputs['ar']['title']);
        }
        if (isset($inputs['icon'])) {
            $inputs['icon'] = uploadImage($inputs['icon'], config('path.SER_ICON_PATH'), 'icon');
        }
        DB::beginTransaction();
        $service = $this->model->create($inputs);

        DB::commit();
        toast(__('lang.created'), 'success');
        return redirect()->route('admin.service');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $title = __('lang.delete_item');
        $text  = __('lang.are_you_sure');
        confirmDelete($title, $text);
        return view('dashboard.services.form', [
            'resource' => $this->model->findOrFail($id),

        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param StoreService $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreService $request, $id)
    {
        $inputs   = $request->validated();
        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.SER_PATH'), $inputs['ar']['title'], $resource->image);
        }
        if (isset($inputs['icon'])) {
            $inputs['icon'] = uploadImage($inputs['icon'], config('path.SER_ICON_PATH'), 'icon', $resource->icon);
        }
        DB::beginTransaction();
        $resource->update($inputs);

        DB::commit();
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.service');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        // dd($resource->images()->pluck('image')->toArray());
        deleteImage($resource->image);
        deleteImage($resource->icon);
        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.service');
    }

}

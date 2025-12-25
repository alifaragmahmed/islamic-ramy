<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreWorkStep;
use App\Models\WorkStep;
use Illuminate\Http\Request;

class WorkStepController extends Controller
{

    protected $model;

    public function __construct(WorkStep $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text  = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.work-steps.index', [
            'data' => $this->model->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.work-steps.form', [
            'resource' => $this->model,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreWorkStep $request
     * @return Renderable
     */
    public function store(StoreWorkStep $request)
    {

        $inputs = $request->validated();
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.WORK_STEPS_PATH'), $inputs['ar']['title']);
        }
        if (isset($inputs['icon'])) {
            $inputs['icon'] = uploadImage($inputs['icon'], config('path.WORK_STEPS_PATH'), 'icon');
        }
        // Save the data
        $this->model->create($inputs);

        toast(__('lang.created'), 'success');
        return redirect()->route('admin.step');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.work-steps.form', [
            'resource' => $this->model->findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param StoreWorkStep $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreWorkStep $request, $id)
    {
        $inputs = $request->validated();

        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.WORK_STEPS_PATH'), $inputs['ar']['title'], $resource->image);
        }
        if (isset($inputs['icon'])) {
            $inputs['icon'] = uploadImage($inputs['icon'], config('path.WORK_STEPS_PATH'), 'icon', $resource->bg_hover);
        }
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.step');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        deleteImage($resource->image);
        deleteImage($resource->icon);
        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.step');
    }

}

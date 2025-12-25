<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreWhyChoose;
use App\Models\WhyChoose;
use Illuminate\Http\Request;

class WhyChooseController extends Controller
{

    protected $model;

    public function __construct(WhyChoose $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text  = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.why_chooses.index', [
            'data' => $this->model->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.why_chooses.form', [
            'resource' => $this->model,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreWhyChoose $request
     * @return Renderable
     */
    public function store(StoreWhyChoose $request)
    {

        $inputs = $request->validated();

        $inputs['image'] = uploadImage($inputs['image'], config('path.WhyChoose_PATH'), $inputs['ar']['title']);

        // Save the data
        $this->model->create($inputs);

        toast(__('lang.created'), 'success');
        return redirect()->route('admin.why_chooses');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.why_chooses.form', [
            'resource' => $this->model->findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param StoreWhyChoose $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreWhyChoose $request, $id)
    {
        $inputs = $request->validated();

        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.WhyChoose_PATH'), $inputs['ar']['title'], $resource->image);
        }
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.why_chooses');
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
        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.why_chooses');
    }

}

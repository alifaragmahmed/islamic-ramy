<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreCustomerOpinions;
use App\Models\CustomerOpinions;
use Illuminate\Http\Request;

class CustomerOpinionsController extends Controller
{

    protected $model;

    public function __construct(CustomerOpinions $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text  = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.customer_opinions.index', [
            'data' => $this->model->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.customer_opinions.form', [
            'resource' => $this->model,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreCustomerOpinions $request
     * @return Renderable
     */
    public function store(StoreCustomerOpinions $request)
    {

        $inputs          = $request->validated();
        $inputs['image'] = uploadImage($inputs['image'], config('path.CustomerOpinions_PATH'), $inputs['ar']['title']);

        // Save the data
        $this->model->create($inputs);

        toast(__('lang.created'), 'success');
        return redirect()->route('admin.customer_opinions');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard.customer_opinions.form', [
            'resource' => $this->model->findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param StoreCustomerOpinions $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreCustomerOpinions $request, $id)
    {
        $inputs = $request->validated();

        $resource = $this->model->findOrFail($id);
        if (isset($inputs['image'])) {
            $inputs['image'] = uploadImage($inputs['image'], config('path.CustomerOpinions_PATH'), $inputs['ar']['title'], $resource->image);
        }
        $resource->update($inputs);
        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.customer_opinions');
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
        return redirect()->route('admin.customer_opinions');
    }

}

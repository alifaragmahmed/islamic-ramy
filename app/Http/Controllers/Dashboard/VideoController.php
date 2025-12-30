<?php
namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreVideo;
use App\Models\Video;
use App\Models\VideoCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VideoController extends Controller
{

    protected $model;

    public function __construct(Video $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $title = __('lang.delete_item');
        $text  = __('lang.are_you_sure');
        confirmDelete($title, $text);

        return view('dashboard.videos.index', [
            'data' => $this->model->with('category')->paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('dashboard.videos.form', [
            'resource'   => $this->model,
            'categories' => VideoCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreVideo $request
     * @return Renderable
     */
    public function store(StoreVideo $request)
    {
        $inputs = $request->validated();

        // Auto-generate slug from Arabic title
        $inputs['slug'] = Str::slug($inputs['ar']['title']);

        if (isset($inputs['master_image'])) {
            $inputs['master_image'] = uploadImage($inputs['master_image'], config('path.VIDEO_PATH'), $inputs['ar']['title']);
        }

        if (isset($inputs['file']) && $request->hasFile('file')) {
            $file     = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path(config('path.VIDEO_FILE_PATH')), $fileName);
            $inputs['file'] = config('path.VIDEO_FILE_PATH') . '/' . $fileName;
        }

        DB::beginTransaction();
        $this->model->create($inputs);
        DB::commit();

        toast(__('lang.created'), 'success');
        return redirect()->route('admin.video');
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

        return view('dashboard.videos.form', [
            'resource'   => $this->model->findOrFail($id),
            'categories' => VideoCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param StoreVideo $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreVideo $request, $id)
    {
        $inputs   = $request->validated();
        $resource = $this->model->findOrFail($id);

        // Auto-generate slug from Arabic title
        $inputs['slug'] = Str::slug($inputs['ar']['title']);

        if (isset($inputs['master_image'])) {
            $inputs['master_image'] = uploadImage($inputs['master_image'], config('path.VIDEO_PATH'), $inputs['ar']['title'], $resource->master_image);
        }

        if (isset($inputs['file']) && $request->hasFile('file')) {
            // Delete old file
            if ($resource->file && file_exists(public_path($resource->file))) {
                unlink(public_path($resource->file));
            }

            $file     = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path(config('path.VIDEO_FILE_PATH')), $fileName);
            $inputs['file'] = config('path.VIDEO_FILE_PATH') . '/' . $fileName;
        }

        DB::beginTransaction();
        $resource->update($inputs);
        DB::commit();

        toast(__('lang.updated'), 'success');
        return redirect()->route('admin.video');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $resource = $this->model->findOrFail($id);
        deleteImage($resource->master_image);

        // Delete video file
        if ($resource->file && file_exists(public_path($resource->file))) {
            unlink(public_path($resource->file));
        }

        $resource->delete();
        toast(__('lang.deleted'), 'success');
        return redirect()->route('admin.video');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Projects::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'description' => 'required',
            'description_ru' => 'required',
            'description_en' => 'required'
        ]);
        $projects = Projects::create($request->all());


        //file upload
        $projects->addMediaFromRequest('photo')->usingName($projects->id)->toMediaCollection();

        // if ($request->file('photo', false)) {
        //     $path = storage_path('tmp/uploads');
        //     try {
        //         if (!file_exists($path)) {
        //             mkdir($path, 0755, true);
        //         }
        //     } catch (\Exception $e) {
        //     }

        //     $file = $request->file('photo');

        //     $name = uniqid() . '_' . trim($file->getClientOriginalName());

        //     $file->move($path, $name);


        //     if (!$projects->image || $request->file('photo') !== $projects->photo->file_name) {

        //         if ($projects->photo) {
        //             $projects->photo->delete();
        //         }
        //         $projects->addMedia(storage_path('tmp/uploads/' . $name))->toMediaCollection('avatar');

        //     }
        // } elseif ($projects->photo) {
        //     $projects->photo->delete();
        // }

        return redirect('admin/projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Projects::find($id);
        $project->delete();
        return back();
    }
}

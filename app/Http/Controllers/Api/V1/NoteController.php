<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoteStoreRequest;
use App\Http\Resources\NoteResource;
use App\Models\Note;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
       return NoteResource::collection(Note::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NoteStoreRequest $request
     * @return NoteResource
     */
    public function store(NoteStoreRequest $request)
    {
        $created_note = Note::create($request->all());

        return new NoteResource($created_note);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return NoteResource
     */
    public function show($id)
    {
        return new NoteResource(Note::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NoteStoreRequest $request
     * @param Note $note
     * @return NoteResource
     */
    public function update(NoteStoreRequest $request,Note $note)
    {
        $note->update($request->validated());

        return new NoteResource($note);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Note $note
     * @return Response
     */
    public function destroy(Note $note)
    {
        $note->delete();

        return response(null, \Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);
    }
}

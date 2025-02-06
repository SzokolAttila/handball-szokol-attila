<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : JsonResource
    {
        return TeamResource::collection(Team::with("currentPlayers")->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request) : JsonResource
    {
        return new TeamResource(Team::create($request->validated())->load("currentPlayers"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team) : JsonResource
    {
        return new TeamResource($team->load("currentPlayers"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team) : JsonResource
    {
        $team->update($request->validated());
        return new TeamResource($team->load("currentPlayers"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team) : Response
    {
        if($team->delete())
            return response()->noContent();
        abort(500);
    }
}

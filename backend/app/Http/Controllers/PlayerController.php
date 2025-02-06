<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerRequest;
use App\Http\Requests\UpdatePlayerRequest;
use App\Http\Resources\PlayerResource;
use App\Models\Player;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : JsonResource
    {
        return PlayerResource::collection(Player::with("teams")->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlayerRequest $request) : JsonResource
    {
        $data = $request->validated();
        
        return new PlayerResource(Player::create()->load("teams"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player) : JsonResource
    {
        return new PlayerResource($player->load("teams"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlayerRequest $request, Player $player) : JsonResource
    {
        $player->update($request->validated());
        return new PlayerResource($player->load("teams"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player) : Response
    {
        if($player->delete())
            return response()->noContent();
        abort(500);
    }
}

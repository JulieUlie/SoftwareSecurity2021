<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TweetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'user_id'=> $this->user_id,
            'tweet' => $this->tweet,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'user' => ["id"=>$this->user->id, "name"=> $this->user->name, "created_at" => $this->user->created_at],
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Auth;

class FeedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "user_avatar" => asset($this->user->avatar ? '/images/user/'. $this->user->avatar : 'images/avatar.png'),
            "auth_user_id" => Auth::user()->id,
            "user_id" => $this->user->id,
            "name" => $this->user->name,
            "username" => $this->user->username,
            "visibility" => $this->visibility,
            "content" => $this->content,
            "created_at" => $this->created_at->diffForHumans(),
            "total_comments" => $this->comments()->count(),
            "total_likes" => $this->likes()->count(),
            "liked" => (boolean) $this->likes()->where("user_id", Auth::user()->id)->count() > 0,
            "media_files" => FeedMediaResource::collection($this->media_files),
            "is_on_pipeline" => (boolean) $this->is_on_pipeline,
            "comments" => CommentResource::collection($this->comments()->where("feed_comment_id", null)->get()),
        ];
    }
}

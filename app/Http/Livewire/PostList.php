<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Queue\Listener;
use Livewire\Component;

class PostList extends Component
{
    public $UpdateStateId = "0";
    public $body = "0";

    protected $listeners = [
        'post-created' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.post-list', [
            'post' => Post::latest()->get()
        ]);
    }
    public function ShowUpdateForm($postId)
    {
        $post = Post::find($postId);
        $this->body = $post->body;
        $this->UpdateStateId = $postId;
    }

    public function update($postId)
    {
        $post = Post::find($postId);
        $post->body = $this->body;
        $post->save();

        $this->UpdateStateId = 0;
    }
    public function delete($postId)
    {
        $post = Post::find($postId);
        $post->delete();
    }
}

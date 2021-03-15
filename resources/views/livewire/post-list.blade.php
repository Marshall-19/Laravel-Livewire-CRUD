<div class="">
    {{-- {{ $UpdateStateId }} --}}
    {{-- fungsinya sama dengan var dup --}}
    @foreach ($post as $post)
    <div class="p-4 my-2 bg-white shadow-xl rounded-md ">
    <span class="text-xl font-bold">
     {{ $post->user->name }}
    </span>
    <span class="text-gray-600">
        {{ $post->user->created_at->diffForHumans() }}
       </span>
       <button wire:click="ShowUpdateForm({{ $post->id }})"  class="justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Edit
    </button>
       <button wire:click="delete({{ $post->id }})" onclick="return confirm('Delete Data ?') || event.stopImmediatePropagation()"  class="justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        {{-- event.stopImmediatePropagation() , agar jika menekan tombol cancel tidak menghapus data --}}
        Delete
    </button>
    <div>
    <span>
        @if ($UpdateStateId !== $post->id)
        {{ $post->body }}
        @endif

        @if ($UpdateStateId === $post->id)
        <textarea

            wire:model="body"
            name="body" 
            class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
            rows="3">

        </textarea>
        <button 
        wire:click="update({{ $post->id }})"  
        class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Save
        </button>
        @endif
    </span>
        
    </div>
    
    </div>
@endforeach
</div>

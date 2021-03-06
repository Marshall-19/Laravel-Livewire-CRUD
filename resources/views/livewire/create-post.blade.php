<div>
    {{ $body }}
    <textarea

    wire:model="body"
    name="body"
    placeholder="Post Something" 
    class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
    rows="3">

    </textarea>
    <div class="flex justify-end p-4">
        <button wire:click='createPost' type="submit"  class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Post
        </button>
    </div>
</div>

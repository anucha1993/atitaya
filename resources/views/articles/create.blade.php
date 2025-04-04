
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

    <br>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data"
        class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md">
        @csrf
        @method('POST')

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-1200">Title</label>
            <input type="text" name="title" id="title" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
            <select name="category_id" id="category_id"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" id="content" required
                class="mt-1 block w-full h-64 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image"
                class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Create Article
            </button>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <script>ClassicEditor
               .create(document.querySelector('#content'), {
                   ckfinder: {
                       uploadUrl: '{{ route('ckeditor.upload') }}?command=QuickUpload&type=Files&responseType=json&_token={{ csrf_token() }}'
                   },
                   toolbar: [
                       'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote',
                       'imageUpload', 'insertTable', 'mediaEmbed', 'undo', 'redo'
                   ]
               })
               .then(editor => {
                   document.querySelector('#content').removeAttribute('required');
               })
               .catch(error => {
                   console.error(error);
               });
           
           </script>
</x-app-layout>

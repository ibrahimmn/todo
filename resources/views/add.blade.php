<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-black-800 leading-tight">
        {{ __('Add Task') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
        
            <form method="POST" action="/task">



            <div class="form-group">
        <textarea name="description" class="form-control"></textarea>  
        @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
           </div>

                <div class="form-group">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add Task</button>
                </div>
                
          

                {{ csrf_field() }} 
            </form>
        </div>
    </div>
</div>
</x-app-layout>
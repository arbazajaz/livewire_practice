<div class="bg-white p-4 rounded">
    <h1>tasks</h1>
   <form wire:submit='add'>
    <input type="text" wire:model='task'>
    <button  class="bg-indigo-500 p-2 rounded">Add</button>

   </form>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</div>

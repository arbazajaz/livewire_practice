<div class="container px-3 mt-6 grid grid-cols-2 gap-4">
    <div class="col-span-1 bg-gray-800 p-4 rounded-md">
        {{-- Task display --}}
        <h2 class="text-white text-lg font-semibold mb-4">Tasks</h2>
        <!-- Your task display logic goes here -->

    </div>
    <div class="col-span-1 bg-gray-800 p-4 rounded-md">
        {{-- Task form --}}
        @if(session()->has('message'))
            <div class="text-green-500">{{ session('message') }}</div>
        @endif
        <form wire:submit.prevent="save">
            <div class="mb-4">
                <label for="title" class="block text-white">Title</label>
                <input id="title" type="text" wire:model="form.title" class="block w-full mt-1 bg-gray-700 text-white border border-gray-600 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                @error('form.title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-white">Slug</label>
                <input id="slug" type="text" wire:model="form.slug" class="block w-full mt-1 bg-gray-700 text-white border border-gray-600 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                @error('form.slug') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-white">Description</label>
                <textarea id="description" wire:model="form.description" class="block w-full mt-1 bg-gray-700 text-white border border-gray-600 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500"></textarea>
                @error('form.description') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="status" class="block text-white">Status</label>
                <select id="status" wire:model="form.status" class="block w-full mt-1 bg-gray-700 text-white border border-gray-600 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                    @foreach (\App\Enums\StatusType::cases() as $Status)
                        <option value="{{ $Status->value }}">{{ $Status->name }}</option>
                    @endforeach
                </select>
                @error('form.status') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="priority" class="block text-white">Priority</label>
                <select id="priority" wire:model="form.priority" class="block w-full mt-1 bg-gray-700 text-white border border-gray-600 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                    @foreach (\App\Enums\PriorityType::cases() as $Priority)
                        <option value="{{ $Priority->value }}">{{ $Priority->name }}</option>
                    @endforeach
                </select>
                @error('form.priority') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                <label for="deadline" class="block text-white">Deadline</label>
                <input id="deadline" type="datetime-local" wire:model="form.deadline" class="block w-full mt-1 bg-gray-700 text-white border border-gray-600 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                @error('form.deadline') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">Save</button>
            </div>
        </form>
    </div>
</div>

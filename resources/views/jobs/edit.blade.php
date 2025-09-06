<x-layout>
    <x-slot:heading>Edit job : {{ $job->title }}</x-slot:heading>

    <form method="post" action="/jobs/{{ $job->id }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Please fill out the form.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input id="title"
                                       type="text"
                                       name="title"
                                       placeholder="Software Developer"
                                       value="{{ $job->title }}"
                                       class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"/>
                            </div>
                        </div>
                        @error('title')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input id="salary"
                                       type="text"
                                       name="salary"
                                       placeholder="12,000 per year"
                                       value="{{ $job->salary }}"
                                       class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"/>
                            </div>
                        </div>
                        @error('salary')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between gap-x-6">
                <div class="flex items-center gap-x-6">
                    <button form="delete-job" class="text-sm/6 font-semibold text-gray-900">Delete</button>
                </div>
                <div class="flex gap-x-6 justify-center items-end">
                    <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Update
                    </button>
                </div>
            </div>
    </form>

    <form method="post" action="/jobs/{{ $job->id }}" class="hidden" id="delete-job">
        @csrf
        @method('delete')
    </form>

</x-layout>

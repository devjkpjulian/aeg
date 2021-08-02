<x-app-layout>
    <div class="py-12">
        <div class="max-w-md mx-auto border-4 shadow-xl bg-white/90 border-amber-300/50 sm:rounded-lg sm:p-6 lg:p-6">
                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="class_id" value="{{$sge_class->id}}">

                    <div>
                        <x-jet-label for="program_id" value="{{ __('Program') }}" />
                        <select id="program_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-amber-300 focus:ring focus:ring-amber-300/50" name="program_id" autofocus>
                            @foreach ($programs as $program)
                            <option value="{{ $program->id }}">{{ $program->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="student_number" value="{{ __('Student Number') }}" />
                        <x-jet-input id="student_number" class="block w-full mt-1" type="text" name="student_number" autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" />
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <span class="text-sm">---------- OR ----------</span>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="file" value="{{ __('File Upload') }}" />
                        <input id="file" name="file" type="file" class="items-center block w-full px-4 py-2 mt-2 mr-2 text-xs font-semibold tracking-widest text-center text-gray-700 uppercase transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="w-full">
                            ADD STUDENT
                        </x-jet-button>
                    </div>
                </form>
        </div>
    </div>
</x-app-layout>
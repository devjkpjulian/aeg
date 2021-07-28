<div>
    <div class="flex flex-col items-center justify-center p-6 py-6 border-4 shadow-xl bg-white/90 border-amber-300/50 sm:rounded-lg">
                
        <div class="flex flex-row items-center justify-between w-full py-2 space-x-2 sm:px-6 lg:px-8">
            <input wire:model="search" class="w-full p-2 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md focus:border-amber-300/50 focus:ring-1 focus:ring-amber-300/50 focus:outline-none" type="text" placeholder="Search Users" />
            <a href="{{ route('users.create') }}" class="px-4 py-2 text-sm border border-gray-200 rounded-md text-amber-900 bg-amber-300 hover:bg-opacity-80 focus:border-amber-300/50 focus:ring-1 focus:ring-amber-300/50 focus:outline-none">
                <i class="fas fa-user-plus"></i>
            </a>
        </div>

        <div class="flex flex-col w-full sm:-mx-6 lg:-mx-8">
            <div class="-my-2 overflow-x-auto">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="w-full min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Role
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Options
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 w-10 h-10">
                            <img class="w-10 h-10 rounded-full" src="{{ $user->profile_photo_url }}" alt="">
                            </div>
                            <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900 capitalize">
                                {{ $user->name }}
                            </div>
                            <div class="text-sm text-gray-500">
                                {{ $user->email }}
                            </div>
                            </div>
                        </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
                        {{ $user->role == 0 ? 'ADMIN' : ($user->role == 1 ? 'ICEP Director' : ($user->role == 2 ? 'ILRAD Director' : ($user->role == 3 ? 'Dean' : 'Staff' ) ) ) }}
                        </td>
                        <td class="flex flex-row items-center justify-center px-6 py-4 space-x-2 text-sm font-medium text-center whitespace-nowrap">
                            <a href="{{ route('users.edit',$user->id) }}" class="text-center text-gray-600 hover:text-gray-900"><i class="fas fa-edit"></i></a>
                            <form method="POST" action="{{ route('users.destroy',$user->id) }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="text-center text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div> 
        <div class="w-full py-2 sm:px-6 lg:px-8">
            {{ $users->links() }}
        </div>
    </div>
</div>

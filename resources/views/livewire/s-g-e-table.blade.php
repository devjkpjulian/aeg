<div>
    <div class="flex flex-col items-center justify-center w-full h-full p-6">
        <div class="flex flex-row items-center justify-between w-full py-2 space-x-2 sm:px-6 lg:px-8">
            <input wire:model="search" class="w-full p-2 text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md focus:border-amber-300/50 focus:ring-1 focus:ring-amber-300/50 focus:outline-none" type="text" placeholder="Search SGE Types" />
            <a href="{{ route('sge_types.create') }}" class="px-4 py-2 text-sm border border-gray-200 rounded-md text-amber-900 bg-amber-300 hover:bg-opacity-80 focus:border-amber-300/50 focus:ring-1 focus:ring-amber-300/50 focus:outline-none">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    
        <div class="flex flex-col w-full sm:-mx-6 lg:-mx-8">
            <div class="-my-2 overflow-x-auto">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="w-full min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        SGE Type
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-500 uppercase">
                        Options
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($sge_types as $sge)
                    <tr>
                        <td class="px-6 py-4 text-sm text-left text-gray-500 whitespace-nowrap">
                            {{ $sge->name }}
                        </td>
                        <td class="flex flex-row items-center justify-center px-6 py-4 space-x-2 text-sm font-medium text-center whitespace-nowrap">
                            <a href="{{ route('sge_types.edit',$sge->id) }}" class="text-center text-gray-600 hover:text-gray-900"><i class="fas fa-edit"></i></a>
                            <form method="POST" action="{{ route('sge_types.destroy',$sge->id) }}">
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
            {{ $sge_types->links() }}
        </div>
    </div>
</div>

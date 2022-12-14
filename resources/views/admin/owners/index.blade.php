<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                   <section class="text-gray-600 body-font">
                    <div class="container px-5 mx-auto">
                        <x-flash-message status='info' />
                        <div class="flex justify-end mx-auto">
                            <button onclick="location.href='{{ route('admin.owners.create') }}'" class="flex mx-auto text-whiteb bg-violet-900 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</button>
                        </div>
                      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                          <thead>
                            <tr>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">name</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">email</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">created_at</th>
                              <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($owners as $owner)
                            <tr>
                              <td class="px-4 py-3">{{ $owner->name }}</td>
                              <td class="px-4 py-3"> {{ $owner->email }}</td>
                              <td class="px-4 py-3">{{ $owner->created_at->diffForHumans() }}</td>
                              <td class="w-10 text-center">
                                <button onclick="location.href='{{ route('admin.owners.edit', ['owner' => $owner->id]) }}'" class="flex mx-auto text-whiteb bg-violet-900 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded">編集</button>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

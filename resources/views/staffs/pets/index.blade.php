<x-staff-layout>
    <x-slot name="title">
        Quản lý thông tin thú cưng
    </x-slot>
    <div>
        <div class="font-bold text-2xl">Quản lý Pet</div>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-blue-300">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="flex flex-col md:flex-row my-2 justify-between items-start space-y-4 md:space-y-0">
                        <a href="{{ route('staff.pets.create') }}" class="flex items-center p-2 bg-blue-300 rounded text-blue-800 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5 fill-current text-blue-800 mr-2">
                                <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                            </svg>
                            Thêm thông tin Pet mới
                        </a>
                    </div>

                    <form method="GET" action="{{ route('staff.pets.index') }}" class="mb-4">
                        <div class="flex items-center gap-4">
                            <input
                                type="text"
                                name="search"
                                class="border rounded px-4 py-2"
                                placeholder="Tìm theo số điện thoại"
                                value="{{ request()->get('search', '') }}"
                            />
                            <button
                                type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
                            >
                                Tìm kiếm
                            </button>
                        </div>
                    </form>


                    <div class="">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead class="bg-gray-300">
                                <tr>
                                    <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tên chủ pet</th>
                                    <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Hình ảnh</th>
                                    <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Số điện thoại</th>
                                    <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tình trạng</th>
                                    <th scope="col" class="px-2 py-3 text-center text-xs font-medium text-gray-500 uppercase">Lịch khám gần nhất</th>
                                    <th scope="col" class="px-2 py-3 text-center text-xs font-medium text-gray-500 uppercase">Hành động</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @foreach($pets as $pet)
                                    <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                                        <td class="px-2 py-3 text-sm text-gray-800">
                                            <div class="max-w-44 line-clamp-1" title="{{ $pet->name }}">{{ $pet->name }}</div>
                                        </td>
                                        <td>
                                            <div class="flex items-center justify-start">
                                                <div>
                                                    <img class="w-[100px] h-[60px] border rounded" src="{{ Storage::url($pet->image->path) }}" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-2 py-3 text-sm text-gray-800">
                                            <div class="line-clamp-1">{{$pet->phone }}</div>
                                        </td>
                                        <td class="px-2 py-3 text-sm text-gray-800">
                                            <div class="max-w-44 line-clamp-1">{!! $pet->description !!}</div>
                                        </td>
                                        <td class="px-2 py-3 whitespace-nowrap text-center text-sm text-gray-800">{{ date_format($pet->updated_at, 'd/m/Y') }}</td>
                                        <td class="text-center">
                                            <!-- Nút mở modal -->
                                            <button type="button" class="py-2 px-3 border rounded-lg bg-blue-300 text-blue-700 hover:bg-blue-500" data-hs-overlay="#modal-{{ $pet->id }}">
                                                Xem chi tiết
                                            </button>

                                            <!-- Modal hiển thị chi tiết -->
                                            <div id="modal-{{ $pet->id }}" class="hs-overlay hidden size-full fixed top-0 left-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1">
                                                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                                    <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                            <h3 class="font-bold text-gray-800 dark:text-white">
                                                                Thông tin chi tiết pet của {{ $pet->name }}
                                                            </h3>
                                                            <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none dark:bg-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-600" aria-label="Close" data-hs-overlay="#modal-{{ $pet->id }}">
                                                                <span class="sr-only">Close</span>
                                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path d="M18 6L6 18"></path>
                                                                    <path d="M6 6l12 12"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="p-4 overflow-y-auto">
                                                            <!-- Hình ảnh đặt ở giữa -->
                                                            <div class="flex justify-center mb-4">
                                                                <img class="w-[150px] h-[150px] object-cover rounded-full" src="{{ Storage::url($pet->image->path) }}" alt="Image of {{ $pet->name }}">
                                                            </div>

                                                            <!-- Nội dung đặt sát lề trái -->
                                                            <div class="text-left">
                                                                <p class="text-gray-800 dark:text-neutral-400"><strong>Tên chủ pet:</strong> {{ $pet->name }}</p>
                                                                <p class="text-gray-800 dark:text-neutral-400"><strong>Số điện thoại:</strong> {{ $pet->phone }}</p>
                                                                <p class="text-gray-800 dark:text-neutral-400"><strong>Mô tả:</strong> {!! $pet->description !!}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('staff.pets.edit', $pet->id) }}" class="py-2 px-3 border rounded-lg bg-green-800 text-white">Cập nhật</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-staff-layout>


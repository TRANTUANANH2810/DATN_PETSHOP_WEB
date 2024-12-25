<x-admin-layout>
    <x-slot name="title">
        Quản lý Nhân Viên
    </x-slot>
    <div>
        <div class="font-bold text-2xl">Quản lý tài khoản nhân viên</div>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-blue-300">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="flex flex-col md:flex-row my-2 justify-between items-start space-y-4 md:space-y-0">
                        <form class="flex items-end" action="{{ route('admin.staffs.store') }}" method="POST">
                            @csrf
                            <div class="mt-7">
                                <label for="username" class="block text-sm mb-2 font-semibold">Tài khoản Nhân viên</label>
                                <input id="username" name="username" class="p-2 border-2 block w-full border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg" placeholder="Nhập tài khoản">
                            </div>

                            <div class="mt-7 ml-5">
                                <label for="password" class="block text-sm mb-2 font-semibold">Mật khẩu</label>
                                <input type="password" id="password" name="password" class="p-2 border-2 block w-full border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg" placeholder="Nhập mật khẩu">
                            </div>

                            <div class="mt-7 ml-5">
                                <label for="password_confirmation" class="block text-sm mb-2 font-semibold">Xác nhận mật khẩu</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="p-2 border-2 block w-full border-blue-200 focus:border-blue-200 focus:ring-2 outline-none rounded-lg" placeholder="Nhập lại mật khẩu">
                            </div>

                            <button type="submit" class="flex items-center p-2 bg-blue-300 rounded-xl text-blue-800 hover:bg-blue-400 font-semibold h-12 bottom-0 mx-5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5 fill-current text-blue-800 mr-2">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                Thêm tài khoản
                            </button>
                        </form>
                    </div>

                    <div class="">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-300">
                            <tr>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">ID</th>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Tài khoản nhân viên</th>
                                <th scope="col" class="px-2 py-3 text-start text-xs font-medium text-gray-500 uppercase">Hành động</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach($staffs as $staff)
                                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                                    <td class="px-2 py-3 text-sm text-gray-800">
                                        <div class="max-w-44 line-clamp-1">#{{ $staff->id }}</div>
                                    </td>

                                    <td class="px-2 py-3 text-sm text-gray-800">
                                        <div class="max-w-44 line-clamp-1" title="{{ $staff->username }}">{{ $staff->username }}</div>
                                    </td>

                                    <td class="text-start">
                                        <form action="{{ route('admin.staffs.destroy', $staff->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="py-2 px-3 border rounded-lg bg-red-300 text-red-700" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xoá</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $staffs->links('layouts.pagination', ['role' => 'staff']) }}
            </div>
        </div>
    </div>
</x-admin-layout>


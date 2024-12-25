<x-user-layout>
    <x-slot name="title">
        Thông tin tài khoản
    </x-slot>
    <ol class="flex items-center whitespace-nowrap py-10 lg:px-48">
        <li class="inline-flex items-center">
            <a href="{{ route('home') }}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" >
                <svg class="shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Trang chủ
            </a>
            <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm text-amber-700 truncate dark:text-neutral-200" aria-current="page">
            Thông tin tài khoản
        </li>
    </ol>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Thông tin tài khoản</h1>

        <form action="{{ route('user.account.update') }}" method="POST" class="bg-white shadow-lg rounded-lg p-8 max-w-lg mx-auto">
            @csrf
            @method('PUT')

            <!-- Tên người dùng -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-700">Họ và tên</label>
                <input type="text" name="name" id="name" value="{{ auth()->user()->name }}" required
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2.5 outline-none focus:border-4 focus:border-blue-200 hover:border-blue-300 transition-all duration-200 ease-in-out">
            </div>

            <!-- Số điện thoại -->
            <div class="mb-6">
                <label for="phone" class="block text-sm font-medium text-gray-700">Số điện thoại</label>
                <input type="text" name="phone" id="phone" value="{{ auth()->user()->phone }}" required
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2.5 outline-none focus:border-4 focus:border-blue-200 hover:border-blue-300 transition-all duration-200 ease-in-out">
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ auth()->user()->email }}" readonly
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm bg-gray-100 cursor-not-allowed p-2.5 outline-none focus:border-4 focus:border-blue-200 hover:border-gray-300 transition-all duration-200 ease-in-out">
                <small class="text-amber-700">Email không thể thay đổi.</small>
            </div>

            <!-- Địa chỉ -->
            <div class="mb-6">
                <label for="shipping_address" class="block text-sm font-medium text-gray-700">Địa chỉ nhận hàng</label>
                <textarea name="shipping_address" id="shipping_address" rows="3"
                          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2.5 outline-none focus:border-4 focus:border-blue-200 hover:border-blue-300 transition-all duration-200 ease-in-out">{{ auth()->user()->shipping_address }}</textarea>
            </div>

            <!-- Nút lưu -->
            <div class="flex justify-end mt-8">
                <button type="submit" class="py-3 px-6 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition duration-300 ease-in-out">
                    Cập nhật thông tin
                </button>
            </div>
        </form>
    </div>
</x-user-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img src="https://mfasetudigital.com/test2/wp-content/uploads/2024/06/Asset-2.png" alt="test"
                    class="h-8 w-8">
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                        aria-current="page">Dashboard</a>
                    <a href="#"
                        class="bg-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>
                    <a href="#"
                        class="bg-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>
                    <a href="#"
                        class="bg-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calender</a>
                    <a href="#"
                        class="bg-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Reports</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                src="https://mfasetudigital.com/test2/wp-content/uploads/2024/06/Asset-2.png"
                                alt="test2">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">
                                Tom Cook
                            </div>
                            <div class="text-sm font-medium leading-none text-gray-400">
                                tom@example.com
                            </div>
                        </div>
                        <button type="button"
                            class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline">
                            <span class="absolute -inset-1 5"></span>
                            <div class="sr-only">View Notifications</div>
                            <img src="https://mfasetudigital.com/test2/wp-content/uploads/2024/06/Asset-2.png"
                                alt="imagepng">
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-600"></a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-600"></a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-600"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


{{ $slot }}

</body>
</html>
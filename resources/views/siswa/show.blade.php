<x-layout>
        <div class="flow-root">
    <dl class="-my-3 divide-y divide-gray-200 text-sm">
        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Title</dt>

        <dd class="text-gray-700 sm:col-span-2">Mr</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Name</dt>

        <dd class="text-gray-700 sm:col-span-2">John Frusciante</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Occupation</dt>

        <dd class="text-gray-700 sm:col-span-2">Guitarist</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Salary</dt>

        <dd class="text-gray-700 sm:col-span-2">$1,000,000+</dd>
        </div>

        <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
        <dt class="font-medium text-gray-900">Bio</dt>

        <dd class="text-gray-700 sm:col-span-2">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis explicabo
            doloremque impedit nesciunt dolorem facere, dolor quasi veritatis quia fugit aperiam
            aspernatur neque molestiae labore aliquam soluta architecto?
        </dd>
        </div>
    </dl>
    </div>

    
    <x-slot:footer>
        <strong>siswa detail page</strong>
    </x-slot:footer>
</x-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>detail siswa</title>
</head>
<body>
    <h1>Siswa dengan id {{$id}}</h1>
</body>
</html>
<x-app-web-layout>

<x-slot:title>
    my laravel app
</x-slot:title>
<div class="py-5">
    <div class="container">
        <h4>welcome to index page</h4>
    </div>
</div>

<x-slot:scripts>
    <script>
    console.log('this is my scripts area');
    </script>
</x-slot:scripts>

</x-app-web-layout>
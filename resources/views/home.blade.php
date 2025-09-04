<x-layout ida="home">
    <x-slot:heading>Home page</x-slot:heading>
    <h1>Hello from the Home page</h1>

    <hr>

    <div x-data="{ count: 12, name: 'John' }">
        <button @click="count++">Increment</button>
        <br>
        <span x-text="name + count + name"></span>
    </div>
</x-layout>

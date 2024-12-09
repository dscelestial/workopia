<x-layout>
    <h1>Available Jobs</h1>
    @foreach ($jobs as $job)
        <li>{{ $job }}</li>
    @endforeach

    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <button class="submit">SUBMIT</button>
    </form>
</x-layout>

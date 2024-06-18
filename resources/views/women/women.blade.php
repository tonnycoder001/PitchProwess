<script src="https://cdn.tailwindcss.com"></script>
<div class="container">
    <h1 class="text-center">Team News</h1>
    @foreach ($women as $women)
        <h2> Name {{ $women->name }}</h2>
        <img src="{{ $women->image }}" alt="">
        <p> Age {{ $women->age }}</p>
        <p> Foot {{ $women->foot }}</p>
        <p> Position {{ $women->position }}</p>
        <p> Nationality {{ $women->nationality }}</p>
    @endforeach
</div>

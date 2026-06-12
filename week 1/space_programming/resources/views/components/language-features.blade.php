<div class="mt-8">
    <h2 class="text-lg font-bold mb-4 uppercase tracking-wide">Features</h2>
    <ul class="space-y-2">
        @foreach ($features as $feature)
            <li class="flex items-start gap-2">
                <span class="text-[#f53003] dark:text-[#FF4433] mt-0.5">&#10003;</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>
</div>

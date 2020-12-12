<div class="links">
    <a href="/">Home</a>
    <a href="/criminal_records">Criminal Records</a>
    <a href="/about">About</a>
    <a href="/help">Help</a>
    @if (Auth::check() && Auth::user()->level == 'admin')
    <a href="/criminal">Database</a>
    @endif
</div>
<div class="dropdown">
    <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">
        <div class="avatar avatar-md2">
            <img src="./assets/compiled/jpg/1.jpg" alt="Avatar" />
            <span class="avatar-status bg-success" wire:offline.class.remove='bg-success'
                wire:offline.class='bg-danger'></span>
        </div>
        <div class="text">
            <h6 class="user-dropdown-name">{{ auth()->user()->fullName() }}</h6>
            <p class="user-dropdown-status text-sm text-success" wire:offline.class='d-none'>
                Online
            </p>
            <p class="user-dropdown-status text-sm text-danger" wire:offline>
                Offline
            </p>
        </div>
    </a>
    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
        <li>
            <a class="dropdown-item" href="{{ route('authentication') }}">
                Authentication
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('setting') }}">
                Settings
            </a>
        </li>
        <li>
            <hr class="dropdown-divider" />
        </li>
        <li>
            <button class="dropdown-item" wire:click='logout'>Logout</button>
        </li>
    </ul>
</div>

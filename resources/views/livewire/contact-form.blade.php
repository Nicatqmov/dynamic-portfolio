<div>
    <!-- Folders Navigation -->
    <div class="folders">
        @foreach ($folders as $folder)
        <a href="#" class="folder" wire:click.prevent="setSection('{{$folder->title}}')">
            📁<br>{{$folder->title}}
        </a>
        @endforeach
        <a href="#" class="folder" wire:click.prevent="setSection('readme')">
            <i class="fa-solid fa-circle-info"></i><br>README
        </a>
        <!-- Add Contact Me Button -->
        <a href="#" class="folder" wire:click.prevent="showForm">
            <i class="fa-solid fa-envelope"></i><br>Contact Me!
        </a>
    </div>

    <!-- Content Display -->
    <div class="content {{ $isClicked ? 'active' : '' }}">
        @foreach ($folders as $folder )
            @if($activeSection == $folder->title)
                <a href="#" wire:click.prevent="removeSection" class="back-btn">← Back</a>
                {!!$folder->content!!}
            @endif
        @endforeach
        @if($activeSection == 'readme')
            <a href="#" wire:click.prevent="removeSection" class="back-btn">← Back</a>
            <h2>README</h2>
            <br>
            <p>
                This portfolio created by me using <strong>Laravel</strong> and <strong>Livewire JS</strong>.<br>
                To view the admin panel for this project, please 
                <a style="color:red" href="/admin" target="_blank">click here</a>.
            </p>
        @endif
    </div>

    <!-- Form Popup -->
    @if($showForm)
    <div class="form-popup">
        <div class="form-content">
            <a href="#" wire:click.prevent="hideForm" class="close-btn">×</a>
            <h2>Contact Me</h2>
            <form wire:submit.prevent="submitForm">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" wire:model="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" wire:model="email" required>
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" wire:model="message" rows="5" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    @endif
</div>
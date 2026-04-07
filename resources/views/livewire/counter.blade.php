<div>
    <!-- Folders Navigation -->
    <div class="folders">
        @foreach ($folders as $folder)
        <a href="#" class="folder" wire:click.prevent="setSection({{ $folder->id }})">
            📁<br>{{$folder->title}}
        </a>
        @endforeach
        <a href="#" class="folder" wire:click.prevent="openForm">
            <i class="fa-solid fa-envelope"></i><br>Contact Me!
        </a> 
    </div>

    <!-- Content Display -->
    <div class="content {{ $isClicked ? 'active' : '' }}">
        @if($selectedContent)
                <a href="#" wire:click.prevent="removeSection" class="back-btn">← Back</a>
                {!! $selectedContent !!}
        @endif
    </div>

    <!-- Form Popup -->
    @if($showForm)
        @include('form')
    @endif
</div>

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

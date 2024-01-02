<div>
    <form wire:submit.prevent="saveProject">
        <div>
            <label for="title">The name of the idea:</label>
            <input type="text" wire:model="title" id="title">
        </div>
        <div>
            <label for="description">Description of the idea:</label>
            <textarea wire:model="description" id="description"></textarea>
        </div>
        <div>
            <label for="category">Category:</label>
            <select wire:model="category" id="category">
                <option value="technology">Technologies</option>
                <option value="art">Art and Culture</option>
                <option value="health">Health and Well-being</option>
                <option value="education">Education</option>
                <option value="ecology">Ecology and sustainability</option>
                <option value="social">Social initiatives</option>
                <option value="science and research">Science and research</option>
            </select>
        </div>
        <div>
            <label for="attachment">Image or video:</label>
            <input type="file" wire:model="attachment" id="attachment">
        </div>
        <div>
            <label for="deadline">Deadlines:</label>
            <input type="date" wire:model="deadline" id="deadline">
        </div>
        <div>
            <label for="contact">Contact information:</label>
            <input type="text" wire:model="contact" id="contact">
        </div>
        <button type="submit">Create</button>
    </form>
</div>

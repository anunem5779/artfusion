<form action="{{ route('art.storeArtwork') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Artwork Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="artist">Artist:</label>
        <select name="artist_id" id="artist" required>
            @foreach ($artists as $artist)
                <option value="{{ $artist->id }}">{{ $artist->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
    </div>
    <button type="submit">Create Artwork</button>
</form>

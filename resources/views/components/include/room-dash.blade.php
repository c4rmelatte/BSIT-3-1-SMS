<style>

.card-container {
    height: auto;
    padding: 0 10px;
    max-width: calc(100% - 250px);
    margin-left: 220px;
}

.card {
    border: none;
    border-radius: 10px;
    margin-bottom: 20px;
    position: relative;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s;
    display: flex;
    flex-direction: column;
    top: 200px;
}

.card:hover {
    transform: scale(1.03);
}

.card-img-wrapper {
    overflow: hidden;

    height: 200px;
    width: 100%;
}

.card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
}

.card-img-wrapper:hover .card-img {
    transform: scale(1.05);
}

.card-body {
    padding: 10px;
    color: #ffffff;
    background-color: #336356;
    flex-grow: 1;
}

.card-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0;
}

.card-text {
    font-size: 1rem;
    margin-top: 5px;
}

.button-container {

    display: flex;
    justify-content: flex-end;
    gap: 10px;
    padding: 10px;
    background-color: #336356;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.btn-action {
    padding: 6px 10px;
    font-size: 1rem;
    border-radius: 5px;
    border: none;
    color: #ffffff;
}

.btn-edit {
    color: white;
    margin-bottom: 15px;
}

.btn-delete {
    background-color: #dc3545;
    position: relative;
}
</style>

<div class="container card-container">
    <div class="row justify-content-start">
        @foreach($rooms as $room)
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-img-wrapper">
                        <img src="{{ $room->image }}" class="card-img" alt="{{ $room->name }}" onerror="this.src='/path/to/default/image.jpg';">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $room->name }}</h5>
                        <p class="card-text">{{ $room->description }}</p>
                    </div>
                    <div class="button-container">
                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-action btn-edit btn-warning">
    Update<i class="bi bi-pencil"></i></a>

                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this room?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action btn-delete" onclick="event.stopPropagation();">
                                Delete <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

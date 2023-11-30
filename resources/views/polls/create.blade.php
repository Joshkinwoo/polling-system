<form method="post" action="{{ url('/polls') }}">
    @csrf
    <div class="form-group">
        <label for="question">Poll Question</label>
        <input type="text" name="question" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="options">Answer Choices (one per line)</label>
        <textarea name="options" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create Poll</button>
</form>

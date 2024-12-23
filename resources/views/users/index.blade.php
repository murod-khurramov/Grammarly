@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="user-list">
            @foreach($users as $user)
                <div class="user-item">
                    <p>{{ $user->name }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- JavaScript va AJAX orqali qidiruvni sozlash -->
    <script>
        document.getElementById('search').addEventListener('input', function() {
            let searchQuery = this.value;
            if (searchQuery.length >= 3) {
                fetch(`/users/search?q=${searchQuery}`)
                    .then(response => response.json())
                    .then(data => {
                        let userList = document.getElementById('user-list');
                        userList.innerHTML = '';  // Oldingi foydalanuvchilarni tozalash

                        data.forEach(user => {
                            let userDiv = document.createElement('div');
                            userDiv.classList.add('user-item');
                            userDiv.innerHTML = `<p>${user.name}</p>`;
                            userList.appendChild(userDiv);
                        });
                    });
            }
        });
    </script>
@endsection

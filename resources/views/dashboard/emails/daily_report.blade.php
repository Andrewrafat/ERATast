 <h2>Daily Report</h2>
    
    <p>New Users Created Today: {{ $reportData['newUsersCount'] }}</p>
    
    <h3>New Posts Created Today:</h3>
    <ul>
        @foreach ($reportData['newPosts'] as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                {{ $post->description }}
            </li>
        @endforeach
    </ul>
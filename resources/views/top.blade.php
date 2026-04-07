<div class="status-bar">
    <div class="time"></div>
    <div class="battery">
        <span>100%</span>
        <svg width="20" height="10" viewBox="0 0 20 10">
            <path fill="#fff" d="M1 3V1h16v8H1V7h14V3H1z"/>
        </svg>
    </div>
</div>


@section ('scirpt')
 <script>
        function updateTime() {
            const timeElement = document.querySelector('.time');
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();

            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
    
            timeElement.textContent = `${hours}:${minutes}`;
        }
        setInterval(updateTime, 1000);
    
        updateTime();
    </script>
@endsection
